<?php

$nameFrom = $_POST['nameFrom'];
$mailFrom = $_POST['emailFrom'];
$message = $_POST['message'];

//$mailTo = 'info@organise4me.co.uk';
//$mailTo = 'demian@muse23.com';
$mailTo = 'yasemin.ustunkoy@gmail.com';
$subject = 'Website enquiry for Organise4me';


    $header .= "Reply-To: $nameFrom <$mailFrom>\r\n";
    $header .= "Return-Path: $nameFrom <$mailFrom>\r\n";
    $header .= "From: $nameFrom <$mailFrom>\r\n";
    $header .= "Organization: Organise4me\r\n";
    $header .= "Content-Type: text/plain\r\n";

    mail($mailTo, $subject, $message, $header);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="startup/flat-ui/images/favicon.ico">

        <link rel="stylesheet" href="startup/flat-ui/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="startup/flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="startup/common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="startup/common-files/css/animations.css">
        <link rel="stylesheet" href="static/css/style.css">

        <title></title>
    </head>

    <body>
        <div class="page-wrapper"><header class="header-15 hidden">
    <div class="container">
        <div class="row">
            <div class="navbar col-sm-12" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"></button>
                    <a class="brand" href="#">Startup</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <form class="navbar-form pull-right">
                        <a class="btn" href="#">TRY IT</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="header-background"></div>
</header>
<section class="content-12">
    <div class="wide btn-wide">Thanks! Your email has been <b>received</b>!</div>
</section><section class="contacts-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3>I will respond to you within 2 business days.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
              <p><a href="/">return to website</a></p>
            </div>

            <div class="col-sm-5 col-sm-offset-1">
                <h6>I can travel to you</h6>
                <p>I'm based in West London but can travel to your location anywhere within zones 1-5.</p>
                <div class="map">
                    <!--map-->
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en-GB&amp;geocode=&amp;q=london&amp;aq=&amp;sll=40.714353,-74.005973&amp;sspn=0.21729,0.249252&amp;gl=US&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.508515,-0.125487&amp;spn=0.089228,0.165997&amp;t=m&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en-GB&amp;geocode=&amp;q=london&amp;aq=&amp;sll=40.714353,-74.005973&amp;sspn=0.21729,0.249252&amp;gl=US&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.508515,-0.125487&amp;spn=0.089228,0.165997&amp;t=m&amp;z=13" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                </div>
                <h6>Get in touch</h6>
                <p>Don’t hesitate to get in touch. Call or email me directly at</p>
                <div class="links">
                    <a href="#"><span class="fui-phone"></span> +44 (0)207 112 8454</a><br>
                    <a href="mailto:info@organise4me.co.uk"><span class="fui-mail"></span> info@organise4me.co.uk</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-3">
    <div class="container">
        <div class="row v-center">
            <div class="col-sm-2">
                <a class="brand" href="#">Organise4me.co.uk</a>
            </div>
            <div class="col-sm-7">
                <div class="additional-links">
                    Copyright © 2014 Organise4me. All rights reserved. </a>
                </div>
            </div>
            <div class="col-sm-3">
                <!--h6>New York, NY</h6>
                <div class="address">
                    62 West 55th Street, Suite 302<br>New York, NY, 10230
                </div-->
            </div>
        </div>
    </div>
</footer>            <!-- Placed at the end of the document so the pages load faster -->
            <script src="startup/common-files/js/jquery-1.10.2.min.js"></script>
            <script src="startup/common-files/js/jquery.bxslider.min.js"></script>
            <script src="startup/common-files/js/jquery.scrollTo-1.4.3.1-min.js"></script>
            <script src="startup/flat-ui/js/bootstrap.min.js"></script>
            <script src="startup/common-files/js/masonry.pkgd.min.js"></script>
            <script src="startup/common-files/js/modernizr.custom.js"></script>
            <script src="startup/common-files/js/page-transitions.js"></script>
            <script src="startup/common-files/js/easing.min.js"></script>
            <script src="startup/common-files/js/jquery.svg.js"></script>
            <script src="startup/common-files/js/jquery.svganim.js"></script>
            <script src="startup/common-files/js/jquery.backgroundvideo.min.js"></script>
            <script src="startup/common-files/js/froogaloop.min.js"></script>
            <script src="startup/common-files/js/startup-kit.js"></script>
            <!--script src="startup/common-files/js/submitform.js"></script-->
        </div>
    </body>
</html>
