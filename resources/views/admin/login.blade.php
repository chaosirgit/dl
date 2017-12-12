<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>徳莱商贸后台管理系统</title>
  <link rel="stylesheet" href="css/login.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script src="./lib/layui/layui.js" charset="utf-8"></script>
</head>
<body class="login-bg">
    <canvas id="fullstarbg">你的浏览器不支持canvas标签</canvas>
    <div class="login">
        <div class="message">徳莱商贸管理系统登录</div>
        <div id="darkbannerwrap"></div>   
        <form method="post" class="layui-form">
            {{ csrf_field() }}
            @foreach ($errors->all() as $error)
                <div class="login-ic">
					<span style="text-align: center;color:red;margin: 0 auto;">
					{{$error}}
					</span>
                </div>
            @endforeach
            <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script>
            layui.use(['form'],
            function() {
                $ = layui.jquery;
                var form = layui.form(),
                layer = layui.layer;

                //监听提交
                // form.on('submit(login)',
                // function(data) {
                //     console.log(data);
                //     layer.alert(JSON.stringify(data.field), {
                //       title: '最终的提交信息'
                //     },function  () {
                //         location.href = "./index.html";
                //     })
                //     return false;
                // });

            });

        </script>

    
    <!-- 底部结束 -->
    
</body>
</html>