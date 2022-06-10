<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Publicacoes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicacoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Publicacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Data_publicacao')->textInput() ?>

    <?= $form->field($model, 'Utilizador_idUtilizador')->textInput() ?>

    <?= $form->field($model, 'Categoria_idCategoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
