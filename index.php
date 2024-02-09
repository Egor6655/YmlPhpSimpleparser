<?php
/*function parseyml($doc, $st){
в будущем тут будет основная функция
}
*/
/*function ($line1, $line2){
здесь будет получение значений как данных
$line1--;
$line2--;
if (isset($lines[$line1][$line2])){
    проверка получения
    else{
    echo("такого значения не существует");
}
}
}
*/
$line1 = 1;
$line2 = 1;
echo("парсер запущен<br>");
$doc = fopen("config.yml", "r") ;
$i=1;
$st=4;
while ($i<$st)
{
    $line[$i] = fgets($doc,64);
    // получаем линию как переменную
    $lines[$i] = explode(":" , $line[$i]);
    // разбиваем линию
    $i++;
    // база для цикла
}
echo("вызов любой строки:<br>");
echo $lines[2][1];
echo $lines[$line1][$line2];
?>