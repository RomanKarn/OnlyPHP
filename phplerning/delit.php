<?php

$id=$_POST['id'];

$connectTabelBox = mysqli_connect('localhost', 'root', '', 'box');

$requestUsers = 'DELETE FROM users WHERE id='.$id;

$result = mysqli_query($connectTabelBox, $requestUsers);

mysqli_close($connectTabelBox);

?>

<meta http-equiv="refresh" content="1; url=index.php"> 