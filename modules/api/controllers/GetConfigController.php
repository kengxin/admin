<?php
namespace app\modules\api\controllers;

use yii\web\Controller;
use app\models\AppConfig;

class GetConfigController extends Controller
{
    public function actionIndex($url)
    {
        $model = AppConfig::find()
            ->joinWith('publicConfig')
            ->where(['domain' => $url, 'type' => AppConfig::TYPE_ENTRANCE])
            ->one();

        if ($model->status == AppConfig::STATUS_ERROR) {
            $model = AppConfig::find()
                ->joinWith('publicConfig')
                ->where(['type' => AppConfig::TYPE_ENTRANCE, 'status' => AppConfig::STATUS_SUCCESS, 'public_config.activity_id' => $model->publicConfig->activity_id])
                ->one();
        }

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