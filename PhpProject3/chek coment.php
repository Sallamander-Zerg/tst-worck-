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
        $Autor= filter_var(trim($_POST['Autor']),FILTER_SANITIZE_STRING);
        $com= filter_var(trim($_POST['com']),FILTER_SANITIZE_STRING);
        $mysql = new mysqli('localhost','root','','mysql');
        $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$Autor'");
        $user = $result->fetch_assoc();
        if(count($user) == 0){
            echo 'имя пользователя и автора не совпадают';
        } 
        $mysql->query("INSERT INTO`user_comets`(`user_name`,`coment`)VALUES('$Autor','$com')");
        header('Location:tems.php');
        $mysql->close();
        ?>
    </body>
</html>
