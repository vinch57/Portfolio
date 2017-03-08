<?php
include("include/fct.inc.php");
?>



<html class="no-js" lang="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- BootStrap Core -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom style -->
        <link href="css/main.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php echo getFlux("https://korben.info/feed"); ?>
        <?php echo getFlux("https://raspbian-france.fr/feed/"); ?>
        <?php echo getFlux("http://www.01net.com/rss/actualites/applis-logiciels/"); ?>
        
    </body>
</html>
