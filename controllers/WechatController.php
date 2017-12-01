<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class WechatController extends Controller
{
    public function actionEvent()
    {
        file_put_contents('ticket.txt', json_encode(Yii::$app->request->post()));
    }
}