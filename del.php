<?php

require 'includes/db.php';
header('Location: / ');

//Удаление пользователя по id
if(isset($_POST['del_id']))
    R::trash('Users',$_POST['del_id']);
?>