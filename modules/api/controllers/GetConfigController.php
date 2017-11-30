<?php
namespace app\modules\api\controllers;

use app\models\AppConfig;
use yii\web\Controller;

class GetConfigController extends Controller
{
    public function actionIndex($url)
    {
        $url = trim($url, '/');
        if (($model = AppConfig::find()->joinWith('publicConfig')->where(['domain' => $url])->one()) == null) {
            return json_encode([
                'code' => -1
            ]);
        }

        $links = AppConfig::find()
            ->select(['domain', 'type'])
            ->where(['pid' => $model->pid, 'status' => AppConfig::STATUS_SUCCESS])
            ->all();

        $landing = [];
        $entrance = '';
        foreach ($links as $link) {
            if ($link->type == AppConfig::TYPE_ENTRANCE) {
                $entrance = $link->domain;
            } else if ($link->type == AppConfig::TYPE_LANDING) {
                $landing[] = $link->domain;
            }
        }

        return json_encode([
            'code' => 0,
            'data' => [
                'app_id' => $model->publicConfig->app_id,
                'app_secret' => $model->publicConfig->app_secret,
                'domain' => $entrance,
                'landing' => $landing
            ]
        ]);
    }
}