<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            margin: 0;
        }
        .wrapper {
            padding: 10px;
            font-family: Tahoma;
        }
        .task {
            border: 1px solid black;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            max-width: 40%;
            margin: 10px;
        }
        .task__title {
            text-align: center;
            margin-bottom: 5px;
        }
        .task__description {
            font-size: 12px;
            font-style: italic;
            margin-bottom: 5px;
        }

        .task__input {
            width: 100%;
            margin-bottom: 5px;
            box-sizing: border-box;
        }

        .task__submit {
            display: block;
            background: lightgreen;
            border-radius: 5px;
            border: 1px solid green;
            width: 100%;
            margin: 0 auto 5px;
        }
        .task__results {

        }
        .task__result {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- 
        TASK 1 
        -->
        <div class="task"> 
            <h2 class="task__title">Задание 1</h2>
            <p class="task__description">*Дан текстовый файл содержащий целые числа. Удалите из него все четные числа</p> 
            <form class="task__form" name="form" action="task1.php" method="POST">
                <input class="task__input" type="text" name="task1" id="task1" placeholder="Введите строку">
                <input class="task__submit" type="submit" value="Выполнить">
            </form>
            <?php
                $task1 = $_POST['task1'];
                $chars = ['0','2','4','6','8']; // символы для удаления
                $answer1 = str_replace($chars, '', $task1); 

                echo "<div class=\"task__results\">";
                echo "<p class=\"task__result\"><< $task1</p>";
                echo "<p class=\"task__result\">>> $answer1</p>";
                echo "</div>";        
            ?>
        </div>
        <!-- 
        TASK 2 
        -->
        <div class="task">
            <h2 class="task__title">Задание 2</h2>
            <p class="task__description">*В файле содержится текстовая строка. Определить частоту повторяемости каждой буквы в тексте и вывести её</p> 
            <form class="task__form" name="form" action="task2.php" method="POST">
                <input class="task__input" type="text" name="task2" id="task2" placeholder="Введите строку">
                <input class="task__submit" type="submit" value="Выполнить">
            </form>
            <?php
                $task2 = $_POST['task2'];

                function mbStringToArray($string, $encoding = 'UTF-8')
                {
                    $strlen = mb_strlen($string);
                    while ($strlen) {
                        $array[] = mb_substr($string, 0, 1, $encoding);
                        $string = mb_substr($string, 1, $strlen, $encoding);
                        $strlen = mb_strlen($string, $encoding);
                    }
                    return ($array);
                }
                if ($task2 != null) {
                    $answer2 = array_count_values(mbStringToArray($task2));
                    echo "<div class=\"task__results\">";
                    foreach($answer2 as $key =>$value){
                        echo "<p class=\"task__result\">$key: $value</p>";
                    }
                    echo "</div>";
                }  
            ?>
        </div>

    </div>
    <!--<h2>Задание 1</h2>
    <p>В файле содержится текстовая строка. Определить частоту повторяемости каждой буквы в тексте и вывести её</p> 
    <form name="form" action="index.php" method="post">
            <input type="text" name="text" id="text" placeholder="Your string">
            <input type="text" name="find" id="find" value="Find string">
            <input type="submit">
    </form>-->
</body>
</html>
