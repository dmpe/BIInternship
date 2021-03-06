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
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <!-- Dont cache -->
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <!-- / Dont cache -->
        <title>CS Dashboard</title>
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
        <link href="/styles/styles.css" rel="stylesheet">
        <script type="text/javascript" src="/scripts/csv.js"></script>
        <script type="text/javascript" src="/scripts/AjaxCallsCSV.js"></script>
        <script type="text/javascript" src="/scripts/ion.sound.min.js"></script>
    </head>

    <body>
        <script type="text/javascript"> 
            playSound();    
            $.ionSound({
                sounds: [
                    "metal_plate"
                ],
                path: "sounds/"
            });
        </script>

        <script type="text/javascript">
            setTimeout(function () { 
                location.reload(true); 
            }, 60000);   
            doAJAXRevenue('../csv/RealTimeRevenueFooter.csv');
        </script>  

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-lg-offset-3">
                    <h1>Value Orders Created in TEUR at t:m Group</h1>
                </div>
            </div>
             
            <div class="row nahoru">
                <div class="padding">
                    <div class="col-lg-4" >
                        <h1>Sameday Rail</h1>
                    </div>
                    <div class="col-lg-4">
                        <h1>Sameday Air</h1>
                    </div>
                    <div class="col-lg-4" style="padding-left: 90px;">
                        <h1>E-Log</h1>
                    </div>
                </div>    
                                    
                <div class="row">
                    <div class="col-lg-4 nahoru">
                        <div class="first"></div>
                    </div>
                    <div class="col-lg-4 nahoru">
                        <div class="second"></div>
                    </div>   
                    <div class="col-lg-4 nahoru">
                        <div class="fourth"></div>
                    </div>
               </div>
            </div>

            <div class="row">
                <footer id="footer" >
                    <table>
                        <tbody>
                            <tr>
                                <td class="time" style="font-size:33px;">
                                    <script type="text/javascript">date_time('date_time')</script> 
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;</td>
                                <td class="TextToDisplay"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>&nbsp;</td>
                                <td class="revenue"></td>
                                <td class="budget"></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td id="ocr2">
                                    <img class="thmbDiv" />
                                </td>                                                          
                            </tr>
                        </tbody>                  
                    </table>
                </footer>
            </div>

        </div>

    </body>
</html>

