<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Astropack';
}
?>
<section id="main-slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            <?php
            $j = 0;
            if (!empty($sliders)) {
                foreach ($sliders as $slider) {
                    $j++;
                    ?>
                    <div class="carousel-item <?= $j == 1 ? 'active' : '' ?>" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/sliders/<?= $slider->id ?>/image.<?= $slider->image ?>')">
                        <div class="container">
                            <div class="carousel-caption d-md-block">
                                <p class="lead animated fadeInDown"><?= $slider->title ?></p>
                                <h2 class="caption animated fadeInUp"><?= $slider->sub_title ?></h2>
                                <div class="info animated fadeInUp"><?= $slider->description ?></div>
                                <a href="<?= $slider->link ?>" class="btn-bg animated fadeInLeft">View More</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php if (!empty($about)) { ?>
    <section id="about">
        <div class="container">
            <div class="main_head">
                <div class="sub-head">Welcome to</div>
                <div class="head"><?= $about->title ?></div>
                <div class="exp"><?= $about->title ?></div>
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
                        <?php
                        $start = strpos($about->about_company, '<p>');
                        $end = strpos($about->about_company, '</p>', $start);
                        $paragraph = substr($about->about_company, $start, $end - $start + 4);
                        $text = str_ireplace('<p>', '', $paragraph);
                        $text = str_ireplace('</p>', '', $paragraph);
                        $welcome_string = (strlen($text) > 503) ? substr($text, 0, 500) . '...' : $text;
                        ?>
                        <?= $welcome_string ?>
                        <?= Html::a('Read More', ['/site/about'], ['class' => 'btn-plain']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }
?>

<section id="products">
    <div class="container">
        <div class="main_head">
            <div class="sub-head">Astropackgulf</div>
            <div class="head">Our Products</div>
        </div>

        <div class="row">
            <?php
            if (!empty($products)) {
                foreach ($products as $product) {
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pro-box">
                            <div class="img-box">
                                <a href="#!"><img src="<?= Yii::$app->homeUrl; ?>uploads/products/<?= $product->id ?>/image.<?= $product->image ?>" alt="<?= $product->product_title ?>" class="img-fluid"/></a>
                                <div class="box-foot">
                                    <h4 class="pro-title"><?= $product->product_title ?></h4>
                                    <h5 class="pro-sub"><?= $product->sub_title ?></h5>
                                </div>
                                <div class="pro-info">
                                    <div class="title">
                                        <h5 class="head"><?= $product->product_title ?></h5>
                                        <p class="sub"><?= $product->sub_title ?></p>
                                    </div>
                                    <p><?= $product->description ?></p>
                                    <?= Html::a('Read More', ['/site/product-details', 'product' => $product->canonical_name], ['class' => 'btn-border']) ?>
                                    <?= Html::a('Enquire Now', ['/site/product-enquiry', 'product' => $product->canonical_name], ['class' => 'btn-border']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <?= Html::a('<span>View all Products</span>', ['/site/products'], ['class' => 'btn-border view-all']) ?>

    </div>
</section>
<?php if (!empty($services)) {
    ?>
    <section id="services">
        <div class="container">
            <div class="main_head">
                <div class="sub-head">Astropackgulf</div>
                <div class="head">Our Services</div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="img-box">
                        <img src="<?= Yii::$app->homeUrl; ?>uploads/services/profile/<?= $services->id ?>/image.<?= $services->image ?>" class="img-fluid" alt="<?= $services->canonical_name ?>"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-info">
                        <?= $services->description ?>
                        <?= Html::a('Read More', ['/site/services'], ['class' => 'btn-plain']) ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php }
?>
<?php if (!empty($clients)) { ?>
    <section id="clients">
        <div class="container">
            <div class="main_head">
                <div class="sub-head">Astropackgulf</div>
                <div class="head">Our Customers</div>
            </div>
            <div class="carousel-controls clients-carousel-controls">
                <div class="clients-carousel">
                    <?php foreach ($clients as $client) { ?>
                        <div class="one-slide mx-auto">
                            <img src="<?= Yii::$app->homeUrl; ?>uploads/clients/<?= $client->id ?>/image.<?= $client->image ?>" alt="<?= $client->client_name ?>" class="img-fluid"/>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php }
?>
<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 left-sec">
                <div class="testimonial">
                    <div class="form-head">Testimonial</div>
                    <div class="carousel-controls testimonial-carousel-controls">
                        <div class="testimonial-carousel">
                            <?php
                            if (!empty($testimonials)) {
                                foreach ($testimonials as $testimonial) {
                                    ?>
                                    <div class="one-slide mx-auto">
                                        <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                                            <div class="story-box">
                                                <div class="testi-icon"></div>
                                                <div class="testi-content"><?= $testimonial->message ?></div>
                                                <div class="testi-footer">
                                                    <h4 class="title"><?= $testimonial->author ?></h4>
                                                    <h4 class="sub-title"><?= $testimonial->designation ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 right-sec">
                <form action="" method="post" class="contact-enquiry">
                    <div class="form-head">Quick Contact</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="phone" id="phone" name="phone" class="form-control" required="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="company" name="company" class="form-control" required="" placeholder="Company">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" required="" placeholder="Message" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
