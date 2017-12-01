<?php
namespace app\controllers;
include '../components/decode/wxBizMsgCrypt.php';

use Yii;
use yii\web\Controller;

class WechatController extends Controller
{
    public $enableCsrfValidation = false;

    const ACCESS_TOKEN = 'https://api.weixin.qq.com/cgi-bin/component/api_component_token';
    const AUTH_CODE = 'https://api.weixin.qq.com/cgi-bin/component/api_create_preauthcode?component_access_token=%s';
    const PUBLIC_CONFIG = 'https://api.weixin.qq.com/cgi-bin/component/api_query_auth?component_access_token=xxxx';

    public function actionEvent()
    {
        $data = $this->getTicket();

        file_put_contents('ticket.txt', $data);

        echo 'success';
    }

    public function getAccessToken($app_id, $verify_ticket)
    {
        $model = $this->findModel($app_id);

        $params = [
            'component_appid' => $app_id,
            'component_appsecret' => $model->app_secret,
            'component_verify_ticket' => $verify_ticket
        ];

        $result = $this->getAccessToken(self::ACCESS_TOKEN, $params);

        $result = json_decode($result, true);
        if (empty($result) && isset($result['component_access_token'])) {
            return false;
        }

        return $result['component_access_token'];
    }

    public function getAuthCode($app_id, $access_token)
    {
        $url = sprintf(self::AUTH_CODE, $access_token);

        $result = $this->curlPost($url, ['component_appid' => $app_id]);

        $result = json_decode($result, true);
        if (empty($result) && isset($result['pre_auth_code'])) {
            return false;
        }

        return $result['pre_auth_code'];
    }

    public function getPublicConfig($app_id, $auth_code, $access_token)
    {
        $url = sprintf(self::AUTH_CODE, $access_token);

        $result = $this->curlPost($url, ['component_appid' => $app_id, 'authorization_code' => $auth_code]);

        if (empty($result)) {
            return false;
        }

        return $result;
    }

    public function findModel($app_id)
    {
        return [];
    }

    public function getTicket()
    {
        $timestamp  = $_GET['timestamp'];
        $nonce = $_GET["nonce"];
        $msg_signature  = $_GET['msg_signature'];
        $data = file_get_contents('php://input');

        $msg = '';
        $pc = new \WXBizMsgCrypt('wechat', 'MlkRSUrVgUj54vw1eG4w3gX0P5lG84EzqBsp0o5pWNn', 'wx4234d16cda2841f9');
        $errCode = $pc->decryptMsg($msg_signature, $timestamp, $nonce, $data, $msg);

        return $msg;
    }

    public function curlPost($url, $params)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

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
}