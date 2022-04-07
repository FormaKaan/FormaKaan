<?php
  $fio = trim(strip_tags($_POST["fio"]));
  $name = trim(strip_tags($_POST["name"]));
  $email = trim(strip_tags($_POST["email"]));
  $country = trim(strip_tags($_POST["country"]));
$text = trim(strip_tags($_POST["text"]));
$file = trim(strip_tags($_POST["file"]));
$date = trim(strip_tags($_POST["date"]));
$subject = "Регистрация для работы с формой KAN";
  $msg = "Ваши данные формы регистрации:\n" ."Введите ФИО: $fio\n" ."Наименование компании подающей заявку (только дистрибьтеры): $name\n" ."Укажите email для обратной связи: $email\n" ."Укажите город(регион): $country" ."Текст сообщения: $text" ."Загрузите файл с проектом или спецификацией: $file" ."Укажите дату: $date";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: dank-9090@mail.ru" . "\r\n";
  $headers .= "Bcc: ваш_email". "\r\n";
  if(!empty($fio) && !empty($name) && !empty($email) && !empty($country) && !empty($text) && !empty($file) && !empty($date) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail($fio, $name, $email, $country, $text, $file, $date, $subject, $msg, $headers);
    echo "Спасибо! Вы успешно зарегистрировались.";
    }
?>