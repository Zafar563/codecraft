<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Parolni xavfsiz shifrlash

    try {
        // Emailning mavjudligini tekshirish
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Bu email allaqachon ro'yxatdan o'tgan!";
        } else {
            // Yangi foydalanuvchini qo'shish
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            echo "Ro'yxatdan o'tish muvaffaqiyatli! <a href='index.php'>Kirish</a>";
        }
    } catch(PDOException $e) {
        echo "Xato: " . $e->getMessage();
    }
}
?>