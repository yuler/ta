@extends('site::_layouts/home')

@section('main')
	
	<div class="singUp_page form-horizontal" role="form">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-3">
					<label for="inputPassword" class="control-label">用户名</label>
				</div>
				<div class="col-xs-3">
					<input type="password" class="form-control" id="inputPassword" placeholder="请输入用户名">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-3">
					<label for="inputEmail" class="control-label">邮箱</label>
				</div>
				<div class="col-xs-3">
					<input type="email" class="form-control" id="inputEmail" placeholder="请输入邮箱">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-3">
					<label for="inputPassword" class="control-label">密码</label>
				</div>
				<div class="col-xs-3">
					<input type="password" class="form-control" id="inputPassword" placeholder="请输入密码">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-3">
					<label for="inputPassword" class="control-label">确认密码</label>
				</div>
				<div class="col-xs-3">
					<input type="password" class="form-control" id="inputPassword" placeholder="请确认密码">
				</div>
			</div>
			<br>
			<div class="form-group">
				<div class="col-xs-offset-6 col-xs-3">
					<button type="submit" class="btn btn-default btn-block">注&nbsp;&nbsp;&nbsp;&nbsp;册</button>
				</div>
			</div>
		</form>
	</div>

@stop