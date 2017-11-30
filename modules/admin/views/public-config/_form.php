<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>

<?= $form->field($model, 'name')?>
<?= $form->field($model, 'app_id')?>
<?= $form->field($model, 'app_secret')?>
<?= $form->field($model, 'activity_id')->dropDownList(\app\models\ActivityConfig::find()->select(['name', 'id'])->indexBy('id')->column())?>

<?= Html::submitButton('提交', ['class' => 'btn btn-success btn-block'])?>
<?php
    ActiveForm::end();
?>
