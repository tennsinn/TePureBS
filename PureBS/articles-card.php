<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php while($this->next()): ?>
<article class="col-xs-12 hvr-bob post-card" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="post-title" itemprop="name headline"><a class="hvr-skew-forward" itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
	<aside class="col-xs-12 col-sm-3 post-aside">
		<section class="col-xs-6 col-sm-12 post-info">
			<span class="post-info-item"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('时间：'); ?></span></span>
			<span class="post-info-detail"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('M j, Y'); ?></time></span>
		</section>
		<section class="hidden-xs col-sm-12 post-info">
			<span class="post-info-item"><i class="fa fa-bars fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('分类：'); ?></span></span>
			<span class="post-info-detail"><span class="label label-default hvr-bounce-in"><?php $this->category('</span><span class="label label-default hvr-bounce-in">'); ?></span></span>
		</section>
		<section class="col-xs-3 col-sm-12 post-info">
			<span class="post-info-item"><i class="fa fa-comments fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('评论：'); ?></span></span>
			<span class="post-info-detail"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(); ?></a></span>
		</section>
		<?php if($this->options->showClicks): ?>
		<section class="col-xs-3 col-sm-12 post-info">
			<span class="post-info-item"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('浏览：'); ?></span></span>
			<span class="post-info-detail"><span itemprop="interactionCount"><?php $this->clicksNum(); ?></span></span>
		</section>
		<?php endif; ?>
		<section class="col-xs-12 post-info">
			<span class="post-info-item"><i class="fa fa-tags fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('标签：'); ?></span></span>
			<span class="post-info-detail"><span class="label label-default hvr-bounce-in"><?php $this->tags('</span><span class="label label-default hvr-bounce-in">', true, 'NULL'); ?></span></span>
		</section>
	</aside>
	<div class="col-xs-12 col-sm-9 post-content" itemprop="articleBody"><?php $this->content('阅读全文<i class="fa fa-angle-double-right fa-fw"></i>'); ?></div>
</article>
<?php endwhile; ?>
<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
