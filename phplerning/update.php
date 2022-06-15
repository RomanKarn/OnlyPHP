<?php

    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];


    $connectTabelBox = mysqli_connect('localhost', 'root', '', 'box');

    $requestUsers = 'UPDATE users SET firstname = "'.$firstname.'",lastname = "'.$lastname.'" WHERE id =' .$id;

    $result = mysqli_query($connectTabelBox, $requestUsers);

    mysqli_close($connectTabelBox);
?>

<meta http-equiv="refresh" content="1; url=index.php"> 