<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use app\models\Message;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;
app\assets\AppAsset::register($this);
?>

<section class="intro-single" style="background-color: #ddffea">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a" style="text-align:justify">Shvets & Co. Creative Studio is young creative team with a passion to those own work.
                We are a team of high qualified specialists which can create the best products in whole industry -
                new, fresh, innovative and revolutionary.
                Contact us and we will find the best solution for you!</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?= Url::toRoute('/')?>">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.4143390150116!2d9.96161481598241!3d53.550370667110236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f6df3edef31%3A0x33cadc68f58d8e0e!2zU2VpbGVyc3RyYcOfZSA0MSwgMjAzNTkgSGFtYnVyZywg0JPQtdGA0LzQsNC90LjRjw!5e0!3m2!1sru!2sua!4v1567103913673!5m2!1sru!2sua"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
                  <? $form = ActiveForm::begin()?>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                       <?= $form->field( $message,'name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-lg form-control-a']) ?>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <?= $form->field($message,'email')->textInput(['maxlength' => true, 'class' => 'form-control form-control-lg form-control-a']) ?>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <?= $form->field($message,'message')->textarea(['row' => 6, 'class' => 'form-control form-control-lg form-control-a']) ?>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <?= Html::submitButton('Send Message', ['class' => 'btn btn-a']) ?>
                  </div>
                </div>
                  <? ActiveForm::end()?>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">ShvetsCreativeStudio@gmail.com</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">+49 163 4830482</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                        Sailerstrasse 41, 20359
                      <br> Hamburg, DE.
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="<?= Url::to('https://www.facebook.com/shvetscreativestudio')?>" class="link-one">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="<?= Url::to('https://twitter.com/shvetscreative')?>" class="link-one">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="<?= Url::to('https://www.youtube.com/channel/UChfrFt1t3fW1zPhdcuUM_fA')?>" class="link-one">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
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
      </div>
    </div>
  </section>
