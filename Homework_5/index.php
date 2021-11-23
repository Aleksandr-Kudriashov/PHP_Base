<?php
// Подключаем базу данных из файла подключения coonect_db.php
require_once 'connect_db.php';

if ($connect) {
   $querySelectImages = "SELECT * FROM images ORDER BY vote_count DESC";
   $res = mysqli_query($connect, $querySelectImages); // Получаем ссылку на данные из БД
   $result = [];
   while ($row = mysqli_fetch_assoc($res)) {          // Преобразуем в массив
      $result[] = $row;
   }
   echo '<div class = "image_galery">';               // Выводим блок с картинками
   foreach ($result as $item) {
      echo '<div class = "image_item">';
      // в href прописываем ссылку на страницу photo.php и подставляем из полученных данных id картинки 
      echo '<a target="_blanc" href="photo.php?id=' . $item['id'] . '"><img id="' . $item['id'] . '" src = "' . $item['path'] . $item['filename'] . '" width="320" height="180" ></a>'; 
      echo '<h4>Число кликов по картинке: ' . $item['vote_count'] . '<h4/>';
      echo '</div>';
   }
   mysqli_close($connect);
} else {
   die("Соединение с Базой данных не установлено!");
}
echo '</div>';
?>