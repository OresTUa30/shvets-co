<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<!--/ Intro Single star /-->
<section class="intro-single" style=" background-color: #ddffea">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single"><?= $project->title?></h1>
                    <span class="color-text-a"><?= $project->name?></span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= Url::to('/')?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= Url::to('/project')?>">Project</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $project->title?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<section class="property-single">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="carousel" class=" owl-carousel owl-theme owl-arrow gallery-property ">
                    <div class="carousel-item-a">
                        <?= Html::img('@web/img/single1.jpg')?>
                    </div>
                    <div class="carousel-item-a">
                        <?= Html::img('@web/img/single2.jpg')?>
                    </div>
                    <div class="carousel-item-a">
                        <?= Html::img('@web/img/single3.jpg')?>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="ion-money">S</span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c">hvets & Co.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="property-summary" >
                            <div class="row">
                                <div class="col-sm-12 section-t2">
                                    <?=Html::img("@web/uploads/{$project->image}",['width' => '100%','maxheight' => 400])?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t2">
                                        <h3 class="title-d">Music</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list" >
                               <?= $project->music?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 section-md-t3" style=" background-color: #ddffea">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Description</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a" style="text-align:justify">
                                <?= $project->short_content?>
                            </p>
                        </div>
                        <div class="amenities-list color-text-a" style="text-align:justify">
                            <?= $project->content?>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="col-md-10 offset-md-1">-->
<!--                <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"-->
<!--                           aria-controls="pills-video" aria-selected="true">Video</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"-->
<!--                           aria-selected="false">Floor Plans</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"-->
<!--                           aria-selected="false">Ubication</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="tab-content" id="pills-tabContent">-->
<!--                    <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">-->
<!--                        <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0"-->
<!--                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
<!--                    </div>-->
<!--                    <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">-->
<!--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"-->
<!--                                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-md-12">
                <div class="row section-t3">
                    <div class="col-sm-12">
                        <div class="title-box-d">
                            <h3 class="title-d">Contact Agent</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <?= Html::img('/img/Ivan.jpg',['class' => 'img-fluid'])?>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="property-agent">
                            <h4 class="title-agent">Ivan Shvets</h4>
                            <p class="color-text-a" style="text-align:justify">
                                Shvets & Co. Creative Studio provides new and creative entertainment services,
                                specializing in original show concepts for the show industry all over the world.
                                Our clients are: leading cruise lines, theaters and musical production, big hotel resorts,
                                huge theme parks, and all other types of entertainment productions around the Globe.
                            </p>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between">
                                    <strong>Mobile:</strong>
                                    <span class="color-text-a">+49 163 4830482</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Email:</strong>
                                    <span class="color-text-a">ShvetsCreativeStudio@gmail.com</span>
                                </li>
                            </ul>
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
                                        <a href="<?= Url::to('https://www.youtube.com/channel/UChfrFt1t3fW1zPhdcuUM_fA')?>">
                                            <i class="fa fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="property-contact">
                            <? $form = ActiveForm::begin()?>
                            <form class="form-a">
                                <div class="row">

                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <?= $form->field($message,'name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-lg form-control-a']) ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <?= $form->field($message,'email')->textInput(['maxlength' => true, 'class' => 'form-control form-control-lg form-control-a']) ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <?= $form->field($message,'message')->textarea(['row' => 6, 'class' => 'form-control form-control-lg form-control-a']) ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <?= Html::submitButton('Send Message', ['class' => 'btn btn-a']) ?>
                                    </div>

                                </div>
                            </form>
                            <? ActiveForm::end()?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

