<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/table.css">
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
    <title>Таблица Менделеева</title>
</head>
<body>
<header>
    <div class="flex_menu">
        <!--<a href="index.html"><h1>Главная</h1></a>
        <a href="images/screen.png"><h1>Скрин</h1></a>-->
        <div class="menu_item"><a href="index.php">Главная</a></div>
        <div class="menu_item"><a href="images/screen.png">Скрин</a></div>
    </div>
</header>
<main>
    <table class="myTable">
        <caption>Таблица Менделеева</caption>
        <tr>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Бор_(элемент)"
                                         target="_blank" title="Бор">B</a></div>
                <div class="rightPart"><div class="num">5</div>10,811</div>
                <p>Бор</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Углерод"
                                         target="_blank" title="Углерод">C</a></div>
                <div class="rightPart"><div class="num">6</div>12,01115</div>
                <p>Углерод</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Азот"
                                         target="_blank" title="Азот">N</a></div>
                <div class="rightPart"><div class="num">7</div>14,0067</div>
                <p>Азот</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Кислород"
                                         target="_blank" title="Кислород">O</a></div>
                <div class="rightPart"><div class="num">8</div>15,9994</div>
                <p>Кислород</p>
            </td>
        </tr>
        <tr>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Алюминий"
                                         target="_blank" title="Алюминий">Al</a></div>
                <div class="rightPart"><div class="num">13</div>26,9815</div>
                <p>Алюминий</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Кремний"
                                         target="_blank" title="Кремний">Si</a></div>
                <div class="rightPart"><div class="num">14</div>28,086</div>
                <p>Кремний</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Фосфор"
                                         target="_blank" title="Фосфор">P</a></div>
                <div class="rightPart"><div class="num">15</div>30,9738</div>
                <p>Фосфор</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Сера"
                                         target="_blank" title="Сера">S</a></div>
                <div class="rightPart"><div class="num">16</div>32,064</div>
                <p>Сера</p>
            </td>
        </tr>
        <tr>
            <td class="td2">
                <div class="leftPart"><div class="num">21</div>44,956</div>
                <div class="rightPart"><a href="https://ru.wikipedia.org/wiki/Скандий"
                                          target="_blank" title="Скандий">Sc</a></div>
                <p class="alignRight">Скандий</p>
            </td>
            <td class="td2">
                <div class="leftPart"><div class="num">22</div>47,90</div>
                <div class="rightPart"><a href="https://ru.wikipedia.org/wiki/Титан_(элемент)"
                                          target="_blank" title="Титан">Ti</a></div>
                <p class="alignRight">Титан</p>
            </td>
            <td class="td2">
                <div class="leftPart"><div class="num">23</div>50,942</div>
                <div class="rightPart"><a href="https://ru.wikipedia.org/wiki/Ванадий"
                                          target="_blank" title="Ванадий">V</a></div>
                <p class="alignRight">Ванадий</p>
            </td>
            <td class="td2">
                <div class="leftPart"><div class="num">24</div>51,996</div>
                <div class="rightPart"><a href="https://ru.wikipedia.org/wiki/Хром"
                                          target="_blank" title="Хром">Cr</a></div>
                <p class="alignRight">Хром</p>
            </td>
        </tr>
        <tr>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Галлий"
                                         target="_blank" title="Галлий">Ga</a></div>
                <div class="rightPart"><div class="num">31</div>69,72</div>
                <p>Галлий</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Германий"
                                         target="_blank" title="Германий">Ge</a></div>
                <div class="rightPart"><div class="num">32</div>72,59</div>
                <p>Германий</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Мышьяк"
                                         target="_blank" title="Мышьяк">As</a></div>
                <div class="rightPart"><div class="num">33</div>74,9216</div>
                <p>Мышьяк</p>
            </td>
            <td>
                <div class="leftPart"><a href="https://ru.wikipedia.org/wiki/Селен"
                                         target="_blank" title="Селен">Se</a></div>
                <div class="rightPart"><div class="num">34</div>78,96</div>
                <p>Селен</p>
            </td>
        </tr>
    </table>
</main>
</body>
</html>