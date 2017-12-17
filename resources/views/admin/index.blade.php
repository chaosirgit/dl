<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>徳莱管理系统</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="./css/x-admin.css" media="all">
</head>
<body>
<div class="layui-layout layui-layout-admin">
  <div class="layui-header header header-demo">
    <div class="layui-main">
    <div class="admin-logo-box">
				<a class="logo" href="{{url('admin/index')}}" title="logo">徳莱管理系统</a>
				<div class="larry-side-menu">
					<i class="fa fa-th-large" aria-hidden="false"></i>
				</div>
			</div>
            {{--<ul class="layui-nav layui-layout-left layui-ygyd-menu" style="position:absolute; left:250px;">--}}
      {{--<li class="layui-nav-item"><a href="">合作机构</a></li>--}}
      {{--<li class="layui-nav-item"><a href="javascript:;">订单管理</a></li>--}}
      {{--<li class="layui-nav-item"><a href="">统计报表</a></li>--}}
      {{--<li class="layui-nav-item">--}}
        {{--<a href="javascript:;">系统管理</a>--}}
        {{--<dl class="layui-nav-child">--}}
          {{--<dd><a href="">角色管理</a></dd>--}}
          {{--<dd><a href="">权限设置</a></dd>--}}
          {{--<dd><a href="">日志管理</a></dd>--}}
        {{--</dl>--}}
      {{--</li>--}}
    {{--</ul>--}}
    
      <ul class="layui-nav" lay-filter="">
      <!-- <li class="layui-nav-item">
                        <a href="" title="消息">
                            <i class="layui-icon" style="top: 1px;">&#xe63a;</i>
                        </a>
                        </li> -->
        <li class="layui-nav-item"><img src="./images/logo.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
        <li class="layui-nav-item"> <a href="javascript:;">admin</a>
          <dl class="layui-nav-child">
            <!-- 二级菜单 -->
            <dd><a href="">个人信息</a></dd>
            <dd><a href="">切换帐号</a></dd>
            <dd><a href="./login.html">退出</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item x-index"><a href="/">前台首页</a></li>
      </ul>
    </div>
  </div>
  <div class="layui-side layui-bg-black x-side" style="left:-200px;">
    <div class="layui-side-scroll">
      <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
        <li class="layui-nav-item"> <a class="javascript:;" href="javascript:;"> <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite>文章管理</cite> </a>
          <dl class="layui-nav-child">
            <dd class="">
            <dd class=""> <a href="javascript:;" _href="{{url('admin/news')}}"> <cite>新闻列表</cite> </a> </dd>
            </dd>
          </dl>
          <dl class="layui-nav-child">
            <dd class="">
            <dd class=""> <a href="javascript:;" _href="{{url('admin/letter')}}"> <cite>文学天地</cite> </a> </dd>
            </dd>
          </dl>
          <dl class="layui-nav-child">
            <dd class="">
            <dd class=""> <a href="javascript:;" _href="{{url('admin/about')}}"> <cite>联系我们</cite> </a> </dd>
            </dd>
          </dl>
        </li>
        <li class="layui-nav-item"> <a class="javascript:;" href="javascript:;"> <i class="layui-icon" style="top: 3px;">&#xe62d;</i><cite>产品管理</cite> </a>
          <dl class="layui-nav-child">

            <dd class="">
            <dd class=""> <a href="javascript:;" _href="{{url('admin/category')}}"> <cite>产品分类</cite> </a> </dd>
            </dd>

            <dd class="">
            <dd class=""> <a href="javascript:;" _href="{{url('admin/goods')}}"> <cite>产品列表</cite> </a> </dd>
            </dd>

          </dl>
        </li>
        <li class="layui-nav-item"> <a class="javascript:;" href="javascript:;"> <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite> </a>
          <dl class="layui-nav-child">
            <dd class="">
            <dd class=""> <a href="javascript:;" _href="{{url('admin/banner')}}"> <cite>轮播列表</cite> </a> </dd>
            </dd>
          </dl>
        </li>







        <li class="layui-nav-item" style="height: 30px; text-align: center"> </li>
      </ul>
    </div>
  </div>
  <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true" style="left: 0px;border-left: solid 2px #2299ee;">
    <ul class="layui-tab-title">
      <li class="layui-this"> 我的桌面 <i class="layui-icon layui-unselect layui-tab-close">ဆ</i> </li>
    </ul>
    <div class="layui-tab-content site-demo site-demo-body">
      <div class="layui-tab-item layui-show">
        <iframe frameborder="0" src="{{url('admin/welcome')}}" class="x-iframe"></iframe>
      </div>
    </div>
  </div>
  <div class="site-mobile-shade"> </div>
</div>
<script src="./lib/layui/layui.js" charset="utf-8"></script> 
<script src="./js/x-admin.js"></script> 
</body>
</html>