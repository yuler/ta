@extends('site::_layouts/home')

@section('title')
	用户登录
@stop

@section('header')
	<center>
		<h1>用户登录</h1>
	</center>
@stop

@section('main')
	<div class="singin-page form-horizontal" role="form">
		<form class="form-horizontal" role="form" action="{{ route('site.signIn.post') }}" method="post">
			<div class="form-group">
				<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
					<input type="email" class="form-control" id="inputEmail" placeholder="请输入用户名或邮箱">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
					<input type="password" class="form-control" id="inputPassword" placeholder="请输入密码">
				</div>
			</div>
			<!-- <div class="form-group">
				<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
					<div class="checkbox col-xs-6">
						<label>
							<input type="checkbox"> 记住账号
						</label>
					</div>
					<div class="checkbox col-xs-6"  style="text-align:right;">
						<a href="">找回密码?</a>
					</div>
				</div>
			</div> -->
			<div class="form-group">
				<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
					<button type="submit" class="btn btn-default btn-block">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
					<a href="{{ route('site.forget') }}" class="btn btn-link btn-block a_underline">找回密码?</a>
				</div>
			</div>
		</form>
	</div>
@stop