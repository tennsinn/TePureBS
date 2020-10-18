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
				'showLinks' => _t('显示友情链接（需<a href="https://github.com/tennsinn/TeLinks">Links</a>插件支持）')
			), 
			array(
				'showCategory', 
				'showLatestComments'
			), 
			_t('侧边栏显示')
		);
		$form->addInput($sidebarBlock->multiMode());

		$links_num_group =  new Typecho_Widget_Helper_Form_Element_Select(
			'links_num_group',
			array('administrator' => _t('管理员'), 'editor' => _t('编辑'), 'contributor' => _t('贡献者'), 'subscriber' => _t('关注者'), 'visitor' => _t('游客')),
			'administrator',
			_t('友情链接点击数允许显示用户组'),
			_t('选择此级别以上的用户将会在侧边栏友情链接部分显示点击数')
		);
		$form->addInput($links_num_group);

		$showClicks = new Typecho_Widget_Helper_Form_Element_Radio('showClicks', array(0 => _t('关闭'), 1 => _t('打开')), 0, _t('显示点击数（需<a href="https://github.com/tennsinn/TeViewers">Viewers</a>插件支持）'));
		$form->addInput($showClicks);

		$copyright = new Typecho_Widget_Helper_Form_Element_Text('copyright', NULL, NULL, _t('Copyright起始年份'), _t('在这里填入页脚Copyright信息的起始年份（显示格式：<u>起始年份 - 当前年份</u>），留空则只显示当前年份'));
		$copyright->addRule('isInteger', _t('请输入正确的数字年份信息。'));
		$form->addInput($copyright);

		$cc_note = new Typecho_Widget_Helper_Form_Element_Textarea(
			'cc_note',
			NULL,
			'Except where otherwise noted, content on this site is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><span class="visible-lg-inline">Creative Commons Attribution-NonCommercial-ShareAlike 4.0</span><span class="hidden-lg">CC BY-NC-SA 4.0</span> International License</a>.',
			_t('Creative Commons 文本声明'),
			_t('在这里填入页脚Creative Commons信息的文本声明')
		);
		$form->addInput($cc_note);

		$cc_image_url = new Typecho_Widget_Helper_Form_Element_Text(
			'cc_image_url',
			NULL,
			'https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png',
			_t('Creative Commons 图片地址'),
			_t('在这里填入页脚Creative Commons License信息中的图片地址')
		);
		$cc_image_url->addRule('url', _t('请输入正确的图片链接'));
		$form->addInput($cc_image_url);

		$cc_image_link = new Typecho_Widget_Helper_Form_Element_Text(
			'cc_image_link',
			NULL,
			'http://creativecommons.org/licenses/by-nc-sa/4.0/',
			_t('Creative Commons 图片链接'),
			_t('在这里填入页脚Creative Commons信息中图片的链接地址')
		);
		$cc_image_link->addRule('url', _t('请输入正确的链接地址'));
		$form->addInput($cc_image_link);
	}
?>
