<?php
session_start();
if(isset($_SESSION['k4rtowka'])){
      $_SESSION['k4rtowka'] = array();
}

header("Location: ../main.php")
?>