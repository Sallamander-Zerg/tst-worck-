<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $pass= filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
        $login= filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
        $name= filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
        //echo'привет ',$login;
        
         if(mb_strlen($pass)<5|| mb_strlen($pass)>10){
            echo" у тебя не допустимая длинна password";
            exit();
        }
        
        $mysql = new mysqli('localhost','root','','mysql');
        $result=$mysql->query("SELECT MAX(id) AS id FROM users ");
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $userid=max($row);
        $userid=$userid+1;
        array_push($row,$userider);
        $mysql->query("INSERT INTO`users`(`id`,`login`,`name`,`password`)VALUES('$userid','$login','$name','$pass')");
        $mysql->close();
        header('Location: index.html');
        ?>
    </body>
</html>
