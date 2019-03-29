<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Astropack Contact Us';
}
?>

<div id="contact_page" class="inner-page">

    <section id="banner" style="background-image: url('<?= Yii::$app->homeUrl; ?>uploads/baner_images/contact_us.<?= $baner_image->contact_us ?>')">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Contact us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => '']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="map">
        <iframe src="<?= $contact_info->map ?>" width="100%" height="535" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <section id="contact-dtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-sec">
                        <div class="dtl-box">
                            <h4 class="title">Contact us</h4>
                            <p><?= $contact_info->address ?></p>
                            <a class="bold" href="tel:<?= $contact_info->phone ?>"><?= $contact_info->phone ?></a>
                            <p>Email:<a href="mailto:<?= $contact_info->email ?>"><?= $contact_info->email ?></a></p>
                        </div>

                        <div class="quotes">
                            Fill in the form below, and we'll get back to you within <span>24 hours.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="right-sec">
                        <form action="" method="post" class="contact-enquiry">
                            <div class="form-head">Fill in th form</div>
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
        </div>
    </section>

</div>