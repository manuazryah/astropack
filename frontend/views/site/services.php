<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Astropack Services';
}
?>

<div id="services_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/services.<?= $baner_image->services ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <?php
            if (!empty($services)) {
                $i = 0;
                foreach ($services as $service) {
                    $i++;
                    if ($i % 2 != 0) {
                        ?>
                        <div class="service-box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img-box">
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/services/profile/<?= $service->id ?>/image.<?= $service->image ?>" class="img-fluid" alt="<?= $service->canonical_name ?>"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-info">
                                        <div class="main_head">
                                            <div class="sub-head">Astropackgulf</div>
                                            <div class="head"><?= $service->service_title ?></div>
                                        </div>
                                        <?= $service->description ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="service-box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-info">
                                        <div class="main_head">
                                            <div class="sub-head">Astropackgulf</div>
                                            <div class="head"><?= $service->service_title ?></div>
                                        </div>
                                        <?= $service->description ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img-box">
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/services/profile/<?= $service->id ?>/image.<?= $service->image ?>" class="img-fluid" alt="<?= $service->canonical_name ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>

        </div>
    </section>

</div>
