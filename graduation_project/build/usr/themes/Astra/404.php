<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="primary2" class="content-area primary primary404">
    <section class="error-404 not-found">
    <div class="ast-404-layout-1">
        <header class="page-header">
        <h1 class="page-title">404 ERROR</h1>
        </header><!-- .page-header -->
        <div class="page-content">
            <div class="page-sub-title">
            未找到您访问的页面
            </div>
            <div class="ast-404-search">
                <div class="widget widget_search">
                    <form role="search" method="post" class="search-form" action="<?php $this->options->siteUrl(); ?>">
                        <label>
                        <span class="screen-reader-text">搜索：</span>
                        <input type="search" class="search-field" placeholder="关键词" value="" name="s">
                        </label>
                        <input type="submit" class="search-submit" value="搜索">
                    </form>
                </div>
            </div>
        </div>
        <!-- .page-content -->
    </div>
    </section><!-- .error-404 -->
</div>


<?php $this->need('footer.php'); ?>
