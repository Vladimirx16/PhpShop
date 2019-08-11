<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<section class="body">
    <header>
        <div class="container">
            <div class="header-region">
                <nav class="menu-region">
                    <a href="index">На главную</a>
                    <a href="#">Корзина</a>
                    <a href="#"><i class="icon far fa-user"></i>Мой профиль</a>
                    <div class="search-field">
                        <input id="search_input" type="text" class="input" placeholder="Поиск...">
                        <button id="search_button"></button>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="content-region">
        <div class="container">
            <div class="row">
                <?= $content ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer">
                <span>&copy; Все права защищены 2019</span>
            </div>
        </div>
    </footer>
</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
