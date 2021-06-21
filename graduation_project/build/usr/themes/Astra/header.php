<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<htm>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php if ($this->_currentPage > 1) echo '第 ' . $this->_currentPage . ' 页 - '; ?><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->is('index')): ?> - <?php $this->options->description(); ?><?php endif; ?></title>


    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>assets/css/minified/menu-animation.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>assets/css/minified/style.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>astra.css">

    <?php $this->header('wlw=&xmlrpc=&rss2=&atom=&rss1=&template=&pingback=&generator='); ?>
</head>
<body class="ast-separate-container ast-right-sidebar<?php if ($this->is('single')) : ?> ast-single-post<?php endif; ?>">
<div class="hfeed site" id="page">

<header class="site-header ast-primary-submenu-animation-fade header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-menu-toggle-icon ast-mobile-header-inline" id="masthead">
<div class="main-header-bar-wrap">
    <div class="main-header-bar">
        <div class="ast-container">
            <div class="ast-flex main-header-container">
                <div class="site-branding">
                    <div class="ast-site-identity">
                        <div class="ast-site-title-wrap">
                            <h1 class="site-title">
                            <a href="<?php $this->options->siteUrl(); ?>" rel="home"><?php $this->options->title() ?></a>
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- .site-branding -->
                <div class="ast-mobile-menu-buttons">
                    <div class="ast-button-wrap">
                        <button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-buttons-minimal " aria-controls='primary-menu' aria-expanded='false'>
                        <span class="screen-reader-text">Main Menu</span>
                        <span class="menu-toggle-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="ast-main-header-bar-alignment">
                    <div class="main-header-bar-navigation">
                        <nav class="ast-flex-grow-1 navigation-accessibility" id="site-navigation" aria-label="Site Navigation">
                        <div class="main-navigation">
                            <ul id="primary-menu" class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end submenu-with-border astra-menu-animation-fade">
                                <li class="menu-item"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                                <li class="menu-item menu-item-has-children" aria-haspopup="true"><a>分类</a><button class="ast-menu-toggle" role="button" aria-expanded="false"><span class="screen-reader-text">Menu Toggle</span></button>
                                <ul class="sub-menu">
                                        <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                                        <?php while ($category->next()): ?>
                                    <li class="menu-item"><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></li>
                                        <?php endwhile; ?>
                                </ul>
                                </li>
                                 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                <?php while($pages->next()): ?>
                                <li class="menu-item<?php if($this->is('page', $pages->slug)): ?> current-menu-item<?php endif; ?>"><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
                                <?php endwhile; ?>                                
                            </ul>
                        </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Main Header Container -->
        </div>
        <!-- ast-row -->
    </div>
    <!-- Main Header Bar -->
</div>
<!-- Main Header Bar Wrap --></header><!-- #masthead -->


    <div id="content" class="site-content">
        <div class="ast-container">

    
    
