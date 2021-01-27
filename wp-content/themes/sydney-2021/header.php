<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sydney_2021
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <header class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <ul class="logoLine">
                    <li>
                        <a href="#" class="logoPage">
                            <img src="images/logo.png" alt="logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/sens16.png" alt="season">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/sens17.png" alt="season">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="topHeaderBlock">
                    <ul class="headerNav">
                        <li><a href="#" class="shop">Shop
                                cart</a></li>
                        <li>
                            <ul class="headerListSoc">
                                <li>
                                    <div class="sendSearch"></div>
                                </li>
                                <li><a href="#"><img src="images/headerSoc/soc4.png" alt="twiter"></a></li>
                                <li><a href="#"><img src="images/headerSoc/soc3.png" alt="instagram"></a></li>
                                <li><a href="#"><img src="images/headerSoc/soc2.png" alt="youtube"></a></li>
                                <li><a href="#"><img src="images/headerSoc/soc1.png" alt="search"></a></li>
                            </ul>
                        </li>
                        <li><a href="#">donate</a></li>
                    </ul>
                    <p class="headerText">
                        <span>Sydney Philharmonia<br> Choirs</span>
                        celebrated 100 years in 2020
                    </p>
                </div>
                <div class="searchRow">
                    <form role="search" method="get" action="">

                        <div class="searchHeaderBlock">
                            <div class="small-8 columns">
                                <input type="text" value="" name="s" placeholder="Search" class="inputSearch"
                                    autofocus />
                            </div>
                            <div class="small-4 columns">
                                <input type="submit" value="Search" class="buttonSearch">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed icon-menu menuActive" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <?php
if (has_nav_menu('menu-1')) {

    wp_nav_menu(array(
        'theme_location' => 'menu-1',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'navbar-collapse menu',
        'container_id' => 'navbar',
        'menu_class' => 'nav navbar-nav',
        'menu_id' => 'primary-menu',
    ));
}
?>



            <div id="navbar" class="navbar-collapse menu">
                <ul class="nav navbar-nav ">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">what‘s on</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">chorusoz 2020</a></li>
                            <li><a href="#">tudor portraits</a></li>
                            <li><a href="#">nordic songs</a></li>
                            <li><a href="#">elgarthedreamofgerontius</a></li>
                            <li><a href="#">songs of farewell</a></li>
                            <li><a href="#">handel messiah</a></li>
                        </ul>
                    </li>
                    <li><a href="#">support us</a></li>
                    <li><a href="#">sing with us</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">about us</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">music director</a></li>
                            <li><a href="#">history</a></li>
                            <li><a href="#">board and management</a></li>
                            <li><a href="#">chorister alumni</a></li>
                            <li><a href="#">contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">media</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="sliderBlock">
        <div class="owl-carousel owl-theme actSlider">
            <div class="item mainSlider1">
                <div class="sliderStyle slider1">
                    <div class="containerSlider">
                        <div class="blockNow">
                            <h3>Elgar<br> The Dream of Gerontius</h3>
                            <p class="textSlider">
                                400 singers perform Elgar’s monumental work under the stunning Sydney Opera House sails.
                            </p>
                            <a href="#" class="nowLink">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item mainSlider2">
                <div class="sliderStyle slider2">
                    <div class="containerSlider">
                        <div class="blockNow">
                            <h3>Elgar<br> The Dream of Gerontius</h3>
                            <p class="textSlider">
                                400 singers perform Elgar’s monumental work under the stunning Sydney Opera House sails.
                            </p>
                            <a href="#" class="nowLink">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item mainSlider3">
                <div class="sliderStyle slider3">
                    <div class="containerSlider">
                        <div class="blockNow">
                            <h3>Elgar<br> The Dream of Gerontius</h3>
                            <p class="textSlider">
                                400 singers perform Elgar’s monumental work under the stunning Sydney Opera House sails.
                            </p>
                            <a href="#" class="nowLink">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item mainSlider4">
                <div class="sliderStyle slider4">
                    <div class="containerSlider">
                        <div class="blockNow">
                            <h3>Elgar<br> The Dream of Gerontius</h3>
                            <p class="textSlider">
                                400 singers perform Elgar’s monumental work under the stunning Sydney Opera House sails.
                            </p>
                            <a href="#" class="nowLink">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>