<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 模态框（Modal）插件</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		*{padding: 0;margin: 0;}
		.modal-body {
			text-align: center;
		}
	</style>
</head>
<body>

<h2>创建模态框（Modal）</h2>
<!-- 按钮触发模态框 -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	开始演示模态框
</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					用户登录
				</h4>
			</div>
			<form action="" method="post" name="login" role="form">
			<div class="modal-body">
                <p>
                    <label for="name" class="sr-only">用户名</label>
                    <input type="text" id="name" name="name" value="" placeholder="用户名" class="text-l w-100" required />
                </p>
                <p>
                    <label for="password" class="sr-only">密码</label>
                    <input type="password" id="password" name="password" class="text-l w-100" placeholder="密码" required/>
                </p>
			</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">提交更改</button>
                    <input type="hidden" name="referer" value="<?php echo htmlspecialchars($request->get('referer')); ?>" />
                </div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
</body>
</html>
asdfs

</div> -->
