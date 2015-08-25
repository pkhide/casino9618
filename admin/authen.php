<?php
error_reporting(0);
if(!isset($_SESSION)){
    session_start();
}
if ($_SESSION['userLogin'] != 'login') {
    echo '<script>window.location.href="login.php"</script>';
    die();
} else {
    include './dbconnect.php';
}
?>