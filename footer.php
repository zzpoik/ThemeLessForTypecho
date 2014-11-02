
   

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
				 &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> By
    <?php _e(' <a href="http://www.typecho.org">Typecho</a> '); ?>.
		<span class="sep"> and </span>
		<a href="http://lessmade.com/themes/less" rel="theme">Less</a> 
	</div><!-- .site-info -->
	
<?php $this->footer(); ?>
</footer><!-- #colophon .site-footer -->
</body>
</html>
