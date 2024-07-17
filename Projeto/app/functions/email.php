<?php

function send(array $data) {
	$email = new PHPMailer\PHPMailer\PHPMailer;
	$email->CharSet = 'UTF-8';
	$email->SMTPSecure = 'plain';
	$email->isSMTP();
	$email->Host = 'sandbox.smtp.mailtrap.io';
	$email->Port = 465;
	$email->SMTPAuth = true;
	$email->Username = '72dac5f598314c';
	$email->Password = '183fe1400fbd78';
	$email->isHTML(true);
	$email->setFrom('murilobritto96@gmail.com');
	$email->FromName = $data['quem'];
	$email->addAddress($data['para']);
	$email->Body = $data['mensagem'];
	$email->Subject = $data['assunto'];
	$email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
	$email->MsgHTML($data['mensagem']);

	return $email->send();
}
?>

