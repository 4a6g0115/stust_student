<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>
    <title>Document</title>
    <style>
        #menu_control {
            position: absolute;
            opacity: 0;
        }

        .header {
            height: 50px;
            background-color: #ccc;
            position: relative;
        }

        .logo {
            width: 60px;
            height: 40px;
            margin-left: 10px;
            /* margin-top: auto; */
        }

        .logo img {
            width: 80px;
            height: 40px;
            vertical-align: middle;
            margin-top: 5px;
        }

        nav {
            background-color: #ccc;
            position: absolute;
            /* top: 50px; */
            top: -350px;
            /* left: -100%; */
            left: 0;
            transition: .5s;
            width: 40%;
            height: auto;
            margin-top: 165px;
            z-index: 1;
        }

        nav a {
            display: block;
            text-decoration: none;
            color: black;
            padding: 10px 10px 20px 20px;
            border-bottom: 1px solid black;
        }

        nav a:hover {
            background-color: #fa0;
        }

        .banner img {
            width: 100%;
            height: 165px;
        }

        .menu_btn {
            width: 40px;
            height: 40px;
            background-color: transparent;
            position: absolute;
            top: 5px;
            right: 10px;
        }

        .menu_btn a {
            opacity: 0;
        }

        .menu_btn::before {
            content: '';
            position: absolute;
            height: 2px;
            width: 20px;
            left: 10px;
            background-color: black;
            top: 0;
            bottom: 0;
            margin: auto;
            /* 垂直置中 */
            box-shadow: 0px 8px 0px black, 0px -8px 0px black;
            /* 由一條線變成三條線  */
        }

        #menu_control:checked~.header nav {
            /* left: 0; */
            top:50px;
            /* 往前移動 */
        }
        #menu_control:checked~ .about {
            opacity: .7;
        }
        #menu_control:checked~ .show_board {
            opacity: .7;
        }
        #menu_control:checked~ .board {
            opacity: .7;
        }

        .path {
            display: flex;
        }

        .path li {
            padding: 4px 8px;
            list-style-type: none;
            position: relative;
            right: -45%;
        }

        .path li a {
            color: #aaa;
            text-decoration: none;
            font-size: 14px;
        }

        .path li+li::before {
            content: '/';
            color: blueviolet;
            left: 0;
            position: absolute;
        }

        .path .path2 {
            color: red;
        }

        .about .wrap {
            display: flex;
        }

        .wrap .item {
            width: auto;
            margin: 0 10px;
            text-align: center;
        }

        .about>h2 {
            width: 100%;
            text-align: center;
        }

        .about>p {
            text-align: center;
            padding-bottom: 10px;
            line-height: 30px;
            width: 80%;
            margin: 40px;
        }

        .item img {
            /* width: 100px;
            height: 100px; */
            width: 100%;
            height: 150px;
        }

        .content {
            display: none;
        }

        .board {
            margin-top: 20PX;
            text-align: center;
            background-color: #fa0;
            padding: 1px;
        }
        /* .container{
                position: absolute;
                line-height: 25px;
                z-index: -1;
        } */

        .board input {
            padding: 5px 15px;
            background: gray;
            cursor: pointer;
            border-radius: 8px;
        }

        .show_board {
            text-align: center;
            background-color: green;
        }

        .show_board .post_text {
            cursor: pointer;
        }
        .show_board .content{
            width: auto;
            height: auto;
        }

        @media screen and (min-width:768px) {
            /* 桌機版面 */
            .menu_btn {
                display: none;
            }
            .header {
                display: flex;
                justify-content: space-between;
                background-color: #ccc;
                align-items: center;
            }
            .logo img {
                width: 80px;
                height: 40px;
                vertical-align: top;
                margin-top: 0px;
            }
            nav {
                position: relative;
                display: flex;
                left: 0;
                width: auto;
                top: 0;
                background-color: transparent;
                margin-top: 0px;
            }
            nav a {
                border-bottom: none;
            }
            nav a:hover {
                margin-top: -5px;
                background-color: #fa0;
            }
            .banner img {
                height: 300px;
            }
            .path li {
                right: 0;
            }
            .about p {
                width: 960px;
                margin: auto;
            }
            .about .wrap {
                padding-top: 40px;
            }
            .about .wrap .item {
                width: 1000px;
                margin: auto;
            }
            .item img {
                width: 100%;
                height: 200px;
            }
            .item>h3 {
                font-size: 30px;
            }
            .item p {
                width: 360px;
                margin: auto;
            }
        }
    </style>
