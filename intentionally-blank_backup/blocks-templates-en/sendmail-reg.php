<?php

ob_start();
?>
<html>
<head>
    <style type="text/css">
    </style>
</head>
<body>
<table width="550" border="0" cellspacing="0" cellpadding="15">
    <tr bgcolor="#eeffee">
        <td>ФИО</td>
        <td><?php echo $fio; ?></td>
    </tr>
    <tr bgcolor="#eeeeff">
        <td>Должность</td>
        <td><?php echo $position; ?></td>
    </tr>
    <tr bgcolor="#eeffee">
        <td>Организация</td>
        <td><?php echo $organization; ?></td>
    </tr>
    <tr bgcolor="#eeeeff">
        <td>Email</td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr bgcolor="#eeeeff">
        <td>Телефон</td>
        <td><?php echo $phone; ?></td>
    </tr>
</table>
</body>
</html>

<?php
$body = ob_get_contents();

$to = 'AnisimovMV-ksu44@yandex.ru';
$toname = 'Михаил';
//$anotheraddress = 'email@example.com';
//$anothername = 'Another Name';

$mail = new PHPMailer();

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress($to, $toname); // Put your email
//$mail->AddAddress($anotheraddress,$anothername); // addresses here

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject = "Socforum: зарегистрировался новый участник";
$mail->Body = $body;
$mail->AltBody = $message;

if (!$mail->Send()) {
    $recipient = $to;
    $subject = 'Socforum ошибка отправки сообщения';
    $content = $body;
    mail($recipient, $subject, $content, "From: $name\r\nReply-To: $email\r\nX-Mailer: DT_formmail");   
}
?>
