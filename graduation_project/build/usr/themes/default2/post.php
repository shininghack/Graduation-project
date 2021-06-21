<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="left" id="main" role="main">
        <div class="c1-post">
          <div class="c12-post">
            <h3><?php $this->title() ?></h3>
            <ul class="post-meta">
				      <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateWord(); ?></time></li>
				      <li><span class="icon-menu"></span> <?php $this->category(','); ?></li>
				      <li itemprop="interactionCount"><span class="icon-eye"></span> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论','%d 条评论'); ?></a></li>
			</ul>
            <text><?php $this->content(); ?></text>
          </div>
          <p itemprop="keywords" class="tags"><?php _e('TAG:'); ?><?php $this->tags(', ', true, 'none'); ?></p>
        </div>
    
    
    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
