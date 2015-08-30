<div class="page-sidebar navbar-collapse collapse">
    <?php
    $filename = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    if (strpos($filename, "index", 0) !== FALSE) {
        $active_dashboard = 'active';
        $select_dashboard = 'selected';
    }
    else if (strpos($filename, "manage_user", 0) !== FALSE) {
        $active_user = 'active';
        $select_user = 'selected';
    }
    else if (strpos($filename, "manage_admin", 0) !== FALSE) {
        $active_admin = 'active';
        $select_admin = 'selected';
    }
    else if (strpos($filename, "manage_promotion", 0) !== FALSE) {
        $active_promotion = 'active';
        $select_promotion = 'selected';
    }
    else if (strpos($filename, "manage_sms", 0) !== FALSE) {
        $active_sms = 'active';
        $select_sms = 'selected';
    }
    else if (strpos($filename, "manage_menu", 0) !== FALSE) {
        $active_menu = 'active';
        $select_menu = 'selected';
    }
    ?>   
    <ul class="page-sidebar-menu">
        <li>
            <div class="sidebar-toggler hidden-phone"></div>
        </li>
        <li>
            <br />
        </li>
        <li class="<?= $active_dashboard ?>">
            <a href="index.php">
                <i class="icon-home"></i> 
                <span class="title">หน้าหลัก</span>
                <span class="<?= $select_dashboard ?>"></span>
            </a>
        </li>
        <li class="<?= $active_user ?>">
            <a href="manage_user.php">
                <i class="icon-user"></i> 
                <span class="title">ชมาชิก</span>
                <span class="<?= $select_user ?>"></span>
            </a>
        </li>
        <?php
        if (isset($_SESSION['admin_type']) && $_SESSION['admin_type'] == 'owner') {
        ?>
            <li class="<?= $active_admin ?>">
                <a href="manage_admin.php">
                    <i class="icon-user"></i> 
                    <span class="title">ผู้ดูแลระบบ</span>
                    <span class="<?= $select_admin ?>"></span>
                </a>
            </li>
        <?php
        }
        ?>
        <li class="<?= $active_promotion ?>">
            <a href="manage_promotion.php">
                <i class="icon-gift"></i> 
                <span class="title">โปรโมชั่น</span>
                <span class="<?= $select_promotion ?>"></span>
            </a>
        </li>
        <li class="<?= $active_sms ?>">
            <a href="manage_sms.php">
                <i class="icon-envelope"></i> 
                <span class="title">แจ้งเตือน SMS</span>
                <span class="<?= $select_sms ?>"></span>
            </a>
        </li>
        <li class="<?= $active_menu ?>">
            <a href="manage_menu.php">
                <i class="icon-sitemap"></i> 
                <span class="title">เมนู</span>
                <span class="<?= $select_menu ?>"></span>
            </a>
        </li>
    </ul>
</div>