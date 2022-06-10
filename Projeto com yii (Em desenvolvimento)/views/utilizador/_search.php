<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UtilizadorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="utilizador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idUtilizador') ?>

    <?= $form->field($model, 'Email') ?>

    <?= $form->field($model, 'Sexo') ?>

    <?= $form->field($model, 'Password') ?>

    <?= $form->field($model, 'Nome') ?>

    <?php // echo $form->field($model, 'Idade') ?>

    <?php // echo $form->field($model, 'Departamento_idDepartamento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
