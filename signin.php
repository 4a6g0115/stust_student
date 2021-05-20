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
    <form name="login" class="login" action="signin.php" method="POST">
        <h1>登入/SignIn</h1>
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
setcookie('_name',"",time()-3600);
//清除cookie
if(htmlspecialchars(isset($_POST['submit']))){
    include 'db.php';
    
    $con = new connecting;
    $dsn="$con->dbms:host=$con->host;dbname=$con->dbName";
    
    $connection = new PDO($dsn, $con->user, $con->pass);
    
    
    $name = htmlspecialchars($_POST['Username']);
    $password = htmlspecialchars($_POST['Password']);
    
    if($name && $password){
        $stmt = $connection->query('SELECT * FROM user');
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $a = $row['name'];
            $b = $row['password'];
            if($name == $a && $password == $b){
                //$_SESSION['_name'] = $name;
                setcookie('_name',$name,time()+3600);
                //echo "<script>setTimeout(function(){window.location.href='board.php?name=" . $name . "';},600);</script>";
                echo "<script>setTimeout(function(){window.location.href='index.php';},600);</script>";
            }
            // else if($name != $a || $password != $b){
            //     session_destroy();
            //     echo "<script>setTimeout(function(){window.location.href='Sun.php';},600);</script>";
            // }
        }
    }
    else{
        echo '<div class="warning">Incompleted form ! </div>';
        session_destroy();
        echo "<script>setTimeout(function(){window.location.href='signin.php';},600);</script>";
        //mysqli_close($db);
    }
}
?>