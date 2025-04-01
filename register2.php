<?php

include 'connect2.php';

if (isset($_POST['signIn'])) {
    // Формаас утгуудыг авах
    $app = $_POST['app'];
    $loan_amount = $_POST['loanAmount'];

    $insertQuery = "INSERT INTO requests (app, loan_amount)
                      VALUES ('$app', '$loan_amount')";
    if ($conn->query($insertQuery) === TRUE) {
     echo "Амжилттай илгээгдлээ!";
        header("Location: finish.html");
    exit();
    } else {
     echo "Алдаа: " . $conn->error;
    }
}
?>