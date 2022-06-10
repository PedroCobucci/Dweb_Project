<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicacoesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Publicacoes';
//$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" href="/Dweb_projeto2/web/css/page3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">
<div class="publicacoes-index">

    <h1 style="text-align: center">JOGOS</h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <section class="box-noticias pt-5">
        <div class="container">
            <a href="https://www.w3schools.com">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[10]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white text-uppercase ">
                        <p><b>Counter Strinke: Global Ofensive.</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[10]['Publicacao']); ?>
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-right text-sm-center pt-5 text-white">
                        <p><b>NOVA DLC DE DEATH STRANDING!!</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[12]['Publicacao']); ?>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-left text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[12]['imagem']); ?>">
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[11]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white">
                        <p><b>EM BREVE! K.S.P 2.</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[11]['Publicacao']); ?>
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-right text-sm-center pt-5 text-white">
                        <p><b>Riot Games: Valorant path 4.07</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[13]['Publicacao']); ?>

                    </div>
                    <div class="col-md-6 col-sm-12 text-md-left text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[13]['imagem']); ?>">
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[6]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white">
                        <p><b>Riot Games: League of Legends</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[6]['Publicacao']); ?>
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-right text-sm-center pt-5 text-white">
                        <p><b>Call of Duty Season Three Patch Notes</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[14]['Publicacao']); ?>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-left text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[14]['imagem']); ?>">
                    </div>
                </div>
            </a>
        </div>
    </section>

    <div>
        <?php  GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'Publicacao',
                'iamgem',

                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, app\models\Publicacoes $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'idPublicacao' => $model->idPublicacao]);
                    }
                ],
            ],
        ]);?>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>