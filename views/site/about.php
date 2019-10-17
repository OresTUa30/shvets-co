<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<section class="intro-single" style="background-color: #ddffea">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Innovative in whole ways!</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= Url::toRoute('/')?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            About Us
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ About Star /-->
<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about-img-box">
                    <?= Html::img('/img/back.JPG',['class' => 'img-fluid'])?>
                </div>
                <div class="sinse-box">
                    <h5 class="sinse-title">The best people in one team</h5>
                    <p>Meet our creative team of Shvets & Co.<br>
                    Creative Studio, and learn more about us...</p>
                </div>
            </div>
            <div class="col-md-12 section-t8">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <?= Html::img('/img/Ivan.jpg',['class' => 'img-fluid'])?>
                    </div>
                    <div class="col-lg-2  d-none d-lg-block">
                        <div class="title-vertical d-flex justify-content-start">
                            <span> CEO of Shvets & Co. Creative Studio</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 section-md-t3">
                        <div class="title-box-d">
                            <h3 class="title-d">Ivan
                                <span class="color-d">Shvets</span></h3>
                        </div>
                        <p class="color-text-a" style="text-align:justify">
                            Shvets & Co. Creative Studio provides new and creative entertainment services,
                            specializing in original show concepts for the show industry all over the world.
                            Our clients are: leading cruise lines, theaters and musical production, big hotel resorts,
                            huge theme parks, and all other types of entertainment productions around the Globe.
                        </p>
                        <hr>
                        <p class="color-text-a" style="text-align:justify">
                            Shvets & Co. Creative studio - « it’s always been my dream to bring passionate and creative people
                            together to develop something more than the norm and create a brighter future for show industry... »
                        </p>
                        <?= Html::img('/img/drow.png',['height' => 200, 'width' => 300])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ About End /-->

<!--/ Team Star /-->
<section class="section-agents section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Our Team</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-d">
                    <div class="card-img-d" style="height: 425px">
                        <?= Html::img('/img/Ira.jpeg',['class' => 'img-d img-fluid'])?>
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a href="<?= Url::to('https://www.facebook.com/profile.php?id=100006186874109')?>" class="link-two">Iryna Korniichuk </a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a">
                                Creative Director of Aerial Elements.
                            </p>
                            <div class="info-agents color-a">
                                <p>
                                    <strong>Phone: </strong> +49 163 4830482</p>
                                <p>
                                    <strong>Email: </strong> ShvetsCreativeStudio@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="<?= Url::to('https://www.facebook.com/profile.php?id=100006186874109')?>" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="<?= Url::to('https://www.instagram.com/iruna_korniichuk')?>" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-d">
                    <div class="card-img-d" style="height: 425px">
                        <?= Html::img('/img/adam.jpg',['class' => 'img-d img-fluid',
                            'height'=> '100%'])?>
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a href="<?= Url::to('https://www.facebook.com/profile.php?id=665530182')?>" class="link-two">Adam John
                                        <br> Heapworth</a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a">
                                Music Director in Shvets & Co. Creative Studio
                            </p>
                            <div class="info-agents color-a">
                                <p>
                                    <strong>Phone: </strong> +49 163 4830482</p>
                                <p>
                                    <strong>Email: </strong> ShvetsCreativeStudio@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="<?= Url::to('https://www.facebook.com/profile.php?id=665530182')?>" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="<?= Url::to('https://www.twitter.com/AdamJHepworth')?>" class="link-one">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="<?= Url::to('https://www.instagram.com/ajhepworth')?>" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-d">
                    <div class="card-img-d " style="height: 425px">
                        <?= Html::img('/img/Nastya.JPG',['class' => 'img-d img-fluid'])?>
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a href="<?= Url::to('https://www.facebook.com/profile.php?id=100001417725430')?>" class="link-two">Anastasiya Yarovskaya</a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a">
                                Genera Designer of Shvets & Co. Creative Studio
                            </p>
                            <div class="info-agents color-a">
                                <p>
                                    <strong>Phone: </strong> +49 163 4830482</p>
                                <p>
                                    <strong>Email: </strong> ShvetsCreativeStudio@gmail.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="<?= Url::to('https://www.facebook.com/profile.php?id=100001417725430')?>" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
