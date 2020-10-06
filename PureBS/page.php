<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<div class="col-xs-12 col-md-9" id="main" role="main">
	<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
	<article class="col-xs-12 post-article">
		<?php $this->content(); ?>
	</article>
	<?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
