<?php

class connecting{
    public $dbms='mysql';     //数据库类型
    public $host='127.0.0.1'; //数据库主机名
    public $dbName='board';    //使用的数据库
    public $user='AlanSun';      //数据库连接用户名
    public $pass='ajsd29133AS13W0dk2@';          //对应的密码
}


function create_connection(){
    $con = new connecting;
    try
    {
        $dsn="$con->dbms:host=$con->host;dbname=$con->dbName";
        //注意，使用PDO方式連結，需要指定一個資料庫，否則將拋出異常
        $connection = new PDO($dsn, $con->user, $con->pass);
        $connection->exec("SET CHARACTER SET utf8");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*
        $stmt = $connection->query('select * from user');
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $row['name'] . '<br>';
        }
        */
        //echo "Connected Successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: ".$e->getMessage();
    }
    
    //$connection = new PDO('mysql:host=localhost;board=pdo_example;charset=utf8', 'AlanSun', 'ajsd29133AS13W0dk2@');
    //連結資料庫
    //$connection->exec('INSERT INTO pdo VALUES ("","PJCHENder", 12345678)');
    //插入
    //取資料
    /*
    $statement = $connection->query('select * from pdo');

    foreach($statement as $row){
        echo $row['user']." ".$row['pwd']."<br>";
    }*/
    
    //$link = mysqli_connect('127.0.0.1','AlanSun','ajsd29133AS13W0dk2@',"board") or die("J" . mysqli_error());
    return $connection;
}
