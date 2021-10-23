<?php 

function clear(){
	global $connect;
	foreach ($_POST as $key => $value) 
	{
		$_POST[$key] = mysqli_real_escape_string($connect, $value);
	}
}

function save_mess()
{
global $connect;
clear();
extract($_POST);
//$name = mysqli_real_escape_string($connect, $_POST['name']); //Стринг служит для экранирования от возможных атак хакеров
//$text = mysqli_real_escape_string($connect, $_POST['text']);
$query = "INSERT INTO `gest`(`id`, `name`, `text`, `date`) VALUES (NULL,'$name','$text', NOW())";
mysqli_query($connect, $query);
}

function get_mess()
{
	global $connect;
	$query = "SELECT * FROM `gest` ORDER BY `id` DESC";
	$res = mysqli_query($connect, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


function array_mess($messages)
{
	$messages = explode("\n***\n", $messages);
	array_pop($messages);
	return array_reverse($messages);
}

function get_format_message($message)
{
	return explode('|', $message);
}

function print_arr($arr)
{
	echo '<pre>' . print_r($arr, true) . '</pre>';
}


 ?>