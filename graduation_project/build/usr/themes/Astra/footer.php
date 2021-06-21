<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		</div>
		<!-- ast-container -->
	</div>
	<!-- #content -->

	<footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope">
	<div class="ast-small-footer footer-sml-layout-1">
		<div class="ast-footer-overlay">
			<div class="ast-container">
				<div class="ast-small-footer-wrap">
					<div class="ast-small-footer-section ast-small-footer-section-1">
						Copyright &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
						
					</div>
				</div>
				<!-- .ast-row .ast-small-footer-wrap -->
			</div>
			<!-- .ast-container -->
		</div>
		<!-- .ast-footer-overlay -->
	</div>
	<!-- .ast-small-footer-->
	</footer><!-- #colophon -->



</div>
<?php $this->footer(); ?>

<script>
var astra = {"break_point":"921","isRtl":""};
</script>
<script src="<?php $this->options->themeUrl(); ?>assets/js/minified/style.min.js"></script>
</body>
</html>
