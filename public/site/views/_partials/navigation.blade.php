<!-- navigation -->
	<div class="navigation ">
			<div class="row">
				<ul class="col-xs-4 col-ms-3 col-md-2 col-lg-2 col-xs-offset-1 ">
					<li class="col-xs-6"><a href="#"><span class="icon-reorder"></span></a></li>
					<li class="col-xs-6"><a href="{{ route('site.home')}}"><span class="glyphicon glyphicon-home"></span></a></li>
				</ul>
				<ul class="col-xs-4 col-ms-3 col-md-2 col-lg-2 col-xs-offset-2 col-ms-offset-4 col-md-offset-6 col-lg-offset-6">
				@if (Session::has('user'))
				    <li class="col-xs-6	"><a href="#"><span class="glyphicon glyphicon-volume-up"></span></a></li>
					<li class="navbar-right dropdown col-xs-6">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
				    	<ul class="dropdown-menu">
							<li><a href="{{ route('site.user.get')}}">个人设置</a></li>
							<li><a href="{{ route('site.user.get')}}">账户设置</a></li>
							<li><a href="#">主题管理</a></li>
							<li class="divider"></li>
							<li><a href="#">活动</a></li>
							<li class="divider"></li>
							<li><a href="{{ route('site.logout')}}">退出系统</a></li>
						</ul>
					</li>
				@else
					<li class="col-xs-6 text-right"><a href="{{ route('site.signUp')}}"><span>注册</span></a></li>
				   	<li class="col-xs-6 text-right"><a href="{{ route('site.signIn')}}"><span>登录</span></a></li>
				@endif
				</ul>
			</div>

	</div>