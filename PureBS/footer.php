<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		</div>
	</div>
</div>

<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-8">
				<div class="listbox"></div>
				<div class="media">
					<div class="media-left media-middle"><a id="license-img" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="<?php $this->options->themeUrl('res/CC-BY-NC-SA.png'); ?>"></a></div>
					<div class="media-body hidden-xs">
						<span>Except where otherwise noted, content on this site is licensed under a </br>
						<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><span class="visible-lg-inline">Creative Commons Attribution-NonCommercial-ShareAlike 4.0</span><span class="hidden-lg">CC-BY-NC-SA 4.0</span> International License</a>.</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-4 text-right">
				<div><?php _e('Theme by %s.', '<a href="http://tennsinn.com">息E-敛</a>'); ?></div>
				<div><?php _e('Powered by %s.', '<a href="http://www.typecho.org">Typecho</a>'); ?></div>
				<div>Copyright &copy; <?php echo !empty($this->options->copyright) ? $this->options->copyright.' - '.date('Y') : date('Y'); ?><span class="hidden-xs"> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></span>.</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
