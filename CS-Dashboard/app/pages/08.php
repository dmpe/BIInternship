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
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
        <!-- endbower -->
        <!-- endbuild -->        
        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <script src="../bower_components/underscore/underscore.js"></script>
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <!-- endbower -->
        <!-- endbuild -->
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/highcharts-more.js"></script>
        <script type="text/javascript" src="/scripts/papaparse.js"></script>
        <script type="text/javascript" src="/scripts/graphics8.js"></script>
    </head>

    <body>        

        <div class="container-fluid">
        
            <div class="row">
                <div class="col-lg-4">
                    <div id="container" style="min-width: 1000px; height: 500px;margin: 0 auto"></div>
                </div>
    
            </div>
            
        </div>
    </body>
</html>


