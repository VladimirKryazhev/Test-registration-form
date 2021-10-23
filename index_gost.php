<?php 
require_once 'funcs.php';
require_once 'connect.php';


if (!empty($_POST)) 
{
	//print_arr($_POST);
	//die;
	save_mess();
	//header("Location: {$_SERVER['PHP_SELF']}");
	//exit;
}

$messages = get_mess();
//$messages = array_mess($messages);
//print_arr($messages);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Гостевая книга</title>

	<style>
		.message{
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 20px;
			}


	</style>
</head>
<body>
	<form action="index_gost.php" method="POST">
		<p>
			<label for="name">Имя:</label><br>
			<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="text">Текст:</label><br>
			<textarea name="text" id="text"></textarea>
		</p>
		<button type="submit">Написать</button>
		</form>


		<hr>
		<?php if (!empty($messages)):?>
			<?php foreach ($messages as $message):?>
				<div class="message">
					<p>Автор: <?=$message['name']?> | Дата: <?=$message['date']?> </p>
					<div><?=nl2br(htmlspecialchars($message['text']))?></div> <!-- // внутри дива альтернативно написано echo -->
				</div>
	 <?php endforeach; ?>
	<?php endif; ?>
	
</body>
</html>
