<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butler's Steak – Bite of Bliss</title>
    <link rel="stylesheet" href="/css/styles.css"> <!-- Hubungkan dengan CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
  <!-- Navigation Bar -->
  @include('partials.navbar')

    <!-- Hero Section -->
    <header id="hero-section" class="hero">
        <div class="hero-content">
            <a href="#" class="btn"><i class="fas fa-chevron-right"></i></a>
        </div>
    </header>


    <div class="detail-page">
        <header class="detail-header">
          <div class="container">
            <h1>The Story of Ojju</h1>
            <p>Ojju is a vibrant Korean fusion restaurant located in the bustling heart of Jakarta, known for its fun, interactive dining experience and signature Rolling Cheese dishes. Set in a lively and modern setting, the restaurant provides a casual yet exciting atmosphere where diners can watch their meals prepared right at their table. Specializing in Korean cuisine with a twist, Ojju offers a variety of flavorful dishes, from crispy fried chicken and succulent beef ribs to traditional Korean hotpots, all enhanced with melted mozzarella cheese for an unforgettable experience. The menu also features classics like Tteokbokki and Kimchi Jjigae, ensuring a well-rounded taste of Korea. Popular among families and friends, Ojju is the perfect spot for those seeking a unique, social dining experience in a fun and welcoming environment.</p>
          </div>
        </header>
        
      </div>
      <section class="best-sellers">
        <h2>Our Bestsellers</h2>
        <div class="best-seller-cards">
            <div class="best-seller-card">
                <img src="/img/guksu.jpg" alt="Spicy Guksu">
                <h3>Spicy Guksu</h3>
            </div>
            <div class="best-seller-card">
                <img src="/img/tteok.jpg" alt="Tteokbokki">
                <h3>Tteokbokki</h3>
            </div>
            <div class="best-seller-card">
                <img src="/img/eomuk.jpg" alt="Eomuk Guk Set">
                <h3>Eomuk Guk Set</h3>
            </div>
            <div class="best-seller-card">
                <img src="/img/jijigae.jpg" alt="Jjigae soup">
                <h3>Jjigae soup</h3>
            </div>
        </div>
    </section>

   <!-- Footer Section -->
   <footer>
    <div class="footer-container">
        <div class="footer-address">
            <p>
                Rumah Billy. <br>
                Apartemen Robinson, Jakarta Utara 14460
            </p>
            <p><strong>T:</strong> (021) 5881392 &nbsp; <strong>E:</strong> website@biteofbliss.com</p>
        </div>

        <div class="footer-brands">
            <h4>Brands</h4>
            <ul>
                <li>Pierre</li>
                <li>Altitude Grill</li>
                <li>Ojju</li>
                <li>Isshin</li>
            </ul>
        </div>

      <div class="footer-about">
          <h4>About</h4>
          <ul>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Careers</a></li>
          </ul>
      </div>

      <div class="footer-contact">
          <h4>Contact Us</h4>
          <p>Find Us</p>
          <div class="social-icons">
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
      </div>
  </div>
</footer>
    
    <script src="/js/script.js"></script>

</body>
</html>
