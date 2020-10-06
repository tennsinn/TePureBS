<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<div class="col-xs-12" id="main" role="main">
	<div class="error-page">
		<h2 class="error-title">404 - <?php _e('页面没找到'); ?></h2>
		<p><?php _e('你想查看的页面已被转移或删除了。'); ?></p>
	</div>
</div>

<?php $this->need('footer.php'); ?>
