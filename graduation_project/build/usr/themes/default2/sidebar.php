<style>
   
</style>
<link rel="stylesheet" href="<?php $this->options->themeUrl('clock.css'); ?>">
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    <!-- <section class="widget">
                <form id="search" method="post" action="./" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" name="s" class="text" placeholder="点我搜索吧！" />
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
	</section>
    -->



<div class="right">
        <div class="clock">
            <div class="flip">
                <div class="digital front" data-number="0"></div>
                <div class="digital back" data-number="1"></div>
            </div>
            <div class="flip">
                <div class="digital front" data-number="0"></div>
                <div class="digital back" data-number="1"></div>
            </div>
            <em class="divider">:</em>
            <div class="flip">
                <div class="digital front" data-number="0"></div>
                <div class="digital back" data-number="1"></div>
            </div>
            <div class="flip">
                <div class="digital front" data-number="0"></div>
                <div class="digital back" data-number="1"></div>
            </div>
            <em class="divider">:</em>
            <div class="flip">
                <div class="digital front" data-number="0"></div>
                <div class="digital back" data-number="1"></div>
            </div>
            <div class="flip">
                <div class="digital front" data-number="0"></div>
                <div class="digital back" data-number="1"></div>
            </div>
        </div>
        <!--  -->
        <!-- <script type="./clock.js"></script> -->
        <!--  -->
        <div class="produce">
            <div class="headd">
              <img src="<?php $this->options->themeUrl('img/休息.png');?>" alt="" style="width: 183px;height: 180px;">
            </div>
            <div class="tit1">
              <h3>拾光云海</h3>
              <text>四个普通的人er罢了</text>
            </div>
            <?php Typecho_Widget::widget('Widget_Stat')->to($item); ?>
            <div class="count">
                <div class="item1" title="累计文章数">
                    <h2 class="num"><?php echo number_format($item->publishedPostsNum); ?></h2>
                    <span>文章数</span>
                </div>
                <div class="item2" title="累计评论数">
                    <h2 class="num"><?php echo number_format($item->publishedCommentsNum); ?></h2>
                    <span>评论量</span>
                </div>
            </div>
            
            <div class="inks">
                <!-- parse('<a href="{permalink}">{title}</a>');  -->
                <?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')
                ->to($recent);
                if($recent->have()):
                    while($recent->next()):
                        if($recent->category != "mood"):
                ?> 
                            <a href="<?php $recent->permalink(); ?>"><?php $recent->title();?></a>
                    <?php 
                        else:
                            
                    ?>
                            <a href="####" >心情(隐藏)</a>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
               
            </div>
            <div class="inkss">
                <img src="<?php $this->options->themeUrl('img/return.png');?>" alt="">
                <img src="<?php $this->options->themeUrl('img/return.png');?>" alt="">
                <img src="<?php $this->options->themeUrl('img/return.png');?>" alt="">
                <img src="<?php $this->options->themeUrl('img/return.png');?>" alt="">
                <img src="<?php $this->options->themeUrl('img/return.png');?>" alt="">
            </div>
        </div>
        <div class="nice">
           <div class="tip2">
            <text class="e1">公</text><text class="e2">告</text>
          </div> 
          <span class="zhan1">欢迎来到我们的小站~</span>
          <img src="<?php $this->options->themeUrl('img/20160713123210_HVaQh.gif');?>" alt="" >
        </div>
        <div class="notice">
            <div class="tip1">
                <text class="e1">归</text><text class="e2">档</text>
            </div>
        <ul class="arc">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
        </div>
</div>
<!-- end #sidebar -->
<script>
    var Flipper = /** @class */ (function() {
    function Flipper(node, currentTime, nextTime) {
        this.isFlipping = false;
        this.duration = 600;
        this.flipNode = node;
        this.frontNode = node.querySelector(".front");
        this.backNode = node.querySelector(".back");
        this.setFrontTime(currentTime);
        this.setBackTime(nextTime);
    }
    Flipper.prototype.setFrontTime = function(time) {
        this.frontNode.dataset.number = time;
    };
    Flipper.prototype.setBackTime = function(time) {
        this.backNode.dataset.number = time;
    };
    Flipper.prototype.flipDown = function(currentTime, nextTime) {
        var _this =this;
        if(this.isFlipping) {
            return false;
        }
        this.isFlipping = true;
        this.setFrontTime(currentTime);
        this.setBackTime(nextTime);
        this.flipNode.classList.add("running");
        setTimeout(function() {
            _this.flipNode.classList.remove("running");
            _this.isFlipping = false;
            _this.setFrontTime(nextTime);
        }, this.duration);
    };
    return Flipper;
    }());

    var getTimeFromDate = function(date) {
        return date
            .toTimeString()
            .slice(0, 8)
            .split(":")
            .join("");
    };

    var flips = document.querySelectorAll(".flip");
    var now = new Date();
    var nowTimeStr = getTimeFromDate(new Date(now.getTime() - 1000));
    var nextTimeStr = getTimeFromDate(now);
    var flippers = Array.from(flips).map(function(flip, i) {return new Flipper(flip, nowTimeStr[i], nextTimeStr[i]);});
    setInterval(function() {
        var now =new Date();
        var nowTimeStr = getTimeFromDate(new Date(now.getTime() - 1000));
        var nextTimeStr = getTimeFromDate(now);
        for(var i=0; i < flippers.length; i++) {
            if(nowTimeStr[i] === nextTimeStr[i]) {
                continue;
            }
            flippers[i].flipDown(nowTimeStr[i], nextTimeStr[i]);
        }
    },1000);
</script>