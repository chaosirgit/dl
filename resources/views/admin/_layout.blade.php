<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <title>中合信商管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->
    <link href="//o42mviu36.qnssl.com/static/ace/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/font-awesome/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/datepicker.css" />
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/bootstrap-timepicker.css" />
    <!-- fonts -->

    {{--<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" />--}}

    <!-- ace styles -->

    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/ace.min.css" />
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/bootstrap-tokenfield/css/bootstrap-tokenfield.min.css" />


    <!--[if lte IE 8]>
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/ace/assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="//o42mviu36.qnssl.com/static/bootstrap3-dialog/bootstrap-dialog.min.css" />

    <!-- inline styles related to this page -->
    <link rel="stylesheet" href="/style/style.css" />
    <!-- ace settings handler -->

    <script src="//o42mviu36.qnssl.com/static/ace/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="//o42mviu36.qnssl.com/static/ace/assets/js/html5shiv.js"></script>
    <script src="//o42mviu36.qnssl.com/static/ace/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    中合信商
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="//o42mviu36.qnssl.com/static/ace/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临</small>
									{{ $admin_username }}
								</span>
                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="{{$www_host}}/admin/password">
                                <i class="icon-cog"></i>
                                修改密码
                            </a>
                        </li>
                        <li>
                            <a href="{{$www_host}}/admin/app_user">
                                <i class="icon-cog"></i>
                                绑定APP用户ID
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{$www_host}}/admin/logout">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <ul class="nav nav-list" id="left_menu">

                <li>
                    <a href="{{$www_host}}/admin/dashboard">
                        <i class="icon-home"></i>
                        <span class="menu-text"> 首页 </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-group"></i>
                        <span class="menu-text"> 用户管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{$user_host}}/admin/users">
                                <i class="icon-list"></i>
                                用户列表
                            </a>
                        </li>
                        <li>
                            <a href="{{$user_host}}/admin/user_appointment_order/repeat/lists">
                                <i class="icon-list-ol"></i>
                                <span class="menu-text"> 用户预约 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$user_host}}/admin/user_withdrawal">
                                <i class="icon-money"></i>
                                <span class="menu-text"> 提现管理 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$user_host}}/admin/message">
                                <i class="icon-money"></i>
                                <span class="menu-text"> 短信发送 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$user_host}}/admin/notification">
                                <i class="icon-money"></i>
                                <span class="menu-text"> APP推送 </span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--<li>--}}
                {{--<a href="#" class="dropdown-toggle">--}}
                {{--<i class="icon-tasks"></i>--}}
                {{--<span class="menu-text"> 咨询师管理 </span>--}}

                {{--<b class="arrow icon-angle-down"></b>--}}
                {{--</a>--}}

                {{--<ul class="submenu">--}}
                {{--<li>--}}
                {{--<a href="{{$user_host}}/admin/consultants">--}}
                {{--<i class="icon-list"></i>--}}
                {{--咨询师列表--}}
                {{--</a>--}}
                {{--<a href="{{$user_host}}/admin/consultant/contacts">--}}
                {{--<i class="icon-list"></i>--}}
                {{--联系人列表--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li>
                    <a href="{{$user_host}}/admin/notice/list">
                        <i class="icon-envelope"></i>
                        <span class="menu-text"> 通知管理 </span>
                    </a>
                </li>
                <li>
                    <a href="{{$www_host}}/admin/categories">
                        <i class="icon-th-list"></i>
                        <span class="menu-text"> 分类管理 </span>
                    </a>
                </li>

                <li>
                    <a href="{{$www_host}}/admin/threelevel">
                        <i class="icon-th-list"></i>
                        <span class="menu-text"> 三级分类 </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-shopping-cart"></i>
                        <span class="menu-text"> 产品管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{$mall_host}}/admin/products">
                                <i class="icon-th-list"></i>
                                产品列表
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/coupons">
                                <i class="icon-money"></i>
                                <span class="menu-text"> 优惠券管理 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/orders">
                                <i class="icon-list-alt"></i>
                                <span class="menu-text"> 订单管理 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/order/referrer/track">
                                <i class="icon-list-alt"></i>
                                <span class="menu-text"> 特惠分享返现 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/service_items">
                                <i class="icon-file-alt"></i>
                                <span class="menu-text"> 上传服务流程 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/tags">
                                <i class="icon-font"></i>
                                <span class="menu-text"> Tags管理 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/brands">
                                <i class="icon-text"></i>
                                <span class="menu-text"> 品牌设备术后管理 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/postoperative_tips">
                                <i class="icon-text"></i>
                                <span class="menu-text"> 术后短信管理 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$mall_host}}/admin/hot_search">
                                <i class="icon-text"></i>
                                <span class="menu-text">搜索关联管理 </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-comments"></i>
                        <span class="menu-text"> 动态管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{$sns_host}}/admin/beauty_notes">
                                <i class="icon-book"></i>
                                <span class="menu-text"> 美人记</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/hospital_cases">
                                <i class=" icon-reorder"></i>
                                <span class="menu-text"> 案例 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/questions">
                                <i class="icon-question-sign"></i>
                                <span class="menu-text"> 问答 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/group">
                                <i class="icon-retweet"></i>
                                <span class="menu-text"> 圈子 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/post">
                                <i class="icon-retweet"></i>
                                <span class="menu-text"> 帖子 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/comment?type=1">
                                <i class="icon-retweet"></i>
                                <span class="menu-text"> 评论 </span>
                            </a>
                        </li>
                        <li>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/reports">
                                <i class="icon-book"></i>
                                <span class="menu-text"> 举报管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/beauty_note_cashbacks">
                                <i class="icon-book"></i>
                                <span class="menu-text"> 美人记返现申请</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/blackword">
                                <i class="icon-book"></i>
                                <span class="menu-text"> 敏感词管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$sns_host}}/admin/beauty_virtual">
                                <i class="icon-book"></i>
                                <span class="menu-text"> 水军管理</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="{{$user_host}}/admin/hospitals">
                        <i class="icon-hospital"></i>
                        <span class="menu-text"> 机构管理 </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-gift"></i>
                        <span class="menu-text"> 活动管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{$www_host}}/admin/activity">
                                <i class="icon-book"></i>
                                <span class="menu-text"> APP活动</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$www_host}}/admin/activity/h5">
                                <i class="icon-reorder"></i>
                                <span class="menu-text"> H5活动 </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{$www_host}}/admin/activity/bargain">
                                <i class="icon-reorder"></i>
                                <span class="menu-text"> 砍价活动 </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{$bi_host}}/admin/report/dashboard">
                        <i class="icon-hospital"></i>
                        <span class="menu-text"> 统计 </span>
                    </a>
                </li>
                <li>
                    <a href="{{$www_host}}/admin/advertise">
                        <i class="icon-picture"></i>
                        <span class="menu-text"> 广告位管理 </span>
                    </a>
                </li>

                <li>
                    <a href="{{$mall_host}}/admin/beauty_pays">
                        <i class="icon-money"></i>
                        <span class="menu-text"> 美丽付 </span>
                    </a>
                </li>
                <li>
                    <a href="{{$www_host}}/admin/app_settings">
                        <i class="icon-cog"></i>
                        <span class="menu-text"> APP参数设置 </span>
                    </a>
                </li>
                <li>
                    <a href="{{$www_host}}/admin/app_versions">
                        <i class="icon-apple"></i>
                        <span class="menu-text"> APP发布 </span>
                    </a>
                </li>
                <li>
                    <a href="{{$user_host}}/admin/user_complaints">
                        <i class="icon-book"></i>
                        <span class="menu-text"> 投诉与建议 </span>
                    </a>
                </li>

                <li>
                    <a href="{{$www_host}}/admin/admin_users">
                        <i class="icon-sitemap"></i>
                        <span class="menu-text"> 后台管理员 </span>
                    </a>
                </li>


            </ul>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    @yield('breadcrumb')
                </ul><!-- .breadcrumb -->
            </div>

            <div class="page-content">
                <div class="page-header">
                    @yield('page-header')
                </div><!-- /.page-header -->

                <div class="row">
                    @yield('page-content')
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" checked />
                    <label class="lbl" for="ace-settings-add-container">
                        切换窄屏
                        <b></b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='//o42mviu36.qnssl.com/static/ace/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='//o42mviu36.qnssl.com/static/ace/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='//o42mviu36.qnssl.com/static/ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/bootstrap.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->
