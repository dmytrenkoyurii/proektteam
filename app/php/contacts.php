<?php
if (array_key_exists('messageFF', $_POST)) {
  mail ("dmitrenko.yura@gmail.com",
        "Заповнена контактна форма з с ".$_SERVER['HTTP_REFERER'],
        "Ім'я: ".$_POST['nameFF']."\nТелефон: ".$_POST['phoneFF']."\nE-mail: ".$_POST['contactFF']."\nПовідомлення: ".$_POST['messageFF']);
  header('Location: ../');
}
?>