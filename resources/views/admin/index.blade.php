<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>徳莱商贸后台管理系统</title>
    <link rel="stylesheet" href="./plugins/layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./build/css/app.css" media="all">
</head>

<body>
    <div class="layui-layout layui-layout-admin kit-layout-admin">
        <div class="layui-header">
            <div class="layui-logo">徳莱商贸后台管理系统</div>
            <div class="layui-logo kit-logo-mobile">DL</div>
            {{--<ul class="layui-nav layui-layout-left kit-nav">--}}
                {{--<li class="layui-nav-item"><a href="javascript:;">控制台</a></li>--}}
                {{--<li class="layui-nav-item"><a href="javascript:;">商品管理</a></li>--}}
                {{--<li class="layui-nav-item"><a href="javascript:;" id="pay"><i class="fa fa-gratipay" aria-hidden="true"></i> 捐赠我</a></li>--}}
                {{--<li class="layui-nav-item">--}}
                    {{--<a href="javascript:;">其它系统</a>--}}
                    {{--<dl class="layui-nav-child">--}}
                        {{--<dd><a href="javascript:;">邮件管理</a></dd>--}}
                        {{--<dd><a href="javascript:;">消息管理</a></dd>--}}
                        {{--<dd><a href="javascript:;">授权管理</a></dd>--}}
                    {{--</dl>--}}
                {{--</li>--}}
            {{--</ul>--}}
            <ul class="layui-nav layui-layout-right kit-nav">
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <img src="http://m.zhengjinfan.cn/images/0.jpg" class="layui-nav-img"> Van
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">基本资料</a></dd>
                        <dd><a href="javascript:;">安全设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="javascript:;"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a></li>
            </ul>
        </div>

        <div class="layui-side layui-bg-black kit-side">
            <div class="layui-side-scroll">
                <div class="kit-side-fold"><i class="fa fa-navicon" aria-hidden="true"></i></div>
                <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
                <ul class="layui-nav layui-nav-tree" lay-filter="kitNavbar" kit-navbar>
                    <li class="layui-nav-item">
                        <a class="" href="javascript:;"><i class="layui-icon" aria-hidden="true">&#xe614;</i><span>  网站设置</span></a>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" kit-target data-options="{url:'test.html',icon:'&#xe634;',title:'轮播图',id:'1'}">
                                    <i class="layui-icon">&#xe634;</i><span> 轮播图</span></a>
                            </dd>
                            {{--<dd>--}}
                                {{--<a href="javascript:;" data-url="form" data-icon="fa-user" data-title="表单" kit-target data-id='2'><i class="fa fa-user" aria-hidden="true"></i><span> 表单</span></a>--}}
                            {{--</dd>--}}
                            {{--<dd>--}}
                                {{--<a href="javascript:;" data-url="nav.html" data-icon="&#xe628;" data-title="导航栏" kit-target data-id='3'><i class="layui-icon">&#xe628;</i><span> 导航栏</span></a>--}}
                            {{--</dd>--}}
                            {{--<dd>--}}
                                {{--<a href="javascript:;" data-url="list4.html" data-icon="&#xe614;" data-title="列表四" kit-target data-id='4'><i class="layui-icon">&#xe614;</i><span> 列表四</span></a>--}}
                            {{--</dd>--}}
                            {{--<dd>--}}
                                {{--<a href="javascript:;" kit-target data-options="{url:'https://www.baidu.com',icon:'&#xe658;',title:'百度一下',id:'5'}"><i class="layui-icon">&#xe658;</i><span> 百度一下</span></a>--}}
                            {{--</dd>--}}
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a href="javascript:;"><i class="layui-icon" aria-hidden="true">&#xe631;</i><span> 内容管理</span></a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" kit-target data-options="{url:'navbar.html',icon:'&#xe60a;',title:'新闻',id:'6'}"><i class="layui-icon">&#xe60a;</i><span> 新闻</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'tab.html',icon:'&#xe64c;',title:'产品',id:'7'}"><i class="layui-icon">&#xe64c;</i><span> 产品</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'onelevel.html',icon:'&#xe606;',title:'联系我们',id:'50'}"><i class="layui-icon">&#xe606;</i><span> 联系我们</span></a></dd>
                            {{--<dd><a href="javascript:;" kit-target data-options="{url:'app.html',icon:'&#xe658;',title:'App',id:'8'}"><i class="layui-icon">&#xe658;</i><span> app.js主入口</span></a></dd>--}}
                        </dl>
                    </li>
                    {{--<li class="layui-nav-item">--}}
                        {{--<a href="javascript:;" data-url="/components/table/table.html" data-name="table" kit-loader><i class="fa fa-plug" aria-hidden="true"></i><span> 表格(page)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="layui-nav-item">--}}
                        {{--<a href="javascript:;" data-url="/views/form.html" data-name="form" kit-loader><i class="fa fa-plug" aria-hidden="true"></i><span> 表单(page)</span></a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
        <div class="layui-body" id="container">
            <!-- 内容主体区域 -->
            <div style="padding: 15px;">主体内容加载中,请稍等...</div>
        </div>

        <div class="layui-footer">
            <!-- 底部固定区域 -->
            2017 &copy;
            <a href="http://kit.zhengjinfan.cn/">kit.zhengjinfan.cn/</a> MIT license

        </div>
    </div>

    <script src="./plugins/layui/layui.js"></script>
    <script>
        var message;
        layui.config({
            base: 'build/js/'
        }).use(['app', 'message'], function() {
            var app = layui.app,
                $ = layui.jquery,
                layer = layui.layer;
            //将message设置为全局以便子页面调用
            message = layui.message;
            //主入口
            app.set({
                type: 'iframe'
            }).init();
            $('#pay').on('click', function() {
                layer.open({
                    title: false,
                    type: 1,
                    content: '<img src="/build/images/pay.png" />',
                    area: ['500px', '250px'],
                    shadeClose: true
                });
            });
        });
    </script>
</body>

</html>