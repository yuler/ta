<!-- navigation -->
	<div class="navigation ">
		<ul>
			<li class="float-left"><a href="#"><span class="icon-reorder icon-large"></span></a></li>
			<li class="float-left"><a href="{{ route('site.home')}}"><span class="icon-home icon-large"></span></a></li>
		@if (Session::has('user'))
			<li class="navbar-right dropdown float-right">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-user"></span><b class="caret"></b></a>
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
		    <li class="float-right"><a href="#"><span class="icon-volume-up"></span></a></li>
		@else
		   	<li class="float-right"><a href="{{ route('site.signIn')}}"><span><font style="font-size:14px;">登录</font></span></a></li>
			<li class="float-right"><a href="{{ route('site.signUp')}}"><span>注册</span></a></li>
		@endif
		</ul>
	</div>