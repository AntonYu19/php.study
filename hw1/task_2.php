<?php

define("PICTURE", 80);
define("FELT_PEN", 23);
define("PENCIL", 40);

$condition = 'На школьной выставке ' . PICTURE . ' рисунков. ' . FELT_PEN . ' из них выполнены фломастерами, ' . PENCIL . ' карандашами, а остальные — красками.' . "<br>";
echo "Условие задачи: $condition";
$question = 'Сколько рисунков, выполненные красками, на школьной выставке? <br>';
echo "Вопрос: $question";
$solution = "Для решения задачи нужно из общего количества рисунков вычесть рисунки нарисованные фломастерами и карандашами.  <br>";
echo "Решение: $solution";
echo  PICTURE . ' - ' . FELT_PEN . ' - ' . PENCIL."<br>";
$paint = PICTURE - FELT_PEN - PENCIL;
echo "Ответ: $paint";
