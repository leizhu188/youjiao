


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
            if (!window.location.href.endsWith('login.php')){
                window.location.replace("./user/login.php");
            }

            $('#a_register').click(function () {
                window.location.replace("./register.php");
            });
            $('#a_forget_pwd').click(function () {
                window.location.replace("./forget_pwd.php");
            });
            $('input[type="button"]').click(function () {
                window.location.replace("../main.php");
            });
        });
    </script>
</head>
<body>
<a style="float: right;" id="a_register">注册>></a>
<center>
    <br>
    <br>
    <h2>在线幼教</h2>
    <input type="text" placeholder="请输入手机号">
    <br>
    <br>
    <input type="text" placeholder="请输入密码">
    <br>
    <br>
    <a style="margin-left: 100px;" id="a_forget_pwd">忘记密码？</a>
    <br>
    <br>
    <br>
    <input type="button" value="登录">

</center>
</body>


