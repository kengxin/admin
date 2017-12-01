<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class WechatController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionEvent()
    {
        file_put_contents('ticket.txt', Yii::$app->request->post());
    }
}