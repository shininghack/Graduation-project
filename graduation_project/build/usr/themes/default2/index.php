<?php
/**
 * 欢饮来到我们的小站——拾光云海~
 * 
 * @package 拾光云海
 * @author 李舜星、李心怡、徐志杰、陈文想
 * @version 1.0
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<style>
  
</style>

<!-- cover -->
<title>拾光云海</title>
<div id="web-bg">
            <div class="int">
                <h1>拾光云海</h1>
                <hr>
                <!-- <p>所有的温柔都源于你的强大。</p> -->
                <div class="type-t">
                    <span id="type-text">...</span>
                    <span class="blinking-cursor">_</span>
                </div>
                <script src="<?php $this->options->themeUrl('./type-text.js'); ?>"></script>

                <!--  -->
                <!-- <div class="title">
                    <a  class="cover-btn" href="index1.html">Come on!</a>
                </div> -->
            </div>
            <img src="<?php $this->options->themeUrl('img/下拉三角 (1).png'); ?>" alt="" class="down">
            <!-- 1.箭头跳动2.点击箭头实现滑动页面 -->
</div>

<!-- 宣传板块 -->
<h1 class="index-title">拾光云海</h1>
<hr>
<div class="accordion">
  <!-- 在这里需要复制6个一样的代码，并修改内容 -->
  <ul>
    <li tabindex="1">
      <div>
        <a href="#">
          <h2>繁花落幕</h2>
          <!-- <p>The harder the crust is baked, the stronger the flavor and texture of the bread inside.</p> -->
        </a>
      </div>
    </li>

    <li tabindex="2">
      <div>
        <a href="#">
         <h2>繁忙清晨</h2>
         <!-- <p>Cupcake is a dessert.</p> -->
        </a>
      </div>
    </li>

    <li tabindex="3">
      <div>
        <a href="#">
          <h2>雨后都市</h2>
          <!-- <p>It is commonly used in birthday parties and weddings and is one of the common desserts.</p> -->
        </a>
      </div>
    </li>

    <li tabindex="4">
      <div>
        <a href="#">
          <h2>遨游天际</h2>
          <!-- <p>The cooking method of food materials is simple, and the original nutrition and taste of food materials are retained.</p> -->
        </a>
      </div>
    </li>

    <li tabindex="5">
      <div>
        <a href="#">
          <h2>枫林唱晚</h2>
          <!-- <p>Sashimi refers to raw fish and other things, dipped in seasoning directly edible fish dishes.</p> -->
        </a>
      </div>
    </li>

    <li tabindex="6">
      <div>
        <a href="#">
          <h2>璀璨星空</h2>
          <!-- <p>Guatemalan handcrafted Xaman beer bottle.</p> -->
        </a>
      </div>
    </li>
  </ul>
</div>

<?php 
  // 文章自定义图片插入
  function imglist(){
    $imgs[0] = 'https://z3.ax1x.com/2021/06/18/R91PG8.png';
    $imgs[1] = 'https://z3.ax1x.com/2021/06/18/R9lHPK.png';
    $imgs[2] = 'https://z3.ax1x.com/2021/06/18/R91Sat.png';
    $imgs[3] = 'https://z3.ax1x.com/2021/06/18/R91CPf.png';
    $imgs[4] = 'https://z3.ax1x.com/2021/06/18/R91nI0.png';
    $imgs[5] = 'https://z3.ax1x.com/2021/06/18/R9lrEq.png';
    $imgs[6] = 'https://z3.ax1x.com/2021/06/18/R91eZn.png';
    $a = mt_rand(0,6);
    echo $imgs[$a];
  }
?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php 
    while($this->next()): 
      if($this->category != "mood"):
    ?>
      <div class="left">
        <div class="c1">
          <div class="c11">
            <img src="<?php imglist() ?>" alt="">
          </div>
          <div class="c12">
            <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
            <!-- <h4><a href=""><?php $this->commentsNum('评论','%d 条评论'); ?></a></h4> -->
            <ul class="post-meta">
				      <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateWord(); ?></time></li>
				      <li><span class="icon-menu"></span> <?php $this->category(','); ?></li>
				      <li itemprop="interactionCount"><span class="icon-eye"></span> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论','%d 条评论'); ?></a></li>
			      </ul>
            <text><?php $this->summary(); ?></text>
          </div>
          <a href="<?php $this->permalink() ?>" class="moretext">阅读全文>></a>
        </div>
      </div>
	<?php 
    endif;
  endwhile; 
  ?>

  <?php $this->pageNav();?>
</div>
<!-- end #main-->
<!-- 文章一左一右 -->
<script>
  $(function(){
    $(".left:even .c1").children(":nth-child(1)").removeClass("c11").addClass("c13")
    $(".left:odd .c1").children(":nth-child(3)").removeClass("moretext").addClass("moretext-2")
  })
</script>
<!-- 封面遮盖特效 -->
<script>
    $(function(){      
        if($(document).scrollTop()>0){
          $("#web-bg").hide()
          $("body").removeClass("hidescroll");
        }else{
          $("body").addClass("hidescroll");
        }
        $(".down").click(function(){
            $(".down").css("transform","rotate(180deg)")
            $("#web-bg").animate({top:"-800px"},1000,function(){
                $(this).hide()
                $("body").removeClass("hidescroll")
            })
        })
    })
</script>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>