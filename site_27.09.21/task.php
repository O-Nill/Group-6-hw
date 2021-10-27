<?
define("pi", mb_substr(pi(), 0, 4));
$age = 30;
$name = 'Павел';
$d = getdate();
$time = (int)"$d[hours]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/task.css">
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
    <title>Задача PHP</title>
</head>
<body>
<header>
    <div class="flex_menu">
        <!--<a href="table.html"><h1>Таблица</h1></a>
        <a href="images/my_view.png"><h1>Скрин</h1></a>-->
        <div class="menu_item"><a href="index.php">Главная</a></div>
        <div class="menu_item"><a href="table.php">Таблица</a></div>
    </div>
</header>
<main class="menu_item">
    <?
        if (isset($_POST['destroy_but'])) {
            if (isset($_SESSION) && $_POST['destroy_but'] == 1) {
                $_SESSION = array();
                session_destroy();
                header('Location: task.php');
            }
        }
        if ($_GET){
            $_SESSION['id'] = $_GET['id'];
        }
        echo $name." ($age годиков)<br/>Число Пи: ".pi;
        echo "<br>Сегодня: $d[hours]:$d[minutes]</br>";
        if ($time >= 20 || $time < 8) {
            echo "Доброй ночи!</br>"."<img src='images/night.png' width='250'>";
        }
        else {
            echo "Добрый день!</br>"."<img src='images/day.png' width='250'>";
        }
    ?>
    <form method="post">
        <div>
            <button type="submit" value="1" name="destroy_but">Удалить сессию!</button>
        </div>
    </form>
</main>
</body>
</html>
