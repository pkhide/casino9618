<?php
include './authen.php';
if (!empty($_POST['edit_sms'])) {
    $update = mysqli_query($connect,"UPDATE sms SET sms_register_number = '$_POST[sms_register_number]', sms_payment_number = '$_POST[sms_payment_number]' WHERE sms_id = 1");
    if ($update) {
        echo '<script>window.location.href="manage_sms.php"</script>';
    } else {
        echo '<script>window.location.href="manage_sms.php"</script>';
    }
    die();
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <?php
        include './include_file.php';
        ?>
        <script type="text/javascript">
            function fnc_edit_sms() {
                var sms_register_number = document.getElementById('sms_register_number').value;
                var sms_payment_number = document.getElementById('sms_payment_number').value;
                var error_sms_register_number = '';
                var error_sms_payment_number = '';
                var regex = /^\d+$/;
                
                if (sms_register_number === '' || sms_register_number.length !== 10 || !sms_register_number.match(regex)) {
                    error_sms_register_number = 'error';
                    document.getElementById('error_sms_register_number').innerHTML = 'เบอร์โทรแจ้งเตือนการสมัครสมาชิกไม่ถูกต้อง';
                    $('#sms_register_number').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_sms_register_number').innerHTML = '';
                    $('#sms_register_number').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (sms_payment_number === '' || sms_payment_number.length !== 10 || !sms_payment_number.match(regex)) {
                    error_sms_payment_number = 'error';
                    document.getElementById('error_sms_payment_number').innerHTML = 'เบอร์โทรแจ้งเตือนการชำระเงินไม่ถูกต้อง';
                    $('#sms_payment_number').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_sms_payment_number').innerHTML = '';
                    $('#sms_payment_number').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (error_sms_register_number === '' && error_sms_payment_number === '') {
                    document.getElementById('form_edit_sms').submit();
                } else {
                    return false;
                }
            }
        </script>
    </head>
    <body class="page-header-fixed">
        <?php
        include './header.php';
        ?>
        <div class="clearfix"></div>
        <?= $folder ?>
        <div class="page-container">
            <?php
            include './sidebar.php';
            ?>
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-title">
                            ข้อความ
                        </h3>
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.php">Dashboard</a>
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <a href="manage_sms.php">ข้อความ (SMS)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-reorder"></i>ข้อความ (SMS)</div>
                            </div>
                            <div class="portlet-body form">
                                <?php
                                    $query_sms = mysqli_query($connect,"SELECT * FROM sms WHERE sms_id = 1");
                                    while ($result_sms = mysqli_fetch_assoc($query_sms)) {
                                ?>
                                    <form id="form_edit_sms" method="POST" action="" class="form-horizontal">
                                        <input type="hidden" name="edit_sms" value="1">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label  class="col-md-3 control-label">เบอร์โทรแจ้งเตือนการสมัครสมาชิก</label>
                                                <div class="col-md-4">
                                                    <input id="sms_register_number" name="sms_register_number" type="text" class="form-control" value="<?= $result_sms['sms_register_number'] ?>">
                                                    <span id="error_sms_register_number" class="help-block" style="color:#ff0000;"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="col-md-3 control-label">เบอร์โทรแจ้งเตือนการแจ้งโอนเงิน</label>
                                                <div class="col-md-4">
                                                    <input id="sms_payment_number" name="sms_payment_number" type="text" class="form-control" value="<?= $result_sms['sms_payment_number'] ?>">
                                                    <span id="error_sms_payment_number" class="help-block" style="color:#ff0000;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions fluid">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="button" class="btn blue" onclick="fnc_edit_sms()">Submit</button>
                                                <button type="reset" class="btn default">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.getElementById("promotion_image").onchange = function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById("show_promotion_image").src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            };
            document.getElementById("edit_promotion_image").onchange = function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById("show_edit_promotion_image").src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            };
        </script>
        <?php
        include './footer.php';
        ?>
    </body>
</html>