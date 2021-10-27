<?
    $about = 'Родился в городе Магнитогорск. Закончил школу, институт. Нравится чинить технику,
 программировать, путешествовать. Работал на разных специальностях: сборщик ПК, программист и даже продавец.
 И точно я не писатель)';
    $comment = 'Мне понравились курсы от Факт. Они позволяют в короткие сроки сдать экзамен по Битрикс,
 а значит получить достойную работу в компании. Преподаются курсы с большим количеством примеров и хорошим
 вовлечением учащихся)';
    $text = $about.' '.$comment;
    $strBirthday = '1990-07-16';
    function firstPhrCol($about)
    {
        return "<font color = blue>" . mb_substr($about, 0, mb_strpos($about, '.') + 1) . "</font>" .
            mb_substr($about, mb_strpos($about, '.') + 1);
    }
    function colWords($comment)
    {
        $i = 0;
        $comOut = "";
        foreach (explode(' ', $comment) as $value) {
            $i++;
            if ($i % 2 !== 0) {
                $comOut .= "<font color = blue>" . $value . ' ' . "</font>";
            } else {
                $comOut .= "<font color = #663399>" . $value . ' ' . "</font>";
            }
        }
        return $comOut;
    }
    function countVowels($text)
    {
        $vowels = ['а', 'о', 'у', 'э', 'ы', 'я', 'ё', 'ю', 'е', 'и', 'А', 'О', 'У', 'Э', 'Ы', 'Я', 'Ё', 'Ю', 'Е', 'И'];
        $result = 0;
        for ($i = 0; $i < count($vowels); $i++) {
            $result += mb_substr_count($text, $vowels[$i]);
        }
        return $result;
    }
    function diffDates($strBirthday)
    {
        $strTime = date("Y-m-d");
        $birthday = date_create($strBirthday);
        $time = date_create($strTime);
        $interval = date_diff($birthday, $time);
        return 'Дата рождения: '.$strBirthday."<br>".
        'Текущая дата: '.$strTime."<br>".
        'Количество дней между датами: '.$interval->format('%a');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <?
        session_start();
        if (isset($_POST['color_form'])) {
            $_SESSION['color'] = $_POST['color_form'];
        }
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
    <title>О себе</title>
</head>
<body>
<header>
    <div class="flex_menu">
        <!--<a href="table.html"><h1>Таблица</h1></a>
        <a href="images/my_view.png"><h1>Скрин</h1></a>-->
        <div class="menu_item"><a href="table.php">Таблица</a></div>
        <div class="menu_item"><a href="task.php">Задача PHP</a></div>
        <div class="menu_item"><a href="arrays.php">Массивы</a></div>
        <div class="menu_item"><a href="images/add_foreign_key.png">Внешний ключ</a></div>
        <div class="menu_item"><a href="authorization.sql">БД</a></div>
    </div>
    <form method="POST">
        <select name="color_form">
            <option value=blue>Светло-лазурный</option>
            <option value=aquamarine>Аквамарин</option>
            <option value=plum>Сливовый</option>
            <option value=default>По умолчанию</option>
        </select>
        <input type="submit" value="Установить цвет">
    </form>
    <div class="flex_menu">
        <div class="authorization_item"><a href="registration.php">Форма авторизиции</a></div>
    </div>
</header>
<main>
    <div class="photo"><img src="images/me.png" title="It's not me)" alt="Photo"></div>
    <h1 class="name">Румянцев Павел</h1>
    <p class="about pad">
        <?
            echo firstPhrCol($about);
        ?>
    </p>
    <p class="liked pad">
        <?
            echo colWords($comment);
        ?>
    </p>
    <div class="titles">
    <div class="title">Любимые животные из YouTube</div>
    <div class="title">YouTube каналы с данными животными</div>
    </div>
    <div class="parts">
        <div class="titleAd first_title">Любимые животные из YouTube</div>
        <div>
            <div class="flex">
                <div class="item">
                    <div class="img img1">
                    </div>
                    <div class="text">Алиса
                    </div>
                </div>
                <div class="item">
                    <div class="img img2">
                    </div>
                    <div class="text">Макс
                    </div>
                </div>
                <div class="item">
                    <div class="img img3">
                    </div>
                    <div class="text">Ёль (Ёлка)
                    </div>
                </div>
                <div class="item">
                    <div class="img img4">
                    </div>
                    <div class="text">LuLu (RuRu)
                    </div>
                </div>
            </div>
        </div>
        <div class="part">
            <div class="titleAd">YouTube каналы с данными животными</div>
            <div class="grid">
                <div class="icon right">
                    <div class="icn icn1">
                    </div>
                    <div class="text_icn"><a href="https://www.youtube.com/channel/UCiEFbQHfI-iiez0NBr6ZV1g"
                                             target="_blank">Ли Сяо / Alice the Fox</a>
                    </div>
                </div>
                <div class="icon">
                    <div class="icn icn2">
                    </div>
                    <div class="text_icn"><a href="https://www.youtube.com/c/Yoll" target="_blank">
                        Yoll the Eagle-Owl</a>
                    </div>
                </div>
                <div class="icon right">
                    <div class="icn icn3">
                    </div>
                    <div class="text_icn"><a href="https://www.youtube.com/c/Kittisaurus" target="_blank">
                        Kittisaurus</a>
                    </div>
                </div>
                <div class="icon">
                    <div class="icn icn4">
                    </div>
                    <div class="text_icn"><a href="https://www.youtube.com/channel/UCkuA_gDjISfGgbdp02BUwyQ"
                                             target="_blank">Claire Luvcat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?
        echo 'Количество гласных букв на странице: '.countVowels($text)."<br>".
            'Количество слов на странице: '.(mb_substr_count($text, ' ')+1)."<br>".
            diffDates($strBirthday);
    ?>
</footer>
</body>
</html>