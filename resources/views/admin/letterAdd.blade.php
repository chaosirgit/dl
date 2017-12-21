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
        <div class="x-body">
            <form class="layui-form layui-form-pane">
                <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-block">
                        <input type="text" id="L_title" name="title" required lay-verify="title"
                        autocomplete="off" class="layui-input" @if($act == 'edit') value="{{ $result->title }}"@endif>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_author" class="layui-form-label">
                        作者
                    </label>
                    <div class="layui-input-block">
                        <input type="text" id="L_author" name="author" required lay-verify="title"
                               autocomplete="off" class="layui-input" @if($act == 'edit') value="{{ $result->author }}"@endif>
                    </div>
                </div>

                <div class="layui-form-item layui-form-text">
                    <div class="layui-input-block">
                        <textarea id="L_content" name="content" 
                        placeholder="请输入内容" class="layui-textarea fly-editor" style="height: 260px;">
                            @if($act == 'edit'){{ $result->content }}@endif</textarea>
                    </div>
                    <label for="L_content" class="layui-form-label" style="top: -2px;">
                        内容
                    </label>
                </div>
                {{--<div class="layui-form-item">--}}
                    {{--<div class="layui-inline">--}}
                        {{--<label class="layui-form-label">--}}
                            {{--所在类别--}}
                        {{--</label>--}}
                        {{--<div class="layui-input-block">--}}
                            {{--<select lay-verify="required" name="cid">--}}
                                {{--<option>--}}
                                {{--</option>--}}
                                {{--<optgroup label="Layui相关">--}}
                                    {{--<option value="0">layui</option>--}}
                                    {{--<option value="2">layer弹层</option>--}}
                                    {{--<option value="3">LayIM即时通讯</option>--}}
                                {{--</optgroup>--}}
                                {{--<optgroup label="其它交流">--}}
                                    {{--<option value="100">技术闲谈</option>--}}
                                    {{--<option value="101">建议反馈</option>--}}
                                    {{--<option value="168">官方公告</option>--}}
                                {{--</optgroup>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="layui-form-item">
                    <button class="layui-btn" @if($act == 'edit') lay-filter="edit" @else lay-filter="add"@endif lay-submit>
                        @if($act == 'edit')
                            保存编辑
                        @else
                        立即发布
                            @endif
                    </button>
                </div>
                @if($act == 'edit')
                    <input type="hidden" name="id" value="{{ $result->id }}">
                @endif
            </form>
        </div>
        <script src="./lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="./js/x-layui.js" charset="utf-8">
        </script>
        <script>
            layui.use(['form','layer','layedit'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer
              ,layedit = layui.layedit;


                layedit.set({
                  uploadImage: {
                    url: "uploadImage" //接口url
                    ,type: 'post' //默认post
                  }
                })
  
            //创建一个编辑器
            editIndex = layedit.build('L_content');
            
              

              //监听提交
              form.on('submit(add)', function(data){
                //发异步，把数据提交给php
                  var title = $('input[name=title]').val();
                  var author = $('input[name=author]').val();
                  var content = layedit.getContent(editIndex);
                  $.ajax({
                      url:'newsAdd',
                      type:'post',
                      dataType:'json',
                      data:{title:title,author:author,content:content,type:1},
                      success:function(res){
                          if(res.code==1){
                              layer.alert("增加成功", {icon: 6},function () {
                                  // 获得frame索引
                                  var index = parent.layer.getFrameIndex(window.name);
                                  //关闭当前frame
                                  parent.layer.close(index);

                                  parent.window.location.reload();
                              });
                          }else {
                              layer.alert("增加失败", {icon: 0}, function () {
                                  // 获得frame索引
                                  var index = parent.layer.getFrameIndex(window.name);
                                  //关闭当前frame
                                  parent.layer.close(index);
                              });
                          }
                      }
                  });
                return false;
              });


                //监听提交
                form.on('submit(edit)', function(data){
                    //发异步，把数据提交给php
                    var title = $('input[name=title]').val();
                    var author = $('input[name=author]').val();
                    var content = layedit.getContent(editIndex);
                    var id = $('input[name=id]').val();
                    $.ajax({
                        url:'newsEdit',
                        type:'post',
                        dataType:'json',
                        data:{title:title,author:author,content:content,id:id,type:1},
                        success:function(res){
                            if(res.code==1){
                                layer.alert("增加成功", {icon: 6},function () {
                                    // 获得frame索引
                                    var index = parent.layer.getFrameIndex(window.name);
                                    //关闭当前frame
                                    parent.layer.close(index);

                                    parent.window.location.reload();
                                });
                            }else {
                                layer.alert("增加失败", {icon: 0}, function () {
                                    // 获得frame索引
                                    var index = parent.layer.getFrameIndex(window.name);
                                    //关闭当前frame
                                    parent.layer.close(index);
                                });
                            }
                        }
                    });
                    return false;
                });
              
              
            });
        </script>
        
    </body>

</html>