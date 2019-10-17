<?php

use yii\helpers\Html;
use yii\helpers\Url; ?>

<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide1.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Shvets & Co.
                                        <br> Creative Studio</p>
                                    <h1 class="intro-title mb-4">
                                        «Youth,<br>
                                        <span class="color-b">passion and energy...</span>»
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?= Url::toRoute('/site/about')?>"><span class="price-a">About Us</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(/img/slide2.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Shvets & Co.
                                        <br> Creative Studio</p>
                                    <h1 class="intro-title mb-4">
                                        «The future of <br>
                                        <span class="color-b">entertainment </span>»
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?= Url::toRoute('/project/index')?>"><span class="price-a">Our Project</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(/img/slide3.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Shvets & Co.
                                        <br> Creative Studio</p>
                                    <h1 class="intro-title mb-4">
                                        «The best shows for<br>
                                        <span class="color-b">the best audience!</span>»
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?= Url::toRoute('/site/contact')?>"><span class="price-a">Contact Us</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section-services section-t8" style="background-color: #ddffea;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box-d">
                        <h2 class="title-d">Who we are</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-6">
                <div class="card-box-c foo" >
                    <p class="color-text-a" style="text-align:justify">
                        Shvets & Co. Creative Studio provides new and creative entertainment services,
                        specializing in original show concepts for the show industry all over the world.
                        Our clients are: leading cruise lines, theaters and musical production, big hotel resorts,
                        huge theme parks, and all other types of entertainment productions around the Globe.
                    </p>
                    <hr>
                    <p class="color-text-a" style="text-align:justify">
                        Shvets & Co. Creative studio - « it’s always been my dream to bring passionate and creative people
                        together to develop something more than the norm and create a brighter future for show industry»
                    </p>

                    <div class="card-footer-c">
                        <a href="<?= Url::toRoute('/site/about')?>" class="link-c link-icon">About Us
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-box-c foo" >
                    <?= Html::img('@web/img/home_about.jpg',['height'=> 540, 'width' => '100%'])?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box-d">
                        <h2 class="title-d">Future Projects</h2>
                    </div>
                    <div class="title-link">
                        <a href="<?= Url::toRoute('/project/index')?>">All Property
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
            <? foreach ($project as $pro):?>
            <div class="carousel-item-b">
                <div class="card-box-a">
                    <div class="img-box-a">
                            <?=Html::img("@web/uploads/{$pro->image}",['width' => 400,'height' => 400, 'class' => 'img-a img-fluid' ])?>
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-body-a">
                                <a href="<?= Url::toRoute('/project/'. $pro->id)?>" class="link-a">Click here to view
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                        <h4 class="card-info-title"><?= $pro->title?></h4>
                                        <span><?= $pro->name?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? endforeach;?>
        </div>
    </div>
</section>




