<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($event_details->meta_title) && $event_details->meta_title != '') {
    $this->title = $event_details->meta_title;
} else {
    $this->title = 'Astropack event details';
}
?>

<div id="news_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/news_events/banner/<?= $event_details->id ?>/image.<?= $event_details->baner_image ?>')">')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">News & Events</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">News & Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="news-dtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-sec">
                    <div class="news-header">
                        <h5 class="news-title"><?= $event_details->title ?></h5>
                        <div class="author-dtl">
                            <div class="author">
                                <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>assets/images/author.png" alt="" class="img-fluid"/></div>
                                <p>Post by: <span>admin</span></p>
                            </div>
                            <div class="date"><?= date("d M Y", strtotime($event_details->date)) ?></div>
                        </div>
                    </div>
                    <div class="news-cntnt">
                        <img src="<?= Yii::$app->homeUrl ?>/uploads/news_events/profile/<?= $event_details->id ?>/image.<?= $event_details->baner_image ?>" alt="<?= $event_details->title ?>" class="img-fluid"/>
                        <?= $event_details->content ?>
                    </div>
                </div>

                <div class="col-lg-4 right-sec">
                    <div class="related-news">
                        <h5 class="title">Company News posts</h5>
                        <?php
                        if (!empty($events)) {
                            foreach ($events as $event) {
                                ?>
                                <div class="list">
                                    <?= Html::a('<img src="' . Yii::$app->homeUrl . 'uploads/news_events/profile/' . $event->id . '/small.' . $event->image . '" alt="' . $event->title . '" class="img-fluid"/>', ['/site/event-details', 'event' => $event->canonical_name], ['class' => 'img-box']) ?>
                                    <div class="box-content">
                                        <?= Html::a($event->title, ['/site/event-details', 'event' => $event->canonical_name], ['class' => 'post-title']) ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <?= Html::a('View All News', ['/site/news-and-events'], ['class' => 'viewall']) ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>