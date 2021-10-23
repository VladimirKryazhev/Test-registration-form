<?php 
$connect = @mysqli_connect('localhost', 'root', 'root', 'gest');

if (!$connect) {
	die('Error connect to database!');
}else echo '<div style="color: green">Подключение прошло успешно</div><hr>';


 ?>