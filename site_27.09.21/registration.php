<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/registration.css">
<?
    session_start();
    if (isset($_SESSION['color'])){
        switch ($_SESSION['color']){
            case 'blue':
                echo "<link rel=\"stylesheet\" href=\"styles/background/back1.css\">";
                break;
            case 'aquamarine':
                echo "<link rel=\"stylesheet\" href=\"styles/background/back2.css\">";
                break;
            case 'plum':
                echo "<link rel=\"stylesheet\" href=\"styles/background/back3.css\">";
                break;
            case 'default':
                echo "<link rel=\"stylesheet\" href=\"styles/background/default.css\">";
                break;
        }
    }
    ?>
    <title>Регистрация</title>
</head>
<body>
<header>
    <div class="flex_menu">
        <div class="menu_item"><a href="index.php">Главная</a></div>
        <div class="menu_item"><a href="task.php">Задача PHP</a></div>
        <div class="menu_item"><a href="arrays.php">Массивы</a></div>
        <div class="menu_item"><a href="images/fibonacci.png">Фибоначчи</a></div>
    </div>
    <div class="flex_menu">
        <div class="authorization_item"><a href="registration.php">Форма авторизиции</a></div>
    </div>
</header>
<?
    require 'scripts/regDB.php';
    $regDB = new regDB('localhost', 'Max', '0000', 'authorization_db');
?>

<?
    $links = '';
    if(count($_POST)>0) {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $correct_data = $regDB->correct_data($login, $password);
        if (!($login == '' || $password == '') && $_POST['button']=='1' && !$correct_data) {
            echo "<p>Данные зарегестрированы!</p>";
            $insert = $regDB->addUser($login, $password);
            if (!$insert) {
                echo "<p>Ошибка внесения данных в БД!</p>";
            }
        }
        elseif($_POST['button']=='1' && $correct_data){
            echo "<p>Такой пользователь <br>уже существует!</p>";
        }
        if($login == '' || $password == '')
        {
            echo "<p>Не заполнен пароль <br>или логин!</p>";
        }
        else{
            if ($_POST['button']=='0') {
                if ($correct_data) {
                    if (isset($_SESSION['id'])){
                        if ($_SESSION['id']==1)
                            echo '<p>Последняя посещенная <br>страница - Отправка отзыва</p>';
                        elseif ($_SESSION['id']==2)
                            echo '<p>Последняя посещенная <br>страница - Задача PHP</p>';
                        elseif ($_SESSION['id']==3)
                            echo '<p>Последняя посещенная <br>страница - Массивы</p>';
                    }
                    $links = "<a href='mail.php?id=1'><p>Отправка отзыва</p></a>".
                        "<a href='task.php?id=2'><p>Задача PHP</p></a>".
                        "<a href='arrays.php?id=3'><p>Массивы</p></a>";
                    /*header( 'Refresh: 0; url=/mail.php' );*/
                    file_put_contents('./login.txt', $login);
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
        <label for="login">Логин </label>
        <input type="text" name="login" id="login">
    </p>
    <p>
        <label for="password">Пароль </label>
        <input type="text" name="password" id="password">
    </p>
    <p>
        <button name="button" value="1" type="submit">Регистрация</button>
        <button name="button" value="0" type="submit">Вход</button>
    </p>
</form>
<?
    echo $links;
?>
</body>
</html>