<script src="//o42mviu36.qnssl.com/static/bootstrap3-dialog/bootstrap-dialog.min.js"></script>

<!--[if lte IE 8]>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/excanvas.min.js"></script>
<![endif]-->

<script src="//o42mviu36.qnssl.com/static/ace/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/jquery.slimscroll.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/jquery.sparkline.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/flot/jquery.flot.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/flot/jquery.flot.resize.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/jquery.maskedinput.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/date-time/bootstrap-timepicker.min.js"></script>


<!-- ace scripts -->

<script src="//o42mviu36.qnssl.com/static/ace/assets/js/ace-elements.min.js"></script>
<script src="//o42mviu36.qnssl.com/static/ace/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">

    BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_DEFAULT] = '提示信息';
    BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_INFO] = '提示信息';
    BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_PRIMARY] = '提示信息';
    BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_SUCCESS] = '提示信息';
    BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_WARNING] = '注意';
    BootstrapDialog.DEFAULT_TEXTS[BootstrapDialog.TYPE_DANGER] = '危险';
    BootstrapDialog.DEFAULT_TEXTS['OK'] = '确认';
    BootstrapDialog.DEFAULT_TEXTS['CANCEL'] = '取消';
    BootstrapDialog.DEFAULT_TEXTS['CONFIRM'] = '确定';



</script>
@yield('scripts')
</body>
</html>

