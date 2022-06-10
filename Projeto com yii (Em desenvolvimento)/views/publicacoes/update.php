<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicacoes */

$this->title = 'Update Publicacoes: ' . $model->idPublicacao;
$this->params['breadcrumbs'][] = ['label' => 'Publicacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPublicacao, 'url' => ['view', 'idPublicacao' => $model->idPublicacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publicacoes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
