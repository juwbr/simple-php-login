<?php
session_start();

if ($_SESSION['username'] == NULL && basename($_SERVER['PHP_SELF'], '.php') != "login") {
	header('Location: login.php');
} else if($_SESSION['username'] != NULL && basename($_SERVER['PHP_SELF'], '.php') == "login"){
	header('Location: index.php');
}
?>