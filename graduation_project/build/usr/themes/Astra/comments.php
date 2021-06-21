<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="comments-area">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <div class="comments-count-wrapper">
        <h3 class="comments-title">
                <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?>         
        </h3>
    </div>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('上一页', '下一页'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>

<div id="respond" class="comment-respond">
    <h3 id="reply-title" class="comment-reply-title">添加新评论 <small><?php $comments->cancelReply(); ?></small></h3>
    <form method="post" action="<?php $this->commentUrl() ?>" id="ast-commentform" class="comment-form">
            <p class="comment-notes">
                <span id="email-notes">电子邮件地址不会被公开，评论内容可能需要管理员审核后显示。</span>
            </p>
        <div class="ast-row comment-textarea">
            <fieldset class="comment-form-comment">
                <div class="comment-form-textarea ast-col-lg-12">
                    <label for="comment" class="screen-reader-text">评论内容</label><textarea id="comment" name="text" placeholder="请输入您的评论" cols="45" rows="8" aria-required="true"></textarea>
                </div>
            </fieldset>
        </div>
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
        <div class="ast-comment-formwrap ast-row">
            <p class="comment-form-author ast-col-xs-12 ast-col-sm-12 ast-col-md-4 ast-col-lg-4">
                <label for="author" class="screen-reader-text">称呼</label><input id="author" name="author" type="text" value="" placeholder="称呼" size="30" >
            </p>
            <p class="comment-form-email ast-col-xs-12 ast-col-sm-12 ast-col-md-4 ast-col-lg-4">
                <label for="email" class="screen-reader-text">邮箱</label><input id="email" name="mail" type="text" value="" placeholder="邮箱" size="30" aria-required="true">
            </p>
            <p class="comment-form-url ast-col-xs-12 ast-col-sm-12 ast-col-md-4 ast-col-lg-4">
                <label for="url"><label for="url" class="screen-reader-text">网址</label><input id="url" name="url" type="text" value="" placeholder="网址" size="30"></label>
            </p>
        </div>
        <?php endif; ?>
        <p class="form-submit">
            <input name="submit" type="submit" id="submit" class="submit" value="提交评论"><input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
        </p>
    </form>
</div>


    
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
