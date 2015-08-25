<?php
include './authen.php';
if (!empty($_POST['admin_name']) && !empty($_POST['admin_user']) && !empty($_POST['admin_password'])) {
    $insert = mysqli_query($connect,"INSERT INTO admin (admin_username,admin_password,admin_fullname,admin_type) VALUE ('$_POST[admin_user]','$_POST[admin_password]','$_POST[admin_name]','Admin')");
    if ($insert) {
        echo '<script>window.location.href="manage_admin.php"</script>';
    } else {
        echo '<script>window.location.href="manage_admin.php"</script>';
    }
    die();
}
if (!empty($_GET['delete_admin_id'])) {
    $delete = mysqli_query($connect,"DELETE FROM admin WHERE admin_id = '$_GET[delete_admin_id]'");
    if ($delete) {
        echo '<script>window.location.href="manage_admin.php"</script>';
    } else {
        echo '<script>window.location.href="manage_admin.php"</script>';
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
            function fnc_add_admin() {
                
                var name = document.getElementById('admin_name').value;
                var user = document.getElementById('admin_user').value;
                var password = document.getElementById('admin_password').value;
                var error_name = '';
                var error_user = '';
                var error_password = '';
                var regex = /^\w+$/;

                if (name === '' || name.length < 6) {
                    error_name = 'error';
                    document.getElementById('error_admin_name').innerHTML = 'ระบุชื่อดูแลระบบ (6 ตัวอักษรขึ้นไป)';
                    $('#admin_name').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_admin_name').innerHTML = '';
                    $('#admin_name').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (user === '' || user.length < 8 || !user.match(regex)) {
                    error_user = 'error';
                    document.getElementById('error_admin_user').innerHTML = 'ระบุยูสเซอร์ที่ใช้เข้าสู่ระบบ (0-9, a-z, A-Z จำนวน 8 ตัวอักษรขึ้นไป)';
                    $('#admin_user').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_admin_user').innerHTML = '';
                    $('#admin_user').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (password === '' || password.length < 8) {
                    error_password = 'error';
                    document.getElementById('error_admin_password').innerHTML = 'รหัสผ่าน (8 ตัวอักษรขึ้นไป)';
                    $('#admin_password').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_admin_password').innerHTML = '';
                    $('#admin_password').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (error_name === '' && error_user === '' && error_password === '') {
                    $.ajax({
                        url: 'process_ajax.php?check_admin_username=' + user,
                        success: function(data) {
                            if (data === '1') {
                                document.getElementById('add_admin').submit();
                            } else {
                                document.getElementById('error_admin_user').innerHTML = 'ยูสเซอร์ที่ใช้เข้าสู่ระบบนี้ถูกใช้ไปแล้ว';
                                $('#admin_user').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                            }
                        }
                    });
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
                            ผู้ดูแลระบบ
                        </h3>
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.php">Dashboard</a>
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <a href="manage_admin.php">ผู้ดูแลระบบ</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable tabbable-custom boxless">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_0" data-toggle="tab">รายชื่อผู้ดูแลระบบ</a></li>
                                <li><a href="#tab_1" data-toggle="tab">เพิ่มผู้ดูแลระบบ</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_0">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption"><i class="icon-cogs"></i>รายชื่อผู้ดูแลระบบ</div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>ชื่อผู้ดูแลระบบ</th>
                                                            <th>ยูสเซอร์ที่ใช้เข้าสู่ระบบ</th>
                                                            <th>ประเภท</th>
                                                            <th>การจัดการ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $query_admin = mysqli_query($connect,"SELECT * FROM admin");
                                                            $i = 1;
                                                            while ($result_admin = mysqli_fetch_assoc($query_admin)) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?= $result_admin['admin_fullname'] ?></td>
                                                            <td><?= $result_admin['admin_username'] ?></td>
                                                            <td><?= $result_admin['admin_type'] ?></td>
                                                            <td>
                                                                <?php
                                                                    if ($_SESSION['admin_type'] == 'Owner') {
                                                                ?>
                                                                <a href="#" class="btn default btn-xs purple"><i class="icon-edit"></i> แก้ไข</a>
                                                                &nbsp;
                                                                <a href="manage_admin.php?delete_admin_id=<?= $result_admin['admin_id'] ?>" class="btn default btn-xs black" onclick="return confirm('ต้องการลบชื่อผู้ดูแลระบบนี้ ?');"><i class="icon-trash"></i> ลบ</a>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                                $i++;
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_1">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption"><i class="icon-reorder"></i>เพิ่มผู้ดูแลระบบ</div>
                                        </div>
                                        <div class="portlet-body form">
                                            <form id="add_admin" method="POST" action="" class="form-horizontal">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label  class="col-md-3 control-label">ชื่อดูแลระบบ</label>
                                                        <div class="col-md-4">
                                                            <input id="admin_name" name="admin_name" type="text" class="form-control" placeholder="6 ตัวอักษรขึ้นไป">
                                                            <span id="error_admin_name" class="help-block" style="color:#ff0000;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="col-md-3 control-label">ยูสเซอร์ที่ใช้เข้าสู่ระบบ</label>
                                                        <div class="col-md-4">
                                                            <input id="admin_user" name="admin_user" type="text" class="form-control" placeholder="0-9, a-z, A-Z จำนวน 8 ตัวอักษรขึ้นไป">
                                                            <span id="error_admin_user" class="help-block" style="color:#ff0000;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="col-md-3 control-label">รหัสผ่าน</label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <input id="admin_password" name="admin_password" class="form-control" placeholder="8 ตัวอักษรขึ้นไป">
                                                                <span id="error_admin_password" class="help-block" style="color:#ff0000;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions fluid">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="button" class="btn blue" onclick="fnc_add_admin()">Submit</button>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <?php
        include './footer.php';
        ?>
    </body>
</html>