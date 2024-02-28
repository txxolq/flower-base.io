<?php
session_start();

// Подключение к базе данных
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "клиентская контора";

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM клиенты WHERE login='$login' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        echo "Вы успешно вошли в систему!";

        $_SESSION['user'] = true;

        header("Location: index0.php");
    } else {
        echo "Неверное имя пользователя или пароль!";
    }
}




