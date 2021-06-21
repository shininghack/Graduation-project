<?php
/**
 * 这是一套来自wp移植的模板，官方排名较靠前的 Astra 免费版本
 * 
 * @package Astra Theme 
 * @author Typecho.me
 * @version 2020.04.07
 * @link https://typecho.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

			<div id="primary" class="content-area primary">

				<main id="main" class="site-main">
				<div class="ast-row">

	<?php while($this->next()): ?>

					<article class="post hentry ast-col-sm-12 ast-article-post">
					<div class="ast-post-format- ast-no-thumb blog-layout-1">
						<div class="post-content ast-col-md-12">
							<div class="ast-blog-featured-section post-thumb ast-col-md-12">
							</div>
							<header class="entry-header">
							<h2 class="entry-title" itemprop="headline"><a href="<?php $this->permalink() ?>" rel="bookmark"><?php $this->title() ?></a></h2>
							<div class="entry-meta">
								<span class="cat-links"><?php $this->category(' , '); ?></span> · <span class="posted-by vcard author"><?php $this->date(); ?></span>
							</div>
							</header><!-- .entry-header -->
							<div class="entry-content clear" itemprop="text">
								<?php $this->content('查看全文 »'); ?>
							</div>
							<!-- .entry-content .clear -->
						</div>
						<!-- .post-content -->
					</div>
					<!-- .blog-layout-1 -->
					</article><!-- #post-## -->
	<?php endwhile; ?>

				</div>
				</main><!-- #main -->

<div class="ast-pagination">
<nav class="navigation pagination" role="navigation" aria-label="文章">
<h2 class="screen-reader-text">文章导航</h2>
<div class="nav-links">
<?php $this->pageLink('上一页','prev'); ?>
<?php $this->pageLink('下一页','next'); ?>
</div>
</nav></div>

			</div>
			<!-- #primary -->

<?php $this->need('sidebar.php'); ?>

<?php $this->need('footer.php'); ?>



