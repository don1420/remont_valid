<?php 
//Принимаем постовые данные
$name = $_POST['name'];
$phone = $_POST['phone'];

//Тут указываем на какой ящик посылать письмо
$to = "vuvye45@ukr.net";

//Далее идет тема и само сообщение
$subject = "Заявка с сата";
$message = "
	Заказ ремонта:<br />
 	Имя: ".htmlspecialchars($name)."<br />
	Телефон: ".htmlspecialchars($phone);
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Заявка с сайта <no-reply@remont.com>";
mail($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
 ?>
