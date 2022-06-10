<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicacoesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>


    <h1><?= Html::encode($this->title) ?></h1>

<link rel="stylesheet" href="/Dweb_projeto2/web/css/page22.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">

<div class="publicacoes-index">

    <h1 style="text-align: center">JOGOS-VR</h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <section class="box-noticias pt-5">
        <div class="container">
            <a href="https://www.w3schools.com">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[4]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white">
                        <p><b>Contrua explore e lute.</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[4]['Publicacao']); ?>
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-right text-sm-center pt-5 text-white">
                        <p><b>BEAT SABER!</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[7]['Publicacao']); ?>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-left text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[7]['imagem']); ?>">
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[8]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white">
                        <p><b>EASTER EGGS EM ‘ALYX’!</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[8]['Publicacao']); ?>
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-right text-sm-center pt-5 text-white">
                        <p><b>EM BREVE! FORKLIFT.</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[9]['Publicacao']); ?>

                    </div>
                    <div class="col-md-6 col-sm-12 text-md-left text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[9]['imagem']); ?>">
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[15]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white">
                        <p><b>RESIDENT EVIL 7: BIOHAZARD VRs</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[15]['Publicacao']); ?>
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-right text-sm-center pt-5 text-white">
                        <p><b>VR-CHAT</b></p>
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[16]['Publicacao']); ?>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-left text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[16]['imagem']); ?>">
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