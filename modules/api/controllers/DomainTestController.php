<?php
namespace app\modules\api\controllers;

use app\models\ActivityConfig;
use app\models\PublicConfig;
use Yii;
use yii\web\Controller;
use app\models\AppConfig;

class DomainTestController extends Controller
{
    public function actionList()
    {
        $domainList = AppConfig::find()
            ->where(['status' => AppConfig::STATUS_SUCCESS])
            ->limit(100)
            ->asArray()
            ->all();

        $result = [];
        foreach ($domainList as $v) {
            $result[] = $v['domain'];
        }

        return json_encode([
            'code' => 200,
            'msg' => 'ok',
            'domains' => $result
        ]);
    }

    public function actionError($url)
    {
        $model = $this->findModel($url);
        $model->status = AppConfig::STATUS_ERROR;
        $model->closed_at = time();
        if (!$model->save()) {
            $error = $model->getErrors();
            Yii::error("not save app-config, error: {$error}");
        }

        $publicConfig = PublicConfig::findOne($model->pid);

        $time = date('Y-m-d H:i:s', time());
        $typeList = AppConfig::getTypeList();
        $activityConfig = new ActivityConfig();
        $domainCount = $activityConfig->getSuccessDomainNum($publicConfig->activity_id);

        $msg = [
            '域名被封禁',
            "域名: {$model->domain}",
            "类型: {$typeList[$model->type]}",
            "剩余域名: {$domainCount} 个",
            "时间: {$time}"
        ];

        // send msg
        Yii::$app->wechatMessage->sendWeChatMsg(join($msg, "\n"));

        return json_encode([
            'code' => 200,
            'msg' => 'success'
        ]);
    }

    public function findModel($url)
    {
        $url = strip_tags(trim($url));
        if (($model = AppConfig::findOne(['domain' => $url])) == null) {
            return json_encode([
                'code' => -1,
                'msg' => 'not find url'
            ]);
        }

        return $model;
    }
}