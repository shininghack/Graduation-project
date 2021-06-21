<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
            <div class="widget-area secondary" id="secondary" role="complementary">
                <div class="sidebar-main">

    <aside id="search" class="widget widget_search">
                    <form role="search" method="post" class="search-form" action="<?php $this->options->siteUrl(); ?>">
                        <label>
                        <span class="screen-reader-text">搜索：</span>
                        <input type="search" class="search-field" placeholder="关键词" value="" name="s"/>
                        </label>
                        <input type="submit" class="search-submit" value="搜索"/>
                    </form>
                    </aside>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <aside class="widget">
		<h2 class="widget-title"><?php _e('最新文章'); ?></h2>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </aside>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <aside class="widget">
		<h2 class="widget-title"><?php _e('最近回复'); ?></h2>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </aside>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <aside class="widget">
		<h2 class="widget-title"><?php _e('分类'); ?></h2>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</aside>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <aside class="widget">
		<h2 class="widget-title"><?php _e('归档'); ?></h2>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</aside>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<aside class="widget">
		<h2 class="widget-title"><?php _e('其它'); ?></h2>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org">Typecho</a></li>
        </ul>
	</aside>
    <?php endif; ?>

                </div>
                <!-- .sidebar-main -->
            </div>
            <!-- #secondary -->
