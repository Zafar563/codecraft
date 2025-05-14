<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="signup.php" method="POST">
                <h1>Ro'yxatdan o'tish</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>yoki elektron pochtangizdan foydalaning</span>
                <input type="text" name="name" placeholder="Ism" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Parol" required>
                <button type="submit">Ro'yxatdan o'tish</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="signin.php" method="POST">
                <h1>Kirish</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>yoki email va parolingizdan foydalaning</span>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Parol" required>
                <a href="#">Parolingizni unutdingizmi?</a>
                <button type="submit">Kirish</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Xush kelibsiz!</h1>
                    <p>Saytning barcha imkoniyatlaridan foydalanish uchun shaxsiy ma'lumotlaringizni kiriting</p>
                    <button class="hidden" id="login">Kirish</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Salom, Do'stim!</h1>
                    <p>Saytning barcha imkoniyatlaridan foydalanish uchun shaxsiy ma'lumotlaringiz bilan ro'yxatdan o'ting</p>
                    <button class="hidden" id="register">Ro'yxatdan o'tish</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>