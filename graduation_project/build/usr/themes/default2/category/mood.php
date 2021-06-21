<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <div class="left">
        <?php if ($this->have()): ?>
    	    <?php while($this->next()): ?>
                <div class="mood">
                    <div class="mood-text"><text><?php $this->summary(); ?></text></div>
                    <div class="time"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateWord(); ?></time></div>
                </div>
    	    <?php endwhile; ?>
            <?php else: ?>
                <article class="post-none">
                    <h2 class="post-title"><?php _e('还没有心情日记哦！'); ?></h2>
                </article>
        <?php endif; ?>
        <?php $this->pageNav('<span class="icon-arrow-left"></span>','<span class="icon-arrow-right"></span>',0,'...');?>
    </div>
 </body>
 </html>
 <?php $this->need('sidebar.php');?>
 <?php $this->need('footer.php');?>