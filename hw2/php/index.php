<?php
require ('src/function.php');

echo 'Задание 1' . '<br>';
echo task1([1,2,34,6]).'<br>';
task1([1,2,34,6,],true).'<br>';


echo 'Задание 2' . '<br>';
echo task2('*', 1, 3, 7).'<br>'.'<br>';

echo 'Задание 3' . '<br>';
echo task3(5, 5).'<br>';

echo 'Задание 4' . '<br>';
echo task4().'<br>'.'<br>';
echo task5().'<br>'.'<br>';

echo 'Задание 5' . '<br>';
echo task6().'<br>';
echo task7().'<br>'.'<br>';


echo 'Задание 6' . '<br>';
echo task8('test.txt', 'Hello again!').'<br>';
echo task9('./test.txt').'<br>'.'<br>';

