<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php
$the_host = $_SERVER['HTTP_HOST'];
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
if($the_host == 'www.jiangjizhong.com')
{
header('HTTP/1.1 301 Moved Permanently');
header('Location: http://jiangjizhong.com'.$request_uri);//
}
?>

    <!-- 使用url函数转换相关路径 -->
    <!-- <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css"> -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('search-form.css'); ?>">
    <link rel="icon" type="image/png" href="<?php $this->options->themeUrl('img/卡通人像.png'); ?>">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="usr/themes/default2/style.css"> -->
    <!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('icomoon/style.css'); ?>"> -->
    <!--[if lt IE 9]>/
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
    <style>
        *{padding: 0;margin: 0;}
    </style>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<!-- 顶部导航栏 -->
<div id="h" class="clearfix">
<div href="#" class="x">
        <ul class="ccn">
            <!-- <li><a href="搜索框设计（css+js）/index.html">搜索</a></li> -->
            <li><a href="<?php $this->options->siteUrl();?>">首页</a></li>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()) : ?>
                    <?php if ($category->levels === 0) : ?>
                        <?php $children = $category->getAllChildren($category->mid); ?>
                        <?php if (empty($children)) : ?>
                            <li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
                        <?php else: ?>
                            <li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
                                <ul>
                                    <?php foreach ($children as $mid) : ?>
                                            <?php $child = $category->getCategory($mid); ?>
                                            <li><a href="<?php echo $child['permalink'] ?>" title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
            <?php endwhile; ?>
            <li><a href="#">娱乐</a>
                <ul> 
                    <li><a href="https://music.163.com/">音乐</a></li>
                    <li><a href="https://movie.douban.com/">电影</a></li>
                    <li><a href="<?php $this->options->themeUrl('index.html'); ?>">相册</a></li>
                    
                </ul>
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?></ul>
            <!-- <li><a href="<?php $this->options->themeUrl('messageboard.php'); ?>">留言板</a>
            </li> -->
            <!-- <li><a href="#">关于</a></li> -->
        </ul>
</div>
<!-- 搜索框 -->
<form method="post" action="./" role="search">
    <div class="search-wrapper">
    			<div class="input-holder">
    				<input type="text" name="s" class="search-input" placeholder="Type to search" />
    				<button type="submit" class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
    			</div>
    			    <span class="close" onclick="searchToggle(this, event);"></span>
    			    <div class="result-container">
    			</div>
    </div>
</form>
<div class="logo"><a href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->themeUrl('img/logo2.png'); ?>" alt="<?php $this->options->title() ?>" /></a></div>
    <?php if($this->user->hasLogin()): ?>
        <div class="logined">
		    <a href="<?php $this->options->adminUrl(); ?>">进入后台 |</a>
            <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
        </div>
    <?php else: ?>
        <a href="#" data-toggle="modal" data-target="#myModal" class="login">登录</a>
    <?php endif; ?>
    <div class="menu">
        <img src="<?php $this->options->themeUrl('img/菜单.png');?>" alt="">
    </div>
</div>
<!-- 响应式导航栏侧边框 -->
<div class="ccn-sidebar">
<ul>
            <!-- <li><a href="搜索框设计（css+js）/index.html">搜索</a></li> -->
            <li onclick="window.location.href='<?php $this->options->siteUrl();?>'"><a href="#">首页</a>
            </li>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()) : ?>
                    <?php if ($category->levels === 0) : ?>
                        <?php $children = $category->getAllChildren($category->mid); ?>
                        <?php if (empty($children)) : ?>
                            <li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
                        <?php else: ?>
                            <li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
                                <ul>
                                    <?php foreach ($children as $mid) : ?>
                                            <?php $child = $category->getCategory($mid); ?>
                                            <li><a href="<?php echo $child['permalink'] ?>" title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
            <?php endwhile; ?>
            <li><a href="#">娱乐</a>
                <ul> 
                    <li><a href="https://music.163.com/">音乐</a></li>
                    <li><a href="https://movie.douban.com/">电影</a></li>
                    <li><a href="<?php $this->options->themeUrl('index.html'); ?>">相册</a></li>
                    
                </ul>
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?></ul>
            
