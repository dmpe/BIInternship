<?php
if (!session_id()) session_start();
    if (!$_SESSION['logon']){ 
        header("Location:table.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>CS Dashboard</title>
        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <script src="../bower_components/underscore/underscore.js"></script>
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <!-- endbower -->
        <!-- endbuild -->
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/highcharts-more.js"></script>
        <script type="text/javascript" src="/scripts/papaparse.js"></script>
        <script type="text/javascript" src="/scripts/graphics10.js"></script>
        <script type="text/javascript" src="/scripts/graphics9.js"></script>
    </head>

    <body>        

        <div id="container" style="max-width: 1000px; height: 350px; margin: 0 auto"></div>
        <div id="container3" style="max-width: 1000px; height: 350px; margin: 0 auto"></div>

    </body>
</html>






