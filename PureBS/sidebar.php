<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<aside id="sidebar" class="col-md-3 hidden-xs hidden-sm" role="complementary">
	<?php if(!empty($this->options->sidebarBlock) && in_array('showCategory', $this->options->sidebarBlock)): ?>
		<section class="panel panel-default">
  			<div class="panel-heading"><?php _e('文章分类'); ?></div>
			<div class="list-group">
				<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
				<?php if($categories->have()): ?>
					<?php while($categories->next()): ?>
						<?php if($categories->levels==0): ?>
							<a href="<?php $categories->permalink(); ?>" class="list-group-item"><?php $categories->name(); ?><span class="badge"><?php $categories->count(); ?></span></a>
						<?php elseif($categories->levels==1): ?>
							<a href="<?php $categories->permalink(); ?>" class="list-group-item">--<?php $categories->name(); ?><span class="badge"><?php $categories->count(); ?></span></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php else: ?>
					<li class="list-group-item">无分类</li>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if(!empty($this->options->sidebarBlock) && in_array('showLatestPosts', $this->options->sidebarBlock)): ?>
		<section class="panel panel-default">
  			<div class="panel-heading"><?php _e('最新文章'); ?></div>
			<div class="list-group">
				<?php $this->widget('Widget_Contents_Post_Recent')->parse('<a href="{permalink}" class="list-group-item">{title}<span class="badge">{commentsNum}</span></a>'); ?>
			</div>
		</section>
	<?php endif; ?>
	
	<?php if(!empty($this->options->sidebarBlock) && in_array('showLatestComments', $this->options->sidebarBlock)): ?>
		<section class="panel panel-default">
  			<div class="panel-heading"><?php _e('最新评论'); ?></div>
			<div class="list-group">
				<?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
				<?php if($comments->have()): ?>
					<?php while($comments->next()): ?>
						<li class="list-group-item">
							<div class="media">
 								<div class="media-left media-top"><?php $comments->gravatar('40'); ?></div>
								<div class="media-body">
									<div class="media-heading"><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a><time class="pull-right text-muted small">(<?php $comments->date('Y-m-d'); ?>)</time></div>
									<div></div>
									<div><?php $comments->excerpt(35, '...'); ?></div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				<?php else: ?>
					<li class="list-group-item">无评论</li>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if(!empty($this->options->sidebarBlock) && in_array('showTagCloud', $this->options->sidebarBlock)): ?>
		<section class="panel panel-default">
  			<div class="panel-heading"><?php _e('标签云'); ?></div>
			<div class="list-group">
				<?php $this->widget('Widget_Metas_Tag_Cloud')->parse('<li class="list-group-item"><a href="{permalink}">{name}</a></li>'); ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if(!empty($this->options->sidebarBlock) && in_array('showArchive', $this->options->sidebarBlock)): ?>
		<section class="panel panel-default">
  			<div class="panel-heading"><?php _e('归档'); ?></div>
			<div class="list-group">
				<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li class="list-group-item"><a href="{permalink}">{date}</a></li>'); ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if(!empty($this->options->sidebarBlock) && in_array('showLinks', $this->options->sidebarBlock)): ?>
		<section class="panel panel-default">
			<div class="panel-heading"><?php _e('友情链接'); ?></div>
			<div class="list-group">
				<?php $links = Links_Plugin::getLinks('exchange'); ?>
				<?php foreach($links as $link) : ?>
					<a href="<?php $this->options->index('/link/'.$link['lid']); ?>" title="<?=$link['description']?>" target="_blank" class="list-group-item"><?=$link['title'].($link['valid'] ? '' : '<small>（失效）</small>')?>
					<?php if('visitor' == $this->options->links_num_group || $this->user->pass($this->options->links_num_group, true)) : ?><span class="badge"><?=$link['clicksNum']?><?php endif; ?></span>
					</a>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>
</aside>
