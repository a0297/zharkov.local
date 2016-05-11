<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 11.05.2016
 * Time: 16:06
 */


namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'stylesheets\responsive.css',
        'stylesheets\style.css',
    ];
    public $js = [
        'javascripts\app.js',
        'javascripts\custom.js',
        'javascripts\elasticslideshow.js',
        'javascripts\formvalidation.js',
        'javascripts\foundation.min.js',
        'javascripts\hoverIntent.js',
        'javascripts\jquery.carouFredSel-6.0.5-packed.js',
        'javascripts\jquery.cycle.js',
        'javascripts\jquery.easing.1.3.js',
        'javascripts\jquery.isotope.min.js',
        'javascripts\jquery.prettyPhoto.js',
        'javascripts\jquery.tweet.js',
        'javascripts\modernizr.foundation.js',
        'javascripts\responsivemenu.js',
        'javascripts\scrolltotop.js',
        'javascripts\slidepanel.js',
        'javascripts\superfish.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
