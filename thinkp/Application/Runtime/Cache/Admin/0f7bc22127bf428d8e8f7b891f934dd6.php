<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

		<link href="/thinkp/Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

		<link href="/thinkp/Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">

		<link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">

	</head>

	<body>
		<form action="addNodeHandler" method="post">
			<div class="alert alert-success">添加节点</div>
			<div class="form-group">
				<label for="exampleInputEmail1">应用名称</label>

				<input type="text" name="name" class="form-control">
			<div class="form-group">
				<label for="exampleInputEmail1">应用描述</label>

				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">是否开启</label>
				<br> 
				关闭：<input type="radio" name="status" id="" value="0" > 
				开启：<input type="radio" name="status" id="" value="1" checked>

			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">排序</label>

				<input type="text" name="sort" class="form-control" value="1">
			</div>
			<input type="hidden" name="pid" id="" value="0" />
			<input type="hidden" name="level" id="" value="1" />
			<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>

</html>