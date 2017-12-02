<?php
namespace app\controllers;
include '../components/decode/wxBizMsgCrypt.php';

use app\models\ThirdPartyConfig;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class WechatController extends Controller
{
    public $enableCsrfValidation = false;

    public $appId;
    public $appSecret;
    public $encodingAesKey;
    public $token;
    public $authCode;

    const ACCESS_TOKEN = 'https://api.weixin.qq.com/cgi-bin/component/api_component_token';
    const AUTH_CODE = 'https://api.weixin.qq.com/cgi-bin/component/api_create_preauthcode?component_access_token=%s';
    const PUBLIC_CONFIG = 'https://api.weixin.qq.com/cgi-bin/component/api_query_auth?component_access_token=%s';

    public function actionEvent()
    {
        $xml = $this->getTicket();

        $ticketArray = $this->xmlToArray($xml);
        $ticket = $ticketArray['ComponentVerifyTicket'];

        $accessToken = $this->getAccessToken($ticket);
        $authCode = $this->getAuthCode($accessToken);
        $publicConfig = $this->getPublicConfig($this->authCode, $accessToken);

        file_put_contents('config.txt', json_encode($publicConfig));

        echo 'success';
    }

    public function getAccessToken($verify_ticket)
    {
        $params = [
            'component_appid' => $this->appId,
            'component_appsecret' => $this->appSecret,
            'component_verify_ticket' => $verify_ticket
        ];

        $result = $this->curlPost(self::ACCESS_TOKEN, $params);

        $result = json_decode($result, true);
        if (empty($result) && isset($result['component_access_token'])) {
            throw new NotFoundHttpException();
        }

        return $result['component_access_token'];
    }

    public function getAuthCode($access_token)
    {
        $url = sprintf(self::AUTH_CODE, $access_token);

        $result = $this->curlPost($url, ['component_appid' => $this->appId]);

        $result = json_decode($result, true);
        if (empty($result) && isset($result['pre_auth_code'])) {
            throw new NotFoundHttpException();
        }

        return $result['pre_auth_code'];
    }

    public function getPublicConfig($auth_code, $access_token)
    {
        $url = sprintf(self::PUBLIC_CONFIG, $access_token);

        $result = $this->curlPost($url, ['component_appid' => $this->appId, 'authorization_code' => $auth_code]);

        if (empty($result)) {
            throw new NotFoundHttpException();
        }

        return $result;
    }

    public function findModel($app_id)
    {
        if (($model = ThirdPartyConfig::findOne(['app_id' => $app_id])) == null) {
            throw new NotFoundHttpException();
        }

        $this->appId = $model->app_id;
        $this->appSecret = $model->app_secret;
        $this->token = $model->token;
        $this->encodingAesKey = $model->encoding_aes_key;
        $this->authCode = $model->auth_code;

        return $model;
    }

    public function getTicket()
    {
        $data = file_get_contents('php://input');

        $formatXml = $this->xmlToArray($data);
        $this->findModel($formatXml['AppId']);

        $timestamp  = $_GET['timestamp'];
        $nonce = $_GET["nonce"];
        $msg_signature  = $_GET['msg_signature'];

        $msg = '';
        $pc = new \WXBizMsgCrypt($this->token, $this->encodingAesKey, $this->app_id);
        $errCode = $pc->decryptMsg($msg_signature, $timestamp, $nonce, $data, $msg);

        if ($errCode == 0) {
            return $msg;
        }

        throw new NotFoundHttpException();
    }

    public function curlPost($url, $params)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));

        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }

    function xmlToArray($xml){
        libxml_disable_entity_loader(true);
        $xmlstring = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $val = json_decode(json_encode($xmlstring), true);
        return $val;
    }

    public function actionShow()
    {
        echo "<a href='https://mp.weixin.qq.com/cgi-bin/componentloginpage?component_appid=wx4234d16cda2841f9&pre_auth_code=preauthcode@@@9-4-gPAUeRdQ3ShmnAKkCJRLTxwpXuyYZ_9w_JhjH_Kt4dJy07wGflVDIyvVKVGl&redirect_uri=http://gx.amauf.cn'>click</a>";
    }
}