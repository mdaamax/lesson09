<?php
$name = "не определено";
$age = "не определен";
$last = "не определен";
if(isset($_POST["name"])){

    $name = $_POST["name"];
}
if(isset($_POST["age"])){

    $age = $_POST["age"];
}
if(isset($_POST["fio"])){

    $last = $_POST["fio"];
}
echo "Имя: $name <br> Фамилия:$last <br> Возраст: $age "  ;
?>

<!DOCTYPE html>
<html>
<head>
    <title>lesson09</title>
    <meta charset="utf-8" />
</head>
<body>
<h3>Ваши данные</h3>
<form action="index.php" method="POST">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Фамилия: <input type="text" name="fio" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
