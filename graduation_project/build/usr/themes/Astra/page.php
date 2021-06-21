<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="primary" class="content-area primary">
	<main id="main" class="site-main">
	<article class="page type-page ast-article-single">
	<header class="entry-header ast-no-thumbnail ast-no-meta">
	<h1 class="entry-title"><?php $this->title() ?></h1>
	</header><!-- .entry-header -->
	<div class="entry-content clear">
		<?php $this->content(); ?>
	</div>
	<!-- .entry-content .clear -->
	</article><!-- #post-## -->
	<?php $this->need('comments.php'); ?>
	</main><!-- #main -->
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
