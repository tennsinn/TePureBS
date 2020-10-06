<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

<div class="col-xs-12 col-md-9" id="main" role="main">
	<article class="col-xs-12 post-article" itemscope itemtype="http://schema.org/BlogPosting">
		<div class="post-title" itemprop="name headline"><?php $this->title() ?></div>
		<aside class="col-xs-12 post-aside">
			<section class="col-xs-8 post-info">
				<span class="post-info-item"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('时间：'); ?></span></span>
				<span class="post-info-detail"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></span>
			</section>
			<?php if($this->options->showClicks): ?>
			<section class="col-xs-4 post-info">
				<span class="post-info-item"><i class="fa fa-eye fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('浏览：'); ?></span></span>
				<span class="post-info-detail"><span itemprop="interactionCount"><?php $this->clicksNum(); ?></span></span>
			</section>
			<?php endif; ?>
			<section class="col-xs-12 post-info">
				<span class="post-info-item"><i class="fa fa-tags fa-fw" aria-hidden="true"></i><span class="visible-lg-inline-block"><?php _e('标签：'); ?></span></span>
				<span class="post-info-detail"><span class="label label-default hvr-bounce-in"><?php $this->tags('</span><span class="label label-default hvr-bounce-in">', true, 'NULL'); ?></span></span>
			</section>
		</aside>
		<div class="col-xs-12 post-content" itemprop="articleBody">
			<?php $this->content(); ?>
		</div>
	</article>
	<div class="col-xs-12 post-near">
		<div class="hvr-icon-back col-xs-6"><?php $this->thePrev('%s','NULL'); ?></div>
		<div class="hvr-icon-forward col-xs-6 text-right"><?php $this->theNext('%s','NULL'); ?></div>
	</div>
	<?php $this->related()->to($related); ?>
	<?php if($related->have()): ?>
	<dl class="col-xs-12 dl-horizontal post-related">
		<dt>相关文章</dt>
		<?php while($related->next()): ?>
			<dd><a href="<?php $related->permalink(); ?>" title="<?php $related->title(); ?>"><?php $related->title(); ?></a></dd>
		<?php endwhile; ?>
	</dl>
	<?php endif; ?>
	<?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
