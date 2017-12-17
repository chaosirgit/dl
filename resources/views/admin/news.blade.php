<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            徳莱管理系统
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="./css/x-admin.css" media="all">
    </head>
    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>文章管理</cite></a>
              <a><cite>新闻列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" action="" style="width:800px">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">日期范围</label>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="开始日" id="dateStart">
                    </div>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="截止日" id="dateEnd">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="searchTitle"  placeholder="标题" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="search"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock>
                <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button>
                <button class="layui-btn" onclick="question_add('添加新闻','newsAdd','600','500')"><i class="layui-icon">&#xe608;</i>添加</button>
                <span class="x-right" style="line-height:40px">共有数据：{{ App\Article::where('type',2)->count() }} 条</span>
            </xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="ch1">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            作者
                        </th>
                        <th>
                            更新时间
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="tb1">
                {{--@foreach($news as $new)--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<input type="checkbox" value="{{ $new->id }}" name="">--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--{{ $new->id }}--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--{{ $new->title }}--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--{{ $new->author }}--}}
                        {{--</td>--}}
                        {{--<td >--}}
                            {{--{{ $new->updated_at }}--}}
                        {{--</td>--}}
                        {{--<td class="td-manage">--}}
                            {{--<a title="编辑" href="javascript:;" onclick="question_edit('编辑','newsEdit?id={{ $new->id }}','{{ $new->id }}','','510')"--}}
                            {{--class="ml-5" style="text-decoration:none">--}}
                                {{--<i class="layui-icon">&#xe642;</i>--}}
                            {{--</a>--}}
                            {{--<a title="删除" href="javascript:;" onclick="question_del(this,{{ $new->id }})"--}}
                            {{--style="text-decoration:none">--}}
                                {{--<i class="layui-icon">&#xe640;</i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                </tbody>
            </table>

            <div id="page"></div>
        </div>
        <script src="./lib/layui/layui.js" charset="utf-8"></script>
        {{--<script src="./lib/layui2/layui.js" charset="utf-8"></script>--}}
        <script src="./js/x-layui.js" charset="utf-8"></script>
        <script>
            var nums = 5; //每页出现的数据量

            //模拟渲染
            var render = function(Data,curr){
                var innerContent = '';
                thisRes = Data.concat().splice(curr*nums-nums,nums);
                for(var i=0;i<thisRes.length;i++){
                    innerContent += '<tr>';
                    innerContent += '<td><input type="checkbox" value="'+thisRes[i].id+'" name=""></td>';
                    innerContent += '<td>'+thisRes[i].id+'</td>';
                    innerContent += '<td>'+thisRes[i].title+'</td>';
                    innerContent += '<td>'+thisRes[i].author+'</td>';
                    innerContent += '<td>'+thisRes[i].updated_at+'</td>';
                    innerContent += '<td class="td-manage"><a title="编辑" href="javascript:;" onclick="question_edit(\'编辑\',\'newsEdit?id='+thisRes[i].id+'\',\''+thisRes[i].id+'\',\'\',\'510\')" class="ml-5" style="text-decoration:none"><i class="layui-icon">&#xe642;</i></a><a title="删除" href="javascript:;" onclick="question_del(this,'+thisRes[i].id+') "style="text-decoration:none"><i class="layui-icon">&#xe640;</i></a></td>';
                    innerContent += '</tr>';
                }
                return innerContent;
            };

            window.onload = function(){
                var oCh1 = document.getElementById('ch1');
                var oTb1 = document.getElementById('tb1');
                var aCh = oTb1.getElementsByTagName('input');
                oCh1.onclick = function(){
                    for(var i=0;i<aCh.length;i++){
                        if(oCh1.checked == false) {
                            aCh[i].checked = false;
                        }else{
                            aCh[i].checked = true;
                        }
                    }
                };

            };

            layui.use(['laydate','element','laypage','layer'], function(){
                $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              var laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层


                $.ajax({
                    url:'search',
                    type: 'post',
                    dataType: 'json',
                    data: {dateStart: '', dateEnd: '', searchTitle: ''},
                    success:function(res){



                        // 以上模块根据需要引入
                        laypage({
                            cont: 'page',       //分页容器ID
                            pages: Math.ceil(res.results.length/nums), //得到总页数
                            prev: '<em><</em>',  //自定义上一页的内容，支持普通文本和HTML标签
                            next: '<em>></em>', //同上
                            //first:'首页',          //自定义首页，同上
                            //last:'尾页'         //同上
                            jump: function(obj){
                                document.getElementById('tb1').innerHTML = render(res.results, obj.curr);
                            }

                        });

                    }

                });







                var start = {
                // min: laydate.now(),
                  max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  end.min = datas; //开始日选好后，重置结束日的最小日期
                  end.start = datas //将结束日的初始值设定为开始日
                }
              };
              
              var end = {
                // min: laydate.now(),
                max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  start.max = datas; //结束日选好后，重置开始日的最大日期
                }
              };
              
              document.getElementById('dateStart').onclick = function(){
                start.elem = this;
                laydate(start);
              }
              document.getElementById('dateEnd').onclick = function(){
                end.elem = this
                laydate(end);
              }
            });

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(){
                    //捉到所有被选中的，发异步进行删除
                    var arr = new Array();
                    var oTb1 = document.getElementById('tb1');
                    var aCh = oTb1.getElementsByTagName('input');
                    for(var i=0;i<aCh.length;i++){
                        if(aCh[i].checked == true){
                            $(aCh[i]).parents('tr').addClass('del');
                            arr.push(aCh[i].value)
                        }
                    }
                    $.ajax({
                        url : 'delall',
                        type : 'post',
                        dataType : 'json',
                        data:{arr:arr},
                        success:function(res){
                            if(res.code==1){
                                layer.msg('删除成功', {icon: 1});
                                $('.del').remove();
                                $('.x-right').html('共有数据：'+res.row_count+' 条')
                            }else{
                                layer.msg('删除失败',{icon : 0});
                            }
                        }
                    });
                });
             }

             function question_show (argument) {
                layer.msg('可以跳到前台具体问题页面',{icon:1,time:1000});
             }
             /*添加*/
            function question_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }
            //编辑 
           function question_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h);

            }

            /*删除*/
            function question_del(obj,id){
                layer.confirm('确认要删除吗？',function(){
                    //发异步删除数据
                    var arr = new Array();
                    arr.push(id);
                    $.ajax({
                        url:'delall',
                        type:'post',
                        dataType:'json',
                        data:{arr:arr},
                        success:function(res){
                            if(res.code==1) {
                                layer.msg('删除成功', {icon: 1,time:1000});
                                $(obj).parents("tr").remove();
                                $('.x-right').html('共有数据：'+res.row_count+' 条')
                            }else{
                                layer.msg('删除失败',{icon:0});
                            }
                        }
                    });
                });
            }

            layui.use(['form','laypage'],function() {
                var form = layui.form();
                var laypage = layui.laypage;//分页
                //监听提交 搜索
                form.on('submit(search)', function (data) {
                    //发异步，把数据提交给php
                    var dateStart = $('#dateStart').val();
                    var dateEnd = $('#dateEnd').val();
                    var searchTitle = $('input[name=searchTitle]').val();
                    var tb1 = $('#tb1');
                    $.ajax({
                        url: 'search',
                        type: 'post',
                        dataType: 'json',
                        data: {dateStart: dateStart, dateEnd: dateEnd, searchTitle: searchTitle},
                        success: function (res) {

                            // 以上模块根据需要引入
                            laypage({
                                cont: 'page',       //分页容器ID
                                pages: Math.ceil(res.results.length/nums), //得到总页数
                                prev: '<em><</em>',  //自定义上一页的内容，支持普通文本和HTML标签
                                next: '<em>></em>', //同上
                                //first:'首页',          //自定义首页，同上
                                //last:'尾页'         //同上
                                jump: function(obj){
                                    document.getElementById('tb1').innerHTML = render(res.results, obj.curr);
                                }

                            });

                            $('.x-right').html('共有数据：'+res.row_count+' 条')

                        }
                    });
                    return false;
                });
            });


        </script>
            
    </body>
</html>