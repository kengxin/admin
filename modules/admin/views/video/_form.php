<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>

<?= $form->field($model, 'name')?>
<?= $form->field($model, 'vid')?>
<?= $form->field($model, 'pause_sec')?>
<?= $form->field($model, 'suffix')?>
<?= $form->field($model, 'domain')?>
<?= $form->field($model, 'count')->textarea()?>

<?= Html::submitButton('提交', ['class' => 'btn btn-success btn-block'])?>
<?php
    ActiveForm::end();
?>
