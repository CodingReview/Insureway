<?php
// открываем сессию
session_start();
/*
  просто зайти на эту страницу нельзя... если
  имя пользователя не зарегистрировано, то
  перенаправляем его на страницу index.php
  для ввода логина и пароля... тут на самом деле
  можно много чего сделать, например запомнить
  IP пользователя, и после третьей попытки получить
  доступ к файлам, его закрыть.
*/
if(!isset($_SESSION['ID'])){
    header("Location: index.html");
    exit;
}
?>
<html>
<body>
Привет, <?php echo $_SESSION['name']; ?>, ты на секретной странице!!! :)
</body>
</html>