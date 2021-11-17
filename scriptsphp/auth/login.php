
<?php
if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_GET['password'])) { $password=$_GET['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login))
{
    exit("Вы не ввели логин");
}

if (empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы не ввели пароль");
}
//если логин и пароль введеныто обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
// подключаемся к базе
$db = mysqli_connect ("localhost","root",'HYLv@rT$jP',"test2");
$result = mysqli_query($db,"SELECT * FROM users WHERE EMAIL='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysqli_fetch_array($result);

if (empty($myrow['EMAIL']))
{
    //если пользователя с введенным логином не существует
    exit($myrow['EMAIL']);
    exit ("Извините, введённый вами login не существует.");
}
else {
    //если существует, то сверяем пароли
    if (password_verify($password, $myrow['PASSWORD'])) {
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        session_start();
        $_SESSION['login']=$myrow['EMAIL'];
        $_SESSION['id']=$myrow['ID'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        $_SESSION['name']=$myrow['NAME'];
        header('Location: ../../index.php');
    }
    else {
        //если пароли не сошлись

        exit ("Извините, введённый вами login или пароль неверный.");
    }
}
?>