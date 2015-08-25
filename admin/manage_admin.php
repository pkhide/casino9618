<?php
include './authen.php';
if (!empty($_POST['add_new_admin'])) {
    $insert = mysqli_query($connect,"INSERT INTO admin (admin_username,admin_password,admin_fullname,admin_type) VALUE ('$_POST[admin_user]','" . md5($_POST['admin_password']) . "','$_POST[admin_name]','admin')");
    if ($insert) {
        echo '<script>window.location.href="manage_admin.php"</script>';
    } else {
        echo '<script>window.location.href="manage_admin.php"</script>';
    }
    die();
}
if (!empty($_POST['edit_admin_detail_id'])) {
    $update = mysqli_query($connect,"UPDATE admin SET admin_fullname = '$_POST[edit_admin_name]' WHERE admin_id = $_POST[edit_admin_detail_id]");
    if ($update) {
        echo '<script>window.location.href="manage_admin.php"</script>';
    } else {
        echo '<script>window.location.href="manage_admin.php"</script>';
    }
    die();
}
if (!empty($_POST['edit_admin_password_id'])) {
    $update = mysqli_query($connect,"UPDATE admin SET admin_password = '" . md5($_POST[edit_admin_password]) . "' WHERE admin_id = $_POST[edit_admin_password_id]");
    if ($update) {
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
                    document.getElementById('error_admin_name').innerHTML = 'ระบุชื่อ (6 ตัวอักษรขึ้นไป)';
                    $('#admin_name').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_admin_name').innerHTML = '';
                    $('#admin_name').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (user === '' || user.length < 8 || !user.match(regex)) {
                    error_user = 'error';
                    document.getElementById('error_admin_user').innerHTML = 'ระบุยูสเซอร์เนม (0-9, a-z, A-Z จำนวน 8 ตัวอักษรขึ้นไป)';
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
                                document.getElementById('form_add_admin').submit();
                            } else {
                                document.getElementById('error_admin_user').innerHTML = 'ยูสเซอร์เนมนี้ถูกใช้ไปแล้ว';
                                $('#admin_user').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                            }
                        }
                    });
                } else {
                    return false;
                }
            }
            
            function fnc_edit_admin_detail() {
                var name = document.getElementById('edit_admin_name').value;
                var error_name = '';

                if (name === '' || name.length < 6) {
                    error_name = 'error';
                    document.getElementById('error_edit_admin_name').innerHTML = 'ระบุชื่อ (6 ตัวอักษรขึ้นไป)';
                    $('#edit_admin_name').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_edit_admin_name').innerHTML = '';
                    $('#edit_admin_name').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (error_name === '') {
                    document.getElementById('form_edit_admin_detail').submit();
                } else {
                    return false;
                }
            }
            
            function fnc_edit_admin_password() {
                var password = document.getElementById('edit_admin_password').value;
                var error_password = '';

                if (password === '' || password.length < 8) {
                    error_password = 'error';
                    document.getElementById('error_edit_admin_password').innerHTML = 'รหัสผ่าน (8 ตัวอักษรขึ้นไป)';
                    $('#edit_admin_password').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_edit_admin_password').innerHTML = '';
                    $('#edit_admin_password').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (error_password === '') {
                    document.getElementById('form_edit_admin_password').submit();
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
                                <li <?php if (empty($_GET['edit_admin_detail']) && empty($_GET['edit_admin_password'])) { echo 'class="active"'; } ?>><a href="#tab_0" data-toggle="tab">รายชื่อผู้ดูแลระบบ</a></li>
                                <li><a href="#tab_1" data-toggle="tab">เพิ่มผู้ดูแลระบบ</a></li>
                                <?php
                                    if (!empty($_GET['edit_admin_detail'])) {
                                ?>
                                    <li class="active"><a href="#tab_2" data-toggle="tab">แก้ไขข้อมูลผู้ดูแลระบบ</a></li>
                                <?php
                                    }
                                ?>
                                <?php
                                    if (!empty($_GET['edit_admin_password'])) {
                                ?>
                                    <li class="active"><a href="#tab_3" data-toggle="tab">เปลี่ยนรหัสผ่าน</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane <?php if (empty($_GET['edit_admin_detail']) && empty($_GET['edit_admin_password'])) { echo 'active'; } ?>" id="tab_0">
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
                                                            <th>ยูสเซอร์เนม</th>
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
                                                                <a href="manage_admin.php?edit_admin_detail=<?= $result_admin['admin_id'] ?>" class="btn default btn-xs purple"><i class="icon-edit"></i> แก้ไขข้อมูล</a>&nbsp;
                                                                <a href="manage_admin.php?edit_admin_password=<?= $result_admin['admin_id'] ?>" class="btn default btn-xs blue"><i class="icon-edit"></i> เปลี่ยนรหัสผ่าน</a>&nbsp;
                                                                <?php if ($result_admin['admin_id'] != 1) { ?>
                                                                <a href="manage_admin.php?delete_admin_id=<?= $result_admin['admin_id'] ?>" class="btn default btn-xs black" onclick="return confirm('ต้องการลบผู้ดูแลระบบนี้ ?');"><i class="icon-trash"></i> ลบ</a>
                                                                <?php } ?>
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
                                            <form id="form_add_admin" method="POST" action="" class="form-horizontal">
                                                <input type="hidden" name="add_new_admin" value="1">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label  class="col-md-3 control-label">ชื่อผู้ดูแลระบบ</label>
                                                        <div class="col-md-4">
                                                            <input id="admin_name" name="admin_name" type="text" class="form-control" placeholder="6 ตัวอักษรขึ้นไป">
                                                            <span id="error_admin_name" class="help-block" style="color:#ff0000;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="col-md-3 control-label">ยูสเซอร์เนม</label>
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
                                                        <button type="button" class="btn default">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane <?php if (!empty($_GET['edit_admin_detail'])) { echo 'active'; } ?>" id="tab_2">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption"><i class="icon-reorder"></i>แก้ไขข้อมูลผู้ดูแลระบบ</div>
                                        </div>
                                        <div class="portlet-body form">
                                            <?php
                                                $query_edit_admin = mysqli_query($connect,"SELECT * FROM admin WHERE admin_id = '$_GET[edit_admin_detail]'");
                                                while ($result_edit_admin = mysqli_fetch_assoc($query_edit_admin)) {
                                            ?>
                                                <form id="form_edit_admin_detail" method="POST" action="" class="form-horizontal">
                                                    <input type="hidden" name="edit_admin_detail_id" value="<?= $result_edit_admin['admin_id'] ?>">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label  class="col-md-3 control-label">ยูสเซอร์เนม</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" value="<?= $result_edit_admin['admin_username'] ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="col-md-3 control-label">ชื่อผู้ดูแลระบบ</label>
                                                            <div class="col-md-4">
                                                                <input id="edit_admin_name" name="edit_admin_name" type="text" class="form-control" value="<?= $result_edit_admin['admin_fullname'] ?>" placeholder="6 ตัวอักษรขึ้นไป">
                                                                <span id="error_edit_admin_name" class="help-block" style="color:#ff0000;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions fluid">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn blue" onclick="fnc_edit_admin_detail()">Submit</button>
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
                                <div class="tab-pane <?php if (!empty($_GET['edit_admin_password'])) { echo 'active'; } ?>" id="tab_3">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption"><i class="icon-reorder"></i>แก้ไขข้อมูลผู้ดูแลระบบ</div>
                                        </div>
                                        <div class="portlet-body form">
                                            <?php
                                                $query_edit_admin = mysqli_query($connect,"SELECT * FROM admin WHERE admin_id = '$_GET[edit_admin_password]'");
                                                while ($result_edit_admin = mysqli_fetch_assoc($query_edit_admin)) {
                                            ?>
                                                <form id="form_edit_admin_password" method="POST" action="" class="form-horizontal">
                                                    <input type="hidden" name="edit_admin_password_id" value="<?= $result_edit_admin['admin_id'] ?>">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label  class="col-md-3 control-label">ยูสเซอร์เนม</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" value="<?= $result_edit_admin['admin_username'] ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="col-md-3 control-label">รหัสผ่านใหม่</label>
                                                            <div class="col-md-4">
                                                                <input id="edit_admin_password" name="edit_admin_password" type="text" class="form-control" placeholder="รหัสผ่านใหม่ 6 ตัวอักษรขึ้นไป">
                                                                <span id="error_edit_admin_password" class="help-block" style="color:#ff0000;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions fluid">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn blue" onclick="fnc_edit_admin_password()">Submit</button>
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
                </div>
            </div>
        </div>
        <?php
        include './footer.php';
        ?>
    </body>
</html>