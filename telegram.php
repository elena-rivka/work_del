<?php 
$name = $_POST['user-name'];
$email = $_POST['user-email'];
$phone_number = $_REQUEST['phone_number']['full'];
$sum = $_POST['num'];
$time = $_POST['time'];
$company = $_POST['company'];
$nocompany = $_POST['nocompany'];
$method = $_POST['method'];

$pixel = $_GET['pixel'];
$pixel = $_COOKIE['pixel'];
$token = "6162830872:AAFTW-EQK76D7MEame-QDzyp1K9nk_KhKGg";
$chat_id = "-985820782";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone_number,
    'Email: ' => $email,
    'Сумма: ' => $sum,
    'Когда инвестировали: ' => $time,
    'Компания: ' => $company,
    'Компания (не помню): ' => $nocompany,
    'Метод: ' => $method,
    'Pixel: ' => $pixel,
    'Дата: ' => date("m.d.Y")
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
&parse_mode=html&text={$txt}","r");



if ($sendToTelegram) {
    header('Location: thankyou.html');
} else {
    echo "Error";
}
?>

