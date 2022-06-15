<?php 
    $id =$_GET['id'];
    $connectTabelBox = mysqli_connect('localhost', 'root', '', 'box');

    $requestUsers = "SELECT * FROM books where id=".$id;
    
    $result = mysqli_query($connectTabelBox, $requestUsers);
    
    $books = mysqli_fetch_row($result);

    
    mysqli_close($connectTabelBox);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>PHP-requset</title>
</head>

<body>
<?php
    echo '<h1>'.$books[1].'</h1>';
?>
    <?php
    echo '<p>'.$books[3].'</p>';

    ?>
</body>

</html>