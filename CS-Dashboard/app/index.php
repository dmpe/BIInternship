<?php
    session_start();

    $userinfo = array(
        'tm'=>'Osvlad!2',
        'admin'=>'sca()',
        'time' => 'matters'
    );

    if(isset($_GET['logout'])) {
        $_SESSION['username'] = '';
        header('Location:  ' . $_SERVER['PHP_SELF']);
    }

    if(isset($_POST['username'])) {
        if($userinfo[$_POST['username']] == $_POST['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['logon'] = true;
        }else {

        }
    }
?>
<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>yo-webapp</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="shortcut icon" href="/favicon.ico">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:css(.tmp) styles/main.css -->
        <link rel="stylesheet" href="styles/styles_login.css">
        <link rel="stylesheet" href="styles/main.css">
        <!-- endbuild -->
    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php if($_SESSION['username']): ?>
            <h3>You are logged in as <?=$_SESSION['username']?></h3>
            <h3>Follow an overview of already existing pages <a href="/table.php">here</a></h3>
            <h3><a href="?logout=1">Logout</a></h3>
        <?php endif; ?>

        <div class="container">

            <form class="form-signin" method="post" action="">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>

            <div class="footer">
                <p><span class="glyphicon glyphicon-heart"></span> from the Yeoman team & Dmitrij Petrov</p>
            </div>

        </div>

        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <script src="../bower_components/underscore/underscore.js"></script>
        <script src="../bower_components/jquery/dist/jquery.js"></script>
        <!-- endbower -->
        <!-- endbuild -->

        <!-- build:js scripts/plugins.js -->
        <script src="../bower_components/bootstrap/js/affix.js"></script>
        <script src="../bower_components/bootstrap/js/alert.js"></script>
        <script src="../bower_components/bootstrap/js/dropdown.js"></script>
        <script src="../bower_components/bootstrap/js/tooltip.js"></script>
        <script src="../bower_components/bootstrap/js/modal.js"></script>
        <script src="../bower_components/bootstrap/js/transition.js"></script>
        <script src="../bower_components/bootstrap/js/button.js"></script>
        <script src="../bower_components/bootstrap/js/popover.js"></script>
        <script src="../bower_components/bootstrap/js/carousel.js"></script>
        <script src="../bower_components/bootstrap/js/scrollspy.js"></script>
        <script src="../bower_components/bootstrap/js/collapse.js"></script>
        <script src="../bower_components/bootstrap/js/tab.js"></script>
        <!-- endbuild -->
</body>
</html>
