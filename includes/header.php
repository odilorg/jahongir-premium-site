<!DOCTYPE html>
<html lang="en">
<?php $my_url = htmlspecialchars($_SERVER['REQUEST_URI']); $url = substr($my_url, strrpos($my_url, '/' )+1)."\n";  ?>

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title><?php echo $title; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
    <script src='https://media.xmlcal.com/widget/1.00/js/bookWidget.min.js'></script>
    

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
    
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header">
            
            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        
                        <span><i class="lotus-icon-location"></i>Chrokchi Street 11, Samarkand, Uzbekistan</span>
                        <span><i class="lotus-icon-phone"></i> 998 91 313 6995</span>
                    </div>
                    <div class="header_right float-right">

                        <div class="dropdown language">
                            <span>ENG</span>

                            <ul>
                                <li class="active"><a href="#">ENG</a></li>
                                <li><a href="#">FR</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->
            
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="index.php"><img src="images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li <?php $url1 = strtok($url, '.');  if (trim($url1) == "index") {
                                echo "class='current-menu-item'";
                            } ?> >
                                <a href="index.php">Home </span></a>
                            </li>
                            <li <?php $url1 = strtok($url, '.');  if (trim($url1) == "about") {
                                echo "class='current-menu-item'";
                            } ?> >
                                <a href="about.php">About </span></a>
                            </li>
                            <li <?php $url1 = strtok($url, '.');  if (trim($url1) == "rooms") {
                                echo "class='current-menu-item'";
                            } ?> >
                                <a href="rooms.php">Rooms </span></a>
                            </li>
                            <li <?php $url1 = strtok($url, '.');  if (trim($url1) == "gallery") {
                                echo "class='current-menu-item'";
                            } ?> >
                                <a href="gallery.php">Gallery </span></a>
                            </li>
                            <li <?php $url1 = strtok($url, '.');  if (trim($url1) == "guest-book") {
                                echo "class='current-menu-item'";
                            } ?> >
                                <a href="guest-book.php">Guest Book</span></a>
                            </li>
                            <li <?php $url1 = strtok($url, '.');  if (trim($url1) == "contact") {
                                echo "class='current-menu-item'";
                            } ?> >
                                <a href="contact.php">Contact</span></a>
                            </li>
                          
                          
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->