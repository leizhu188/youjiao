


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=300px, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>

    <script>
        $(function(){
            $('#a_login').click(function () {
                window.location.replace("./login.php");
            });
        });
        $(function(){
            $('input[type="button"]').click(function () {
                window.location.replace("./reset_pwd.php");
            });
        });

    </script>
</head>
<body>
<a id="a_login"> <<登录 </a>
<center>
    <br>
    <h2>忘记密码</h2>
    <input type="text" placeholder="请输入手机号" style="width: 200px">
    <br>
    <br>
    <input type="text" placeholder="请输入验证码" style="width: 140px">
    <input type="button" value="发送" style="width: 50px">
    <br>
    <br>
    <input type="button" value="下一步">

</center>
</body>


