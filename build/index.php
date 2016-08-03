<?php require_once './data.php';  ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cruise</title>
        <meta name="description" content="Cheap Cruises, Last Minute Deals & Free Upgrades, Over 35,000 Cruise Reviews & 10,000 Photos. Great deals on Cruises from Southampton & all UK ports.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="author" content="Cedric Tientcheu">
        <!-- All browsers status theme -->
        <meta name="theme-color" content="#166678">
        <!-- Windows statuts theme -->
        <meta name="msapplication-navbutton-color" content="#166678">
        <!-- Safari/iOs status theme -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#166678">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <div class="cont">
           
            <div class="inner-cont">
               <h1>Book your dream destination</h1>
                <form action="index.php" method="post" name="info_data">
                        <?php dest_menu(); ?>
                        
                        <?php cruise_menu(); ?>
                        
                        <?php ships_menu(); ?>
                    
                        <?php sailing_menu(); ?>
                    
                    <input type="button" value="Search" id="search"><br>
                    <span class="error">Please select the appropriate items.</span>
                </form>  
                
                <p></p>
            </div><!-- END Inner Container -->
                        
        </div><!--// END of Container -->
        

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
