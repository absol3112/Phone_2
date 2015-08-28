<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductCode')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ProductName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Image')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Cost')->textInput() ?>

    <?= $form->field($model, 'Company')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
