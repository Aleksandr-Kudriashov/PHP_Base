<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.*/

$a = -2;
$b = 9;

if ($a >= 0 && $b >= 0) {
	echo 'Разность чисел: ' . ($a - $b);
} else if ($a < 0 && $b < 0) {
	echo 'Произведение чисел: ' . ($a * $b);
} else if (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)){
	echo 'Сумма чисел: ' . ($a + $b);
}

?>
</br>

<?php

/*2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.*/

$a = 5;

switch ($a) {
	case 1:
		echo "1 \n";
	case 2:
		echo "2 \n";
	case 3:
		echo "3 \n";
	case 4:
		echo "4 \n";
	case 5:
		echo "5 \n";
	case 6:
		echo "6 \n";
	case 7:
		echo "7 \n";
	case 8:
		echo "8 \n";
	case 9:
		echo "9 \n";		
	case 10:
		echo "10 \n";
	case 11:
		echo "11 \n";
	case 12:
		echo "12 \n";
	case 13:
		echo "13 \n";
	case 14:
		echo "14 \n";
	case 15:
		echo "15 \n";
	break;
}

?>
</br>

<?php

/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/

function sum($arg1, $arg2) {
	return $arg1 + $arg2;
}	
echo sum (3, 2) . PHP_EOL;

function subtraction($arg1, $arg2) {
	return $arg1 - $arg2;
}
echo subtraction (3, 2) . PHP_EOL;

function multiply($arg1, $arg2) {
	return $arg1 * $arg2;
}
echo multiply (3, 2) . PHP_EOL;

function divide($arg1, $arg2) {
	return ($arg2 === 0) ? "invalid arg2 value (=0)" : $arg1 / $arg2;
}
echo divide (3, 2) . PHP_EOL;

?>
</br>

<?php

/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "sum":
			return $arg1 + $arg2;
		case "subtraction":
			return $arg1 - $arg2;
		case "multiply":
			return $arg1 * $arg2;
		case "divide":
			if ($arg2 === 0) {
				echo "Invalid arg2 value (=0)";
				break;
			} 
			return $arg1 / $arg2;
	}
}
echo mathOperation (4, 8, divide);

?>
</br>

<?php

/*6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/

function power($val, $pow) {
	return ($pow) ? $val : $val * power($val, $pow - 1);
}
echo power(4, 2);

?>
</br>

<?php

/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/

$h = date("H")+8; // +8 - часов к времени по Москве.
$m = date("i");

	if ($h == 1 || $h == 21) {
		$hours = " час";
	}

	else if (($h >= 2 && $h <= 4) || ($h >= 22 && $h <= 24)) {
		$hours = " часа";
	}

	else {$hours = " часов";
	}

	if (($m < 20) || ($m >> 10)) {
		$minutes = " минут";
	}

	else if (($m % 10) === 1) {
		$minutes = " минута";
	}

	else if ((($m % 10) >= 2) && (($m % 10) <= 4)) {
		$minutes = " минуты";
	}

	else {
		$minutes = " минут";
	}

echo $h . $hours . " " . $m . $minutes;

?>