<!-- sider -->
	<div class="pinned" id="pinned-left">
		<span class="sb-toggle-left btn-link"><img src="/site/assets/img/pin_icon_menu.png"></span><br>
	</div>
	<div class="pinned" id="pinned-right">
		<span class="sb-toggle-right btn-link"><img src="/site/assets/img/pin_icon_user.png"></span><br>
	</div>
	
	<div class="sb-slidebar sb-left">
	    <ul class="sider-nav-list nav nav-pills nav-stacked navbar-inverse">
			<li><a href="{{ route('home') }}">主页</a></li>
			<li><a href="{{ route('topic') }}">主题</a></li>
			<li><a href="{{ route('signIn') }}">登录</a></li>
			<li><a href="{{ route('signUp') }}">注册</a></li>
		</ul>
    </div>

	<div class="sb-slidebar sb-right">
		<ul class="sider-nav-list nav nav-pills nav-stacked navbar-inverse">
			<li><a href="#">我的主页</a></li>
			<li><a href="#">我的主题</a></li>
			<li><a href="#">我的收藏</a></li>
			<li><a href="#">我的消息</a></li>
			<li><a href="#">设置</a></li>
			<li><a href="#">帮助</a></li>
			<li><a href="#">退出</a></li>
		</ul>
    </div>
