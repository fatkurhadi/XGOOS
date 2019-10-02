<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XGOOS - Exchange Good Stuff</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body OnLoad="document.signup.email.focus();" background="../images/bglogin.jpg" style="background-size:100% 100%;">
<form action="register.php" method="post" name="signup" id="signup" onsubmit="return validasi(this)">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel" style="background-color: rgba(40,21,66,0.7);">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center"><img src="../images/xgoos.png" width="50%"></i></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" placeholder="Email" name="email" type="email" autofocus required oninvalid="this.setCustomValidity('Please, enter a valid email')" oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><i class="fa">@</i></span>
                                    <input class="form-control" placeholder="Username" name="username" type="username" required oninvalid="this.setCustomValidity('Please, enter username')" oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input class="form-control" placeholder="Password" name="password" type="password" required oninvalid="this.setCustomValidity('Please, enter your password')" oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group">
									<label class="control-label"><img src="../captcha/captcha.php"></label>
                                    <input class="form-control" placeholder="Captcha" name="captcha" type="text" maxlength="6" required oninvalid="this.setCustomValidity('Fill the captcha correctly')" oninput="setCustomValidity('')">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="button btn-lg btn-success btn-block" name="login" value="SignUp" style="background-color: rgba(24,4,57,1.0); border-color: rgba(24,4,57,0.5);">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>