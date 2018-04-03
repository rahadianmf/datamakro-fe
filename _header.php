<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="author" content="">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="favicon.ico">
    <!--Style-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!--js-->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/js-library.js"></script>
    <script type="text/javascript" src="js/js-running.js"></script>
</head>
<body>
    <header class = "<?php if($header == 'active'){ echo 'active'; } ?>">
        <div class="wrapper">
            <div class="h-left fl">
                <div class="dib h-logo">
                    <img src="img/material/logo.png" alt="">
                </div>
            </div>
            <div class="h-right fr tr">
                <div class="dib h-menu">
                    <nav>
                        <ul>
                            <li class="dib fl"><a href="">Data Tree</a></li>
                            <li class="dib fl"><a href="">Data Talk</a></li>
                            <li class="dib fl"><a href="">About</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="dib h-search">
                    <span></span>
                    <input placeholder = "Search here..." name="" type="text" />
                </div>
                <div class="dib tr">
                    <a class = "btn f-login" href="">LOG IN</a>
                </div>
            </div>
        </div>
    </header>
