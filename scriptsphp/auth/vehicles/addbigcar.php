<?php
session_start();
if (isset($_GET['mark'])) { $mark = $_GET['mark']; if ($mark == '') { unset($mark);} }
if (isset($_GET['model'])) { $model = $_GET['model']; if ($model == '') { unset($model);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_GET['year'])) { $year=$_GET['year']; if ($year =='') { unset($year);} }
if (isset($_GET['vin'])){$vin=$_GET['vin'];if($vin==''){unset($vin);}}
if (isset($_GET['mileage'])) { $mileage=$_GET['mileage']; if ($mileage =='') { unset($mileage);} }
if (isset($_GET['capacity'])){$capacity=$_GET['capacity'];if($capacity==''){unset($capacity);}}
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
if (empty($mileage))
{
    exit("Вы не ввели Пробег");
}
if (empty($capacity))
{
    exit("Вы не ввели грузоподъемность");
}
$mark = strtoupper($mark);
$model = strtoupper($model);
$year = strtoupper($year);
$vin = strtoupper($vin);
$mileage=strtoupper($mileage);
$capacity=strtoupper($capacity);
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$mark=stripslashes($mark);
$mark=htmlspecialchars($mark);
$model = stripslashes($model);
$model = htmlspecialchars($model);
$year = stripslashes($year);
$year = htmlspecialchars($year);
$vin=stripslashes($vin);
$vin=htmlspecialchars($vin);
$mileage=stripslashes($mileage);
$mileage=htmlspecialchars($mileage);
$capacity=stripslashes($capacity);
$capacity=htmlspecialchars($capacity);
//удаляем лишние пробелы
$mark=trim($mark);
$model= trim($model);
$year = trim($year);
$vin=trim($vin);
$mileage=trim($mileage);
$capacity=trim($capacity);
// подключаемся к базе
$db = mysqli_connect ("localhost","root",'HYLv@rT$jP',"test2");
// если такого нет, то сохраняем данные
$login=$_SESSION['login'];
$check=1;
$mileage=$mileage*1.00;
$capacity=$capacity*1.00;
$mileage=12.10;
$capacity=25.86;
$result2 = mysqli_query ($db,"INSERT INTO insbigauto (USERMAIL,MARK,MODEL,VIN,YEAR,CAPACITY) VALUES('$login','$mark','$model','$vin','$year','$capacity')");
//Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
    echo "Вы успешно добавили объект страхования!";

}
else {
    echo "Ошибка! Объект не внесен в базу!";

}

