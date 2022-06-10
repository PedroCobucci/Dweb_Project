<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jogo */

$this->title = 'Update Jogo: ' . $model->idJogo;
$this->params['breadcrumbs'][] = ['label' => 'Jogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idJogo, 'url' => ['view', 'idJogo' => $model->idJogo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
