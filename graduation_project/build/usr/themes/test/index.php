<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .context{
        width: 300px;
        background-color: grey;
        text-overflow: ellipsis;
        /* overflow: hidden; */
        white-space: nowrap;
    }
     .p{
            width: 300px;
            background-color: grey;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
    </style>
</head>
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// $this->need('header.php');
?>
<body>
<div class="container">
<ul class="clearfix" id="nav_menu">
    <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
    <?php while($this->next()):?>
       <a href="<?php $this->permalink() ?>"><h2 class="title"> <?php $this->title() ?> </a></h2>
        <p class="context">
             <?php 
                $tt=$this->fields->desc;
                if(isset($tt)){
                    echo $tt;
                }else{
                    $this->content("continue reading..."); 
                }
                ?> 
            <!-- <?php $this->excerpt(50,'......'); ?> -->
        </p>
        <p class="p">多行文本溢出显示多行文本溢出显示多行文本溢出显示</p>
    <?php endwhile;?>   

</div>
</body>
</html>




