<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <input type="checkbox" name="" id="menu_control">
    <!-- <div class="hearder_top"> -->
        <div class="header">
            <h1 class="logo">
                <img src="pic/kto1-hero_1.webp" alt="">
            </h1>
            <label for="menu_control" class="menu_btn">
                <a>選單</a>
            </label>
            <nav id="nav">
                <a href="board.php" id = nav_1>留言區</a>
                <a href="register.php"id = nav_2>註冊</a>
                <a href="signin.php"id = nav_3>登入</a>
            </nav>
        </div>
    <!-- </div> -->
    <div class="banner">
        <img src="pic/kto1-hero.webp" alt="">
    </div>
    <ul class="path">
        <li><a href="index.php" class="path1">首頁</a></li>
        <li><a href="board.php" class="path2">留言區</a></li>
        <li><a href="product.php" class="path3">產品介紹</a></li>
    </ul>
    <div class="about">
        <h2>關於</h2>
        <p>小店同心園，始於大排檔方式經營，營業產品只有手工水餃、蒸餃、榨菜肉絲湯、蛋花湯及酸辣湯五種品項，當時水餃皮及蒸餃皮都是使用人工手擀的方式進行。</p>
        <div class="wrap">
            <div class="item">
                <img src="pic/index_1.jpg" alt="">
                <h3>可以休息一下了~</h3>
                <p>休息時間要準備下一波的食材</p>
            </div>
            <div class="item">
                <img src="pic/index_2.jpg" alt="">
                <h3>客人等待中</h3>
                <p>煮麵中~煙霧瀰漫</p>
            </div>

        </div>
    </div>
    <div class="container">
        <h2>經歷</h2>
        <p>創始於民國79年，地點當時位於台南市東區東安路與東寧路口，現今寶雅邊的騎樓</p>
        <p>民國85年於東安路15號開始店面經營</p>
        <p>民國90年暫時休息</p>
        <p>92年於永康區中華西街241號開始重新復業，又經遷移至永康區中華西街165號營業至今</p>
    </div>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".about").click(function(){
                $("#menu_control").prop("checked", false);      
            })
        })
        c = document.cookie.indexOf("_name=");
        if(c ==-1){
            alert("提醒您尚未登入");
        }
        else{
            var el = document.getElementById('nav_3');
            // el.innerHTML = '<a href=logout.php>登出</a>'
            el.innerHTML = '登出';
            
        }
        // $(document).ready(function(){
        //     $("p").click(function(){
        //         $(this).hide();
        //     });
        // });
    </script>
</body>
</html>
