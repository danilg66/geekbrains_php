<?php

echo "task 1<br>";
$a = (int)1;
$b = (int)2;

echo "a = $a , b = $b<br>";

if (($a >= 0) && ($b >= 0)) {
  echo "-: " . ($a - $b);
} else if (($a < 0) && ($b < 0)) {
  echo "*: " . ($a * $b);
} else if ((($a >= 0) && ($b < 0)) ||
           (($a < 0) && ($b >= 0))) {
  echo "+: " . ($a + $b);
}

// Вывод от 0 до 15
echo "<br><br>task 2<br>";
function printA($value)
{
  if ($value <= 15) {
    echo "$value ";
    $value++;
    printA($value);
  }
}

$a = rand(0, 15);

echo "A = $a<br>";

switch ($a) {
  case 1:
    printA($a);
    break;
  case 2:
    printA($a);
    break;
  case 3:
    printA($a);
    break;
  case 4:
    printA($a);
    break;
  case 5:
    printA($a);
    break;
  case 6:
    printA($a);
    break;
  case 7:
    printA($a);
    break;
  case 8:
    printA($a);
    break;
  case 9:
    printA($a);
    break;
  case 10:
    printA($a);
    break;
  case 11:
    printA($a);
    break;
  case 12:
    printA($a);
    break;
  case 13:
    printA($a);
    break;
  case 14:
    printA($a);
    break;
  case 15:
    printA($a);
    break;
}

// 4 арифметические функции
echo "<br><br>task 3<br>";
$a = 10;
$b = 3;

function sum($a, $b) {
  return $a + $b;
}

function sub($a, $b) {
  return $a - $b;
}

function mul($a, $b) {
  return $a * $b;
}

function div($a, $b) {
  return $a / $b;
}

echo sum($a, $b) . "<br>";
echo sub($a, $b) . "<br>";
echo mul($a, $b) . "<br>";
echo div($a, $b) . "<br>";

//Универсальная функция
echo "<br><br>task 4<br>";
function mathOperation($arg1, $arg2, $operation)
{
  echo "<br>$arg1 $operation $arg2 = ";
  switch ($operation) {
    case '+':
      return sum($arg1, $arg2) . "<br>";
      break;
    case '-':
      return sub($arg1, $arg2) . "<br>";
      break;
    case '*':
      return mul($arg1, $arg2) . "<br>";
      break;
    case '/':
      return div($arg1, $arg2) . "<br>";
      break;
    default:
        echo "unknown operation, use: +, -, *, /";
      break;
  }
}

echo mathOperation(1, 5, "+");
echo mathOperation(2, 7, "-");
echo mathOperation(5, 7, "*");
echo mathOperation(200, 10, "/");

// Вывод текущего года в HTML
$this_year = date("Y");

// Рекурсия
echo "<br><br>Task 6<br>";

function power($val, $pow) {
  // Ограничение работы функции по степени
  if ($pow == 0) {
    return 1;
  }
  // Рекурсивный вызов перемножамемых значений
  return $val * power($val, $pow-1);
}

echo "<br>" .  power(2, 3) ;

// Время
echo "<br><br>Task 7<br>";
function getHour($hour)
{
  switch ($hour) {
    case '1':
      $hour_test = "час";
      break;
    case '2':
      $hour_test = "часа";
    break;
    case '3':
      $hour_test = "часа";
    break;
    case '4':
      $hour_test = "часа";
    break;
    case '5':
      $hour_test = "часов";
    break;
    case '6':
      $hour_test = "часов";
    break;
    case '7':
      $hour_test = "часов";
    break;
    case '8':
      $hour_test = "часов";
    break;
    case '9':
      $hour_test = "часов";
    break;
    case '10':
      $hour_test = "часов";
    break;
    case '11':
      $hour_test = "часов";
    break;
    case '12':
      $hour_test = "часов";
    break;
    case '13':
      $hour_test = "часов";
    break;
    case '14':
    $hour_test = "часов";
    break;
    case '15':
    $hour_test = "часов";
    break;
    case '16':
    $hour_test = "часов";
    break;
    case '17':
      $hour_test = "часов";
    break;
    case '18':
      $hour_test = "часов";
    break;
    case '19':
      $hour_test = "часов";
    break;
    case '20':
      $hour_test = "часов";
    break;
    case '21':
      $hour_test = "час";
    break;
    case '22':
      $hour_test = "часа";
    break;
    case '23':
      $hour_test = "часа";
    break;
    case '24':
      $hour_test = "часа";
    break;
  }

  echo $hour . " " , $hour_test . " ";
}

function getMinute($minut)
{
  $type1 = "минута";
  $type2 = "минут";
  $type3 = "минуты";

  // Поиск послейни цифры
  $num_end = $minut % 10;
  // Перебор результата и выход на 1 верном
  if ( $minut >= 11 && $minut <= 14 )		return $minut. " " .$type2;
  if ( $num_end >= 2 && $num_end <= 4 )	return $minut. " " .$type3;
  if ( $minut == 1 || $num_end == 1 )  	return $minut. " " .$type1;
  if ( $minut >= 2 && $minut <= 4 )		return $minut. " " .$type3;
           return $minut.' '.$type2;
}

$hour = date("G");
$minut = date("i");
echo getHour($hour) .  getMinute($minut);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lesson 2</title>
  </head>
  <body>
    <h1>This year <?=$this_year ?></h1>
  </body>
</html>
