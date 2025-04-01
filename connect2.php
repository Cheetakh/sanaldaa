<?php

$servername = "localhost";     // эсвэл серверийн IP хаяг
$username = "root"; // өөрийн MySQL хэрэглэгчийн нэр
$password = ""; // хэрэглэгчийн нууц үг
$dbname = "login2";       // өгөгдлийн сангийн нэр
// Холболт үүсгэх
$conn = new mysqli($servername, $username, $password, $dbname);
// Холболт шалгах
if ($conn->connect_error) {
    echo "Холбогдож чадсангүй: ";
}
?>
