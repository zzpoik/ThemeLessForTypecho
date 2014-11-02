<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="home blog">

<!--[if lt IE 8]>
    <div class="browsehappy"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="gravatar">
			<img alt='' src='http://www.gravatar.com/avatar/a794e1cbb442c3c0fce4c6660d47b1c2?s=100&r=X&d=' class='avatar avatar-100 photo' height='100' width='100' />
		</div><!--/ author -->
		
		<div id="brand">
			<h1 class="site-title"> <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <?php if ($this->options->logoUrl): ?>
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                    <?php endif; ?>
                    <?php $this->options->title() ?>
                </a> &mdash; <span><?php $this->options->description() ?></span></h1>
		</div><!-- /brand -->
	
		<nav role="navigation" class="site-navigation main-navigation">
			<div class="menu-main-nav-container">
				<ul id="menu-main-nav" class="menu">

					<li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"> <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>

					<li id="menu-item-86" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-86"> <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?></li>

					<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
<?php while ($category->next()): ?>
<li id="menu-item-86" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-86"<?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?><?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?><?php endif; ?><?php endif; ?>><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
<?php endwhile; ?>
			
				</ul>
			</div>
		</nav><!-- .site-navigation .main-navigation -->
		<div class="clear"></div>
	</div><!--/container -->	
</header><!-- #masthead .site-header -->

<!--
   <form id="search" method="post" action="./" role="search">
	<label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
	<input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
	<button type="submit" class="submit"><?php _e('搜索'); ?></button>
   </form>
-->







             
          
                   

    
    
