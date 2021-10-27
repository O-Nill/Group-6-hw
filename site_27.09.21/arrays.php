<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/arrays.css">
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
    <title>Массивы</title>
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
<main>
    <h1>Задание №1.</h1>
        <?
            if ($_GET){
                $_SESSION['id'] = $_GET['id'];
            }
            for($i=0; $i<10; $i++){
                $arr[]=rand(0, 99);
                if ($arr[$i] % 2 == 0){
                    echo "<pre><b>";
                    echo $arr[$i];
                    echo "</pre></b>";
                }
                else{
                    echo "<pre>";
                    echo $arr[$i];
                    echo "</pre>";
                }
            }
        ?>
    <h1>Задание №2.</h1>
    <?
        $arr = array(
            'Ivanovs' => array('Ivan', 'Kate', 'Tom'),
            'Abramovy'=>array('Bob', 'Ann', 'Tanya'),
            'Smith' => array('Kate', 'Same', 'Alex'),
        );
        echo "<h3>Двумерный массив:</h3>"."<pre>";
        print_r($arr);
        echo "<h3>Имена и фамилии на первую букву А:</h3>"."</pre>";
        foreach($arr as $surname => $array)
        {
            if (substr($surname, 0, 1)=="A"){
                echo "<pre>".$surname."</pre>";
            }
            foreach($array  as  $inner_key => $value)
            {
                if (substr($value, 0, 1)=="A"){
                    echo "<pre>".$value."</pre>";
                }
            }
    }
    ?>
    <h1>Задание №3.</h1>
    <?
    $arr = array(
        '1980' => array('82', '85', '87', '84'),
        '1990'=>array('91', '94'),
        '2000' => array('07', '08', '01'),
    );
    echo "<h3>Двумерный массив из чисел:</h3>"."<pre>";
    print_r($arr);
    echo "<h3>Количество элементов в массиве:</h3>"."</pre> Всего: ";
    echo count($arr, COUNT_RECURSIVE)." элементов.<br>";
    echo count($arr)." массива по ";
    foreach($arr as $year => $array)
        echo count($array)." ";
    echo "элемента.";
    ?>
</main>
</body>
</html>
