<?php
$host = "localhost";
$username = "root"; // XAMPPda odatiy foydalanuvchi nomi
$password = ""; // XAMPPda odatiy parol bo'sh
$dbname = "login_db";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Ulanish muvaffaqiyatli!";
} catch(PDOException $e) {
    echo "Ulanish xatosi: " . $e->getMessage();
}
?>