<?php
 require_once('config.php');
unset($_SESSION["user_id"]);
header("location: home.php");
?>