<?php
session_start();
if (isset($_GET['mark'])) { $mark = $_GET['mark']; if ($mark == '') { unset($mark);} }
if (isset($_GET['model'])) { $model = $_GET['model']; if ($model == '') { unset($model);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_GET['year'])) { $year=$_GET['year']; if ($year =='') { unset($year);} }
if (isset($_GET['vin'])){$vin=$_GET['vin'];if($vin==''){unset($vin);}}
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($mark)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы не ввели производителя");
}
if(empty($model))
{
    exit ("Вы не ввели модель");
}
if (empty($year))
{
    exit("Вы не ввели год выпуска");
}
if (empty($vin))
{
    exit("Вы не ввели VIN-НОМЕР");
}
$mark = strtoupper($mark);
$model = strtoupper($model);
$year = strtoupper($year);
$vin = strtoupper($vin);
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$mark=stripslashes($mark);
$mark=htmlspecialchars($mark);
$model = stripslashes($model);
$model = htmlspecialchars($model);
$year = stripslashes($year);
$year = htmlspecialchars($year);
$vin=stripslashes($vin);
$vin=htmlspecialchars($vin);
//удаляем лишние пробелы
$mark=trim($mark);
$model= trim($model);
$year = trim($year);
$vin=trim($vin);



// подключаемся к базе
// проверка на существование пользователя с таким же логином
$db = mysqli_connect ("localhost","root",'HYLv@rT$jP',"test2");
// если такого нет, то сохраняем данные
$login=$_SESSION['login'];
$result2 = mysqli_query ($db,"INSERT INTO auto (USERMAIL,MARK,MODEL,VIN,YEAR) VALUES('$login','$mark','$model','$vin','$year')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
    echo "Вы успешно добавили объект страхования!";

}
else {
    echo "Ошибка! Объект не внесен в базу!";
}
