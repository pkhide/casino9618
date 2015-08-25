<?php
include './authen.php';

if (!empty($_GET['check_admin_username'])) {
    $query_admin = mysqli_query($connect,"SELECT * FROM admin WHERE admin_username = '$_GET[check_admin_username]'");
    if (mysqli_num_rows($query_admin) > 0) {
        echo '0';
    } else {
        echo '1';
    }
}

?>