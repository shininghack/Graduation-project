<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="left" id="main" role="main">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <!-- <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    			<div class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
    			<ul class="post-meta">
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateWord(); ?></time></li>
				<li><span class="icon-menu"></span> <?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><span class="icon-eye"></span> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论','%d 条评论'); ?></a></li>
    			</ul>
                <div class="post-content" itemprop="articleBody">
        			<?php $this->summary(); ?>
                </div>
    		</article> -->

        <div class="c1-post">
          <div class="c12-ach">
            <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
            <ul class="post-meta">
				      <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateWord(); ?></time></li>
				      <li><span class="icon-menu"></span> <?php $this->category(','); ?></li>
				      <li itemprop="interactionCount"><span class="icon-eye"></span> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论','%d 条评论'); ?></a></li>
			</ul>
            <text><?php $this->summary(); ?></text>
          </div>
          <a href="<?php $this->permalink() ?>" class="moretext-2">阅读全文>></a>
        </div>

    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post-none">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav();?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
