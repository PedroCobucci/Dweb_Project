<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PublicacoesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicacoes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idPublicacao') ?>

    <?= $form->field($model, 'Publicacao') ?>

    <?= $form->field($model, 'imagem') ?>

    <?= $form->field($model, 'Data_publicacao') ?>

    <?= $form->field($model, 'Utilizador_idUtilizador') ?>

    <?php // echo $form->field($model, 'Categoria_idCategoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
