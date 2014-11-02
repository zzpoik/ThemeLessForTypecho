<?php $this->need('header.php'); ?>




<div class="container">
 <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t(' %s 下的文章:<br />'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
		</h3>
	<div id="primary">
	
		<div id="content" role="main">
		 <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
					<article class="post">
						<h1 class="title">
							<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
						</h1>
						<div class="the-content">
							<p><?php $this->content('- 阅读剩余部分 -'); ?></p>	
						</div><!-- the-content -->
						
						<div class="meta clearfix">
							<div class="category">
							<ul class="post-categories">
								<li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
							</ul>
							</div>
							<div class="tags"></div>
						</div><!-- Meta -->
						
					</article>
					<?php endwhile; ?>
					<?php else: ?>
					<article class="post">
					<h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
					</article>
					 <?php endif; ?>
		
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php $this->pageLink('上一页'); ?></div>
					<div class="next-page"><?php $this->pageLink('下一页','next'); ?></div>
				</div><!-- pagination -->

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div><!-- / container-->



	<?php // $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
