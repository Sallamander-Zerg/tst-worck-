<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        $login= filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
        $mysql = new mysqli('localhost','root','','mysql');
        $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
        $user = $result->fetch_assoc();
        if(count($user) == 0){
            echo 'пользователь не найден';
        }
        setcookie('user',$user['name'], time()+3600,"/");
        echo'страница пользователя ',$login;
        $mysql->close();
        ?>
        <form action="chek_form.php" method="post">
            <div class="perenos">
                <big>Создать тему</big>
                    <input type='text' class="from" name='Zag'
                        id='Zag' placeholder="загаловок">
                    <input type='text' class="from" name='Autor'
                           id='Autor' value="<?=$login?>">
                    <input type='text' class="form" name='Spost'
                        id='Spost' placeholder="краткое содержание" >
                    <input type='text' class="form" name='post'
                        id='post' placeholder="текст сообщения" >
                <button class=" batoon" type="submit">Создать тему</button>
            </div>
        </form>
        <?php
         $mysql = new mysqli('localhost','root','','mysql');
         $div='<div class="perenos">';
         $Cdiv='</div>';
         $sql_com = mysqli_query($mysql, 'SELECT `user_name`,`coment` FROM `user_comets`');
         $sql = mysqli_query($mysql, 'SELECT `zag`,`Author`,`Stext`,`text` FROM `u_F`');
         while ($result = mysqli_fetch_array($sql)) {
         echo $div;
         echo "тема {$result['zag']}";
         echo "автор {$result['Author']}";
         echo "краткое {$result['Stext']}";
         echo "полное {$result['text']}";
         echo $Cdiv;
         while ($result_com = mysqli_fetch_array($sql_com)) {
         echo $div;
         echo 'коментарии';
         echo "{$result_com['user_name']}: {$result_com['coment']}";
         echo $Cdiv;
         }
         }
         
        ?>
        <form action="chek coment.php" method="post">
            <div class="perenos">
                    <input type='text' class="from" name='Autor'
                        id='Autor' placeholder="автор">
                    <input type='text' class="textarea" name='com'
                        id='com' placeholder="текст сообщения" >
                <button class=" batoon" type="submit">оставить коментарий</button>
            </div>
        </form>
    </body>
</html>

