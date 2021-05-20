<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            top:-350px;
            /* left: -100%; */
            left:0;
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
        #menu_control:checked~ .product {
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

        .path .path3 {
            color: red;
        }

        .about .wrap {
            display: flex;
        }

        .wrap .item {
            width: 300px;
            margin: 0 50px;
            text-align: center;
        }

        .about>h2 {
            width: 100%;
            text-align: center;
        }

        .about>p {
            text-align: center;
            padding-bottom: 10px;
        }

        .item img {
            width: 125px;
            height: 125px;
        }
        
        .product{
            display:flex;
            margin: 40px 50px;
        }
        .product img{
            width: 160px;
            height: 160px;
        }
        .product p{
            text-align: center;
            margin-top: 0;
            padding-left: 10px;
            padding-right: 10px;
            padding-top:5px;
            line-height:30px;
            width:100px;
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
                width: 360px;
                margin: auto;
            }
            .item img {
                width: 200px;
                height: 200px;
            }
            .item>h3 {
                font-size: 30px;
            }
            .item p {
                width: 360px;
                margin: auto;
            }
            .product img{
                margin:auto;
                width:600px;
                height:300px;
                position: relative;
                left:-200px;
            }
            .product > p{
                margin:auto;
                position: absolute;
                padding-left: 900px;
                padding-top: 80px;
            }
        }
    </style>
</head>

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
    
    <div class="product">
        <img src="pic/product_1.webp" alt="酸辣湯餃">
        <p>酸辣湯餃</p>
    </div>
    <div class="product">
        <img src="pic/product_2.webp" alt="紅油抄手">
        <p>紅油抄手</p>
    </div>
    <div class="product">
        <img src="pic/product_3.webp" alt="韭菜手水餃10粒">
        <p>韭菜手水餃10粒</p>
    </div>
    <div class="product">
        <img src="pic/product_4.webp" alt="雙醬乾麵">
        <p>雙醬乾麵</p>
    </div>
    <div class="product">
        <img src="pic/product_5.webp" alt="酸辣湯">
        <p>酸辣湯</p>
    </div>
    <div class="product">
        <img src="pic/product_6.webp" alt="番茄豆腐湯">
        <p>番茄豆腐湯</p>
    </div>
    <div class="product">
        <img src="pic/product_7.webp" alt="蛋花湯">
        <p>蛋花湯</p>
    </div>
    <div class="about">
        <H2>備品</H2>
        <p>肉燥、炸醬、水餃及湯包都由後腿肉製成</p>
        <h2>肉類來源</h2>
        <div class="wrap">
            <div class="item">
                <img src="pic/product_1.jpg" alt="">
                <p>為台灣溫體豬</p>
            </div>

        </div>
    </div>
    <script src="jquery.min.js"></script>
    <script>        
        $(document).ready(function () {
            $(".product").click(function(){
                $("#menu_control").prop("checked", false);
            })
        })
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
</body>

</html>
