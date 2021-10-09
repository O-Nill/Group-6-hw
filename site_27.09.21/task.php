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
    <link rel="stylesheet" href="styles/style.css">
    <title>О себе</title>
</head>
<body>
<header>
    <section class="flex_menu">
        <!--<a href="table.html"><h1>Таблица</h1></a>
        <a href="images/my_view.png"><h1>Скрин</h1></a>-->
        <div class="menu_item"><a href="index.php">Главная</a></div>
        <div class="menu_item"><a href="table.php">Таблица</a></div>
    </section>
</header>
<main class="menu_item">
    <?
    echo $name." ($age годиков)<br/>Число Пи: ".pi;
    echo "<br>Сегодня: $d[hours]:$d[minutes]</br>";
    if ($time >= 20 || $time < 8) {
        echo "Доброй ночи!</br>"."<img src='images/night.png' width='250'>";
    }
    else {
        echo "Добрый день!</br>"."<img src='images/day.png' width='250'>";
    }
    ?>
</main>
</body>
</html>
