<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Зеленая карта для физлиц</title>
    <link rel="stylesheet" href="../stylesheets/content.css">

</head>
<body>
<header style="position: fixed">
    <img src="../images/logo.png"/>
</header>
<table border="0" width="100%" height="100%" style="border-collapse: collapse;">
    <tr bgcolor=#318bd4>
        <td height="60">
            <nav>
                <ul class="menu-main">
                    <li><a href="" class="glow-button" >Физическим лицам</a>
                        <ul>
                            <li><a href="labinsfiz.php" class="glow-button" >Страхование ответственности</a></li>
                            <li><a href="proins.php" class="glow-button" >Страхование имущества</a></li>
                            <li><a href="hcarefiz.php" class="glow-button" >Страхование жизни и здоровья</a></li>
                            <li><a href="avtofiz.php" class="glow-button" >Страхование авто</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="glow-button" >Юридическим лицам</a>
                        <ul>
                            <li><a href="../yuriki/labinsyur.php" class="glow-button" >Страхование ответственности</a></li>
                            <li><a href="../yuriki/proyur.php" class="glow-button" >Страхование имущества</a></li>
                            <li><a href="../yuriki/hcareyur.php" class="glow-button" >Страхование жизни и здоровья</a></li>
                            <li><a href="../yuriki/avtoyur.php" class="glow-button" >Страхование авто</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="glow-button" >Калькулятор страхования</a></li>
                    <li><a href="" class="glow-button" >Акции</a></li>
                    <li><h3><?php session_start();
                            global $loggedin;
                            if (isset($_SESSION['name']))
                            {
                                $loggedin=1;
                            }
                            else $loggedin = 0;
                            if($loggedin)
                            { $name=$_SESSION['name'];
                                //$name=explode(" ",$_SESSION['name']);
                                echo"<li><a href='../scriptsphp/auth/lk.php' class='glow-button'>$name</a>
                            <ul>
                            <li><a href='../scriptsphp/auth/exit.php' style='margin-left: 14px;' class='glow-button' id='exit'>Выход</a></li>
                            </ul> </li>";}else{echo"<li><div id='zatemnenie1' style='z-index: 20'>
                            <div class='okno'>
                                <form class='reg-form' action='../scriptsphp/auth/login.php' method='get'>
                                    <fieldset>
                                        <legend>Данные для входа:</legend>
                                        <div class='form-row'><label for='em'>Эл. почта:</label><input type='email' placeholder='title@domenname' id='em' name='login' required='required'/></div>
                                        <div class='form-row'><label for='psw'>Введите пароль:</label><input type='password' placeholder='12345' id='psw' name='password' required='required'/></div>
                                    </fieldset>
                                    <input type='submit' id='btn' value='Войти'/>
                                    <a href='#' class='glow-button' class='close' >Закрыть окно</a>
                                </form>
                            </div>
                        </div>
                        <a href='#zatemnenie1' class='glow-button'>Вход</a></li>";}?>
                        </h3></li>
                    <li>
                        <div id="zatemnenie" style="z-index:20">
                            <div class="okno" style="height: 180px;">
                                <form class='reg-form' action='../scriptsphp/reg/save_user.php' method='get'>
                                    <fieldset>
                                        <legend>Данные для регистрации:</legend>
                                        <div class="form-row"><label for="nik">Введите Ф.И.О.:</label><input type="text" placeholder="Ivanov Ivan" id="nik" name="name" required="required" style="margin-left: 63px;"/></div>
                                        <div class="form-row"><label for="passport">Серия и номер паспорта</label><input type="text" placeholder="BM2233441" id="passport" name="passport" required="required"></div>
                                        <div class="form-row"><label for="em">Эл. почта:</label><input type="email" placeholder="title@domenname" id="em" name="login" required="required" style="margin-left: 108px;"/></div>
                                        <div class="form-row"><label for="psw">Введите пароль:</label><input type="password" placeholder="12345" id="psw" name="password" required="required" style="margin-left: 60px;"/></div>
                                    </fieldset>
                                    <input type='submit' id='btn' value="Отправить" style="margin-right: 100px;"/>
                                    <a href="#" class="glow-button" class="close">Закрыть окно</a>
                                </form>
                            </div>
                        </div>
                        <a href="#zatemnenie" class="glow-button" >Регистрация</a>
                    </li>
                </ul>
            </nav>
        </td>
    </tr>

    <tr>
        <td>
            <ul>
                <br/>
                <p style="margin-left:100px; "><a href="../index.php" style="background: transparent">Главная</a>/<a href="">Физическим лицам</a>/<a href="">Автострахование</a>/Зеленая карта</p>
                <br/>
                <h1 >Зеленая карта для физических лиц:</h1>
                <br/>
            </ul>
        </td>
    </tr>
    <table>
        <tr>
            <td>
                <div class="content">
                    <p style="font-size: 20px;">
                        «Зеленая карта» — это обязательное страхование гражданской ответственности владельцев транспортных средств, выезжающих за рубеж на собственном автомобиле. Полис действует на территории всех европейских государств. Наличие данного полиса — обязательное условие пересечения границы с этими странами.
                    </p>
                </div>
            </td>
            <td>
          <pre>
              <img style="height: 260px;width: 300px; margin-right: 100px" src="../images/Автокаско1.jpg"/>
          </pre>
            </td>
        </tr>
        <tr>
            <td>
                <div class="content">
                    <p style="font-size: 20px;">
                        Покупая полис «Зеленая карта» в INSUREWAY вы получаете:
                    </p>
                    <ul  class="special-li" style="margin-left: 16px;margin-bottom: 10px;">
                        <li><span> Партнерство с надежной и быстроразвивающейся компанией.</span></li>
                        <li><span>Возможность выбора оптимальных условий страхования за адекватную цену.</span></li>
                        <li><span>Доступ к системе скидок на широкий спектр страховых услуг, необходимых в повседневной жизни.<span></li>
                    </ul>
                </div>
            </td>
            <td>
          <pre>
              <img style="height: 260px;width: 300px;" src="../images/Service.png"/>
          </pre>
            </td>
        </tr>
    </table>
    <br/>
    <tr>
        <td>
            <div id="footer" >
                &copy; Кирилл Волков
            </div>
        </td>
    </tr>
</table>
</body>

