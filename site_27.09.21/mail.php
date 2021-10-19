<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/mail.css">
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
    <title>Отправка письма</title>
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
    if ($_GET){
        $_SESSION['id'] = $_GET['id'];
    }
    $filename = './login.txt';
    if (file_exists($filename)) {
        $login = file_get_contents($filename);
        echo "<p>Привет, ".$login. "! Оставь нам свой отзыв)</p>";
        if(count($_POST)>0) {
            $mail_var = trim($_POST['mail_area']);
            if ($mail_var == '') {
                echo "<p>Ну пожалуйста)</p>";
            }
            else {
                echo "<p>Спасибо, ваш отзыв отправлен!</p>";
                mail('mypost@example.com', 'Логин пользователя: '.$login, $mail_var);
            }
        }
        else {
            echo "<p>Мы ждем отзыв)</p>";
        }
    } else {
        echo 'Произошла ошибка, убедитесь, что попали на эту страницу не по закладке или поискового запроса!';
    }
?>
<form method="post">
    <p>
        <textarea name="mail_area" cols="60", rows="10", placeholder="Текст не введен!"></textarea>
    </p>
    <p>
        <button type="submit">Отправить</button>
    </p>
</form>
</body>
</html>
