<?php


$webSite = ' Leader Coding Interprises'; // Указываем название сайта
$name = $_POST['name'];
$phone = $_POST['tel'];

$token = "7613476328:AAHMC1UpI4SX4EoVbGGyPwFngmYugc6qR4E";
$chatId = "-1002375024816"; // chatId - группы 

$arr = [
	'Новая заявка с сайта: ' => $webSite,
	'Имя: ' => $name,
	'Телефон: ' => $phone,
];




$message = '';

foreach ($arr as $key => $value) {
	$message .= "<b>" . $key . "</b> " . $value . "%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&parse_mode=html&text={$message}", "r");

if ($sendToTelegram) {
	header('Location: ./success.php');
} else {
	header('Location: ./error.php');
}