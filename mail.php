 <?php
$to = "katya-andreeva@ukr.net"; // емайл получателя данных из формы 
$tema = "Заявка на кредит"; // тема полученного емайла 
$message = "Ваше имя: ".$_POST['Full name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['user_email']."<br>"; //полученное из формы name=email
$message .= "Сообщение: ".$_POST['user_message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
if (mail($to,$tema,$message,$headers)){echo "Ваше повідомлення доставлено.";}
exit('<meta http-equiv="refresh" content="2; url=credit.html"  />');

?>