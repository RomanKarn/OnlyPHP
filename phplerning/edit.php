<?php

$id=$_GET['id'];

$connectTabelBox = mysqli_connect('localhost', 'root', '', 'box');

$requestUsers = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($connectTabelBox, $requestUsers);

$tabelUsers = mysqli_fetch_row($result);

mysqli_close($connectTabelBox);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>PHP-requset</title>
</head>

<body>
    <h1>Обновление базы данных</h1>
    <?php

        echo "$tabelUsers[1] $tabelUsers[2]";

    ?>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $tabelUsers[0] ?>">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="submit" value="Создать">
    </form>

</body>

</html>