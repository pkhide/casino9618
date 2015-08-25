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
                <span class="title">Dashboard</span>
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
        <li class="<?= $active_admin ?>">
            <a href="manage_admin.php">
                <i class="icon-user"></i> 
                <span class="title">ผู้ดูแลระบบ</span>
                <span class="<?= $select_admin ?>"></span>
            </a>
        </li>
    </ul>
</div>