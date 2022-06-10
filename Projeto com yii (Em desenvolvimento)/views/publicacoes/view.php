<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publicacoes */

$this->title = $model->idPublicacao;
$this->params['breadcrumbs'][] = ['label' => 'Publicacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="publicacoes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idPublicacao' => $model->idPublicacao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idPublicacao' => $model->idPublicacao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idPublicacao',
            'Publicacao',
            'imagem',
            'Data_publicacao',
            'Utilizador_idUtilizador',
            'Categoria_idCategoria',
        ],
    ]) ?>

</div>
