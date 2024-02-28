<?php
session_start();

// Подключение к базе данных
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "клиентская контора";

$conn = new mysqli($servername, $username, $password, $dbname);



if(isset($_POST['register'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "INSERT INTO клиенты (login, password) VALUES ('$login', '$password')";
    $conn->query($sql);
    echo "Регистрация прошла успешно!";
}




