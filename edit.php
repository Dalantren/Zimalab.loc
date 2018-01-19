<link rel="stylesheet" href="style.css">

<?php

require 'includes/db.php';

R::freeze(TRUE);  //перевод БД в заморозку, необходим для внесения изменений

$data = $_POST;

//загружаем объект исходного пользователя для внесения данных в формы
$user = R::load('Users', $data['edit_id']);

if(isset($data['do_edit'])){
    //После внесений изменений загружаем еще раз объект пользователя с нужным id и меняем данные
    $user = R::load('Users',$data['do_edit']);
    $user->firstName = $data['firstName'];
    $user->lastName = $data['lastName'];
    $user->email = $data['email'];
    $user->company = $data['company'];
    $user->position = $data['position'];
    $user->phone_mob = $data['phone_mob'];
    $user->phone_work = $data['phone_work'];
    $user->phone_home = $data['phone_home'];
    R::store($user);
}
?>
 <form action="edit.php" method="POST">
    <table>
    <tr>
        <td>Имя пользователя:</td>
        <td><input required type="text" name="firstName" value="<?echo $user->firstName?>"></td>
    </tr>
    <tr>
        <td>Фамилия пользователя:</td>
        <td><input required type="text" name="lastName" value="<?echo $user->lastName?>"> </td>
    </tr>
    <tr>
        <td>e-mail:</td>
        <td><input required type="email" name="email" value="<?echo $user->email?>"></td>
    </tr>
    <tr>
        <td>Название организации:</td>
    <td><input type="text" name="company" value="<?echo $user->company?>"></td>
    </tr>
    <tr>
        <td>Должность:</td>
        <td><input type="text" name="position" value="<?echo $user->position?>"></td>
    </tr>
    <tr>
        <td> Мобильный телефон:</td>
        <td><input type="tel" name="phone_mob" value="<?echo $user->phone_mob?>"  pattern="+7([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="+7(xxx) xxx-xx-xx"></td>
    </tr>
    <tr>
        <td>Рабочий телефон:</td>
        <td><input type="tel" name="phone_work" value="<?echo $user->phone_work?>" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="xx-xx-xx"></td>
    </tr>
    <tr>
        <td>Домашний телефон:</td>
        <td><input type="tel" name="phone_home" value="<?echo $user->phone_home?>" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="xx-xx-xx"></td>
    </tr>
    </table>
    <div class="add_edit_button">
     <button type="submit" name="do_edit" value='<? echo $user->id ?>'>Сохранить изменения</button>
    </div>
</form>
<? if(isset($data['do_edit'])){
   echo '<div style="color: green;"> Изменения сохранены <br></div><hr>';
}

?>

<a href="/index.php">На главную</a>
