<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dasturlash Kurslari</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./img/logo .webp"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <?php
if (isset($_SESSION['success_message'])) {
    echo "<div style='text-align:center; background:#d4edda; color:#155724; padding:10px; margin:20px; border:1px solid #c3e6cb; border-radius:5px;'>
        {$_SESSION['success_message']}
    </div>";
    unset($_SESSION['success_message']);
}
?>

   <div class="wrapper">
    <header>
        <div class="logo">
            <img src="./img/logo .webp" alt="CodeCraft Logo">
            CodeCraft 
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Bosh sahifa</a></li>
                <li><a href="kasblar.html">Kasblar</a></li>
                <li><a href="kurslar.html">Kurslar</a></li>
                <li><a href="contact.html">Contacts</a></li>
                <li><a href="index2.php">SIGNIN | SIGNUP</a></li>
            </ul>
        </nav>
    </header>
   

    <div class="container">
   
    
        <section class="hero">
            <h3>CodeCraft ONLAYN TA’LIM PLATFORMASI</h3>
            <h1>Dasturlashga oid kasblarni o'rgatamiz</h1>
            <button class="btn-primary">O'qishni boshlash</button>
        </section>
    
        <section class="reviews">
            <h2>O‘quvchilarimiz fikrlari</h2>
            <div class="review-cards">
                <div class="review">
                    <img src="./img/1-ustoz.jpg" alt="Mavludaxon ">
                    <h4>Mavludaxon Numanova</h4>
                    <p>Data Science va Sun’iy intellekt kursi bitiruvchisi</p>
                </div>
                <div class="review">
                    <img src="./img/images (1).jpg" alt="Malohat ">
                    <h4>Yusufboy Rajabov</h4>
                    <p>"QA" kursi bitiruvchisi</p>
                </div>
                <div class="review">
                    <img src="./img/images.jpg" alt="Abdugaffor ">
                    <h4>Abdugaffor Abdukarimov</h4>
                    <p>"Project Management" kursi bitiruvchisi</p>
                </div>
                <div class="review">
                    <img src="./img/images (2).jpg" alt="Jamoliddin Najmiddinov">
                    <h4>Jamoliddin Najmiddinov</h4>
                    <p>"Project Management" kursi o‘quvchisi</p>
                </div>
            </div>
            <button class="btn-primary">Barchasini ko‘rish</button>
        </section>
    
        <section class="kasblar">
            <h2>Kasblar</h2>
            <p>Kasbga yo‘naltirilgan praktikumlar yordamida eng samarali yo‘llar bilan mutaxassislar qatoriga qo‘shiling.</p>
            <div class="kasb-buttons">
                <button class="active">Barcha kasblar</button>
                <button>Sun’iy intellekt</button>
                <button>Frontend</button>
                <button>Kiberxavfsizlik</button>
                <button>No-Code: kod yozmasdan sayt tuzish</button>
                <button>Sun’iy intellekt – NLP</button>
                <button>Boshqalar</button>
            </div>
            <div class="kasb-cards">
                <div class="kasb-card">
                    <h3> Sun’iy intellekt</h3>
                    <p>Ulug‘bek Muminov</p>
                    <button><a href="aicourse.html" style="color: #333;">Batafsil →</a></button>
                </div>
                <div class="kasb-card">
                    <h3>Frontend</h3>
                    <p>Ulug‘bek Samigjonov</p>
                    <button><a href="frontend.html" style="color: #333;">Batafsil →</a></button>
                </div>
                <div class="kasb-card">
                    <h3>Kiberxavfsizlik: Pentesting </h3>
                    <p>Saud Abdulwahed</p>
                    <button><a href="cybersecurity.html" style="color: #333;">Batafsil →</a></button>
                </div>
                <div class="kasb-card">
                    <h3>No-Code: kod yozmasdan sayt tuzish</h3>
                    <p> Abdulatif Abdurahmonov</p>
                    <button><a href="nocode.html" style="color: #333;">Batafsil →</a></button>
                </div>  <div class="kasb-card">
                    <h3>Computer Vision</h3>
                    <p>Zarifjon Naxalov</p>
                    <button><a href="comvision.html" style="color: #333;">Batafsil →</a></button>
                </div>
                <div class="kasb-card">
                    <h3>Sun’iy intellekt – NLP</h3>
                    <p>Adham Zohirov</p>
                    <button><a href="nlp.html" style="color: #333;" >Batafsil →</a></button>
                </div>
            </div>
        </section>
        
     
        <script src="index.js"></script>
    </div>
    <div class="carusel">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/ai kurs.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Sun’iy intellekt</h5>
                      <p>AI texnologiyalariga asoslangan kurs. Ma'lumotlar tahlili va mashinani o‘rganish.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./img/Blog-Banner-Computer-Vision.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Compyuter Vision</h5>
                      <p>Computer Vision — bu rasm va videolar orqali kompyuterga “ko‘rishni” o‘rgatadigan sun’iy intellekt yo‘nalishi.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./img/frontend-kurs.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Frontend</h5>
                      <p>Veb dasturlash asoslari</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="logo .webp" alt="CodeCraft Logo">
                <p>CodeCraft - Dasturlash va IT kasblarini o‘rgatuvchi onlayn platforma.</p>
            </div>
    
            <div class="footer-links">
                <h4>Foydali Havolalar</h4>
                <ul>
                    <li><a href="kurslar.html">Kurslar</a></li>
                    <li><a href="kasblar.html">Kasblar</a></li>
                    <li><a href="blok.html">Blog</a></li>
                    <li><a href="#">Aloqa</a></li>
                </ul>
            </div>
    
            <div class="footer-social">
                <h4>Biz bilan bog‘laning</h4>
                  <div class="social-icons">
                    <a href="https://www.facebook.com/?locale=ru_RU"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 48 48">
                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                    </svg></a>
                                        <a href="https://web.telegram.org/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  width="70" height="70"viewBox="0 0 48 48">
                    <path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path><path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"></path><path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"></path><path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"></path>
                    </svg></a>
                                        <a href="https://m.youtube.com/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="70" viewBox="0 0 48 48">
<path fill="#FF3D00" d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z"></path><path fill="#FFF" d="M20 31L20 17 32 24z"></path>
</svg></a>
                </div>
            </div>
        </div>
    
       
    </footer>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
