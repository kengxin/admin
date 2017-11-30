<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>

<?= $form->field($model, 'domain')?>
<?= $form->field($model, 'type')->radioList(\app\models\AppConfig::getTypeList())?>
<?= $form->field($model, 'pid')->dropDownList(\app\models\PublicConfig::find()->select(['name', 'id'])->indexBy('id')->column())?>

<?= Html::submitButton('提交', ['class' => 'btn btn-success btn-block'])?>
<?php
    ActiveForm::end();
?>
