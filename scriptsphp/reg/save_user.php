<?php
session_start();
if (isset($_GET['name'])) { $name = $_GET['name']; if ($name == '') { unset($name);} }
if (isset($_GET['login'])) { $login = $_GET['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_GET['password'])) { $password=$_GET['password']; if ($password =='') { unset($password);} }
if (isset($_GET['passport'])){$passport=$_GET['passport'];if($passport==''){unset($passport);}}
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($name)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы не ввели имя");
}
if(empty($login))
{
    exit ("Вы не ввели логин!");
}
if (empty($password))
{
    exit("Вы не ввели пароль");
}
if (empty($passport))
{
    exit("Вы не ввели данные паспорта");
}
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$name=stripslashes($name);
$name=htmlspecialchars($name);
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$passport=stripslashes($passport);
$passport=htmlspecialchars($passport);
//удаляем лишние пробелы
$name=trim($name);
$login = trim($login);
$password = trim($password);
$passport=trim($passport);
// подключаемся к базе
$name=mb_strtolower($name);
$divided = explode(" ", $name);
//Заглавная буква в фио
function mb_ucfirst($word, $charset = "utf-8") {

    return mb_strtoupper(mb_substr($word, 0, 1, $charset), $charset).mb_substr($word, 1, mb_strlen($word, $charset)-1, $charset);

}
$name=mb_ucfirst($divided[0])." ".mb_ucfirst($divided[1])." ".mb_ucfirst($divided[2]);
$passport=mb_strtoupper($passport);
// проверка на существование пользователя с таким же логином
$db = mysqli_connect ("localhost","root",'HYLv@rT$jP',"test2");
$result = mysqli_query($db,"SELECT ID FROM users WHERE EMAIL='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['ID'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
// если такого нет, то сохраняем данные
$passhash=password_hash($password,PASSWORD_BCRYPT);
echo "$passhash";
$result2 = mysqli_query ($db,"INSERT INTO users (NAME,EMAIL,PASSWORD,PASSPORT) VALUES('$name','$login','$passhash','$passport')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='../../index.php'>Главная страница</a>";
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
