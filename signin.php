<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
          
            echo "<script>
                    alert('Kirish muvaffaqiyatli! Xush kelibsiz, " . $user['name'] . "!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Noto\\'g\\'ri email yoki parol!');
                    window.location.href = 'index2.php';
                  </script>";
        }
    } catch(PDOException $e) {

        echo "<script>
                alert('Xato: " . addslashes($e->getMessage()) . "');
                window.location.href = 'index2.php';
              </script>";
    }
}
?>