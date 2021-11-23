<?php
require_once 'connect_db.php';

if (isset($_GET['id'])) {
    $imageId = $_GET['id']; //Получаем id картинки из GET запроса
    $queryCount = "UPDATE images SET vote_count = vote_count + 1 WHERE id = $imageId";
    mysqli_query($connect, $queryCount); // Обновляем счетчик просмотрров в БД

    $queryImageId = "SELECT * FROM images WHERE id = $imageId";
    $res = mysqli_query($connect, $queryImageId); // получаем ссылку на данные из БД по id картинки
    $row = mysqli_fetch_assoc($res); // преобразуем полученную ссылку в массив данных

    echo '<img src = "' . $row['path'] . $row['filename'] . '" >'; // Показываем картинку
    echo '<h1>Количество просмотров: ' . $row['vote_count'] . '</h1>'; // Выводим информацию о количестве просмотров
   
    mysqli_close($connect);
} else {
    die("Соединение с Базой данных не установлено!");
}
?>