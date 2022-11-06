<?php

if (isset($_POST['submit'])) {
   
    $to = "plato159000@gmail.com"; 
    $from = "cd81544@littleprince.fun"; 

    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   
    $subject = "Форма отправки сообщений с сайта";

    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
        show_error("<br /> Е-mail адрес не существует");
    }

    $mail_to_myemail = "Здравствуйте! 
    Было отправлено сообщение с сайта!
    Комент: $comment
    Имя отправителя: $name
    Номер телефона: $phone
    E-mail: $email
    Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";

    $headers = "From: $from \r\n";

    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
    echo "<br /><br /><a href='index.html'>Вернуться на сайт.</a>";
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
    function changeurl() {
        eval(self.location = "http://littleprince.fun/");
    }
    window.setTimeout("changeurl();", 6000);
</script>