<?
    $about = 'Родился в городе Магнитогорск. Закончил школу, институт. Нравится чинить технику,
 программировать, путешествовать. Работал на разных специальностях: сборщик ПК, программист и даже продавец.
 И точно я не писатель)';
    $comment = 'Мне понравились курсы от Факт. Они позволяют в короткие сроки сдать экзамен по Битрикс,
 а значит получить достойную работу в компании. Преподаются курсы с большим количеством примеров и хорошим
 вовлечением учащихся)';
    $abOut = "<font color = blue>".mb_substr($about, 0,mb_strpos($about, '.')+1)."</font>".
        mb_substr($about, mb_strpos($about, '.')+1);
    $i = 0;
    $comOut = "";
    $vowels  = ['а', 'о', 'у', 'э', 'ы', 'я', 'ё', 'ю', 'е', 'и', 'А', 'О', 'У', 'Э', 'Ы', 'Я', 'Ё', 'Ю', 'Е', 'И'];
    foreach (explode(' ', $comment) as $value) {
        $i++;
        if ($i % 2 !== 0) {
            $comOut .= "<font color = blue>".$value.' '."</font>";
        }
        else {
            $comOut .= "<font color = #663399>".$value.' '."</font>";
        }
    }
    $result = 0;
    $text = $about.' '.$comment;
    for ($i = 0; $i < count($vowels); $i++) {
        $result += mb_substr_count($text, $vowels[$i]);
    }
    $strBirthday = '1990-07-16';
    $strTime = date("Y-m-d");
    $birthday = date_create($strBirthday);
    $time = date_create($strTime);
    $interval = date_diff($birthday, $time);
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
        <div class="menu_item"><a href="table.php">Таблица</a></div>
        <div class="menu_item"><a href="task.php">Задача PHP</a></div>
        <div class="menu_item"><a href="arrays.php">Массивы</a></div>
        <div class="menu_item"><a href="images/tasks4_5.jpg">Задачи 4, 5</a></div>
    </section>
</header>
<main>
    <div class="photo"><img src="images/me.png" title="It's not me)" width="100%"  alt="Photo"></div>
    <h1 class="name">Румянцев Павел</h1>
    <p class="about pad">
        <?
            echo $abOut;
        ?>
    </p>
    <p class="liked pad">
        <?
            echo $comOut;
        ?>
    </p>
    <section class="titles">
    <div class="title">Любимые животные из YouTube</div>
    <div class="title">YouTube каналы с данными животными</div>
    </section>
    <section class="parts">
        <div class="titleAd first_title">Любимые животные из YouTube</div>
        <div>
            <section class="flex">
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
            </section>
        </div>
        <div class="part">
            <div class="titleAd">YouTube каналы с данными животными</div>
            <section class="grid">
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
            </section>
        </div>
    </section>
</main>
<footer>
    <?
        echo 'Количество гласных букв на странице: '.$result."<br>";
        echo 'Количество слов на странице: '.(mb_substr_count($text, ' ')+1)."<br>";
        echo 'Дата рождения: '.$strBirthday."<br>";
        echo 'Текущая дата: '.$strTime."<br>";
        echo 'Количество дней между датами: '.$interval->format('%a');
    ?>
</footer>
</body>
</html>