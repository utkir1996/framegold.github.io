<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
<!--


    <div class="alert alert-danger">
        <?/*= nl2br(Html::encode($message)) */?>
    </div>-->




<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title"><?=Html::encode($this->title)?></h1>
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="<?=\yii\helpers\Url::home()?>">Home</a>
                            </li>
                            <li><?=Html::encode($this->title)?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- ERROR SECTION START -->
    <div class="error-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-404 box-shadow">
                        <?=Html::img("@web/img/others/error.jpg",['alt'=>'Error'])?>
                        <div class="go-to-btn btn-hover-2">
                            <a href="<?=\yii\helpers\Url::home()?>">go to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ERROR SECTION END -->
</div>
<!-- End page content -->