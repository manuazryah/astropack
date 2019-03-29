<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Astropack News and Events';
}
?>

<div id="news_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/events.<?= $baner_image->events ?>')">
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

    <section id="news-list">
        <div class="container">
            <div class="row">
                <?php
                if (!empty($events)) {
                    foreach ($events as $event) {
                        ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="box">
                                <?= Html::a('<img src="' . Yii::$app->homeUrl . 'uploads/news_events/profile/' . $event->id . '/image.' . $event->image . '" alt="' . $event->title . '" class="img-fluid"/>', ['/site/event-details', 'event' => $event->canonical_name], ['class' => 'img-box']) ?>
                                <div class="date"><?= date("d M Y", strtotime($event->date)) ?></div>
                                <?= Html::a($event->title, ['/site/event-details', 'event' => $event->canonical_name], ['class' => 'title']) ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

</div>
