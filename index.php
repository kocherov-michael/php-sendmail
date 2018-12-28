<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/main.css">
	<title>Callback</title>
</head>
<body>
	<?php 
		if(!empty($_POST)) {
			$message = "Вам пришло новое сообщение с сайта: \n" . "Имя отправителя: " . $_POST['userName'] . "\n" . "Email отправителя: " . $_POST['userEmail'] . "\n" . "Сообщение: \n" . $_POST['message'];
			$headers = "From: info@kocherov-michael.github.io";
			$resultMail = mail("info@kocherov-michael.github.io", "Сообщение с сайта", $message, $headers);
			if($resultMail) {
				 ?> <div class="fade-wrapper">
					 	<div class="success">
							<div class="success__message">Сообщение отправлено успешно!</div>
							<a class="button" href="index.php">Написать ещё</a>
						</div>
					</div> <?php
			} else {
				echo "Ошибка. Сообщение не отправлено.";
			}
		}
	 ?>
	 <form class="form" action="index.php" method="post">
	 	<input class="input" type="text" name="userName" placeholder="Ваше Имя">
	 	<input class="input" type="text" name="userEmail" placeholder="Ваш Email">
	 	<textarea class="input textarea" name="message" id="" cols="30" rows="10" placeholder="..."></textarea>
	 	<input class="button" type="submit" value="Отправить сообщение">
	 </form>
</body>
</html>

