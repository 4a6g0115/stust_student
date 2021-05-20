<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
        body{
            background: url("https://picsum.photos/1000/800?random=1");
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        .login{
            width: 20%;
            left:40%;
            top: 30%;
            position: fixed;
            background-color: #ccc;
            opacity: .8;
            display: block;
            text-align: center;
            border-radius: 10%;
        }
        .login i{
          font-size: 100px;  
        }
        .login p{
            padding-top: 20px;
        }
        .login input{
            padding:5px 15px; background:#ccc;
            cursor:pointer;
            border-radius: 8px;
        }

        @media screen and (max-width:768px){
            body{
                background: url("https://picsum.photos/600/800?random=1");
            }
            .login i{
            font-size: 60px;  
            }   
            .login{
                width: 60%;
                left: 21%;
                top: 25%;
            }
        }
    </style>
</head>
<body>
    <form name="login" class="login" action="register.php" method="POST">
        <h1>註冊/Register</h1>
        <i class="fa fa-user-circle-o"></i>
        <h2>帳號/Account</h2>
        <input type="text" name="Username" id="">
        <h2>密碼/Password</h2>
        <input type="password" name="Password" id="">
        <p><input type="submit" name="submit" value="確認/Submit">
    </form>
</body>
</html>
<?php
if(htmlspecialchars(isset($_POST['submit']))){
    include 'db.php';
    
    $con = new connecting;
    $dsn="$con->dbms:host=$con->host;dbname=$con->dbName";
    
    $connection = new PDO($dsn, $con->user, $con->pass);
    
    
    $name = htmlspecialchars($_POST['Username']);
    $password = htmlspecialchars($_POST['Password']);
    
    if($name && $password){
        //把所有資料寫入陣列
        //從陣列裡面下去找
        $stmt = $connection->query('SELECT * FROM user');
        $i = 0;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            if($row['name'] == $name){
                $i += 1;
            }
        }
        if($i == 0){
            $sql = "insert into user(name,password) values (:name,:password)";
            $stmt = $connection->prepare($sql);
            $stmt->execute(['name' => $name,'password' => $password]);
            // $_SESSION['_name'] = $name;
            setcookie('_name',$name,time()+3600);
            // cookie存在3600秒
            echo "<script>setTimeout(function(){window.location.href='index.php';},600);</script>";

        }
    }
    else{
        echo '<div class="warning">Incompleted form ! </div>';
        echo "<script>setTimeout(function(){window.location.href='register.php';},600);</script>";
    }
}
?>