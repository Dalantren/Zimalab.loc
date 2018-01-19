<link rel="stylesheet" href="style.css">

<?php
require 'includes/db.php'; //подключение БД

$data = $_POST; //все полученные из формы данные передаются в массив data
?>
<!-- Форма регистрации пользователя -->
<div class="userForm">
    <form action="add.php" method="POST">
        <table>
            <tr>
                <td>Имя пользователя:</td>
                <td><input required type="text" name="firstName"></td>
            </tr>
            <tr>
                <td>Фамилия пользователя:</td>
                <td><input required type="text" name="lastName"> </td>
            </tr>
            <tr>
                <td>e-mail:</td>
                <td><input required type="email" name="email" placeholder="example@mail.ru"></td>
            </tr>
            <tr>
                <td>Название организации:</td>
                <td><input type="text" name="company"></td>
            </tr>
            <tr>
                <td>Должность:</td>
                <td><input type="text" name="position""></td>
            </tr>
            <tr>
                <td> Мобильный телефон:</td>
                <td><input type="tel" name="phone_mob" pattern="+7([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="+7(xxx) xxx-xx-xx"></td>
            </tr>
            <tr>
                <td>Рабочий телефон:</td>
                <td><input type="tel" name="phone_work" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="xx-xx-xx"></td>
            </tr>
            <tr>
                <td>Домашний телефон:</td>
                <td><input type="tel" name="phone_home" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="xx-xx-xx"></td>
            </tr>
        </table>
        <div class="add_edit_button">
            <button type="submit" name="do_add" class="add_edit_button">Добавить пользователя</button>
        </div>
    </form>
</div>
<?php


//регистрация нового пользователя
if(isset($data['do_add'])){
    $user = R::dispense ('users');
    $user->firstName = $data['firstName'];
    $user->lastName = $data['lastName'];
    $user->email = $data['email'];
    $user->company = $data['company'];
    $user->position = $data['position'];
    $user->phone_mob = $data['phone_mob'];
    $user->phone_work = $data['phone_work'];
    $user->phone_home = $data['phone_home'];
    R::store($user);
    echo '<div style="color: green;"> Пользователь успешно добавлен <br></div><hr>';
}

?>
<a href="/index.php">На главную</a>
