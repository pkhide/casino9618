<?php
include './authen.php';
if (!empty($_POST['add_promotion'])) {
    if ($_FILES['promotion_image']['name']) {
        if (!$_FILES['promotion_image']['error']) {
            $promotion_banner_src = strtolower($_FILES['promotion_image']['name']);
            $promotion_banner_src = date('d_m_Y').'_'.str_replace(array("-"," ",),'_',$promotion_banner_src);
            move_uploaded_file($_FILES['promotion_image']['tmp_name'], '../images/slide/'.$promotion_banner_src);
        }
    }
    $insert = mysqli_query($connect,"INSERT INTO promotion (promotion_name,promotion_desc,promotion_banner_src,promotion_url) VALUE ('$_POST[promotion_name]','$_POST[promotion_desc]','$promotion_banner_src','$_POST[promotion_url]')");
    if ($insert) {
        echo '<script>window.location.href="manage_promotion.php"</script>';
    } else {
        echo '<script>window.location.href="manage_promotion.php"</script>';
    }
    die();
}

if (!empty($_POST['edit_promotion_id'])) {
    if ($_FILES['edit_promotion_image']['name']) {
        if (!$_FILES['edit_promotion_image']['error']) {
            // remove old image
            $query_promotion = mysqli_query($connect,"SELECT * FROM promotion WHERE promotion_id = '$_POST[edit_promotion_id]' LIMIT 1");
            while ($result_promotion = mysqli_fetch_assoc($query_promotion)) {
                @unlink('../images/slide/'.$result_promotion['promotion_banner_src']);
            }
            // upload new image
            $edit_promotion_banner_src = strtolower($_FILES['edit_promotion_image']['name']);
            $edit_promotion_banner_src = date('d_m_Y').'_'.str_replace(array("-"," ",),'_',$edit_promotion_banner_src);
            move_uploaded_file($_FILES['edit_promotion_image']['tmp_name'], '../images/slide/'.$edit_promotion_banner_src);
            // update
            $update = mysqli_query($connect,"UPDATE promotion SET promotion_name = '$_POST[edit_promotion_name]', promotion_url = '$_POST[edit_promotion_url]', promotion_banner_src = '$edit_promotion_banner_src' WHERE promotion_id = $_POST[edit_promotion_id]");
        }
    } else {
        $update = mysqli_query($connect,"UPDATE promotion SET promotion_name = '$_POST[edit_promotion_name]', promotion_url = '$_POST[edit_promotion_url]' WHERE promotion_id = $_POST[edit_promotion_id]");
    }
    
    if ($update) {
        echo '<script>window.location.href="manage_promotion.php"</script>';
    } else {
        echo '<script>window.location.href="manage_promotion.php"</script>';
    }
    die();
}

