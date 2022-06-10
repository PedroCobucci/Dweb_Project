<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <link rel="stylesheet" href="/Dweb_projeto2/web/css/FirstPage2.css">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>

    <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->LOGO,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand bg-transparent',
        ],
    ]);
    ?>
    <a class="navbar-brand" href="/Dweb_projeto2/web/index.php?r=publicacoes%2Findex">
        <img src="/Dweb_projeto2/web/css/logo.png"></img>
    </a>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'nav-item'],
        'items' => [
            ['label' => 'Home', 'url' => ['/publicacoes/index']],
            ['label' => 'Jogos', 'url' => ['/publicacoes/jogospage']],
            ['label' => 'Jogos-VR', 'url' => ['/publicacoes/jogosvr']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <section class="all-nav">

</header>

<main role="main" class="box-noticias pt-5">
    <?= Breadcrumbs::widget([]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>
<?php $this->endPage() ?>
<?php $this->endBody() ?>
<footer class="bg-primary text-center infos">
    © 2000 - Company, Inc. All rights reserved. Address Address<br>
    <br>
    <br>
    LOL | CSGO | VALORAT
</footer>
</body>
</html>

