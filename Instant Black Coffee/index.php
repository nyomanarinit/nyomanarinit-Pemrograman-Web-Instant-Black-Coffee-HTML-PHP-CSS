<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instant Black Coffee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Shop Logo" class="logo">
        <nav>
            <ul>
                <li><a href="#" class="active">HOME</a></li>
                <li><a href="#about">ABOUT</a></li> <!-- Link diperbaiki -->
                <li><a href="#products">PRODUCT</a></li>
                <li><a href="#contact">CONTACT</a></li> <!-- Link diperbaiki -->
                <li><a href="login.php">LOGIN/REGISTER</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="content">
            <h1>BRAND</h1>
            <h2>Instant Black <span>Coffee</span></h2>
            <p>Enjoy Real Coffee in an Instant!</p>
            <a href="#products" class="shop-btn">SHOP NOW</a> <!-- Link ke produk -->
        </div>
        <div class="image-container">
            <img src="background.png" alt="Coffee Background">
        </div>
    </section>

    <!-- BAGIAN PRODUK -->
    <section id="products" class="products">
        <h2>Our Products</h2><br>
        <div class="product-list">
            <div class="product-item">
                <img src="product1.png" alt="Product 1">
                <h3>Black Coffee</h3>
                <p>Rich and bold taste with a smooth finish.</p>
                <p><strong>Price: $4</strong></p>
                <a href="order.php?product=Black Coffee" class="shop-btn">Buy Now</a>

            </div>
            <div class="product-item">
                <img src="product2.png" alt="Product 2">
                <h3>Vanilla Coffee</h3>
                <p>A touch of vanilla for a delightful flavor.</p>
                <p><strong>Price: $5</strong></p>
                <a href="order.php?product=Black Coffee" class="shop-btn">Buy Now</a>

            </div>
            <div class="product-item">
                <img src="product3.png" alt="Product 3">
                <h3>Mocha Coffee</h3>
                <p>Perfect blend of coffee and chocolate.</p>
                <p><strong>Price: $6</strong></p>
                <a href="order.php?product=Vanilla Coffee" class="shop-btn">Buy Now</a>
            </div>
            <div class="product-item">
                <img src="product4.png" alt="Product 4">
                <h3>Caramel Coffee</h3>
                <p>Sweet caramel-infused coffee for a smooth taste.</p>
                <p><strong>Price: $5</strong></p>
                <a href="order.php?product=Caramel Coffee" class="shop-btn">Buy Now</a>

            </div>
            <div class="product-item">
                <img src="product5.png" alt="Product 5">
                <h3>Hazelnut Coffee</h3>
                <p>A nutty twist to your favorite coffee.</p>
                <p><strong>Price: $5</strong></p>
                <a href="order.php?product=Hazelnut Coffee" class="shop-btn">Buy Now</a>
            </div>
            <div class="product-item">
                <img src="product6.png" alt="Product 6">
                <h3>Espresso Shot</h3>
                <p>Strong and energizing for your busy days.</p>
                <p><strong>Price: $3 </strong></p>
                <a href="order.php?product=Espresso Shot" class="shop-btn">Buy Now</a>
            </div>
        </div>
    </section>

    <!-- BAGIAN ABOUT -->

    <section id="about" class="about">
        <div class="abouts">
            <h2>About Us</h2>
            <p>We are a provider of high-quality instant coffee with authentic taste. With selected ingredients and perfect process, we bring you the best coffee experience.</p>
        </div>
    </section>


    <section class="visi-misi">
        <div class="visi">
            <h2>Visi</h2>
           <p>MTo be the best instant coffee brand that provides distinctive taste and premium quality.</p>
        </div>
        <div class="misi">
            <h2>Misi</h2>
            <ul>
                <li>Using high quality ingredients.</li>
                <li>Maintaining a hygienic and modern production process.</li>
                <li>Providing a variety of flavors to suit customer tastes.</li>
                <li>Providing the best service and a satisfying coffee experience.</li>
            </ul>
        </div>
    </section>

    <section class="extra-info">
        <h2>Why Choose Us?</h2>
        <p>We present instant coffee that is not only delicious, but also easy to serve, with a commitment to quality and customer satisfaction.</p>
    </section>


    <!-- BAGIAN ABOUT/FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Alamat -->
            <div class="footer-section">
                <h3>Address</h3>
                <p>123 Coffee Street, Jakarta, Indonesia</p>
            </div>

            <!-- Kontak Kami -->
            <div id=contact class="footer-section">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fas fa-phone"></i> <strong>Telepon:</strong> +62 812-3456-7890</li>
                    <li><i class="fas fa-envelope"></i> <strong>Email:</strong> support@instantcoffee.com</li>
                </ul>
            </div>

            <!-- Media Sosial -->
            <div id=contact class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/InstantBlackCoffee" target="_blank">
                        <i class="fab fa-facebook"></i><strong>Facebook:</strong> Instant Black Coffee
                    </a>
                    <a href="https://www.instagram.com/instantblackcoffee" target="_blank">
                        <i class="fab fa-instagram"></i><strong>Instagram:</strong> @instantblackcoffee
                    </a>
                    <a href="https://twitter.com/instantcoffee" target="_blank">
                        <i class="fab fa-twitter"></i><strong>Twitter:</strong> @instantcoffee
                    </a>
                </div>
            </div>
        </div>
        <p class="copyright">&copy; 2025 Instant Black Coffee. All rights reserved.</p>
    </footer>


</body>
</html>