</head>

    <script>        
        $(document).ready(function () {
            $(".about").click(function(){
                $("#menu_control").prop("checked", false);                
            });

            $(".post_text").click(function() {
                $(".content").slideToggle();
            })

        });
        c = document.cookie.indexOf("_name=");
        if(c ==-1){
            alert("提醒您尚未登入");
        }
        else{
            // var el = document.getElementById('_nav');
            var el = document.getElementById('nav_3');
            // el.innerHTML = '<nav><a href=board.php>留言區</a><a href=register.php>註冊</a><a href=logout.php>登出</a></nav>'
            el.innerHTML = '登出';
        }
    </script>
<body>
    <input type="checkbox" name="" id="menu_control">
    <div class="header">
        <h1 class="logo">
            <img src="pic/kto1-hero_1.webp" alt="">
        </h1>
        <label for="menu_control" class="menu_btn">
            <a>選單</a>
        </label>
        <nav id="nav">
            <a href="board.php" id = nav_1>留言區</a>
            <a href="register.php" id = nav_2>註冊</a>
            <a href="signin.php" id = nav_3>登入</a>
        </nav>
    </div>
    <div class="banner">
        <img src="pic/kto1-hero.webp" alt="">
    </div>
    <ul class="path">
        <li><a href="index.php" class="path1">首頁</a></li>
        <li><a href="board.php" class="path2">留言板</a></li>
        <li><a href="product.php" class="path3">產品介紹</a></li>
    </ul>
    <div class="about">
        <h2>關於留言</h2>
        <p>設計此留言區的目的在於希望可以從顧客的角度去了解對我們店面的服務及菜單，我們進而可以去進行變動及吸收客人的看法去了解對我們的感覺。</p>
        <div class="wrap">
            <div class="item">
                <img src="pic/template.png" alt="">
                <h3>以下可以開放留言</h3>
                <p>點擊留言區可以開啟留言</p>
            </div>

        </div>
    </div>
    <!-- <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptatem, animi commodi nemo ratione aliquam. Id quos quidem perspiciatis, quo consequatur voluptates explicabo qui repudiandae cum ut, eos rem deleniti!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptatem, animi commodi nemo ratione aliquam. Id quos quidem perspiciatis, quo consequatur voluptates explicabo qui repudiandae cum ut, eos rem deleniti!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptatem, animi commodi nemo ratione aliquam. Id quos quidem perspiciatis, quo consequatur voluptates explicabo qui repudiandae cum ut, eos rem deleniti!</p>
    </div> -->

    <div class="show_board">
        <form action="board.php" method="POST">
            <h2 class="post_text">留言區</h2>
            <div class="content">
            <?php
            include "db.php";
            $con = new connecting;
            $dsn = "$con->dbms:host=$con->host;dbname=$con->dbName";

            $connection = new PDO($dsn, $con->user, $con->pass);

            $stmt = $connection->query('SELECT * FROM messages');
            $postCount = $stmt->rowCount();
            echo "共有" . $postCount . "條訊息" . "<br>" . "<br>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "暱稱:" . $row['name'];
                echo " 說了:" . nl2br($row['content']);
                echo " 時間:" . $row['time'];
                echo "<hr>";
            }
            ?>
            </div>
        </form>
    </div>

    <div class="board">
        <form action="board.php" method="POST">
            <h2>由此輸入訊息</h2>
            <p><textarea style="font-family: 'Times New Roman', Times, serif;font-size: 20px;width: 300px;height: 50px;" name="content"></textarea></p>
            <p><input type="submit" name="send_Message" value="SEND"></p>
        </form>
    </div>
    
    
</body>

</html>

<?php
if(htmlspecialchars(isset($_POST['send_Message']))){
    //include 'db.php';
    date_default_timezone_set('Asia/Taipei');
    $today = date('Y/m/d H:i:s');
    
    // $con = new connecting;
    // $dsn="$con->dbms:host=$con->host;dbname=$con->dbName";

    // $connection = new PDO($dsn, $con->user, $con->pass);
    
    //$name = htmlspecialchars($_POST['name']);
    //$name = htmlspecialchars($_POST[$_SESSION['name']]);
    $name = $_COOKIE['_name'];
    $content = htmlspecialchars($_POST['content']);

    $sql = "insert into messages(name,content,time) values (:name,:content,:time)";
    $stmt = $connection->prepare($sql);
    $stmt->execute(['name' => $name,'content' => $content,'time' => $today]);
    if(!stmt){
        echo 'ERROR';
    }
    else{
        echo '<div class="succses">Added successfully !</div>';
        //echo "<script>setTimeout(function(){window.location.href='board.php?name=" . $name . "';},600);</script>";
        echo "<script>setTimeout(function(){window.location.href='board.php';},600);</script>";
    }
}

?>