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
    <header class = "<?php if($header == 'active'){ echo 'active scrolled'; } ?>">
        <div class="wrapper">
            <div class="h-left fl">
                <a href="index.php">
                    <div class="dib h-logo">
                        <img src="img/material/logo.png" alt="">
                    </div>
                </a>
            </div>
            <div class="h-right-mobile">
                <div class="hamburger" onclick="toggleHamburger();">
                    <span></span>
                </div>
                <a data-id = "loginpopup" class="login-mobile popup-trigger"></a>
            </div>
            <div class="h-right fr tr">
                <div class="dib h-menu">
                    <nav>
                        <ul>
                            <li class="dib fl"><a class = "<?php if($page == 'data-tree'){ echo 'active'; } ?>" href="categories.php">Data Tree</a></li>
                            <li class="dib fl"><a class = "<?php if($page == 'data-talk'){ echo 'active'; } ?>" href="data-talk.php">Data Talk</a></li>
                            <li class="dib fl"><a class = "<?php if($page == 'about'){ echo 'active'; } ?>" href="about.php">About</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="dib h-search">
                    <form action="search-result.php" method="post">
                        <span></span>
                        <input placeholder = "Search here..." name="" type="text" />
                        <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"
                        tabindex="-1" />
                    </form>
                </div>
                <div class="dib tr h-login">
                    <?php if($login == "yes"){ ?>
                        <div class="logged">
                            <span class = "dib login-ico"></span>
                            <font>Hi, Remmy</font>
                            <span class = "dib arrow"></span>
                        </div>
                    <?php }else{ ?>
                        <a data-id = "loginpopup" class = "btn f-login popup-trigger" href="">LOG IN</a>
                    <?php } ?>
                </div>
            </div>
            <div class="cb"></div>
        </div>
    </header>
    <div class="bg-trans-mobile"></div>
    <section id = "loginpopup" class = "popup type2">
        <div class="wrapper type-popup">
            <div class="pop-content">
                <span class = "pop-close"></span>
                <div class="side-left">
                    <div class="centerize">
                        <div class = ""pr>
                            <b class = "signin">SIGN IN</b>
                            <form>
                                <div class="form-group">
                                    <span class = "ico-email"></span>
                                    <input class = "oneline" type = "email" placeholder = "Email" />
                                </div>
                                <div class="form-group">
                                    <span class = "ico-password"></span>
                                    <input class = "oneline" type = "password" placeholder = "Password" />
                                </div>
                                <div class="remember">
                                    <label class="side-filter">Remember Me
                                        <input type = "checkbox" name = "sf"/>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="forgot">
                                    <a class="c-blue" href="">forgot password?</a>
                                </div>
                                <div class="cb"></div>
                                <button class="btn orange w-100">LOG IN</button>
                            </form>
                            <span class = "signup db m0a">Don't have account? <a class="i" href="">Sign up Here</a></span>
                        </div>
                    </div>
                </div>
                <div class="side-right">
                    <div class="content-ins">
                        <b>WHY REGISTER?</b>
                        <p>
                            Subscribe to email updates for economic data series.
                            Create personalized lists of economic data series.
                            Save customized graphs and maps for later use.
                            Build and share personalized dashboards with series 
                        </p>
                        <a href="">Learn more about user accounts </a>
                    </div>
                    <img src="img/material/side-code.jpg">
                </div>
            </div>
        </div>
    </section>
    
