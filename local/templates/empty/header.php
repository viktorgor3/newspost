<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="description" content="">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <!-- Title  -->
            <title><?$APPLICATION->ShowTitle();?></title>

            <!-- Favicon  -->
            <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/core-img/favicon.ico">

            <!-- Core Style CSS -->

            <?
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/css/core-style.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/css/style.css');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/assets/css/responsive.css');

            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/assets/js/jquery/jquery-2.2.4.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/assets/js/popper.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/assets/js/bootstrap.min.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/assets/js/plugins.js');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/assets/js/active.js');
            ?>

            <?$APPLICATION->ShowHead();?>

        </head>

        <body>
        <? $APPLICATION->ShowPanel();?>
        <!-- Header Area Start -->
        <header class="header-area">
            <div class="top-header">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Breaking News Area -->
                        <div class="col-12 col-md-6">
                            <div class="breaking-news-area">
                                <h5 class="breaking-news-title">Breaking news</h5>
                                <div id="breakingNewsTicker" class="ticker">
                                    <ul>
                                        <li><a href="#">Brexit breakthrough in Brussels comes after week of drama</a></li>
                                        <li><a href="#">Brexit breakthrough in Brussels</a></li>
                                        <li><a href="#">Brexit breakthrough in Brussels comes after week of drama</a></li>
                                        <li><a href="#">Brex comes after week of drama</a></li>
                                        <li><a href="#">Brexit breakthrough in Bweek of drama</a></li>
                                        <li><a href="#">Brexit bssels comes after week of drama</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Stock News Area -->
                        <div class="col-12 col-md-6">
                            <div class="stock-news-area">
                                <div id="stockNewsTicker" class="ticker">
                                    <ul>
                                        <li>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>eur/usd</span>
                                                    <span>1.1862</span>
                                                </div>
                                                <div class="stock-index minus-index">
                                                    <h4>0.18</h4>
                                                </div>
                                            </div>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>BTC/usd</span>
                                                    <span>15.674.99</span>
                                                </div>
                                                <div class="stock-index plus-index">
                                                    <h4>8.60</h4>
                                                </div>
                                            </div>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>ETH/usd</span>
                                                    <span>674.99</span>
                                                </div>
                                                <div class="stock-index minus-index">
                                                    <h4>13.60</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>eur/usd</span>
                                                    <span>1.1862</span>
                                                </div>
                                                <div class="stock-index minus-index">
                                                    <h4>0.18</h4>
                                                </div>
                                            </div>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>BTC/usd</span>
                                                    <span>15.674.99</span>
                                                </div>
                                                <div class="stock-index plus-index">
                                                    <h4>8.60</h4>
                                                </div>
                                            </div>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>ETH/usd</span>
                                                    <span>674.99</span>
                                                </div>
                                                <div class="stock-index minus-index">
                                                    <h4>13.60</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>eur/usd</span>
                                                    <span>1.1862</span>
                                                </div>
                                                <div class="stock-index minus-index">
                                                    <h4>3.95</h4>
                                                </div>
                                            </div>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>BTC/usd</span>
                                                    <span>15.674.99</span>
                                                </div>
                                                <div class="stock-index plus-index">
                                                    <h4>4.78</h4>
                                                </div>
                                            </div>
                                            <div class="single-stock-report">
                                                <div class="stock-values">
                                                    <span>ETH/usd</span>
                                                    <span>674.99</span>
                                                </div>
                                                <div class="stock-index minus-index">
                                                    <h4>11.37</h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Middle Header Area -->
            <div class="middle-header">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Logo Area -->
                        <div class="col-12 col-md-4">
                            <div class="logo-area">
                                <a href="index.html"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/core-img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <!-- Header Advert Area -->
                        <div class="col-12 col-md-8">
                            <div class="header-advert-area">
                                <a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-img/top-advert.png" alt="header-add"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!--Bottom Header Area-->
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	".default", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>

<!--            <div class="bottom-header">-->
<!--                <div class="container h-100">-->
<!--                    <div class="row h-100 align-items-center">-->
<!--                        <div class="col-12">-->
<!--                            <div class="main-menu">-->
<!--                                <nav class="navbar navbar-expand-lg">-->
<!--                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gazetteMenu" aria-controls="gazetteMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>-->
<!--                                    <div class="collapse navbar-collapse" id="gazetteMenu">-->
<!--                                        <ul class="navbar-nav mr-auto">-->
<!--                                            <li class="nav-item active">-->
<!--                                                <a class="nav-link" href="#">Today <span class="sr-only">(current)</span></a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item dropdown">-->
<!--                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>-->
<!--                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                                                    <a class="dropdown-item" href="index.html">Home</a>-->
<!--                                                    <a class="dropdown-item" href="catagory.html">Catagory</a>-->
<!--                                                    <a class="dropdown-item" href="single-post.html">Single Post</a>-->
<!--                                                    <a class="dropdown-item" href="about-us.html">About Us</a>-->
<!--                                                    <a class="dropdown-item" href="contact.html">Contact</a>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="#">Politics</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="#">Lifestyle</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="#">Travel</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="#">Health</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="#">Entertainment</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="#">sport</a>-->
<!--                                            </li>-->
<!--                                            <li class="nav-item">-->
<!--                                                <a class="nav-link" href="index.php">news</a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                         Search Form -->
<!--                                        <div class="header-search-form mr-auto">-->
<!--                                            <form action="#">-->
<!--                                                <input type="search" placeholder="Input your keyword then press enter..." id="search" name="search">-->
<!--                                                <input class="d-none" type="submit" value="submit">-->
<!--                                            </form>-->
<!--                                        </div>-->
<!--                                        Search btn -->
<!--                                        <div id="searchbtn">-->
<!--                                            <i class="fa fa-search" aria-hidden="true"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </nav>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </header>
        <!-- Header Area End -->

        <!-- Breadcumb Area Start -->
<!--        <div class="breadcumb-area section_padding_50">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <div class="breacumb-content d-flex align-items-center justify-content-between">-->
<!--                            <h3 class="font-pt mb-0">About Us</h3>-->
<!--                            <p class="editorial-post-date text-dark mb-0">28 November 2017</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- Breadcumb Area End -->
	
						