<!DOCTYPE html>
<html>
<head>
	<title>Zimalab.loc</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
</head>
<body>

<?php
require 'includes/db.php';


function dump ($what) {
    echo '<pre>'.print_r($what).'</pre>';
}

$data = $_POST;

/*--------Настраиваем логику пагинации------------*/

$per_page = 10; //записей на странице
$limit = count(R::findAll('Users'));  //общее кол-во записей
$num_pages = ceil($limit/$per_page); //число страниц

if(!$_GET['page']){
    $page = 1;
} else {
    $page = $_GET['page'];
}
if ($page > $num_pages) $page = 1;

//запрос к БД на отображение с такой-то по такую то запись
$users = R::findAll('Users','ORDER BY id ASC LIMIT '.(($page-1)*$per_page).', '.$per_page);

// Проверяем нужны ли надписи назад и вперед
if ($page != 1) $pervpage = '<a href=index.php?page=1>Первая</a> | <a href=index.php?page='. ($page - 1) .'>Назад</a> | ';
if ($page != $num_pages) $nextpage = ' | <a href=index.php?page='. ($page + 1) .'>Вперед</a> | <a href=index.php?page=' .$num_pages. '>Последняя</a>';


// Находим две ближайшие станицы с обоих краев, если они есть
for ($i = 5; $i >= 1; $i--){
    if($page - $i > 0) $pagesleft .= '<a href=index.php?page='.($page - $i).'>'.($page - $i).'</a> | ';
}
for ($i = 1; $i <=5; $i++){
    if($page + $i <= $num_pages) $pagesright .= ' | <a href=index.php?page='.($page + $i).'>'.($page + $i).'</a>';
}
/*-------------------------------------------*/

$num = 1;  //счетчик строк записей в таблице

?>
<div class="usersList">

<? if(!count($users)) { ?>
        Пользователей еще нет
<? } else { ?>
        <table width="100%">
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>E-mail</th>
                <th>Компания</th>
                <th>Должность</th>
                <th>Мобильный телефон</th>
                <th>Рабочий телефон</th>
                <th>Домашний телефон</th>
                <th></th>
                <th></th>
              </tr>
    <? foreach ($users as $user) { ?>
            <tr>
                <td><?=$num+10*($page-1); $num++;?></td>
                <td><?=$user->firstName ?></td>
                <td><?=$user->lastName?></td>
                <td><?=$user->email?></td>
                <td><?=$user->company?></td>
                <td><?=$user->position?></td>
                <td><?=$user->phone_mob?></td>
                <td><?=$user->phone_work?></td>
                <td><?=$user->phone_home?></td>
                <td>
                    <form action='edit.php' method='POST'>
                        <button type='submit' value='<?=$user->id?>' name='edit_id' class="button_small" id="edit"></button>
                    </form>
                </td>
                <td>
                    <form action='del.php' method='POST'>
                        <button type='submit' value='<?=$user->id?>' name='del_id' class="button_small" id="del"></button>
                    </form>
                </td>
            </tr>
      <?  }  ?>
        </table>
<? } ?>
</div>



<div class="button_big"><a href="/add.php">Создать новый аккаунт</a></div>

<?
// Вывод пагинации
if ($num_pages > 1)
{ ?>
    <div class="pagination">
        <?  echo $pervpage.$pagesleft.'<b>'.$page.'</b>'.$pagesright.$nextpage; ?>
    </div>
<? } ?>


PHP работает:
<?php
if (1 < 0) echo "привет";

___________________________________________

?>

<table align="left" border="1" width="300px" background="img/edit.png">
    <tr align="right">
        <td>text</td>
        <td>text</td>
    </tr>
    <tr>
        <td>text</td>
        <td>text</td>
    </tr>
</table>



</body>
</html>

