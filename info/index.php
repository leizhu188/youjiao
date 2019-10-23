


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
            $('#a_main').click(function () {
                window.location.replace("../main.php");
            });
            $('#a_logout').click(function () {
                window.location.replace("../user/login.php");
            });
        });

    </script>
</head>
<body>

<a id="a_main"> <<主页 </a>
<br>
<br>
<br>
<br>
<center>头像</center>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#987cb9 SIZE=1>
<center>昵称</center>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#987cb9 SIZE=1>
<center>手机号</center>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#987cb9 SIZE=1>
<center>性别</center>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#987cb9 SIZE=1>
<center>生日</center>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#987cb9 SIZE=1>
<center>密码</center>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#987cb9 SIZE=1>
<center>学校</center>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="80%" color=#987cb9 SIZE=1>

<br>
<br>
<center>
    <a id="a_logout"> 退出登录 </a>
</center>


</body>


