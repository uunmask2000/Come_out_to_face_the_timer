<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lex 考績??</title>
    <meta charset="UTF-8">
    <meta name="author" content="貓咪">
    <meta name="copyright" content="貓咪">
 
    <meta name="description" content="Lex Chien 出來面對">

    <meta itemprop="name" content="Lex Chien 出來面對">
    <meta itemprop="image" content="https://comeout.herokuapp.com/123.PNG">
    <meta itemprop="description" content="Lex Chien 出來面對">

    <meta property="og:url" content="https://comeout.herokuapp.com">
    <meta property="og:title" content="Lex Chien 出來面對">
    <meta property="og:image" content="https://comeout.herokuapp.com/123.PNG">
    <meta property="og:description" content="Lex Chien 出來面對 ~~~ www.xsoin.com">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .full-height {
            text-align: center;
            background-color: #FFAC55;
            width: 100%;
            height: 100%;
        }

        .medium-width {
            margin: 0 auto;
            text-align: center;
            background-color: #FFAFFE;
            width: 50%;
            height: 50%;
        }
    </style>
</head>

<body>

    <div class="full-height">
        <div class="medium-width">
            <span style="color:blue">
                出來解釋 考績問題喔 ~~
            </span>
            <hr>
            <span id="Check_Txt" style="color:red">時間計數：<span id="Check_i">0小時0分0秒</span></span>
            <hr>
            <strong>
                <p>
                    出來講說一下，副總跟我回說，您要自己來跟我解釋~~ <br>
                    我本來就不期望你會解釋~ <br>
                    別讓我猜到 <br>
                    不爽就直接說 <br>
                    別放在內心裡啊 <br>
                    一刀下去，答應的事情有做到啊 <br>
                    東西我都有寫完喔 <br>
                </p>
            </strong>
        </div>
    </div>

    <script type="text/javascript">
        var SetMinute = 0;

        function Check_Time() {
            var start = new Date('2020-04-20');
            var now = new Date().getTime();
            var diff_time = parseInt((now - start) / 1000);
            // SetMinute += 1;
            SetMinute = diff_time + 1;
            var Check_i = document.getElementById("Check_i");

            var Cal_Hour = Math.floor(SetMinute / 3600);

            var Cal_Minute = Math.floor(Math.floor(SetMinute % 3600) / 60);
            var Cal_Second = SetMinute % 60;

            Check_i.innerHTML = Cal_Hour + "小時" + Cal_Minute + "分" + Cal_Second + "秒";

        }
        var mm = window.setInterval("Check_Time()", 1000);
    </script>
</body>

</html>