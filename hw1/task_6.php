<?php

$table = '<table border="1">';
for ($i = 1; $i <= 10; $i++) {
    $table .= '<tr>';
    for ($j=1; $j <= 10; $j++){
        $result = $i * $j;
        $table .= '<td>';
        if ($i % 2 == 0 && $j % 2 == 0){
            $table .= "($result)";
        } elseif ($i % 2 !== 0 && $j % 2 !== 0){
            $table .= "[$result]";
        } else {
            $table .= $result;
        }
        $table .= '</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;







//<?php
//
//echo '<table border="1">';
//for ($i = 1; $i <= 10; $i++) {
//    echo '<tr>';
//    for ($j=1; $j <= 10; $j++){
//        echo '<td>';
//        $result = $i * $j;
//        if ($i % 2 == 0 && $j % 2 == 0){
//            echo "($result)";
//        } elseif ($i % 2 !== 0 && $j % 2 !== 0){
//            echo "[$result]";
//        } else {
//            echo $result;
//        }
//        echo '</td>';
//    }
//    echo '</tr>';
//}
//echo '</table>';


