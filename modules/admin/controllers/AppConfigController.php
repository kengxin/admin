<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\AppConfig;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class AppConfigController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AppConfig::find()->filterWhere(['public_config.activity_id' => Yii::$app->request->get('activity_id', null)])->andFilterWhere(['pid' => Yii::$app->request->get('pid', null)])->joinWith('publicConfig')
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $model = new AppConfig();
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', '保存成功');
            } else {
                Yii::$app->session->setFlash('error', '保存失败');
            }

            return $this->redirect('/admin/app-config');
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

            return $this->redirect('/admin/app-config');
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

        return $this->redirect('/admin/app-config');
    }

    public function findModel($id)
    {
        $id = intval($id);
        if (($model = AppConfig::findOne($id)) == null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }
}