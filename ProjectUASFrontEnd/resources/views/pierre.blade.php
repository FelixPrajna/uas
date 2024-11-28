<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIERRE – Bite of Bliss</title>
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
            <h1>The Story of Pierre</h1>
            <p>Introducing Pierre, Pierre is an elegant French-style restaurant located in the upscale Senopati area of South Jakarta. The restaurant exudes a luxurious yet comfortable ambiance, featuring a modern interior with classic Parisian touches. Pierre is renowned for its authentic French cuisine, crafted with fresh, high-quality ingredients. Signature dishes include foie gras, escargot, and steak frites, all presented with artistic flair. The restaurant also boasts an extensive wine selection to complement each meal. With friendly and professional service, Pierre has become a favorite destination for food lovers seeking a premium dining experience in Jakarta. </p>
          </div>
        </header>
      
      </div>
      <section class="best-sellers">
        <h2>Our Bestsellers</h2>
        <div class="best-seller-cards">
            <div class="best-seller-card">
                <img src="/img/duckleg.jpg" alt="Crispy Duck Leg">
                <h3>Crispy Duck Leg</h3>
            </div>
            <div class="best-seller-card">
                <img src="/img/kue.jpg" alt="Baked Puff Pastry">
                <h3>Baked Puff Pastry</h3>
            </div>
            <div class="best-seller-card">
                <img src="/img/Crêpes au Beurre Salé.jpg" alt="Crêpes au Beurre Salé">
                <h3>Crêpes au Beurre Salé</h3>
            </div>
            <div class="best-seller-card">
                <img src="/img/desert.jpg" alt="Dacquoise Aux Noisettes">
                <h3>Dacquoise Aux Noisettes</h3>
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
