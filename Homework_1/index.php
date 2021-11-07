<?php
// 1. Установить программное обеспечение: веб­-сервер, базу данных, интерпретатор, текстовый редактор и проверить, что всё работает правильно.
// 2. Выполнить примеры из методички, разобраться, как это работает.
// 3. Объяснить, как работает данный код: 

$a = 5;
$b = '05';

var_dump($a == $b); // b преобразуется к типу int
var_dump((int)'012345'); // 012345 преобразоetncz к int путем использования оператора (int)
var_dump((float)123.0 === (int)123.0); // идет дополнительное сравнение по типам операторов, а типы им заданы разные
var_dump((int)0 === (int)'hello, world'); // строка преобразуется к целому числу, т.е. 0. Следовательно операторы равны.
?>



<?php
// 4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.

$h1 = 'H';
$title = 'Title';
$year = date('Y');
?>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $h1; ?></h1>
	<span><?php echo $year; ?></span>
</body>
</html>

<?php
// 5. Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: a = 2b = 1, . Дополнительные переменные использовать нельзя.

$a = 1;
$b = 2;

$a += $b;
$b = $a - $b;
$a -= $b;
var_dump($a);
var_dump($b);
?>