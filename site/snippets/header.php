<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page->title()->html() ?> &ndash; <?php echo $site->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon.png') ?>">

    <?php echo css('assets/css/main.css') ?>

    <?php echo css('assets/css/grid.css') ?>

    <?php echo css('http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,700italic,600italic,400italic') ?>

</head>

<body>

    <header>
        <nav id="nav-header"> <!-- banner -->
            <div id="centered-nav-container">
                <div id="nav-bar-main">
                    <div id="nav-bar-left">
                        <div id="nav-bar-logo">
                            <a class="logo" href="<?php echo $site->url() ?>">
                                <img src="<?php echo url('assets/images/logo.png') ?>" alt="Site logo" width="49" height="49">
                            </a>

                        </div>
                        <div id="site-name">
                        <a class="logo" href="<?php echo $site->url() ?>">
                            <img src="<?php echo url('assets/images/logo-name.png') ?>" alt="Kevin Choy" width="194" height="49">
                        </a>
                        </div>
                        <!-- <div id="site-name"><a href="<?php echo url() ?>">evin Choy</a></div> -->
                    </div> <!-- ./nav-bar-left -->
                    <div id="nav-bar-right">
                        <ul class="menu-items-list">
                            <li><a class="button-nav button-header-nav" href="<?php echo page('about') ?>">About</a></li>
                            <li><a class="button-nav button-header-nav" href="<?php echo page('home') . '#featured-work' ?>">Work</a></li>
                            <li><a class="button-nav button-header-nav" href="<?php echo page('home') . '#contact-me' ?>">Contact</a></li>
                        </ul>

                    </div> <!-- ./nav-bar-right -->
                </div> <!-- ./nav-bar-main -->
            </div> <!-- ./centered-nav-container -->
        </nav> <!-- ./banner -->
    </header>