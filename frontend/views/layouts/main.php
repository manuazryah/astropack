<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$action = Yii::$app->controller->action->id;
$contact_details = common\models\ContactsInfo::findOne(1);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,nofollow">
        <link rel="shortcut icon" href="<?= Yii::$app->homeUrl; ?>assets/images/favicon.png" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <header id="Header" class="header main_header">
            <!--header-->
            <section class="navbar-custom" role="navigation">
                <div class="topbar">
                    <div class="container">
                        <div class="top-contact"><a href="tel:042610089" class="link phone"><span class="span">+971 67 494 981</span></a></div>
                        <div class="top-contact"><a href="mailto:info@astropackgulf.com" class="link mail"><span class="span">info@astropackgulf.com</span></a></div>
                    </div>
                </div>
                <!--fixed-top header-->
                <div class="top-navigation">
                    <div class="main-nav-section">
                        <div class="container">
                            <div class="logo-sec">
                                <?= Html::a('<img src="' . Yii::$app->homeUrl . 'assets/images/logo.png" alt="logo" class="img-fluid"/>', ['/site/index'], ['class' => 'logo']) ?>
                            </div>
                            <div class="menu-icon">
                                <button class="navbar-toggler navbar-toggler-right" type="button"
                                        data-toggle="collapse" data-target="#navbarNavDropdown2"
                                        aria-controls="navbarNavDropdown2" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                                </button>
                            </div>
                            <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                                    <ul class="navbar-nav">
                                        <li class="nav-list <?= $action == 'index' ? 'active' : '' ?>">
                                            <?= Html::a('Home', ['/site/index'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'about' ? 'active' : '' ?>">
                                            <?= Html::a('ABOUT US', ['/site/about'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'brand' ? 'active' : '' ?> dropdown">
                                            <?= Html::a('BRAND', ['/site/brand'], ['class' => 'link dropdown-toggle', 'data-toggle' => 'dropdown']) ?>
                                            <div class="dropdown-menu animated2 fadeInUp collapse brand-dropdown">
                                                <?php
                                                $brand_list = common\models\Brands::find()->all();
                                                if (!empty($brand_list)) {
                                                    foreach ($brand_list as $brand_link) {
                                                        ?>
                                                        <?= Html::a($brand_link->brand_name, ['/site/products', 'brand' => $brand_link->brand_name], ['class' => 'dropdown-item']) ?>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </li>
                                        <li class="nav-list <?= $action == 'products' ? 'active' : '' ?> dropdown">
                                            <?= Html::a('PRODUCT', ['/site/products'], ['class' => 'link dropdown-toggle', 'data-toggle' => 'dropdown']) ?>
                                            <div class="dropdown-menu animated2 fadeInUp collapse product-dropdown">
                                                <?php
                                                $product_brand_list = common\models\Brands::find()->where(['status' => 1])->limit(4)->all();
                                                if (!empty($product_brand_list)) {
                                                    foreach ($product_brand_list as $product_brand_link) {
                                                        ?>
                                                        <ul>
                                                            <li>
                                                                <?= Html::a($product_brand_link->brand_name, ['/site/products', 'brand' => $product_brand_link->brand_name], ['class' => 'brand-name']) ?>
                                                                <div class="pro-list">
                                                                    <?php
                                                                    $product_links = \common\models\Products::find()->where(['brand' => $product_brand_link->id])->limit(4)->all();
                                                                    if (!empty($product_links)) {
                                                                        foreach ($product_links as $product_link) {
                                                                            ?>
                                                                            <?= Html::a($product_link->product_title, ['/site/product-details', 'product' => $product_link->canonical_name]) ?>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </li>
                                        <li class="nav-list <?= $action == 'services' ? 'active' : '' ?>">
                                            <?= Html::a('SERVICE', ['/site/services'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'news-and-events' ? 'active' : '' ?>">
                                            <?= Html::a('NEWS & EVENTS', ['/site/news-and-events'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'contact' ? 'active' : '' ?>">
                                            <?= Html::a('CONTACT US', ['/site/contact'], ['class' => 'link']) ?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <div class="quick-action">
                                <ul class="flex">
                                    <li><a class="icon download" href="<?= Yii::$app->homeUrl ?>uploads/brochure/brochure.<?= $contact_details->brochure ?>" download>Download Broucher</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </header>
        <?= $content ?>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="foot-logo"><img src="<?= Yii::$app->homeUrl ?>assets/images/logo.png" alt="" class="img-fluid" /></div>
                            <div class="foot-abt">
                                <p>
                                    <?= $contact_details->footer_content ?>
                                </p>
                                <ul class="social-icon">
                                    <li><a class="fab fa-facebook-f" target="_blank" href="<?= $contact_details->facebook_link ?>"></a></li>
                                    <li><a class="fab fa-linkedin" target="_blank" href="<?= $contact_details->linkedin_link ?>"></a></li>
                                    <li><a class="fab fa-pinterest-p" target="_blank" href="<?= $contact_details->pinterest ?>"></a></li>
                                    <li><a class="fab fa-twitter" target="_blank" href="<?= $contact_details->twitter_link ?>"></a></li>
                                    <li><a class="fab fa-instagram" target="_blank" href="<?= $contact_details->instegram_link ?>"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="quick-links">
                                <div class="foot-head">Quick Links</div>
                                <ul>
                                    <li><?= Html::a('Home', ['/site/index']) ?></li>
                                    <li><?= Html::a('About Us', ['/site/about']) ?></li>
                                    <li><?= Html::a('Product', ['/site/products']) ?></li>
                                    <li><?= Html::a('News & Events', ['/site/news-and-events']) ?></li>
                                    <li><?= Html::a('Contact Us', ['/site/contact']) ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="foot-head">Contat us</div>
                            <div class="foot-address">
                                <p><?= $contact_details->address ?></p>
                                <ul>
                                    <li>Tel:<a href="tel:<?= $contact_details->phone ?>"><?= $contact_details->phone ?></a></li>
                                    <li>Mob:<a href="tel:<?= $contact_details->mobile ?>"><?= $contact_details->mobile ?></a></li>
                                    <li>Email:<a href="mailto:<?= $contact_details->email ?>"><?= $contact_details->email ?></a></li>
                            </div>
                        </div>

                    </div>
                    <section id="copyright">
                        <p>Copyright © <span><?= date('Y') ?>.</span> <a href="#!">Astropackgulf LLC</a>All Rights Reserved</p>
                    </section>
                </div>
            </div>
        </footer>

        <!--footer-->
        <!-- <a href="#" class="scrollup" >Scroll</a> -->

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<script>
    $(document).ready(function () {
        $(document).on('submit', '.contact-enquiry', function (e) {
            e.preventDefault();
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/contact-enquiry',
                data: str,
                success: function (data)
                {
                    if (data == 1) {
                        $('.contact-enquiry').before('<div id="email-alert" style="color: #28a745;font-weight: 600;">Your Contact Enquiry Send Successfully</div>');
                    }
                    $('#name').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#company').val("");
                    $('#message').val("");
                    $('#email-alert').delay(2000).fadeOut('slow');
                }
            });
        });
        $(document).on('submit', '.product-enquiry', function (e) {
            e.preventDefault();
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/products-enquiry',
                data: str,
                success: function (data)
                {
                    if (data == 1) {
                        $('.prod-success').before('<div id="email-alert" style="color: #28a745;font-weight: 600;">Your Poduct Enquiry Send Successfully</div>');
                    }
                    $('#name').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#message').val("");
                    $('#email-alert').delay(2000).fadeOut('slow');
                }
            });
        });

        $(document).on('submit', '.news-letter', function (e) {
            e.preventDefault();
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/news-letter',
                data: str,
                success: function (data)
                {
                    if (data == 1) {
                        $('.news-letter').append('<div id="newsletter-alert" style="color: #28a745;font-weight: 600;padding-top: 10px;">Your Request Send Successfully</div>');
                    } else if (data == 2) {
                        $('.news-letter').append('<div id="newsletter-alert" style="color: #28a745;font-weight: 600;padding-top: 10px;">Already Send Rrequest</div>');
                    }
                    $('#subscribe-email').val("");
                    $('#newsletter-alert').delay(2000).fadeOut('slow');
                }
            });
        });
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5c99cc596bba460528ff9cfa/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var mob = '<?php echo $contact_details->mobile; ?>';
        var options = {
            whatsapp: mob, // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
