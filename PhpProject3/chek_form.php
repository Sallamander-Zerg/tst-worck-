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
        $ZagN= filter_var(trim($_POST['Zag']),FILTER_SANITIZE_STRING);
        $AutorN= filter_var(trim($_POST['Autor']),FILTER_SANITIZE_STRING);
        $SpostN= filter_var(trim($_POST['Spost']),FILTER_SANITIZE_STRING);
        $postN= filter_var(trim($_POST['post']),FILTER_SANITIZE_STRING);
        $mysql = new mysqli('localhost','root','','mysql');
        $result2 = $mysql->query("SELECT MAX(id) AS id FROM u_f ");
        $row = mysqli_fetch_array($result2, MYSQLI_NUM);
        $formid = max($row);
        $formid = $formid+1;
        array_push($row,$formid);
        $mysql->query("INSERT INTO`u_f`(`id`,`zag`,`Author`,`Stext`,`text`)VALUES('$formid','$ZagN','$AutorN','$SpostN','$postN')");
        $mysql->close();
        ?>
    </body>
</html>
