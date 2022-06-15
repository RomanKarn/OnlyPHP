<?php

$connectTabelBox = mysqli_connect('localhost', 'root', '', 'box');

$requestUsers = "SELECT * FROM users";

$result = mysqli_query($connectTabelBox, $requestUsers);

$tabelUsers = mysqli_fetch_all($result);

foreach($tabelUsers as $key =>$user){

    $requestBook = 'SELECT * FROM books where parent_id ='.$user[0].' ORDER BY name DESC';

    $resultBook = mysqli_query($connectTabelBox, $requestBook);

    $books = mysqli_fetch_all($resultBook);
    $tabelUsers[$key]['books']= $books;
}

mysqli_close($connectTabelBox);

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>PHP-requset</title>
</head>

<body>
    <h1>Запросы из базы данных</h1>

    <?php
    foreach ($tabelUsers as $key => $user) {
        echo '<ul><b><a href=author.php?id='.$user[0].'>'. $user[1]. $user[2].'</a><b>';
        foreach($user['books'] as $keyBook=>$book){
            echo '<li><a href=book.php?id='.$book[0].'>'. $book[1] .'</a></li>';
        }
        
        echo '</ul>';
    }

    ?>

    <form action="insert.php" method="POST">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="submit" value="Создать">
    </form>
</body>

</html>