</ul>
</div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- <div class="modal-header"> -->
				<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button> -->
				<h2 class="modal-title" id="myModalLabel">
					LOGIN
				</h2>
			<!-- </div> -->
			<form action="<?php $this->options->loginAction(); ?>" method="post" name="login" role="form">
			<div class="mo_body">
                <p>
                    <label for="name" class="sr-only">用户名</label>
                    <input type="text" id="name" name="name" value="" placeholder="username" class="text-l w-100" required />
                </p>
                <p>
                    <label for="password" class="sr-only">密码</label>
                    <input type="password" id="password" name="password" class="text-l w-100" placeholder="password" required/>
                </p>
			</div>
                <div class="mo_footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                    
                    <input type="hidden" name="referer" value="<?php $this->options->siteUrl(); ?>">
                </div>
                <?php if($this->options->allowRegister): ?>
                        <a href="<?php $this->options->registerUrl(); ?>" class="regist">还没有账号嘛？点我注册咯~</a>
                    <?php endif; ?>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->




</div>

<!-- end #header -->
<!-- <script>function tg_c(id,nc){var e=document.getElementById(id);var c=e.className;if(!c){e.className=nc}else{var classArr=c.split(' ');var exist=false;for(var i=0;i<classArr.length;i++){if(classArr[i]===nc){classArr.splice(i,1);e.className=Array.prototype.join.call(classArr," ");exist=true;break}}if(!exist){classArr.push(nc);e.className=Array.prototype.join.call(classArr," ")}}}</script> -->
<!-- 导航栏下拉框js -->
<script type="text/javascript">
        $(function (argument) {
            $(".ccn>li").mouseover(function(event) {
                $(this).children('ul').show();
                $(this).siblings('ul').children('ul').hide();
            });
            $(".ccn>li").mouseout(function(event) {
                $(this).children('ul').hide();
            });
        })
</script>
<!-- 响应式导航栏侧边栏js -->
<script>
    $(function (argument) {
        $(".ccn-sidebar>ul>li").click(function(event) {
           $(this).children('ul').slideDown(1000).end().siblings('li').children('ul').slideUp(1000) //end()可以跳回原来的操作对象。
           $(this).addClass("select").children('a').addClass('fcolor').end().siblings().removeClass("select").children('a').removeClass('fcolor')
        });
        $(".menu").click(function(){
            $(".ccn-sidebar").stop(true,true).fadeToggle(1000);
        })
    
    });
    
</script>
<!-- <div id="header" class="clearfix"><div class="container"></div></div> -->
<!-- 验证登录 -->
<script>
    <?php
    $cookie = Typecho_Cookie::getPrefix();
    $notice = $cookie . '__typecho_notice';
    $type = $cookie . '__typecho_notice_type';
    ?>
    <?php if (isset($_COOKIE[$notice]) && isset($_COOKIE[$type]) && ($_COOKIE[$type] == 'success' || $_COOKIE[$type] == 'notice' || $_COOKIE[$type] == 'error')) : ?>
        alert("<?php echo preg_replace('#\[\"(.*?)\"\]#', '$1', $_COOKIE[$notice]); ?>！")
    <?php endif; ?>
    <?php
    Typecho_Cookie::delete('__typecho_notice');
    Typecho_Cookie::delete('__typecho_notice_type');
    ?>
