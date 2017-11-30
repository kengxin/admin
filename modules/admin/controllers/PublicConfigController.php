<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\PublicConfig;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class PublicConfigController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => PublicConfig::find()->filterWhere(['activity_id' => Yii::$app->request->get('activity_id', null)])
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $model = new PublicConfig();
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', '保存成功');
            } else {
                Yii::$app->session->setFlash('error', '保存失败');
            }

            return $this->redirect('/admin/public-config');
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

            return $this->redirect('/admin/public-config');
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

        return $this->redirect('/admin/public-config');
    }

    public function findModel($id)
    {
        $id = intval($id);
        if (($model = PublicConfig::findOne($id)) == null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }
}