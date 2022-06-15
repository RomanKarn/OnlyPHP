<?php 
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    
    $connectTabelBox = mysqli_connect('localhost', 'root', '', 'box');

    $requestUsers = "INSERT INTO users (firstname,lastname) VALUES ('$firstname','$lastname') ";

    $result = mysqli_query($connectTabelBox, $requestUsers);

    mysqli_close($connectTabelBox);
?>

<meta http-equiv="refresh" content="1; url=index.php"> 