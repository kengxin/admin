<?php
namespace app\modules\admin\controllers;

use app\models\ActivityConfig;
use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class ActivityConfigController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ActivityConfig::find()
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $model = new ActivityConfig();
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', '保存成功');
            } else {
                Yii::$app->session->setFlash('error', '保存失败');
            }

            return $this->redirect('/admin/activity-config');
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', '保存成功');
            } else {
                Yii::$app->session->setFlash('error', '保存失败');
            }

            return $this->redirect('/admin/activity-config');
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if ($model->delete()) {
            Yii::$app->session->setFlash('success', '删除成功');
        } else {
            Yii::$app->session->setFlash('error', '删除失败');
        }

        return $this->redirect('/admin/activity-config');
    }

    public function findModel($id)
    {
        $id = intval($id);
        if (($model = ActivityConfig::findOne($id)) == null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }
}