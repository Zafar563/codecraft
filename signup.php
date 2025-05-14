<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Parolni xavfsiz shifrlash

    try {
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
           echo "<script>
                    alert('Bu gmail allaqachon ro`yxatdan o`tgan " . $user['name'] . "!');
                    window.location.href = 'index2.php';
                  </script>";
        } else {
    
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

        echo "<script>
                    alert('Muvafaqiyatli ro`yxatdan o`tdingiz, " . addslashes($name) . "! Xush kelibsiz!');
                    window.location.href = 'index.php';
                  </script>";
                }
    } catch(PDOException $e) {
        echo "Xato: " . $e->getMessage();
    }
}
?>