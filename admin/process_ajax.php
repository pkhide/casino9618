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

if (!empty($_POST['send_sms'])) {
    $data = array(
        'username' => $_POST['user_name'],
        'password' => $_POST['user_password'],
        'msisdn' => $_POST['user_name'],
        'message' => $_POST['message'],
        'sender' => $_POST['sender_name'],
        'ScheduledDelivery' => '',
        'force' => 'standard'
    );
    $data_string = http_build_query($data);
    $agent = "ThaiBulkSMS API PHP Client";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://www.thaibulksms.com/sms_api.php');
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    $xml_result = curl_exec($ch);
    $code = curl_getinfo($ch);
    curl_close($ch);
    if ($code['http_code'] == 200) {
        echo $xml_result;
    } else {
        echo $code['http_code'];
    }
}

if (!empty($_POST['check_sms_credit'])) {
    $data_string = "username=$_POST[user_name]&password=$_POST[user_password]&tag=credit_remain";
    $agent = "ThaiBulkSMS API PHP Client";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://www.thaibulksms.com/sms_api.php');
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    $result = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    if ($info['http_code'] == 200) {
        echo $result;
    } else {
        echo $info['http_code'];
    }
}
?>