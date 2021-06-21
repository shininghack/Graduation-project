<?php
/**
 * 关于
 *
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="../pics/baby.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About</title>
<style type="text/css">
  /* a:hover{text-decoration:underline;} */
  ul{list-style-type:none;}
  /*body{color:#333;background:#CCC;font:12px/1.5 \5b8b\4f53;}*/



</style>

<script type="text/javascript">

</script>
<title>liuyanban</title>
    <object style="border:0px" type="text/x-scriptlet" data="../bs/1.1.html" width=100% height=200 >
    </object>
</head>
<body>

<div id="msg">
    <form>
        <h2>我们有些话想对你们说：</h2>
        <div class="p1">
          <img src="<?php $this->options->themeUrl('img/相恋.png'); ?>" alt="" class="cc1" />
          <img src="<?php $this->options->themeUrl('img/云朵.png'); ?>" alt="" class="cc2" />
        <text>
            &emsp;&emsp;建立独立博客意义在于：
    保持个人思想与言论独立——至少有形式上的独立，以及对如今逐趋完整的局域网保持谨慎。在一个你发在公众号、微博、豆瓣、知乎的言论会被莫名其妙地消失的时代，一个独立博客仍会让你有免于恐惧的自由。
    <br>&emsp;&emsp;有些东西做了一遍又一遍，但又不经常操作，很容易忘了。如果没有记录，工作上遇到的坑，虽然可以万事百度解决，但是都不是系统化，都是碎片的，每次都花一两天时间，太浪费时间。<br>&emsp;&emsp;写博客是个很好的办法，可以自己写，也可以搬运别人的，自己整理系统化的知识。自己建立一个网站，想写什么就写什么，想怎么写就怎么写，不在乎别人的评论，也不担心博客网站倒闭，不担心积累的东西不见。
    <hr  class="load_hr" style="background:pink">
        </text>
       
        </div>
    </form>	
    <div class="egg">
      <a href="<?php $this->options->themeUrl('egg/index.html'); ?>"><img src="<?php $this->options->themeUrl('img/彩蛋@2x.png'); ?>" alt=""></a>
  </div>
</div>

<canvas id="canvas"></canvas>
<script src="script.js"></script>
<script type="text/javascript" src="jquery-1.7.2.js"></script>
    <script type="text/javascript">
        $(function (argument) {
            //hr水平线在页面加载的时候边长
            $("hr").animate({
                width: "400px"},
                1000, function() {
            }); 
        })
    </script>
</body>
</html>