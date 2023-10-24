<?php
      function atArea($x, $y, $r){
      return
        (($x >= 0) && ($x <= $r) && ($y >= 0) && ($y <= $r / 2)) || // Прямоугольник
        (($x >= 0) && ($y <= 0) && ($x ** 2 + $y ** 2 <= $r ** 2)) || // 1/4 Круга
        (($x <= 0) && ($x >= -$r / 2) && ($y <= 0) && ($y >= -$r /2 ) && ($y >= -$x - $r / 2)); // Треугольник
}
function checkDigits($x, $y, $r){
    if (is_numeric($x) && is_numeric($y) && is_numeric($r)){
        $xArray = explode(".", $x);
        $yArray = explode(".", $y);
        $rArray = explode(".", $r);
        if ((strlen($xArray[1]) <= 14) && (strlen($yArray[1]) <= 14) && (strlen($rArray[1]) <= 14)) return true;
    }
    return false;
}

function checkValid($x, $y, $r){
      return checkDigits($x, $y, $r) &&
        in_array($x, array(-3, -2, -1, 0, 1, 2, 3, 4, 5), false) &&
        is_numeric($y) && $y > -5 && $y < 5 &&
        is_numeric($r) && $r > 1 && $r < 5;
}


      session_start();
      $startTime = microtime(true);
      date_default_timezone_set('Europe/Moscow');

      //Получение данных
      $x = isset($_GET["x"]) ? $_GET["x"] : null;
      $y = isset($_GET["y"]) ? str_replace(",", ".", $_GET["y"]) : null;
      $r = isset($_GET["r"]) ? str_replace(",", ".", $_GET["r"]) : null;

    

      //Проверка на попадание
      $coordinatesAtArea = atArea($x, $y, $r);

      //Сохранение результата
      if(!isset($_SESSION["k4rtowka"])){
            $_SESSION["k4rtowka"] = array();
      }

      $currentTime = date("H:i:s");
      $time = number_format(microtime(true) - $startTime, 10, ".", "") * 1000000;
      $result = array($x, $y, $r, $currentTime, $time, $coordinatesAtArea);
      array_push($_SESSION["k4rtowka"], $result);

     include "insert.php";
?>