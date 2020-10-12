<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		</div>
	</div>
</div>

<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-8">
				<div class="listbox"></div>
				<?php if(!empty($this->options->cc_image_url) || !empty($this->options->cc_note)): ?>
				<div class="media">
					<?php if(!empty($this->options->cc_image_url)): ?>
					<div class="media-left media-middle"><?php if(!empty($this->options->cc_image_url)): ?><a id="license-img" rel="license" href="<?php echo $this->options->cc_image_link; ?>"><?php endif; ?><img alt="Creative Commons License" style="border-width:0" src="<?php echo $this->options->cc_image_url; ?>"><?php if(!empty($this->options->cc_image_url)): ?></a><?php endif; ?></div>
					<?php endif; ?>
					<?php if(!empty($this->options->cc_note)): ?>
					<div class="media-body<?php echo !empty($this->options->cc_image_url) ? ' hidden-xs' : ''; ?>">
						<?php echo $this->options->cc_note; ?>
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
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
