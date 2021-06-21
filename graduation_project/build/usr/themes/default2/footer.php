<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<!-- <footer id="footer" class="container" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.<?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<span class="alignright"><a href="#">TOP <span class="icon-chevrons-up"></span></a></span>
</footer> -->
<!-- end #footer -->
<footer class="footer">
  <p class="about">
    © 2020-2021  By  <a href="<?php $this->options->siteUrl(); ?>">拾光云海</a>
    <br/>春光复始 适常如斯 ツ
  </p>
  <span class="top"><a href="#top"><img src="<?php $this->options->themeUrl('img/火箭.png'); ?>" alt=""> </a></span>
</footer>
<script>
    $(function(){
        $(".top").hide()
        $(window).scroll(function() {
            var scroll_height = $(document).scrollTop();
            console.log(scroll_height)
            if(scroll_height>590){
                $(".top").show()
            }else{
                $(".top").hide()
            }
        })
    })
    
</script>
<?php $this->footer(); ?>
</body>
</html>
