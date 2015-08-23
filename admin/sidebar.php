<div class="page-sidebar navbar-collapse collapse">
    <?php
    $filename = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    if (strpos($filename, "index", 0) !== FALSE) {
        $active_index = 'active';
        $select_index = 'selected';
    } else if (strpos($filename, "products", 0) !== FALSE) {
        $active_product = 'active';
        $select_product = 'selected';
    } else if (strpos($filename, "template", 0) !== FALSE) {
        $active_template = 'active';
        $select_template = 'selected';
    } else if (strpos($filename, "s1", 0) !== FALSE) {
        $active_pdf_html_script = 'active';
        $select_pdf_html_script = 'selected';
    } else if (strpos($filename, "s2", 0) !== FALSE) {
        $active_archive_script = 'active';
        $select_archive_script = 'selected';
    } else if (strpos($filename, "s3", 0) !== FALSE) {
        $active_keyword_script = 'active';
        $select_keyword_script = 'selected';
    } else if (strpos($filename, "s4", 0) !== FALSE) {
        $active_video_script = 'active';
        $select_video_script = 'selected';
    }
    ?>
    <!-- BEGIN SIDEBAR MENU -->        
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <br />
        </li>

        <li class="<?= $active_index ?>">
            <a href="index.php">
                <i class="icon-home"></i> 
                <span class="title">Dashboard</span>
                <span class="<?= $select_index ?>"></span>
            </a>
        </li>

        <li class="<?= $active_product ?>">
            <a href="javascript:;">
                <i class="icon-file-text"></i>
                <span class="title">Product</span>
                <span class="<?= $select_product ?>"></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="<?php if($filename == 'products.php'){echo 'active';}?>">
                    <a href="products.php">Product Dashboard</a>
                </li>
                <li class="<?php if($filename == 'products_manage.php'){echo 'active';}?>">
                    <a href="products_manage.php">Manage Product</a>
                </li>
                <li class="<?php if($filename == 'products_add.php'){echo 'active';}?>">
                    <a href="products_add.php">Add Product</a>
                </li>
            </ul>
        </li>

        <li class="<?= $active_template ?>">
            <a href="javascript:;">
                <i class="icon-file-text"></i>
                <span class="title">Template</span>
                <span class="<?= $select_template ?>"></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="<?php if($filename == 'template.php'){echo 'active';}?>">
                    <a href="template.php">Template Dashboard</a>
                </li>
                <li class="<?php if($filename == 'template_add.php'){echo 'active';}?>">
                    <a href="template_add.php">Add Template</a>
                </li>
            </ul>
        </li>

        <li class="<?= $active_pdf_html_script ?>">
            <a href="javascript:;">
                <i class="icon-file-text"></i>
                <span class="title">PDF & HTML Scripts</span>
                <span class="<?= $select_pdf_html_script ?>"></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="<?php if($filename == 's1_ftp.php'){echo 'active';}?>">
                    <a href="s1_ftp.php">FTP Dashboard</a>
                </li>
                <li class="<?php if($filename == 's1_ftp_add.php'){echo 'active';}?>">
                    <a href="s1_ftp_add.php">Add FTP Host</a>
                </li>
                <li class="<?php if($filename == 's1_preview_html.php'){echo 'active';}?>">
                    <a href="s1_preview_html.php">Preview HTML Template</a>
                </li>
                <li class="<?php if($filename == 's1_create_pdf_file.php'){echo 'active';}?>">
                    <a href="s1_create_pdf_file.php">Create PDF File</a>
                </li>
                <!--
                <li class="<?php if($filename == 's1_create_html_file.php'){echo 'active';}?>">
                    <a href="s1_create_html_file.php">Create HTML File</a>
                </li>
                -->
                <li class="<?php if($filename == 's1_ftp_read_upload_folder.php'){echo 'active';}?>">
                    <a href="s1_ftp_read_upload_folder.php">Folder PDF ( Wordpress )</a>
                </li>
                <li class="<?php if($filename == 's1_save_pdf_link.php'){echo 'active';}?>">
                    <a href="s1_save_pdf_link.php">Save Link ( Wordpress )</a>
                </li>
                <li class="<?php if($filename == 's1_ftp_promote_wp.php'){echo 'active';}?>">
                    <a href="s1_ftp_promote_wp.php">Promote ( Wordpress )</a>
                </li>
            </ul>
        </li>
        <li class="<?= $active_archive_script ?>">
            <a href="javascript:;">
                <i class="icon-file-text"></i>
                <span class="title">Archive Script</span>
                <span class="<?= $select_archive_script ?>"></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="<?php if($filename == 's2_archive.php'){echo 'active';}?>">
                    <a href="s2_archive.php">Archive Dashboard</a>
                </li>
                <li class="<?php if($filename == 's2_archive_add.php'){echo 'active';}?>">
                    <a href="s2_archive_add.php">Add Archive</a>
                </li>
                <li class="<?php if($filename == 's2_archive_upload.php'){echo 'active';}?>">
                    <a href="s2_archive_upload.php">Upload Archive</a>
                </li>
                <li class="<?php if($filename == 's2_archive_promote.php'){echo 'active';}?>">
                    <a href="s2_archive_promote.php">Archive Promote</a>
                </li>
            </ul>
        </li>
        <li class="<?= $active_keyword_script ?>">
            <a href="javascript:;">
                <i class="icon-file-text"></i>
                <span class="title">Keyword Tools</span>
                <span class="<?= $select_keyword_script ?>"></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="<?php if($filename == 's3_keyword_filter.php'){echo 'active';}?>">
                    <a href="s3_keyword_filter.php">Keyword Filter</a>
                </li>
            </ul>
        </li>
        <li class="<?= $active_video_script ?>">
            <a href="javascript:;">
                <i class="icon-file-text"></i>
                <span class="title">Video Script</span>
                <span class="<?= $select_video_script ?>"></span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="<?php if($filename == 's4_video_create.php'){echo 'active';}?>">
                    <a href="s4_video_create.php">Create Video</a>
                </li>
            </ul>
        </li>

        <li class="last ">
            <a href="charts.html">
                <i class="icon-bar-chart"></i> 
                <span class="title">Visual Charts</span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>