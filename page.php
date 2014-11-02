<?php $this->need('header.php'); ?>


<div class="container">

	<div id="primary">
		<div id="content" role="main">	
					<article class="post">
						<h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
						<div class="post-meta"></div><!--/post-meta -->
						
						<div class="the-content">
						 <?php $this->content(); ?>
						</div><!-- the-content -->
						
						<div class="meta clearfix">
							<div class="category">
							<ul class="post-categories">
							<li><?php $this->category(','); ?></li>
							</ul>
							</div>
							<div class="tags"></div>
						</div><!-- Meta -->						
					</article>
<!-- You can start editing here. -->
<?php $this->need('comments.php'); ?>

	<div class="navigation">
		<div class="alignleft"></div>
		<div class="alignright"></div>
	</div>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div><!-- / container-->

<?php // $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
