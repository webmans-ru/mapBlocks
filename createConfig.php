<?php
// строка, которую будем записывать
$text = "Какой-то текст";
 
// открываем файл, если файл не существует,
//делается попытка создать его
$fp = fopen("config.php", "w");
 
// записываем в файл текст
fwrite($fp, $text);
 
// закрываем
fclose($fp);
?>