<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php
	function themeConfig($form)
	{
		$logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址'));
		$form->addInput($logoUrl);
		
		$sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox(
			'sidebarBlock',  
			array(
				'showCategory' => _t('显示分类'), 
				'showLatestPosts' => _t('显示最新文章'), 
				'showLatestComments' => _t('显示最近回复'), 
				'showTagCloud' => _t('显示标签云'),
				'showArchive' => _t('显示归档'),
				'showLinks' => _t('显示友情链接（需Links插件支持）')
			), 
			array(
				'showCategory', 
				'showLatestComments'
			), 
			_t('侧边栏显示')
		);
		$form->addInput($sidebarBlock->multiMode());

		$showClicks = new Typecho_Widget_Helper_Form_Element_Radio('showClicks', array(0 => _t('关闭'), 1 => _t('打开')), 0, _t('显示点击数（需Viewers插件支持）'));
		$form->addInput($showClicks);

		$copyright = new Typecho_Widget_Helper_Form_Element_Text('copyright', NULL, NULL, _t('Copyright起始年份'), _t('在这里填入页脚Copyright信息的起始年份（显示格式：<u>起始年份 - 当前年份</u>），留空则只显示当前年份'));
		$copyright->addRule('isInteger', _t('请输入正确的数字年份信息。'));
		$form->addInput($copyright);
	}
?>
