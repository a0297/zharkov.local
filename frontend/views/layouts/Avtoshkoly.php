<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MainAsset;
use common\widgets\Alert;

MainAsset::register($this);
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width"/>
    <title>Все автошколы Киева</title>
    <!-- CSS Files-->
    <link rel="stylesheet" href="stylesheets/style.css">

    <link rel="stylesheet" href="stylesheets/skins/yellow.css">
    <!-- skin color -->
    <link rel="stylesheet" href="stylesheets/responsive.css">
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<!-- HIDDEN PANEL
================================================== -->
<div id="panel">
    <div class="row">
        <div class="twelve columns">
            <img src="http://www.wowthemes.net/demo/studiofrancesca/images/info.png" class="pics" alt="info">
            <div class="infotext">
                Thank you for visiting my theme! Replace this with your message to visitors.
            </div>
        </div>
    </div>
</div>
<p class="slide">
    <a href="#" class="btn-slide"></a>
</p>
<!-- HEADER
================================================== -->
<div class="row">
    <div class="headerlogo four columns">
        <div class="logo">
            <img src="images\img\logo_telefon.png">
            <a href="index.html">

            </a>
        </div>
    </div>
    <div class="headermenu eight columns noleftmarg">
        <nav id="nav-wrap">
            <ul id="main-menu" class="nav-bar sf-menu">

                <li>
                    <a href="http://zharkov.local/frontend/web/avtoshkoly">Автошколы</a>
                    <ul>
                        <li><a href="portofolio4.html">Все автошколы</a></li>
                        <li><a href="portofolio2.html">Топ автошкол</a></li>
                        <li><a href="portofolio3.html">Акции и скидки</a></li>
                        <li><a href="portofoliodetail.html">Расположение автошкол</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Рейтинг </a>
                    <ul>
                        <li><a href="blogpage1.html">Blog page style 1</a></li>
                        <li><a href="blogpage2.html">Blog page style 2</a></li>
                        <li><a href="blogpage3.html">Blog page style 3</a></li>
                        <li><a href="blogsinglepost.html">Single post</a></li>
                    </ul>
                </li>


                <li>
                    <a href="contact.html">Контакты</a>
                </li>

                <li>
                    <a href="#"></a>
                    <img src="images\img\Gmail.png">
                </li>

                <li>
                    <a href="#"></a>
                    <img src="images\img\home_page.png">
                </li>

            </ul>


        </nav>
    </div>




</div>
<div class="clear">
</div>



<?= $content ?>
<!-- FOOOTER
================================================== -->
<div id="footer">
    <footer class="row">
        <p class="back-top floatright">
            <a href="#top"><span></span></a>
        </p>
        <div class="four columns">
            <h1>О нас</h1>
            ля ля ля
        </div>
        <div class="four columns">
            <h1>МЫ в соцсетях</h1>
            <a class="social facebook" href="#"></a>
            <a class="social twitter" href="#"></a>
            <a class="social deviantart" href="#"></a>
            <a class="social flickr" href="#"></a>
            <a class="social dribbble" href="#"></a>
        </div>
        <div class="four columns">
            <h1 class="newsmargin">Подписатся на рассылку</h1>
            <div class="row collapse newsletter floatright">
                <div class="ten mobile-three columns">
                    <input type="text" class="nomargin" placeholder="Enter your e-mail address...">
                </div>
                <div class="two mobile-one columns">
                    <a href="#" class="postfix button expand">GO</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="copyright">
    <div class="row">
        <div class="six columns">
            &copy;<span class="small"> Андрей & Сo</span>
        </div>
        <div class="six columns">
            <span class="small floatright">Design by <a target="_blank" href="/">I am))), and good Men...</a> </span>
        </div>
    </div>
</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>

<script src="javascripts/jquery.isotope.min.js"></script>
<script src="javascripts/jquery.prettyPhoto.js"></script>
<script src="javascripts/custom.js"></script>

</body>
</html>