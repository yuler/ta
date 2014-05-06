@extends('site::_layouts/home')

@section('title')
	找回密码
@stop

@section('header')
	<center>
		<h1>找回密码</h1>
	</center>
@stop

@section('main')
	<div class="singup-page form-horizontal" role="form">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
					<input type="email" class="form-control" id="inputEmail" placeholder="请输入邮箱">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
					<button type="submit" class="btn btn-default btn-block">找回密码</button>
				</div>
			</div>
		</form>
	</div>
@stop