</script>
<!-- 背景特效-->
<script>
    // 可调参数
    var BACKGROUND_COLOR = "#9bacb6";   // 背景颜色
    var POINT_NUM = 100;                        // 星星数目
    var POINT_COLOR = "rgba(255,255,255,0.7)";  // 点的颜色
    var LINE_LENGTH = 10000;                    // 点之间连线长度(的平方)
        
    // 创建背景画布
    var cvs = document.createElement("canvas");
    cvs.width = window.innerWidth;
    cvs.height = window.innerHeight;
    cvs.style.cssText = "\
        position:fixed;  \
        top:0px;         \
        left:0px;        \
        z-index:-1;      \
        opacity:1.0;     \
        ";
    document.body.appendChild(cvs);
        
    var ctx = cvs.getContext("2d");
        
    var startTime = new Date().getTime();
        
    //随机数函数
    function randomInt(min, max) {
        return Math.floor((max - min + 1) * Math.random() + min);
    }
    
    function randomFloat(min, max) {
        return (max - min) * Math.random() + min;
    }
    
    //构造点类
    function Point() {
        this.x = randomFloat(0, cvs.width);
        this.y = randomFloat(0, cvs.height);
    
        var speed = randomFloat(0.3, 1.4);
        var angle = randomFloat(0, 2 * Math.PI);
    
        this.dx = Math.sin(angle) * speed;
        this.dy = Math.cos(angle) * speed;
    
        this.r = 1.2;
    
        this.color = POINT_COLOR;
    }
    
    Point.prototype.move = function () {
        this.x += this.dx;
        if (this.x < 0) {
            this.x = 0;
            this.dx = -this.dx;
        } else if (this.x > cvs.width) {
            this.x = cvs.width;
            this.dx = -this.dx;
        }
        this.y += this.dy;
        if (this.y < 0) {
            this.y = 0;
            this.dy = -this.dy;
        } else if (this.y > cvs.height) {
            this.y = cvs.height;
            this.dy = -this.dy;
        }
    }
    
    Point.prototype.draw = function () {
        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        ctx.closePath();
        ctx.fill();
    }
    
    var points = [];
    
    function initPoints(num) {
        for (var i = 0; i < num; ++i) {
            points.push(new Point());
        }
    }
    
    var p0 = new Point(); //鼠标
    p0.dx = p0.dy = 0;
    var degree = 2.5;
    document.onmousemove = function (ev) {
        p0.x = ev.clientX;
        p0.y = ev.clientY;
    }
    document.onmousedown = function (ev) {
        degree = 5.0;
        p0.x = ev.clientX;
        p0.y = ev.clientY;
    }
    document.onmouseup = function (ev) {
        degree = 2.5;
        p0.x = ev.clientX;
        p0.y = ev.clientY;
    }
    window.onmouseout = function () {
        p0.x = null;
        p0.y = null;
    }
    
    function drawLine(p1, p2, deg) {
        var dx = p1.x - p2.x;
        var dy = p1.y - p2.y;
        var dis2 = dx * dx + dy * dy;
        if (dis2 < 2 * LINE_LENGTH) {
            if (dis2 > LINE_LENGTH) {
                if (p1 === p0) {
                    p2.x += dx * 0.03;
                    p2.y += dy * 0.03;
                } else return;
            }
            var t = (1.05 - dis2 / LINE_LENGTH) * 0.2 * deg;
            ctx.strokeStyle = "rgba(255,255,255," + t + ")";
            ctx.beginPath();
            ctx.lineWidth = 1.5;
            ctx.moveTo(p1.x, p1.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.closePath();
            ctx.stroke();
        }
        return;
    }
    
    //绘制每一帧
    function drawFrame() {
        cvs.width = window.innerWidth;
        cvs.height = window.innerHeight;
        ctx.fillStyle = BACKGROUND_COLOR;
        ctx.fillRect(0, 0, cvs.width, cvs.height);
    
        var arr = (p0.x == null ? points : [p0].concat(points));
        for (var i = 0; i < arr.length; ++i) {
            for (var j = i + 1; j < arr.length; ++j) {
                drawLine(arr[i], arr[j], 1.0);
            }
            arr[i].draw();
            arr[i].move();
        }
    
        window.requestAnimationFrame(drawFrame);
    }
    
    initPoints(POINT_NUM);
    drawFrame();
</script>
<!-- 顶部导航栏自动隐藏动画 -->
<script>
    $(function(){
        //页面初始化的时候，获取滚动条的高度（上次高度）
        var start_height = $(document).scrollTop();
        //获取导航栏的高度(包含 padding 和 border)
        var navigation_height = $('#h').outerHeight();
        $(window).scroll(function() {
            //触发滚动事件后，滚动条的高度（本次高度）
            var end_height = $(document).scrollTop();
            //触发后的高度 与 元素的高度对比
            if (end_height > navigation_height){
                if(!$("#h").is(":animated")){
                    $('#h').stop(true,true).animate({top:"-60px"});
                }
            }else {
                if(!$("#h").is(":animated")){
                    $('#h').stop(true,true).animate({top:"0"})
                }

            }
            //触发后的高度 与 上次触发后的高度
            if (end_height < start_height){
                // if(!$("#h").is(":animated")){
                    $('#h').stop(true,true).animate({top:"0"})
                // }
            }
            //再次获取滚动条的高度，用于下次触发事件后的对比
            start_height = $(document).scrollTop();
        });
    });
</script>
<!-- 搜索框特效 -->
<script>
    function searchToggle(obj, evt){
		var container = $(obj).closest('.search-wrapper');

		if(!container.hasClass('active')){
			  container.addClass('active');
			  evt.preventDefault();
		}
		else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
			  container.removeClass('active');
			  // clear input
			  container.find('.search-input').val('');
			  // clear and hide result container when we press close
			  container.find('.result-container').fadeOut(100, function(){$(this).empty();});
		}
	}
</script>

<div id="body">
    <div class="container">
        <div class="row">

    
    
