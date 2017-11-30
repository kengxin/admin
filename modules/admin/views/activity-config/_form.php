<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>

<?= $form->field($model, 'name')?>

<?= Html::submitButton('提交', ['class' => 'btn btn-success btn-block'])?>
<?php
    ActiveForm::end();
?>
