<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta charset="utf-8">
    <link rel="icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon" />
    <meta name="description" content="Codester is a free responsive Bootstrap template by Dzyngiri">
    <meta name="keywords" content="free, template, bootstrap, responsive">
    <meta name="author" content="Inbetwin Networks">
    <link rel="stylesheet" href="../../style/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../style/css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../style/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../style/css/touchTouch.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../style/css/kwicks-slider.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../../style/js/jquery.js"></script>
    <script type="text/javascript" src="../../style/js/superfish.js"></script>
    <script type="text/javascript" src="../../style/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="../../style/js/jquery.kwicks-1.5.1.js"></script>
    <script type="text/javascript" src="../../style/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../../style/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="../../style/js/touchTouch.jquery.js"></script>
    <script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='themes/main_theme/style/js/jquery.preloader.js'></"+"script>");}	</script>

    <script>
        jQuery(window).load(function() {
            $x = $(window).width();
            if($x > 1024)
            {
                jQuery("#content .row").preloader();    }

            jQuery('.magnifier').touchTouch();
            jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});
        });

    </script>

    <!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="../../style/css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../style/css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <![endif]-->


</head>

<body>
<div class="spinner"></div>
<!-- header start -->
<header>
    <div class="container clearfix">
        <div class="row">
            <div class="span12">
                <div class="navbar navbar_">
                    <div class="container">
                        <h1 class="brand brand_"><a href="index.html"><img alt="" src="../../style/img/logo.png"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <?php
                            $this->widget('zii.widgets.CMenu', array(
                                'items' => array(
                                    array('label' => 'Главная', 'url' => '/'),
                                    array('label' => 'Работа', 'url' => '#'),
                                    array('label' => 'Блог', 'url' => 'blog'),
                                    array('label' => 'Процесс', 'url' => '#', 'items' => array(
                                        array('label' => 'Первый', 'url' => '#'),
                                        array('label' => 'Второй', 'url' => '#')
                                    )),
                                    array('label' => 'Контакты', 'url' => '#')
                                ),
                                'htmlOptions' => array(
                                    'class' => 'nav sf-menu',
                                    'activateItems' => 'active'
                                )
                            ))
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="bg-content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- slider -->
                <div class="flexslider">
                    <ul class="slides">
                        <li> <img src="../../style/img/slide-1.jpg" alt="" > </li>
                        <li> <img src="../../style/img/slide-2.jpg" alt="" > </li>
                        <li> <img src="../../style/img/slide-3.jpg" alt="" > </li>
                        <li> <img src="../../style/img/slide-4.jpg" alt="" > </li>
                        <li> <img src="../../style/img/slide-5.jpg" alt="" > </li>
                    </ul>
                </div>
                <span id="responsiveFlag"></span>
            </div>
        </div>
    </div>

    <!-- content -->

    <div id="content" class="content-extra"><div class="ic"></div>
        <div class="row-1">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<footer>
    <div class="container clearfix">
        <ul class="list-social pull-right">
            <li><a class="icon-1" href="#"></a></li>
            <li><a class="icon-2" href="#"></a></li>
            <li><a class="icon-3" href="#"></a></li>
            <li><a class="icon-4" href="#"></a></li>
        </ul>
        <div class="privacy pull-left">&copy; 2013 | <a href="#">Electrica : Типо дизайнер</a> | <a href="#" target="_blank">CUBE</a></div>
    </div>
</footer>
<script type="text/javascript" src="../../style/js/bootstrap.js"></script>
</body>
</html>
