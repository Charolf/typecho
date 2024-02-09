<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-tb-8 col-tb-offset-2">

    <div class="error-page">
        <h2 class="post-title">403 - <?php _e('无权限'); ?></h2>
        <p><?php _e('你没有权限查看当前页面！'); ?></p>
    </div>

</div><!-- end #content-->
<?php $this->need('footer.php'); ?>
