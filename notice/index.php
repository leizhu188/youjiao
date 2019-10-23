


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
<h2>公告</h2>
<input type="button" value="学校">
<input type="button" value="班级">
<div style="inline-block;border:1px solid slateblue;height: 110px;color: gray">
（公告信息）
</div>

<h2>消息</h2>
<div style="inline-block;border:1px solid slateblue;height: 20px;color: gray">
    被布置了作业1
</div>
<div style="inline-block;border:1px solid slateblue;height: 20px;color: gray">
    获得了星星2
</div>
<div style="inline-block;border:1px solid slateblue;height: 20px;color: gray">
    作业还有2小时截止啦
</div>
<div style="inline-block;border:1px solid slateblue;height: 20px;color: gray">
    被布置了作业2
</div>

<br>
<br>

</body>


