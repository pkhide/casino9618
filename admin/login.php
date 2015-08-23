<?php
if(!isset($_SESSION)){
    session_start();
}
error_reporting(0);
include './dbconnect.php';
if ($_SESSION['userLogin'] == 'login') {
    echo "<script>window.location.href='index.php'</script>";
    die();
}
else if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $check_username = mysqli_query($connect,"SELECT * FROM admin WHERE admin_username = '$_POST[username]'");
    if (mysqli_num_rows($check_username) == 1) {
        $check_userpass = mysqli_query($connect,"SELECT * FROM admin WHERE admin_password = '$_POST[password]'");
        if (mysqli_num_rows($check_userpass) == 1) {
            $result = mysqli_fetch_assoc($check_userpass);
            $_SESSION['admin_id'] = $result['admin_id'];
            $_SESSION['admin_fullname'] = $result['admin_fullname'];
            $_SESSION['admin_type'] = $result['admin_type'];
            $_SESSION['userLogin'] = 'login';
            $_SESSION['loginMSG'] = '';
            echo '<script>window.location.href="index.php"</script>';
            die();
        } else {
            $_SESSION['loginMSG'] = "password don't match.";
            echo '<script>window.location.href="login.php"</script>';
            die();
        }
    } else {
        $_SESSION['loginMSG'] = "username don't match.";
        echo '<script>window.location.href="login.php"</script>';
        die();
    }
}else{
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Login : Casino9618</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="MobileOptimized" content="320">
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="../favicon.ico" />
    </head>
    <body class="login">
        <div class="logo">
            <!--<img src="../assets/img/logo-big.png" alt="" />--> 
        </div>
        <div class="content">
            <form class="login-form" action="login.php" method="post">
                <h3 class="form-title" style="margin:0 -20px 15px 0;">LOG IN</h3>
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    <span>Enter any username and password.</span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                    </div>
                </div>
                <div class="form-group" style="color:red;">
                    <?php if(!empty($_SESSION['loginMSG'])){ echo $_SESSION['loginMSG']; $_SESSION['loginMSG'] = '';} ?>
                </div>
                <div class="form-actions" style="padding-bottom:0px; border-bottom:0px !important;">
                    <label class="checkbox"></label>
                    <button type="submit" class="btn green pull-right">
                        Login <i class="m-icon-swapright m-icon-white"></i>
                    </button>            
                </div>
            </form>
        </div>
        <div class="copyright">
            <!--Casino9618-->
        </div>
    </body>
</html>