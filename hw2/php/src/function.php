<?php
/* Задание выполняется в двух файлах. Файл src/functions.php содержит все 10 функций.
Функции именуются task1, task2, task3, с маленькой буквы, слитно. Файл с именем index.php
 содержит require(‘src/functions.php’); и вызов всех функций.

Задание #1

Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной
объединенной строки.*/

function task1(array $arr, bool $val = false)
{
    $res = implode(array_map(function (string $str) {
        return "<p>$str</p>";
    }, $arr));

    if ($val) {
        return $res;
    }
    echo $res;

}


/* Задание #2

Функция должна принимать переменное число аргументов.
Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое
необходимо выполнить со всеми передаваемыми аргументами.
Остальные аргументы это целые и/или вещественные числа.
Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2 */

//function task2(... $args)
//{
//    $operation = $args[0];
//    $result = 0;
//
//    if ($operation == '+') {
//        for ($i = 1; $i < sizeof($args); $i++) {
//            $result += $args[$i];
//        }
//        return $args;
//        } if ($operation == '-') {
//        for ($i = 1; $i < sizeof($args); $i++) {
//            $result -= $args[$i];
//        }
//        return $args;
//        } if ($operation == '*') {
//        for ($i = 1; $i < sizeof($args); $i++) {
//            $result *= $args[$i];
//        }
//        return $args;
//        }
//    elseif ($operation == '/') {
//            $result = 1;
//            for ($i = 1; $i < sizeof($args); $i++) {
//            $result /= $args[$i];
//        }
//        return $args;
//    }
//
//    return $result;
//}
function task2(string $arifm, ...$args)
{
    switch ($arifm) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $arg) {
                $result = $result / $arg;
            }
            return $result;
        case '*':
            return array_product($args);
    }


}

/*Задание #3 (Использование рекурсии не обязательно)

Функция должна принимать два параметра – целые числа.
Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения
 размером со значения параметров, переданных в функцию. (Например если передано 8 и 8,
то нарисовать от 1х1 до 8х8). Таблица должна быть выполнена с использованием тега <table>
В остальных случаях выдавать корректную ошибку.*/

function task3(int $a, int $b)
{
    $result = '<table>';
    for ($i =1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;

}
/*Задание #4 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)

Выведите информацию о текущей дате в формате 31.12.2016 23:59
Выведите unixtime время соответствующее 24.02.2016 00:00:00. */

function task4()
{
    echo  date('d.m.Y H:i');
}
function task5()
{
    echo strtotime('24.02.2016 00:00:00');
}

/*Задание #5 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)

Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”. */

function task6()
{
    $string1 = 'Две бутылки лимонада';
    $res1 = 'str_replace' ('Две', 'Три', $string1);
    echo($res1);
}
function task7()
{
    $string2 = 'Карл у Клары украл Кораллы';
    $res2 = 'str_replace' ('К', ' ', $string2);
    echo ($res2);
}

/*Задание #6 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)

Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран. */

function task8($file, $str)
{
   file_put_contents($file, $str);
}

function task9($filename)
{
    $str = file_get_contents($filename);
    echo $str;
}