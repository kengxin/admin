<?php
namespace app\controllers;

use app\models\AppConfig;
use app\models\JsSdk;
use Yii;
use yii\web\Controller;

class VideoController extends Controller
{
    public $redirect_uri = '/video/item';

    public $layout = false;

    public function actionIndex()
    {
        $domain = Yii::$app->request->hostName;
        $model = $this->findModel($domain);

        $redirect_uri = $model->getJumpDomain($model->pid) . $this->redirect_uri;

        header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid={$model->publicConfig->app_id}&redirect_uri={$redirect_uri}&response_type=code&scope=snsapi_base&state=123#wechat_redirect");
    }

    public function actionItem()
    {
        return $this->render('item');
    }

    public function actionGetConfig()
    {
        $domain = Yii::$app->request->hostName;
        $model = $this->findModel($domain);

        $jsSdk = new JsSdk(['appId' => $model->publicConfig->app_id, 'appSecret' => $model->publicConfig->app_secret]);

        $jsConfig = $jsSdk->getSignPackage(Yii::$app->request->get('url'));
        $jsConfig['jsApiList'] = ['onMenuShareTimeline', 'onMenuShareAppMessage', 'hideMenuItems', 'showMenuItems'];
        $config = json_encode($jsConfig);
        $callback = $_GET['callback'];

        $left_number_rand = mt_rand(600, 2000);
        $prize_rand = mt_rand(22, 87);

        $left_number = json_encode($left_number_rand);
        $prize = json_encode($prize_rand);

        $share_app_info = [
            "title" => '3年前被同学无尽羞辱导致退学，如今同学聚会，结果却....',
            "desc" => "正在观看人数".rand(10000, 98765)."位",
            "link" => '1',
            "img_url" => "http://baidu1df.oss-cn-beijing.aliyuncs.com/filehelper_1511689734830_94.png",
            'type' =>'link',
        ];

        $share_timeline_info = [
            "title" => "3年前被同学无尽羞辱，如今同学聚会，结果却....",
            "link" => '1',
            "img_url" => "http://baidu1df.oss-cn-beijing.aliyuncs.com/filehelper_1511689734830_94.png",
        ];

        $share_app_info = json_encode($share_app_info);
        $share_timeline_info = json_encode($share_timeline_info);

        echo "{$callback}({'config':{$config},'left_number':{$left_number},'prize':{$prize},'share_app_info':{$share_app_info},'share_timeline_info':{$share_timeline_info}})";
    }

    public function findModel($domain)
    {
        $appConfig = new AppConfig();

        if (($model = $appConfig->getConfigByDomain($domain)) == false) {
            return false;
        }

        return $model;
    }

}