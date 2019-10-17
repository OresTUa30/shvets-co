<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <title>Shvets $ Co</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="/web/img/bigLogo.png">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="<?= Url::toRoute('/')?>">Shvets &<span class="color-b"> Co.</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::toRoute('/')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::toRoute('/site/about')?>">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::toRoute('/project/index')?>">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::toRoute('/site/contact')?>">Contact</a>
                </li>
            </ul>
        </div>
<!--        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"-->
<!--                data-target="#navbarTogglerDemo01" aria-expanded="false">-->
<!--            <span class="fa fa-search" aria-hidden="true"></span>-->
<!--        </button>-->
    </div>
</nav>

<?= $content ?>

<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <?= Html::img('/img/Logo.png',['height' => 150, 'width'=>325, 'class' => 'w-title-a text-brand'])?>
                        <p style="margin-left: 25px"> &copy; Shvets & Co. Creative Studio 2019</p>
                    </div>
                    <div class="w-body-a">

                    </div>
                    <div class="w-footer-a">

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3" style="display: flex; justify-content: center;">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Menu</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="<?=Url::toRoute('/')?>">Home</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="<?=Url::toRoute('/site/about')?>">About</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="<?=Url::toRoute('/project/index')?>">Project</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="<?=Url::toRoute('/site/contact')?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Contacts</h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Email .</span> ShvetsCreativeStudio@gmail.com</li>
                            <li class="color-a">
                                <span class="color-text-a">Phone .</span> +49 163 4830482</li>
                            <li class="color-a">
                                <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.4143390150116!2d9.96161481598241!3d53.550370667110236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f6df3edef31%3A0x33cadc68f58d8e0e!2zU2VpbGVyc3RyYcOfZSA0MSwgMjAzNTkgSGFtYnVyZywg0JPQtdGA0LzQsNC90LjRjw!5e0!3m2!1sru!2sua!4v1567103913673!5m2!1sru!2sua"
                                        width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="socials-a">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="<?= Url::to('https://www.facebook.com/shvetscreativestudio')?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?= Url::to('https://twitter.com/shvetscreative')?>">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?= Url::to('https://www.youtube.com/channel/UChfrFt1t3fW1zPhdcuUM_fA')?>">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="copyright-footer">
                    <p class="copyright color-text-a">
                        &copy; Copyright
                        <span class="color-a">Shvets & Co</span> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
