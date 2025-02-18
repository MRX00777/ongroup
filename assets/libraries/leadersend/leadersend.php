<?php


$webSite = 'BUSINESS SCHOOL HR'; // Указываем название сайта
$name = $_POST['name'];
$phone = $_POST['tel'];

$token = "5683354570:AAEj801ejgxXbgCpn52NGNVmIiqfRkG_qCA";
$chatId = "-985978519"; // chatId - группы "Правки по сайтам - KIRANO"

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
