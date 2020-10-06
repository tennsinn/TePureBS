<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php function threadedComments($comments, $options) {
	$commentClass = '';
	if ($comments->authorId)
	{
		if ($comments->authorId == $comments->ownerId)
			$commentClass .= ' comment-by-author';
		else
			$commentClass .= ' comment-by-user';
	}
	else
		$commentClass .= ' comment-by-visitor';
 
	$commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
	echo ' comment-child';
	$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
	echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
	<div id="<?php $comments->theId(); ?>" class="media">
		<div class="media-left comment-aside">
			<?php $comments->gravatar('60', 'mm'); ?>
			<?php $comments->reply('<span class="hvr-icon-wobble-horizontal">回复</span>'); ?>
		</div>
		<div class="media-body">
			<div class="col-xs-12 comment-meta">
				<cite class="col-xs-6"><?php $comments->author(); ?></cite>
				<time class="col-xs-6 text-right" datetime="<?php $comments->date('c'); ?>"><?php $comments->date(Helper::options()->commentDateFormat); ?></time>
			</div>
			<div class="col-xs-12"><?php $comments->content(); ?></div>
		</div>		
	</div>
	<?php if ($comments->children) { ?>
	<div class="comment-children">
		<?php $comments->threadedComments($options); ?>
	</div>
	<?php } ?>
</li>
<?php } ?>

<div id="comments" class="col-xs-12">
	<?php $this->comments()->to($comments); ?>
	<?php if($this->allow('comment')): ?>
		<div id="<?php $this->respondId(); ?>" class="col-xs-12 replybox">
			<div class="col-xs-6 text-left"><?php _e('添加新评论'); ?></div>
			<div class="col-xs-6 text-right"><?php $comments->cancelReply(); ?></div>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
				<div class="col-xs-12 col-sm-7 col-lg-8"><textarea name="text" id="comment-content-new" class="form-control" rows="3" placeholder="<?php _e('评论'); ?>" required><?php $this->remember('text'); ?></textarea></div>
				<div id="comment-info" class="col-xs-12 col-sm-5 col-lg-4">
					<?php if($this->user->hasLogin()): ?>
						<div class="comment-user-item"><?php _e('登录身份: '); ?></div>
						<div class="comment-user-item"><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a></div>
						<div class="comment-user-item"><a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></div>
					<?php else: ?>
						<div class="input-group input-group-sm">
							<span id="replybox-author" class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
							<input type="text" name="author" id="author" class="form-control" aria-discribedby="replybox-author" value="<?php $this->remember('author'); ?>" placeholder="<?php _e('称呼'); ?>" required>
						</div>
						<div class="input-group input-group-sm">
							<span id="replybox-email" class="input-group-addon"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
							<input type="email" name="mail" id="mail" class="form-control" aria-discribedby="replybox-email" value="<?php $this->remember('mail'); ?>" placeholder="<?php _e('邮箱'); ?>" <?php if ($this->options->commentsRequireMail): ?>required<?php endif; ?>>
						</div>
						<div class="input-group input-group-sm">
							<span id="replybox-homepage" class="input-group-addon"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span>
							<input type="url" name="url" id="url" class="form-control" aria-discribedby="replybox-homepage" value="<?php $this->remember('url'); ?>" placeholder="<?php _e('网站 http://'); ?>" <?php if ($this->options->commentsRequireURL): ?>required<?php endif; ?>>
						</div>
					<?php endif; ?>
					<button type="submit" class="btn btn-default btn-sm btn-block"><?php _e('提交评论'); ?></button>
				</div>
			</form>
		</div>
	<?php else: ?>
		<div class="h4"><?php _e('评论已关闭'); ?></div>
	<?php endif; ?>
	<div class="h4"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></div>
	<?php if ($comments->have()): ?>
		<div class="col-xs-12">
			<?php $comments->listComments(); ?>
			<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
		</div>
	<?php endif; ?>
</div>
