<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<div class="col-xs-12 col-md-9" id="main" role="main">
	<div class="archive-title"></div>
	<h3 class="archive-title"><?php $this->archiveTitle(array(
		'category'  =>  _t('分类 %s 下的文章'),
		'search'    =>  _t('包含关键字 %s 的文章'),
		'tag'       =>  _t('标签 %s 下的文章'),
		'author'    =>  _t('%s 发布的文章')
	), '', ''); ?></h3>
	<?php if($this->is('category')): ?>
	<div class="archive-description"><?php echo $this->getDescription(); ?></div>
	<?php endif; ?>
	<?php if ($this->have()): ?>
	<?php $this->need('articles-card.php'); ?>
	<?php else: ?>
	<article class="col-xs-12 hvr-bob post-card">
		<h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
	</article>
	<?php endif; ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
