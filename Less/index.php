<?php
/**
 * 这是一套非常适合文字的极简主题
 * 
 * @package Less
 * @author Jared Erickson 
 * @version 1.0
 * @link http://zhipeng.me
 */
 
 $this->need('header.php');
 ?>
<div class="container">
	<div id="primary">
		<div id="content" role="main">
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
		
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php $this->pageLink('上一页'); ?></div>
					<div class="next-page"><?php $this->pageLink('下一页','next'); ?></div>
				</div><!-- pagination -->

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div><!-- / container-->









<!--

<div class="col-mb-12 col-8" id="main" role="main">
	
        <article class="post">
			<h2 class="post-title"></h2>
			<ul class="post-meta">
				<li><?php _e('作者：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>
				<li><?php _e('时间：'); ?><?php $this->date('F j, Y'); ?></li>
				<li></li>
				<li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content">
    			
            </div>
        </article>
	

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php // $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
