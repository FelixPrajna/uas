<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Bite of Bliss</title>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="container">
        <nav class="main-nav">
            <img src="/img/logo.png" alt="logo" class="logo">
            <ul class="main-menu">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                    <a href="#">Restaurants</a>
                    <ul class="dropdown-menu">
                        <li><a href="pierre">Pierre</a></li>
                        <li><a href="altitude">Altitude Grill</a></li>
                        <li><a href="ojju">Ojju</a></li>
                        <li><a href="isshin">Isshin</a></li>
                        <!-- Tambah link restoran lainnya di sini -->
                    </ul>
                </li>
                <li><a href="about">About Bite of Bliss</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Hero Section -->
        <header id="hero-section" class="hero">
            <div class="hero-content">
                <a href="#" class="btn"><i class="fas fa-chevron-right"></i></a>
            </div>
        </header>

 <!-- Our Brands Section -->
<section class="our-brands">
    <h2>Our Brands</h2>
    <p>Explore all of our venues to discover flavorful treats. Dine, drink, and celebrate with us.</p>
</section> 
<!-- carousel -->
<div class="carousel">
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="/img/gf/pierress.webp">
            <div class="content">
                <div class="title">About</div>
                <div class="topic">Pierre</div>
                <div class="des">
                    <!-- lorem 50 -->
                    Introducing Pierre, Pierre is an elegant French-style restaurant located in the upscale Senopati area of South Jakarta. The restaurant exudes a luxurious yet comfortable ambiance, featuring a modern interior with classic Parisian touches. Pierre is renowned for its authentic French cuisine, crafted with fresh, high-quality ingredients. Signature dishes include foie gras, escargot, and steak frites, all presented with artistic flair. The restaurant also boasts an extensive wine selection to complement each meal. With friendly and professional service, Pierre has become a favorite destination for food lovers seeking a premium dining experience in Jakarta.
                </div>
                <div class="buttons">
                    <button onclick="window.location.href='pierre'">SEE MORE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="/img/gf/bagus.webp">
            <div class="content">
                <div class="title">About</div>
                <div class="topic">Isshin</div>
                <div class="des">
                    Isshin is an authentic Japanese restaurant located in the heart of Jakarta, celebrated for its traditional approach to Japanese cuisine and serene ambiance. Known for its meticulously crafted sushi and sashimi, Isshin offers a refined dining experience with a focus on the freshest ingredients and time-honored techniques. The restaurant’s minimalist decor, inspired by Japanese aesthetics, creates a tranquil environment, ideal for intimate gatherings and quiet dinners. In addition to sushi, Isshin’s menu features a variety of Japanese specialties, including tempura, donburi, and hearty ramen, ensuring a comprehensive culinary journey through Japan. Popular among both sushi enthusiasts and those seeking a peaceful dining retreat, Isshin is the perfect destination for experiencing the true essence of Japanese flavors in an elegant yet understated setting.
                </div>
                <div class="buttons">
                    <button onclick="window.location.href='isshin'">SEE MORE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="/img/gf/ojju1.jpg">
            <div class="content">
                <div class="title">About</div>
                <div class="topic">Ojju</div>
                <div class="des">
                    Ojju is a vibrant Korean fusion restaurant located in the bustling heart of Jakarta, known for its fun, interactive dining experience and signature Rolling Cheese dishes. Set in a lively and modern setting, the restaurant provides a casual yet exciting atmosphere where diners can watch their meals prepared right at their table. Specializing in Korean cuisine with a twist, Ojju offers a variety of flavorful dishes, from crispy fried chicken and succulent beef ribs to traditional Korean hotpots, all enhanced with melted mozzarella cheese for an unforgettable experience. The menu also features classics like Tteokbokki and Kimchi Jjigae, ensuring a well-rounded taste of Korea. Popular among families and friends, Ojju is the perfect spot for those seeking a unique, social dining experience in a fun and welcoming environment.
                </div>
                <div class="buttons">
                    <button onclick="window.location.href='ojju'">SEE MORE</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/img/gf/altigrill.jpg">
            <div class="content">
                <div class="title">About</div>
                <div class="topic">Altitude Grill</div>
                <div class="des">
                    Altitude Grill is a sophisticated steakhouse located in the heart of Jakarta, known for its premium cuts of meat and stunning city views. Situated on a high floor, the restaurant offers a modern, luxurious ambiance, with floor-to-ceiling windows that provide breathtaking panoramas of the city skyline. Specializing in high-quality steaks, including Australian Wagyu and USDA Prime beef, Altitude Grill also serves a range of seafood and gourmet sides, ensuring a well-rounded dining experience. The restaurant is popular among those seeking a refined, upscale atmosphere, perfect for both business meetings and special occasions.
                </div>
                <div class="buttons">
                    <button onclick="window.location.href='altitude'">SEE MORE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- list thumnail -->
    <div class="thumbnail">
        <div class="item">
            <img src="/img/gf/pierress.webp">
            <div class="content">
                <div class="title">
                    Pierre
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/img/gf/Isshin.png">
            <div class="content">
                <div class="title">
                    Isshin
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/img/gf/Ojju.png">
            <div class="content">
                <div class="title">
                    Ojju
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/img/gf/okuzono.jpg">
            <div class="content">
                <div class="title">
                    Altitude Grill
                </div>
            </div>
        </div>
    </div>
    <!-- next prev -->

    <div class="arrows">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <!-- time running -->
    <div class="time"></div>
