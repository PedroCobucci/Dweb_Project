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

<link rel="stylesheet" href="/Dweb_projeto2/web/css/FirstPage2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">
<div class="publicacoes-index">

    <h1 style="text-align: center">RECOMENDADOS</h1>
    <section role="main" class="box-noticias pt-5">
        <div class="container">
            <a href="https://www.w3schools.com">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[4]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white">
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[4]['Publicacao']); ?>
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-right text-sm-center pt-5 text-white">
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[5]['Publicacao']); ?>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-left text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[5]['imagem']); ?>">
                    </div>
                </div>
            </a>
            <a href="https://www.w3schools.com">
                <div class="row pt-5">
                    <div class="col-md-6 col-sm-12 text-md-right text-sm-center">
                        <img class="minecraft" src="/<?php $model = $dataProvider->getModels(); print_r($model[6]['imagem']); ?>">
                    </div>
                    <div class="text-categoria col-md-6 col-sm-12 text text-md-left text-sm-center pt-5 text-white">
                        <?php
                        $model = $dataProvider->getModels();
                        print_r($model[6]['Publicacao']); ?>
                    </div>
                </div>
            </a>

        </div>
    </section>
    <section class="box-noticias pt-5">
        <div class="row">
            <div class="container-categoria text-center">
                <div class="categoria">
                    <span class="text-categoria2">Publicações sobre jogos VR</span>
                </div>
                <a href="/Dweb_projeto2/web/index.php?r=publicacoes%2Fjogosvr">
                    <div class="Vermais">
                        <span class="text-vermais">VER MAIS</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 pt-5 d-flex justify-content-center">
                <div class="quadrado">
                    <a href="https://www.w3schools.com">
                        <img class="image-quadrado" src="/<?php $model = $dataProvider->getModels(); print_r($model[7]['imagem']); ?>">
                    </a>
                    <span class="texto-quadrado"><b><p>BEAT SABER!</p></b>
                        <center><li> <?php
                                $model = $dataProvider->getModels();
                                print_r($model[7]['Publicacao']); ?> </li></center>

                    </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-5 d-flex justify-content-center">
                <div class="quadrado">
                    <a href="https://www.w3schools.com">
                        <img class="image-quadrado" src="/<?php $model = $dataProvider->getModels(); print_r($model[8]['imagem']); ?>">
                    </a>
                    <span class="texto-quadrado"><b><p>EASTER EGGS EM ‘ALYX’!</p></b>
                        <center><li><?php
                                $model = $dataProvider->getModels();
                                print_r($model[8]['Publicacao']); ?></li></center>
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-5 d-flex justify-content-center">
                <div class="quadrado">
                    <a href="https://www.w3schools.com">
                        <img class="image-quadrado" src="/<?php $model = $dataProvider->getModels(); print_r($model[9]['imagem']); ?>">
                    </a>
                    <span class="texto-quadrado"><p><b>EM BREVE! FORKLIFT.</b></p>
                        <center><li> <?php
                                $model = $dataProvider->getModels();
                                print_r($model[9]['Publicacao']); ?> </li></center>
                    </span>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="container-categoria text-center">
                <div class="categoria">
                    <span class="text-categoria2">Publicações sobre jogos</span>
                </div>
                <a href="/Dweb_projeto2/web/index.php?r=publicacoes%2Fjogospage">
                    <div class="Vermais">
                        <span class="text-vermais">VER MAIS</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 pt-5 d-flex justify-content-center">
                <div class="quadrado">
                    <a href="https://www.w3schools.com">
                        <img class="image-quadrado" src="/<?php $model = $dataProvider->getModels(); print_r($model[10]['imagem']); ?>">
                    </a>
                    <span class="texto-quadrado"><p><b>NOVO PATH 03/28/22 !</b></p>
                        <center><li> <?php
                                $model = $dataProvider->getModels();
                                print_r($model[10]['Publicacao']); ?> </li></center>
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-5 d-flex justify-content-center">
                <div class="quadrado">
                    <a href="https://www.w3schools.com">
                        <img class="image-quadrado" src="/<?php $model = $dataProvider->getModels(); print_r($model[11]['imagem']); ?>">
                    </a>
                    <span class="texto-quadrado"><p><b>EM BREVE! K.S.P 2.</b></p>
                        <center><li> <?php
                                $model = $dataProvider->getModels();
                                print_r($model[11]['Publicacao']); ?> </li></center>
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 pt-5 d-flex justify-content-center">
                <div class="quadrado">
                    <a href="https://www.w3schools.com">
                        <img class="image-quadrado" src="/<?php $model = $dataProvider->getModels(); print_r($model[12]['imagem']); ?>">
                    </a>
                    <span class="texto-quadrado"><p><b>NOVA DLC DE DEATH STRANDING!!</b></p>
                        <center><li> <?php
                                $model = $dataProvider->getModels();
                                print_r($model[12]['Publicacao']); ?> </li></center>
                    </span>
                </div>
            </div>
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