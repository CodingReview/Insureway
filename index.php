
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insureway-страховая компания</title>
    <link rel="stylesheet" href="stylesheets/context.css">
    <script type="text/javascript">
        var total_pics_num = 2; // колличество изображений
        var interval = 10000;    // задержка между изображениями
        var time_out = 3;       // задержка смены изображений фоцрвофцрв
        var i = 0;
        var timeout;
        var opacity = 100;
        function fade_to_next() {
            opacity--;
            var k = i + 1;
            var image_now = 'image_' + i;
            if (i == total_pics_num) k = 1;
            var image_next = 'image_' + k;
            document.getElementById(image_now).style.opacity = opacity/100;
            document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
            document.getElementById(image_next).style.opacity = (100-opacity)/100;
            document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
            timeout = setTimeout("fade_to_next()",time_out);
            if (opacity==1) {
                opacity = 100;
                clearTimeout(timeout);
            }
        }
        setInterval (
            function() {
                i++;
                if (i > total_pics_num) i=1;
                fade_to_next();
            }, interval
        );






    </script>
</head>
<body>
<header style="position: fixed">
    <img src="images/logo.png"/>
</header>
<table border="0" width="100%" height="100%" style="border-collapse: collapse;">
    <tr bgcolor=#318bd4>
        <td height="60">
            <nav>
                <ul class="menu-main">
                    <li><a href="" class="glow-button" >Физическим лицам</a>
                        <ul>
                            <li><a href="fiziki/labinsfiz.php" class="glow-button" >Страхование ответственности</a></li>
                            <li><a href="fiziki/proins.php" class="glow-button" >Страхование имущества</a></li>
                            <li><a href="fiziki/hcarefiz.php" class="glow-button" >Страхование жизни и здоровья</a></li>
                            <li><a href="fiziki/avtofiz.php" class="glow-button" >Страхование авто</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="glow-button" >Юридическим лицам</a>
                        <ul>
                            <li><a href="yuriki/labinsyur.php" class="glow-button" >Страхование ответственности</a></li>
                            <li><a href="yuriki/proyur.php" class="glow-button" >Страхование имущества</a></li>
                            <li><a href="yuriki/hcareyur.php" class="glow-button" >Страхование жизни и здоровья</a></li>
                            <li><a href="yuriki/avtoyur.php" class="glow-button" >Страхование авто</a></li>
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
                                echo"<li><a href='scriptsphp/auth/lk.php' class='glow-button'>$name</a>
                            <ul>
                            <li><a href='scriptsphp/auth/exit.php' style='margin-left: 14px;' class='glow-button' id='exit'>Выход</a></li>
                            </ul>";}else{echo"<li><div id='zatemnenie1' style='z-index: 20'>
                            <div class='okno'>
                                <form class='reg-form' action='scriptsphp/auth/login.php' method='get'>
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
                                <form class='reg-form' action='scriptsphp/reg/save_user.php' method='get'>
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
            <div>
                <img src='images/photo1.jpg' id="image_1"  style="display:block;position: absolute;" width="100%" height="500px"/>
                <img src='images/photo2.jpg' id="image_2" style="display:block; opacity: 0; filter: alpha(opacity=0); position: absolute;" width="100%" height="500px"/>
            </div>
            <!--<iframe  name="Основа" style="width:100%;height:665px;background:#e0dfdf">Ваш браузер не поддерживает плавающие фреймы!</iframe>-->
        </td>
    </tr>
    <tr>
        <td height="496px">

        </td>
    </tr>
    <tr>
        <td>
            <ul><br/>
                <h1 >Популярные виды страхования:</h1>
                <br/>
                <li><a href="fiziki/avtofiz.php" class="magic" style="margin-left:100px"><div><img src="images/КАСКО.jpg"/><p>Автокаско</p></div></a>
                    <a href="fiziki/avtofiz.php" class="magic" style="margin-left:50px"><div><img src="images/Зеленая карта.jpg"/><p>Зеленая карта</p></div></a>
                    <a href="fiziki/hcarefiz.php" class="magic" style="margin-left:50px;margin-right:50px;"><div><img src="images/Страхование корона.jpg"/><p>Страхование от COVID-19 </p></div></a>
                    <a href="fiziki/hcarefiz.php" class="magic" style="margin-right:100px"><div><img src="images/Граница.jpg"/><p>Страхование от болезней и несчастных случаев за границей</p></div></a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <ul>
                <br/>
                <h1>
                    Новости:
                </h1>
                <br/>
                <li>
                    <a href="registration.html" class="magic" style="margin-left:100px"><div><img src="images/student.jpg"/><p>Скидки для студентов</p></div></a>
                    <a href="registration.html" class="magic" style="margin-left:50px"><div><img src="images/pensiya.jpg"/><p>С заботой к старшим</p></div></a>
                    <a href="registration.html" class="magic" style="margin-left:50px;margin-right:50px"><div><img src="images/deti.jpg"/><p>Время первых</p></div></a>
                    <a href="registration.html" class="magic" style="margin-right:100px"><div><img src="images/prize.jpg"/><p>Розыгрыш призов</p></div></a>
                </li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <div id="footer">
                &copy; Кирилл Волков
            </div>
        </td>
    </tr>
</table>
</body>
</html>
