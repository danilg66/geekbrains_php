<!-- Комментарии к 1 заданию по php -->
<!-- <?php
$a = 5;
$b = '05';

var_dump($a == $b); // Почему true?
// При сравнение двух строк содержащих числа, они преобразуются к числам,
// в результате сравнивается 5 == 5, получается true

var_dump((int)'012345'); // Почему 12345?
// Преобразование строки к числу целого типа убирает 0, как и в примере выше

var_dump((float)123.0 === (int)123.0); // Почему false?
// Оператор сравнения по значанию и типу, т.к. разные типы (int и float)
// плучаем false

var_dump((int)0 === (int)'hello, world'); // Почему true?
// При преобразовании (int)'hello, world' значение определятеся
// по начальной части строки (должны быть цифры, одна и более), если нет, то
// преобразование возвращает 0, получаем что сравнивается (int)0 === (int)0,
// здесь значения и типы равны, получаем true
?> -->


<?php
  // Данные для страницы
  $title_message = "Lesson 1 Title Page";
  $hello_message = "Wellcome to lesson 1";
  $current_year = date('Y');

  // Замена двух значений местами
  $a = 1;
  $b = 3;

  // echo("first value: " . $a);
  // echo "<br>";
  // echo("first value: " . $b);

  // Для замены используется математика
  $a=$a+$b;
  $b=$a-$b;
  $a=$a-$b;

  // echo "<br>";
  // echo("second value: " . $a);
  // echo "<br>";
  // echo("second value: " . $b);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title_message; ?></title>
  </head>
  <body>
    <h1><?php echo $hello_message; ?></h1>
    <p>
      This year <?php echo $current_year; ?>
    </p>
  </body>
</html>
