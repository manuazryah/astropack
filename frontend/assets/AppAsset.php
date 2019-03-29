<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/app.css',
    ];
    public $js = [
        'https://unpkg.com/popper.js@1.14.6/dist/umd/popper.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js',
        'https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js',
        'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.js',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.5.0/js/jquery.sliderPro.min.js',
        'https://vjs.zencdn.net/7.3.0/video.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js',
        'assets/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
