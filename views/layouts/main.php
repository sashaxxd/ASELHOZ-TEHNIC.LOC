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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Шапка-->

<div id="wb_LayoutGrid9">
    <div id="LayoutGrid9">
        <div class="row">
            <div class="col-1">
                <div id="wb_LayoutGrid1">
                    <div id="LayoutGrid1">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Image1">
                                    <img src="/images/LOGO.jpg" id="Image1" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <form method="get" action="">
                                    <div class="search">
                                        <input type="search" name="q" placeholder="Поиск">
                                        <input type="submit" value="">
                                    </div>
                                </form>
                            </div>
                            <div class="col-3">
                                <div id="wb_Text1">
                                    <span id="wb_uid0"> +375 17 297-41-41<br> +375 17 297-41-41<br></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Меню -->
<div id="wb_LayoutGrid2">
    <div id="LayoutGrid2">
        <div class="row">
            <div class="col-1">
                <div id="wb_LayoutGrid3">
                    <div id="LayoutGrid3">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_ResponsiveMenu2">
                                    <label class="toggle" for="ResponsiveMenu2-submenu" id="ResponsiveMenu2-title">Menu<span id="ResponsiveMenu2-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                                    <input type="checkbox" id="ResponsiveMenu2-submenu">
                                    <ul class="ResponsiveMenu2" id="ResponsiveMenu2">
                                        <li><a href="<?= \yii\helpers\Url::home()?>">Главная</a></li>
                                        <li><a href="/category/107">Каталог</a></li>
                                        <li><a href="<?= yii\helpers\Url::to(['compare/index'])?>">Сравнение</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Навигация -->
<div id="wb_LayoutGrid4">
    <div id="LayoutGrid4">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text2">
                    <span id="wb_uid1">Навигация &gt;&gt; Трактора</span>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Контент-->
<div class="container">
<?= $content ?>
</div>
<!-- Футер -->
<div id="wb_LayoutGrid8">
    <div id="LayoutGrid8">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text4">
                    <span id="wb_uid7">© 2017 Все права защищены</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wb_Image4">
    <img src="" id="Image4" alt="">
</div>
<!-- Модальное окно -->
<?php
\yii\bootstrap\Modal::begin([
    'header' => '<div class="comparemod"><h3>В сравнении</h3></div>',
    'id' => 'compare',
    'size' => '',

    'footer' => '<button type="button" id="Button_cart" class="btn" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['compare/index']) . '" id="Button_cart" class="btn">Перейти в сравнение</a>
       '
]);

\yii\bootstrap\Modal::end();
?>
<!-- /Модальное окно -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>