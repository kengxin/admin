<?php
namespace app\modules\api\controllers;

use app\models\AppConfig;
use yii\web\Controller;

class GetConfigController extends Controller
{
    public function actionIndex($url)
    {
        $model = $this->findModel($url);

        return json_encode([
            'code' => 0,
            'data' => [
                'app_id' => $model->publicConfig->app_id,
                'app_secret' => $model->publicConfig->app_secret,
                'domain' => $model->domain
            ]
        ]);
    }

    public function findModel($url)
    {
        $url = strip_tags(trim($url));
        if (($model = AppConfig::find()->joinWith('publicConfig')->where(['domain' => $url, 'type' => AppConfig::TYPE_ENTRANCE])->one()) == null) {
            return json_encode([
                'code' => -1,
                'msg' => 'error'
            ]);
        }

        return $model;
    }
}