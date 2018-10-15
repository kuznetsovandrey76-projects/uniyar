<?php header("Content-Type: text/html; charset=windows-1251"); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Первый сайт на PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
    <h2>Введи свои данные:</h2>
    <form action="display.php" method="POST">
    <p>Введите имя: <input type="text" name="firstname" /></p>
    <p>Введите фамилию: <input type="text" name="lastname" /></p>
    <input type="submit" value="Отправить">
    </form>
  </body>
</html>
