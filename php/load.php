<?php
      session_start();
      $startTime = microtime(true);
      date_default_timezone_set('Europe/Moscow');

      //Получение данных
      $x = isset($_GET["x"]) ? $_GET["x"] : null;
      $y = isset($_GET["y"]) ? str_replace(",", ".", $_GET["y"]) : null;
      $r = isset($_GET["r"]) ? str_replace(",", ".", $_GET["r"]) : null;

    


      //Сохранение результата
      if(!isset($_SESSION["k4rtowka"])){
            $_SESSION["k4rtowka"] = array();
      }

      $currentTime = date("H:i:s");
      $time = number_format(microtime(true) - $startTime, 10, ".", "") * 1000000;
      $result = array($x, $y, $r, $currentTime, $time, $coordinatesAtArea);

     include "insert.php";
?>