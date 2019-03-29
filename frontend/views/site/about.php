<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'About Astropack';
}
?>
<div id="about_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/about.<?= $baner_image->about ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="main_head">
                <div class="sub-head">About Us</div>
                <div class="head"><?= $about->title ?></div>
                <div class="exp"><?= $about->sub_title ?></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <video id="my-video" class="video-js" controls preload="auto" height="360"
                           poster="<?= Yii::$app->homeUrl; ?>uploads/about/about_image.<?= $about->image ?>" data-setup="{}">
                        <source src="<?= Yii::$app->homeUrl; ?>uploads/about/about_video.<?= $about->video ?>" type='video/mp4'>

                    </video>
                </div>
                <div class="col-lg-6">
                    <div class="about-info">
                        <?= $about->about_company ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box">
                        <div class="icon-box"><img src="<?= Yii::$app->homeUrl; ?>assets/images/icons/vision_icon.png" class="img-fluid" alt="icon"/></div>
                        <div class="title">Our Vision</div>
                        <p><?= $about->our_vision ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <div class="icon-box"><img src="<?= Yii::$app->homeUrl; ?>assets/images/icons/mission_icon.png" class="img-fluid" alt="icon"/></div>
                        <div class="title">Our Mission</div>
                        <p><?= $about->our_mission ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="dealership">
        <div class="container">
            <div class="main_head">
                <div class="sub-head">astropackgulf</div>
                <div class="head">Our Dealership Companies</div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?= $about->our_dealership_companies ?>
                </div>
                <div class="col-lg-6">
                    <?= $about->section2 ?>
                </div>
            </div>
        </div>
    </section>

</div>
