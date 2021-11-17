<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        document.onclick = function()
        {
            var radioInput = document.getElementsByName('radio');
            if (radioInput[0].checked == true){
                window.location.href="vehicles/vehicletypes.php";
            }
            if (radioInput[1].checked == true){
                window.location.href="../../realty/realtytypes.php";
            }

        }
        document.onclick = function(){
            var radioInput = document.getElementsByName('radio-vehicle');
            if (radioInput[0].checked == true){window.location.href="smallcar.php";}
            if (radioInput[1].checked == true){window.location.href="bigcar.php";}
            if (radioInput[2].checked == true){window.location.href="";}
        }
    </script>
    <meta charset="UTF-8">
    <title>Insureway-личный кабинет</title>
    <link rel="stylesheet" href="../../../stylesheets/context.css">
</head>
<body>
<header style="position: fixed">
    <img src="../../../images/logo.png"/>
</header>
<table border="0" width="100%" height="100%" style="border-collapse: collapse;">
    <tr bgcolor=#318bd4>
        <td height="60">
            <nav>
                <ul class="menu-main">
                    <li><a href="../../../index.php" class="glow-button" >на главную</a></li>
                    <li><a href="../myinsurancies.php" class="glow-button">Просмотр страховок</a></li>
                    <li><a href="../addinsurancy.php" class="glow-button">Добавить страховку</a></li>
                    <li><a href="../addobject.php" class="glow-button">Добавить объект</a></li>
                    <li><a href="" class="glow-button" id="last">Личные данные</a></li>
                </ul>
            </nav>
        </td>
    </tr>
    <tr>
        <td>
            <h1 style="text-align: center">Выберите тип добавляемого объекта:</h1>
            <ul class="hr">
                <li><div class="form_radio_btn">
                        <input id="radio-1" type="radio" name="radio" value="1" checked>
                        <label for="radio-1">Транспортное средство</label>
                    </div></li>
                <li><div class="form_radio_btn">
                        <input id="radio-2" type="radio" name="radio" value="2">
                        <label for="radio-2">Недвижимость</label>
                    </div></li>
                <li><div class="form_radio_btn">
                        <input id="radio-3" type="radio" name="radio" value="3">
                        <label for="radio-3">Ответственность физического лица</label>
                    </div></li>
                <li><div class="form_radio_btn">
                        <input id="radio-4" type="radio" name="radio" value="4">
                        <label for="radio-4">Ответственность юридического лица</label>
                    </div></li>
                <li><div class="form_radio_btn">
                        <input id="radio-3" type="radio" name="radio" value="5">
                        <label for="radio-3">Страхование жизни и здоровья</label>
                    </div></li>
            </ul>
        </td>
        <tr>
        </tr>
        <td>
            <h1 style="text-align: center">Выберите тип добавляемого объекта:</h1>
            <ul class="hr">
                <li><div class="form_radio_btn">
                        <input id="radio-vehicle-1" type="radio" name="radio-vehicle" value="1">
                        <label for="radio-vehicle-1">Легковой автомобиль</label>
                    </div></li>
                <li><div class="form_radio_btn">
                        <input id="radio-vehicle-2" type="radio" name="radio-vehicle" value="2">
                        <label for="radio-vehicle-2">Седельный тягач</label>
                    </div></li>
                <li><div class="form_radio_btn">
                        <input id="radio-vehicle-3" type="radio" name="radio-vehicle" value="3">
                        <label for="radio-vehicle-3">Прицеп</label>
                    </div></li>

            </ul>
                </td>
    </tr>
    <!--<td>
        <h1 style="text-align: left">Выберите тип добавляемого объекта:</h1>
        <ul>
            <li><div class="form_radio_btn">
                    <input id="radio-vehicle-1" type="radio" name="radio-vehicle" value="1" checked>
                    <label for="radio-vehicle-1">Легковой автомобиль</label>
                </div></li>
            <li><div class="form_radio_btn">
                    <input id="radio-vehicle-2" type="radio" name="radio-vehicle" value="2">
                    <label for="radio-vehicle-2">Грузовой до 3.5 тонн</label>
                </div></li>
            <li><div class="form_radio_btn">
                    <input id="radio-vehicle-3" type="radio" name="radio-vehicle" value="3">
                    <label for="radio-vehicle-3">Седельный тягач</label>
                </div></li>
            <li><div class="form_radio_btn">
                    <input id="radio-vehicle-4" type="radio" name="radio-vehicle" value="4">
                    <label for="radio-vehicle-4">Прицеп</label>
                </div></li>
        </ul>
    </td>
    -->
</table>
</body>
</html>