</div>

<section class="anidrag">
    <h2>Collection Menu</h2>
    <p>An exquisite selection of gourmet dishes, perfectly blending tradition with modern culinary flair.</p>

<div class="ani">
    <div class="slider">
        <div class="title">
            Collection Menu
        </div>
        <div class="form">
            <div class="barang">
                <div class="konten">
                    <img src="/img/salmon.jpg">
                    <div class="dus">
                        <div>
                            Smoked Salmon Nachos
                        </div>
                    </div>
                </div>
             </div>

            <div class="barang">
                <div class="konten">
                    <img src="/img/lobster.jpg">
                    <div class="dus">
                        <div>
                            Lobster and Scallop Gratin with américaine sauce
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/beef.jpg">
                    <div class="dus">
                        <div>
                            Charcoal Crust Roasted Beef
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/mandu.jpg">
                    <div class="dus">
                        <div>
                            Dry Aged Mandu
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/jijigae.jpg">
                    <div class="dus">
                        <div>
                            Kimchi Jjigae
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/eomuk.jpg">
                    <div class="dus">
                        <div>
                            Eomuk Guk Set
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/tteok.jpg">
                    <div class="dus">
                        <div>
                            Tteokbokki
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/guksu.jpg">
                    <div class="dus">
                        <div>
                            Spicy Guksu
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/tofu.jpg">
                    <div class="dus">
                        <div>
                            Sweet Tofu
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/set.jpg">
                    <div class="dus">
                        <div>
                            Sukiyaki Set
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/sukiyaki.jpg">
                    <div class="dus">
                        <div>
                            Sukiyaki udon
                        </div>
                    </div>
                </div>
             </div>
            
             <div class="barang">
                <div class="konten">
                    <img src="/img/tamago.jpg">
                    <div class="dus">
                        <div>
                            Salmon tamago udon
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/duckleg.jpg">
                    <div class="dus">
                        <div>
                            Crispy Duck Leg
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/kue.jpg">
                    <div class="dus">
                        <div>
                            Baked Puff Pastry
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/Crêpes au Beurre Salé.jpg">
                    <div class="dus">
                        <div>
                            Crêpes au Beurre Salé
                        </div>
                    </div>
                </div>
             </div>

             <div class="barang">
                <div class="konten">
                    <img src="/img/desert.jpg">
                    <div class="dus">
                        <div>
                            Dacquoise Aux Noisettes
                        </div>
                    </div>
                </div>
             </div>
    
        </div>
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



    <!-- Adding JavaScript for dynamic image changing -->
    <script src="/js/script.js"></script>
</body>
</html>