if (!empty($_GET['delete_promotion_id'])) {
    $query_promotion = mysqli_query($connect,"SELECT * FROM promotion WHERE promotion_id = '$_GET[delete_promotion_id]' LIMIT 1");
    while ($result_promotion = mysqli_fetch_assoc($query_promotion)) {
        @unlink('../images/slide/'.$result_promotion['promotion_banner_src']);
    }
    $delete = mysqli_query($connect,"DELETE FROM promotion WHERE promotion_id = '$_GET[delete_promotion_id]'");
    if ($delete) {
        echo '<script>window.location.href="manage_promotion.php"</script>';
    } else {
        echo '<script>window.location.href="manage_promotion.php"</script>';
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
            function fnc_add_promotion() {
                var promotion_name = document.getElementById('promotion_name').value;
                var promotion_url = document.getElementById('promotion_url').value;
                var error_promotion_name = '';
                var error_promotion_url = '';
                var error_promotion_image = '';

                if (promotion_name === '') {
                    error_promotion_name = 'error';
                    document.getElementById('error_promotion_name').innerHTML = 'ระบุชื่อโปรโมชั่น';
                    $('#promotion_name').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_promotion_name').innerHTML = '';
                    $('#promotion_name').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (promotion_url === '') {
                    error_promotion_url = 'error';
                    document.getElementById('error_promotion_url').innerHTML = 'ระบุลิ้งค์โปรโมชั่น';
                    $('#promotion_url').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_promotion_url').innerHTML = '';
                    $('#promotion_url').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (document.getElementById('promotion_image').files.length === 0) {
                    error_promotion_image = 'error';
                    document.getElementById('error_promotion_image').innerHTML = 'อับโหลดรูปภาพ';
                } else {
                    document.getElementById('error_promotion_image').innerHTML = '';
                }
                
                if (error_promotion_name === '' && error_promotion_url === '' && error_promotion_image === '') {
                    document.getElementById('form_add_promotion').submit();
                } else {
                    return false;
                }
            }
            
            function fnc_edit_promotion() {
                var edit_promotion_name = document.getElementById('edit_promotion_name').value;
                var edit_promotion_url = document.getElementById('edit_promotion_url').value;
                var error_edit_promotion_name = '';
                var error_edit_promotion_url = '';
                
                if (edit_promotion_name === '') {
                    error_edit_promotion_name = 'error';
                    document.getElementById('error_edit_promotion_name').innerHTML = 'ระบุชื่อโปรโมชั่น';
                    $('#edit_promotion_name').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_edit_promotion_name').innerHTML = '';
                    $('#edit_promotion_name').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (edit_promotion_url === '') {
                    error_edit_promotion_url = 'error';
                    document.getElementById('error_edit_promotion_url').innerHTML = 'ระบุลิ้งค์โปรโมชั่น';
                    $('#edit_promotion_url').css({'border-color': '#FF0000', 'border-width':'1px', 'border-style':'solid'});
                } else {
                    document.getElementById('error_edit_promotion_url').innerHTML = '';
                    $('#edit_promotion_url').css({'border-color': '#e5e5e5', 'border-width':'1px', 'border-style':'solid'});
                }
                
                if (error_edit_promotion_name === '' && error_edit_promotion_url === '') {
                    document.getElementById('form_edit_promotion').submit();
                } else {
                    return false;
                }
            }
        </script>
        <style type="text/css">
            td {
                vertical-align: middle !important;
            }
        </style>
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
                            โปรโมชั่น
                        </h3>
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.php">Dashboard</a>
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                <a href="manage_promotion.php">โปรโมชั่น</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable tabbable-custom boxless">
                            <ul class="nav nav-tabs">
                                <li <?php if (empty($_GET['edit_promotion'])) { echo 'class="active"'; } ?>><a href="#tab_0" data-toggle="tab">โปรโมชั่น</a></li>
                                <li><a href="#tab_1" data-toggle="tab">เพิ่มโปรโมชั่น</a></li>
                                <?php
                                    if (!empty($_GET['edit_promotion'])) {
                                ?>
                                    <li class="active"><a href="#tab_2" data-toggle="tab">แก้ไขโปรโมชั่น</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane <?php if (empty($_GET['edit_promotion'])) { echo 'active'; } ?>" id="tab_0">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption"><i class="icon-cogs"></i>โปรโมชั่น</div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>ชื่อโปรโมชั่น</th>
                                                            <th>รูปภาพ</th>
                                                            <th>ลิ้งค์โปรโมชั่น</th>
                                                            <th>การจัดการ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $query_promotion = mysqli_query($connect,"SELECT * FROM promotion");
                                                            $i = 1;
                                                            while ($result_promotion = mysqli_fetch_assoc($query_promotion)) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?= $result_promotion['promotion_name'] ?></td>
                                                            <td align="center" style="width:320px;"><img src="../images/slide/<?= $result_promotion['promotion_banner_src'] ?>" style="width:300px; height:120px; border:1px solid #e5e5e5;"></td>
                                                            <td><?= $result_promotion['promotion_url'] ?></td>
                                                            <td>
                                                                <a href="manage_promotion.php?edit_promotion=<?= $result_promotion['promotion_id'] ?>" class="btn default btn-xs purple"><i class="icon-edit"></i> แก้ไขข้อมูล</a>&nbsp;
                                                                <a href="manage_promotion.php?delete_promotion_id=<?= $result_promotion['promotion_id'] ?>" class="btn default btn-xs black" onclick="return confirm('ต้องการลบโปรโมชั่นนี้ ?');"><i class="icon-trash"></i> ลบ</a>
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
                                            <div class="caption"><i class="icon-reorder"></i>เพิ่มโปรโมชั่น</div>
                                        </div>
                                        <div class="portlet-body form">
                                            <form id="form_add_promotion" method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                                                <input type="hidden" name="add_promotion" value="1">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">ชื่อโปรโมชั่น</label>
                                                        <div class="col-md-4">
                                                            <input id="promotion_name" name="promotion_name" class="form-control" type="text">
                                                            <span id="error_promotion_name" class="help-block" style="color:#ff0000;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">ลิ้งค์โปรโมชั่น</label>
                                                        <div class="col-md-4">
                                                            <input id="promotion_url" name="promotion_url" class="form-control" type="text">
                                                            <span id="error_promotion_url" class="help-block" style="color:#ff0000;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">รูปภาพโปรโมชั่น</label>
                                                        <div class="col-md-4">
                                                            <div class="fileupload-new thumbnail" style="margin-bottom:10px;">
                                                                <img id="show_promotion_image" src="http://www.placehold.it/300x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width:100%; height:150px;" />
                                                            </div>
                                                            <input type="file" id="promotion_image" name="promotion_image"/>
                                                            <span id="error_promotion_image" class="help-block" style="color:#ff0000; margin:5px 0px;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions fluid">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="button" class="btn blue" onclick="fnc_add_promotion()">ยืนยัน</button>
                                                        <a class="btn default" href="manage_promotion.php">
                                                            ยกเลิก
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane <?php if (!empty($_GET['edit_promotion'])) { echo 'active'; } ?>" id="tab_2">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption"><i class="icon-reorder"></i>แก้ไขโปรโมชั่น</div>
                                        </div>
                                        <div class="portlet-body form">
                                            <?php
                                                $query_edit_promotion = mysqli_query($connect,"SELECT * FROM promotion WHERE promotion_id = '$_GET[edit_promotion]'");
                                                while ($result_edit_promotion = mysqli_fetch_assoc($query_edit_promotion)) {
                                            ?>
                                                <form id="form_edit_promotion" method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                                                    <input type="hidden" name="edit_promotion_id" value="<?= $result_edit_promotion['promotion_id'] ?>">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label  class="col-md-3 control-label">ชื่อโปรโมชั่น</label>
                                                            <div class="col-md-4">
                                                                <input id="edit_promotion_name" name="edit_promotion_name" type="text" class="form-control" value="<?= $result_edit_promotion['promotion_name'] ?>">
                                                                <span id="error_edit_promotion_name" class="help-block" style="color:#ff0000;"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="col-md-3 control-label">ลิ้งค์โปรโมชั่น</label>
                                                            <div class="col-md-4">
                                                                <input id="edit_promotion_url" name="edit_promotion_url" type="text" class="form-control" value="<?= $result_edit_promotion['promotion_url'] ?>">
                                                                <span id="error_edit_promotion_url" class="help-block" style="color:#ff0000;"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">รูปภาพ</label>
                                                            <div class="col-md-4">
                                                                <div class="fileupload-new thumbnail" style="margin-bottom:10px;">
                                                                    <img id="show_edit_promotion_image" src="../images/slide/<?= $result_edit_promotion['promotion_banner_src'] ?>" alt="" style="width:100%; height:150px;" />
                                                                </div>
                                                                <input type="file" id="edit_promotion_image" name="edit_promotion_image"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions fluid">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn blue" onclick="fnc_edit_promotion()">ยืนยัน</button>
                                                            <a class="btn default" href="manage_promotion.php">
                                                                ยกเลิก
                                                            </a>
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