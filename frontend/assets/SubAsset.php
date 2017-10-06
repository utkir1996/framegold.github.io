<?php

namespace frontend\assets;

use yii\web\AssetBundle;



class SubAsset extends AssetBundle

{

    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [

        'css/bootstrap.min.css',

        'lib/css/nivo-slider.css',
        'css/material-design-iconic-font.css',
        'css/plugins/animate.css',
        'css/plugins/slick.css',
        'css/plugins/jquery-ui.min.css',
        'css/plugins/meanmenu.min.css',

        'css/plugins/fancybox/jquery.fancybox.css',
        'css/plugins/textanimate.css',
        'css/plugins/jquery.mb.YTPlayer.min.css',
        'css/shortcode/default.css',


        'css/shortcode/header.css',

        'css/shortcode/slider.css',
        'css/shortcode/footer.css',

        'css/style.css',

        'css/responsive.css',

        'css/custom.css',
        'css/submas.css',

    ];

    public $js = [

        'js/vendor/jquery-3.1.1.min.js',

        'js/bootstrap.min.js',

        'lib/js/jquery.nivo.slider.js',

        'js/plugins.js',

        'js/main.js',

        'js/submas.js',
        'js/like.js',

    ];

    public $depends = [



    ];



}