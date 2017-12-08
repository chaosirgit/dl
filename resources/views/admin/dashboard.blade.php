@extends('admin._layout')

@section('breadcrumb')
<li>
    <i class="icon-home home-icon"></i>
    <a href="#">首页</a>
</li>
<li class="active">控制台</li>
@stop

@section('page-header')
    <h1>
        控制台
        <small>
            <i class="icon-double-angle-right"></i>
            查看
        </small>
    </h1>
@stop

@section('page-content')
<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    <div class="row">
        <div class="space-6"></div>

        <div class="col-sm-7 infobox-container">
            <div class="infobox infobox-green">
                <div class="infobox-icon">
                    <i class="icon-user"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">32</span>
                    <div class="infobox-content">注册用户</div>
                </div>
                <div class="stat stat-success">8%</div>
            </div>

            <div class="infobox infobox-blue">
                <div class="infobox-icon">
                    <i class="icon-hospital"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">11</span>
                    <div class="infobox-content">入驻机构</div>
                </div>

                <div class="badge badge-success">
                    +32%
                    <i class="icon-arrow-up"></i>
                </div>
            </div>

            <div class="infobox infobox-pink">
                <div class="infobox-icon">
                    <i class="icon-shopping-cart"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">8</span>
                    <div class="infobox-content">今日订单</div>
                </div>
                <div class="stat stat-important">4%</div>
            </div>

            <div class="infobox infobox-purple">
                <div class="infobox-icon">
                    <i class="icon-list"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">78547</span>
                    <div class="infobox-content">总订单</div>
                </div>
            </div>

            <div class="infobox infobox-brown">
                <div class="infobox-icon">
                    <i class="icon-camera"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">7847</span>
                    <div class="infobox-content">美人记</div>
                </div>
            </div>
            <div class="infobox infobox-red">
                <div class="infobox-icon">
                    <i class="icon-comments"></i>
                </div>

                <div class="infobox-data">
                    <span class="infobox-data-number">2547</span>
                    <div class="infobox-content">动态</div>
                </div>
            </div>
        </div>

        <div class="vspace-sm"></div>

        <div class="col-sm-5">
            <div class="widget-box">
                <div class="widget-header widget-header-flat widget-header-small">
                    <h5>
                        <i class="icon-signal"></i>
                        访问来源
                    </h5>

                    <div class="widget-toolbar no-border">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                            本周
                            <i class="icon-angle-down icon-on-right bigger-110"></i>
                        </button>

                        <ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
                            <li class="active">
                                <a href="#" class="blue">
                                    <i class="icon-caret-right bigger-110">&nbsp;</i>
                                    本周
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                    上周
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                    本月
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                    上月
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div id="piechart-placeholder"></div>

                        <div class="hr hr8 hr-double"></div>

                        <div class="clearfix">
                            <div class="grid3">
                                <span class="grey">
                                    <i class="fa fa-apple fa-2x blue"></i>
                                    &nbsp; IOS
                                </span>
                                <h4 class="bigger">1,255</h4>
                            </div>

                            <div class="grid3">
                                <span class="grey">
                                    <i class="fa fa-android fa-2x blue"></i>
                                    &nbsp; 安卓
                                </span>
                                <h4 class="bigger">9401</h4>
                            </div>

                            <div class="grid3">
                                <span class="grey">
                                    <i class="fa fa-html5 fa-2x blue"></i>
                                    &nbsp; HTML5
                                </span>
                                <h4 class="bigger">150</h4>
                            </div>
                        </div>
                    </div><!-- /widget-main -->
                </div><!-- /widget-body -->
            </div><!-- /widget-box -->
        </div><!-- /span -->
    </div><!-- /row -->

    <div class="hr hr32 hr-dotted"></div>

    <div class="row">
        <div class="col-sm-5">
            <div class="widget-box transparent">
                <div class="widget-header widget-header-flat">
                    <h4 class="lighter">
                        <i class="icon-star orange"></i>
                        热门产品
                    </h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <table class="table table-bordered table-striped">
                            <thead class="thin-border-bottom">
                            <tr>
                                <th>
                                    <i class="icon-caret-right blue"></i>
                                    名称
                                </th>

                                <th>
                                    <i class="icon-caret-right blue"></i>
                                    价格
                                </th>

                                <th class="hidden-480">
                                    <i class="icon-caret-right blue"></i>
                                    状态
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>internet.com</td>

                                <td>
                                    <small>
                                        <s class="red">$29.99</s>
                                    </small>
                                    <b class="green">$19.99</b>
                                </td>

                                <td class="hidden-480">
                                    <span class="label label-info arrowed-right arrowed-in">销售中</span>
                                </td>
                            </tr>

                            <tr>
                                <td>online.com</td>

                                <td>
                                    <small>
                                        <s class="red"></s>
                                    </small>
                                    <b class="green">$16.45</b>
                                </td>

                                <td class="hidden-480">
                                    <span class="label label-success arrowed-in arrowed-in-right">可用</span>
                                </td>
                            </tr>

                            <tr>
                                <td>newnet.com</td>

                                <td>
                                    <small>
                                        <s class="red"></s>
                                    </small>
                                    <b class="green">$15.00</b>
                                </td>

                                <td class="hidden-480">
                                    <span class="label label-danger arrowed">待定</span>
                                </td>
                            </tr>

                            <tr>
                                <td>web.com</td>

                                <td>
                                    <small>
                                        <s class="red">$24.99</s>
                                    </small>
                                    <b class="green">$19.95</b>
                                </td>

                                <td class="hidden-480">
                                    <span class="label arrowed">
                                        <s>无货</s>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>domain.com</td>
                                <td>
                                    <small>
                                        <s class="red"></s>
                                    </small>
                                    <b class="green">$12.00</b>
                                </td>

                                <td class="hidden-480">
                                    <span class="label label-warning arrowed arrowed-right">售完</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /widget-main -->
                </div><!-- /widget-body -->
            </div><!-- /widget-box -->
        </div>

        <div class="col-sm-7">

        </div>
    </div>

    <div class="hr hr32 hr-dotted"></div>


    <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
@stop