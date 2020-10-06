<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta http-equiv="content-language" content="zh-CN">
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php $this->archiveTitle(array('category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章')), '', ' - '); ?><?php $this->options->title(); ?> | <?php $this->options->description(); ?>
	</title>
	<?php $this->header(); ?>
	<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="//cdn.bootcss.com/hover.css/2.0.2/css/hover-min.css" rel="stylesheet">
	<link href="//cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
	<link href="<?php $this->options->themeUrl('stylesheet.css'); ?>" rel="stylesheet">
	<script src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php $this->options->themeUrl('script.js'); ?>"></script>
</head>
<body>
	<header id="navbar" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-links">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand hvr-wobble-horizontal" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
			</div>
			<nav id="navbar-links" class="navbar-collapse collapse navbar-right" aria-expanded="false" role="navigation">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a title="博客文章分类归档" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="true" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list fa-fw" aria-hidden="true"></i>分类文章<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">
						<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
						<?php if($categories->have()): ?>
							<?php while($categories->next()): ?>
								<?php if(!$categories->levels): ?>
								<li><a href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a></li>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
						</ul>
					</li>
					<li class="hvr-underline-from-center"><a href="<?php $this->options->index('links.html'); ?>" title="欢迎来加友链"><i class="fa fa-link fa-fw" aria-hidden="true"></i>友情链接</a></li>
					<li class="hvr-underline-from-center"><a href="<?php $this->options->index('guestbook.html'); ?>" title="任何事都可以在这里留言"><i class="fa fa-leaf fa-fw" aria-hidden="true"></i>留言寄语</a></li>
				</ul>
				<form method="post" action="./" role="search" class="navbar-form navbar-right">
					<label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
					<div class="input-group">
						<input type="text" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>">
						<span class="input-group-btn"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button></span>
					</div>
				</form>
			</nav>
		</div>
	</header>

	<div id="body">
		<div class="container">
			<div class="row">
