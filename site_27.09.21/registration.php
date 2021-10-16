<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/registration.css">
    <title>Регистрация</title>
</head>
<body>
<header>
    <section class="flex_menu">
        <div class="menu_item"><a href="index.php">Главная</a></div>
        <div class="menu_item"><a href="task.php">Задача PHP</a></div>
        <div class="menu_item"><a href="arrays.php">Массивы</a></div>
        <div class="menu_item"><a href="images/fibonacci.png">Фибоначчи</a></div>
    </section>
    <div class="flex_menu">
        <div class="authorization_item"><a href="registration.php">Форма авторизиции</a></div>
    </div>
</header>
<?
    function correct_data($filename, $pass, $login, $password)
    {
        if (file_exists($filename)) {
            $pass = file_get_contents($filename);
        } else {
            file_put_contents($filename, '');
        }
        $var_pass = explode(', ', $pass);
        $log = 0;
        for ($i = 0; $i < count($var_pass) - 1; $i += 2) {
            if ($var_pass[$i] == $login && $var_pass[$i + 1] == md5($password)) {
                $log = 1;
            }
        }
        return $log;
    }
    $pass = '';
    $filename = './pass.txt';
    if(count($_POST)>0) {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        if (!($login == '' || $password == '') && $_POST['button']=='1' && !correct_data($filename, $pass, $login, $password)) {
            echo "<p>Данные зарегестрированы!</p>";
            $pass = "$login, ".md5($password).', ';
            file_put_contents($filename, $pass, FILE_APPEND);
        }
        elseif($_POST['button']=='1' && correct_data($filename, $pass, $login, $password)){
            echo "<p>Такой пользователь <br>уже существует!</p>";
        }
        if($login == '' || $password == '')
        {
            echo "<p>Не заполнен пароль <br>или логин!</p>";
        }
        else{
            $log = correct_data($filename, $pass, $login, $password);
            if ($_POST['button']=='0') {
                if ($log) {
                    header( 'Refresh: 0; url=/mail.php' );
                    file_put_contents('./login.txt', $login);
                    /*echo "<p>Привет, " . $login . "!</p>";*/
                } else
                    echo "<p>Неверный логин<br> или пароль!</p>";
            }
        }
    }
    else{
        echo "<p>Введите данные!</p>";
    }
?>
<form method="post">
    <p>
        <!--<label for="login">Логин </label><select name="login">
            <option>Tom</option>
            <option>Igor</option>
        </select>-->
        <label for="login">Логин </label>
        <input type="text" name="login">
    </p>
    <p>
        <label for="password">Пароль </label>
        <input type="text" name="password">
    </p>
    <p>
        <button name="button" value="1" type="submit">Регистрация</button>
        <button name="button" value="0" type="submit">Вход</button>
    </p>
</form>
</body>
</html>
