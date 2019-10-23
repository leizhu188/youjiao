


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
            $('div.div_homework_a').click(function () {
                window.location.replace("../homework/index_a.php");
            });
            $('div.div_homework_b').click(function () {
                window.location.replace("../homework/index_b.php");
            });
            $('div.div_homework_c').click(function () {
                window.location.replace("../homework/index_c.php");
            });
        });

    </script>
</head>
<body>

<a id="a_main"> <<主页 </a>
<br>
<br>
<div class='div_homework_a' style="inline-block;border:1px solid slateblue;height: 70px;color: gray">
    作业A （未开始）<br><br>
    2019-10-10 19:00 <br>
</div>
<br>
<div class='div_homework_b' style="inline-block;border:1px solid slateblue;height: 70px;color: gray">
    作业B （3/4）<br><br>
    2019-10-10 19:00 <br>
</div>
<br>
<div class='div_homework_c'  style="inline-block;border:1px solid slateblue;height: 70px;color: gray">
    作业C （已完成）<br><br>
    2019-10-10 19:00 <br>
</div>

</body>


