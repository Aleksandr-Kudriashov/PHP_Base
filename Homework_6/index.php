<?php
function sum($a, $b) {
    return $a + $b;
}
function subtract($a, $b) {
    return $a - $b;
}
function multiply($a, $b) {
    return $a * $b;
}
function divide($a, $b) {
    if ($b == 0) return "Ошибка деления на ноль";
    return $a / $b;
}
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            return sum($arg1, $arg2);
        case "-":
            return subtract($arg1, $arg2);
        case "*":
            return multiply($arg1, $arg2);
        case "/":
            return divide($arg1, $arg2);
        default:
            return false;
    }
}

if ($_POST['do']) {
    $result = implode(" ", array($_POST['a'], $_POST['do'], $_POST['b']))." = ".mathOperation($_POST['a'], $_POST['b'], $_POST['do']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a"><br>
        <input type="submit" value="+" name="do">
        <input type="submit" value="-" name="do">
        <input type="submit" value="*" name="do">
        <input type="submit" value="/" name="do">
        <br>
        <input type="text" name="b"><br>
    </form>
    <p><?= $result ? $result : ""; ?></p>
</body>
</html>