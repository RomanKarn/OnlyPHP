<?php 
    $id =$_GET['id'];
    $connectTabelBox = mysqli_connect('localhost', 'root', '', 'box');

    $requestUsers = "SELECT * FROM users where id=".$id;
    
    $result = mysqli_query($connectTabelBox, $requestUsers);
    
    $user = mysqli_fetch_row($result);

    $requestUsers = "SELECT * FROM books where parent_id=".$id;
    
    $result = mysqli_query($connectTabelBox, $requestUsers);
    
    $books = mysqli_fetch_all($result);

    
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
    echo '<h1>'.$user[1].$user[2].'</h1>';
?>
    <?php
    echo '<ul>';
    foreach($books as $keyBook=>$book){
        echo '<li><a href=book.php?id='.$book[0].'>'. $book[1] .'</a></li>';
    }
        
    echo '</ul>';

    ?>
</body>

</html>