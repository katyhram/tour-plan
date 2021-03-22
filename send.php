<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];

// Формирование письма из формы подвала
$titleFooterForm = "Best Tour Plan - новое обращение";
$bodyFooterForm = "
<h2>Best Tour Plan - новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";

// Формирование письма из формы с подпиской
$titleNewslettersForm = "Best Tour Plan - подписка успешно оформлена!";
$bodyNewslettersForm = "
<h2>Best Tour Plan - подписка успешно оформлена!</h2>
<b>Ваш email:</b> $email<br>
";

// Настройки PHPMailer
if (($name != '') && ($phone != '') && ($message != '')) {
$mailFooterForm = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mailFooterForm->isSMTP();   
    $mailFooterForm->CharSet = "UTF-8";
    $mailFooterForm->SMTPAuth   = true;
    // $mailFooterForm->SMTPDebug = 2;
    $mailFooterForm->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mailFooterForm->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mailFooterForm->Username   = 'khramed@yandex.ru'; // Логин на почте
    $mailFooterForm->Password   = 'kuqxcnknrtfqliaj'; // Пароль на почте
    $mailFooterForm->SMTPSecure = 'ssl';
    $mailFooterForm->Port       = 465;
    $mailFooterForm->setFrom('khramed@yandex.ru', 'Екатерина Храмченко'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mailFooterForm->addAddress('katy.khramchenko@gmail.com');  

// Отправка сообщения
$mailFooterForm->isHTML(true);
$mailFooterForm->Subject = $titleFooterForm;
$mailFooterForm->Body = $bodyFooterForm;    

// Проверяем отравленность сообщения
if ($mailFooterForm->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mailFooterForm->ErrorInfo}";
}
// Отображение результата
header('Location: thankyou.php');
}

// Настройки PHPMailer для формы секции newsletters
if ($email != '') {
$mailNewslettersForm = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mailNewslettersForm->isSMTP();   
    $mailNewslettersForm->CharSet = "UTF-8";
    $mailNewslettersForm->SMTPAuth   = true;
    // $mailFooterForm->SMTPDebug = 2;
    $mailNewslettersForm->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mailNewslettersForm->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mailNewslettersForm->Username   = 'khramed@yandex.ru'; // Логин на почте
    $mailNewslettersForm->Password   = 'kuqxcnknrtfqliaj'; // Пароль на почте
    $mailNewslettersForm->SMTPSecure = 'ssl';
    $mailNewslettersForm->Port       = 465;
    $mailNewslettersForm->setFrom('khramed@yandex.ru', 'Екатерина Храмченко'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mailNewslettersForm->addAddress($email);  

// Отправка сообщения
$mailNewslettersForm->isHTML(true);
$mailNewslettersForm->Subject = $titleNewslettersForm;
$mailNewslettersForm->Body = $bodyNewslettersForm;    

// Проверяем отравленность сообщения
if ($mailNewslettersForm->send()) {
  $result = "success";
  header('Location: thankyou.php');
} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mailNewslettersForm->ErrorInfo}";
}
}

