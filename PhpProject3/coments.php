<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='ru'>
    <head>
        <title>форма регистрации</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">

    </head>
    <body>
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
