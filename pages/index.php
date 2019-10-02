<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XGOOS - Exchage Good Stuff</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location:main.php?home');
}
else
{
?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">XGOOS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="?wishlist" title="Wishlist">
                        <i class="fa fa-heart fa-fw"></i>
                    </a>
                </li>
                <li>
                    <a href="?cart" title="Cart">
                        <i class="fa fa-shopping-cart fa-fw"></i>
                    </a>
                </li>
                <li>
                    <a href="?stuff" title="My Stuff">
                        <i class="fa fa-plus fa-fw"></i>
                    </a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="?about_us"><i class="fa fa-info-circle fa-fw"></i> About Us</a>
                        </li>
                        <li>
                            <a href="?tos"><i class="fa fa-book fa-fw"></i> Terms of Service</a>
                        </li>
                        <li>
                            <a href="?pp"><i class="fa fa-shield fa-fw"></i> Privacy Policy</a>
                        </li>
                        <li>
                            <a href="?contact"><i class="fa fa-question-circle fa-fw"></i> Contact Us</a>
                        </li>
                        <li>
                            <a href="?faq"><i class="fa fa-comments-o fa-fw"></i> FAQ</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
<?php
// About Us
if (isset($_GET['about_us'])){
    include "about_us.php";
}

// Terms Of Service
elseif (isset($_GET['tos'])){
    include "tos.php";
}

// Privacy Policy
elseif (isset($_GET['pp'])){
    include "pp.php";
}

// Contact Us
elseif (isset($_GET['contact'])){
    include "contact.php";
}

// FAQ
elseif (isset($_GET['faq'])){
    include "faq.php";
}

// Wishlist
elseif (isset($_GET['wishlist'])){
    include "wishlist.php";
}

// Cart
elseif (isset($_GET['cart'])){
    include "cart.php";
}

// Stuff
elseif (isset($_GET['stuff'])){
    include "stuff.php";
}

// Not Found
else{
	include "home.php";
}
?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
<?php
}
?>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>