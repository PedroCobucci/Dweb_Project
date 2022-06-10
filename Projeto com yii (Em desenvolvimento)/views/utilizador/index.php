<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UtilizadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Utilizadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utilizador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utilizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idUtilizador',
            'Email:email',
            'Sexo',
            'Password',
            'Nome',
            //'Idade',
            //'Departamento_idDepartamento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action,  app\models\Utilizador $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idUtilizador' => $model->idUtilizador]);
                 }
            ],
        ],
    ]); ?>


</div>
