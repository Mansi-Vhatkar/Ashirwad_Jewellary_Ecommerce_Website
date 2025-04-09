<?php  
session_start();  
include("connect.php");  

// Check if user is logged in
$userName = "Guest";
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = "SELECT firstName, lastName FROM users WHERE email='$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userName = $row['firstName'] . " " . $row['lastName'];
    }
}

?>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Ashirwad</title>  

   
    <!-- linking Font Awesome for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <!--Linking Swiper css  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>  

    <!-- Header / Navbar -->  
    <header>  
    <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">🪙Ashirwad</h2>
            </a>
        <ul class="nav-menu">
            <button id="menu-close-button" class="fas fa-times"></button>

                <li class="nav-item">  
                    <a href="#" class="nav-link">Home</a>  
                </li>  
                <li class="nav-item">  
                    <a href="#about" class="nav-link">About</a>  
                </li>  
                <li class="nav-item">  
                    <a href="#product" class="nav-link">Products</a>  
                </li>  
                <li class="nav-item">  
                    <a href="#gallery" class="nav-link">Gallery</a>  
                </li>  
                <li class="nav-item">  
                    <a href="#testimonials" class="nav-link">Testimonials</a>  
                </li>  
                <li class="nav-item">  
                    <a href="#contact" class="nav-link">Contact</a>  
                </li>  
                <li class="nav-item">  
        <?php if ($userName == "Guest"): ?>
        <button onclick="location.href='login.php'">Sign In</button>
        <button onclick="location.href='register.php'">Sign Up</button>
    <?php else: ?>
        <p class="nav-item " style="color: #ffffff">Welcome, <?php echo $userName; ?></p>
        <li class="nav-item">
        <a href="logout.php" class="nav-link" style="color: #ffffff">Logout</a></li>
    <?php endif; ?>
        
                    </li>  
                </ul>  
                
                <button id="menu-open-button" class="fas fa-bars"></button>  
            </nav>  
        </header>  
       
    <main>  

        <!-- Hero section -->  
        <section class="hero-section">
            <div class="section-content">
              <div class="hero-details">
                <h2 class="title">Ashirwad Emporium</h2>
                <h3 class="subtitle">Where every piece shines as bright as your golden moments!</h3>
                <p class="description">"Our shop is where craftsmanship meets brilliance, offering timeless treasures that shine as bright as your dreams.</p>

                <div class="buttons">
                    <a href="product.html" class="button order-now">Designs</a>
                    <a href="#contact" class="button contact-us">Contact Us</a>
                </div>
              </div>  

              <div class="hero-image-wrapper">
                <img src="c2.png" alt="Hero " class="hero-image">
              </div>
            </div>
        </section>

        <!-- About section -->  
        <section class="about-section" id="about">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="about-img.jpg" alt="about image" class="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title">About Us</h2>
                    <p class="text">Welcome to Ashirwad Emporium, the place where ideas take shape and craftsmanship knows no bounds. We're more than just a workspace—we're a community of dreamers and doers, dedicated to bringing visions to life through skill, passion, and a touch of artistry. We believe in the power of making—of using our hands to shape not just materials, but experiences and connections. In a world saturated with mass production, we stand firm in our commitment to quality, authenticity, and the beauty of the handcrafted</p>
                    <div class="social-link-list">
                        <a href="https://www.facebook.com/balika.vhatkar" target="_blank" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/vhatkar_mansi/" target="_blank" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="mailto:vhatkarmanu0703@gmail.com" target="_blank" class="social-link"><i class="fa-regular fa-envelope"></i></a>
                        <a href="tel:+918355996027" target="_blank" class="social-link"><i class="fa-solid fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </section>  

        <!-- Product section -->  
        <section class="product-section" id="product" >
            <h2 class="section-title">Our Jewelleries</h2>
            <div class="section-content">
              <ul class="product-list">
                <li class="product-item">
                    <img src="ring.jpg" alt="Ring" class="product-image">
                    <h3 class="name">Rings</h3>
                    <p class="text">A symbol of love and commitment, our gold ring exudes elegance and sophistication. Perfect for any occasion. Embrace timeless beauty.</p>
                </li>

                <li class="product-item">
                    <img src="Nosering.jpeg" alt="Nosering" class="product-image">
                    <h3 class="name">Nosering</h3>
                    <p class="text">Enhance your beauty with our gold nosering. A blend of tradition and modernity. A statement piece that captivates.</p>
                </li>

                <li class="product-item">
                    <img src="necklace.png" alt="Necklace" class="product-image">
                    <h3 class="name">Necklaces</h3>
                    <p class="text">Adorn your neckline with grace and charm. Our gold necklace radiates elegance and timeless beauty. A must-have accessory.</p>
                </li>

                <li class="product-item">
                    <img src="Earrings.jpeg" alt="Earring" class="product-image">
                    <h3 class="name">Earrings</h3>
                    <p class="text">Add a touch of glamour with our delicate gold earrings. Shining brightly with every movement. Perfect for any event.</p>
                </li>

                <li class="product-item">
                    <img src="chain.jpeg" alt="Chain" class="product-image">
                    <h3 class="name">Chain</h3>
                    <p class="text">Sleek and stylish, our gold chain is the perfect accessory. Strong yet elegant. Ideal for any outfit.</p>
                </li>

                <li class="product-item">
                    <img src="Braclet.jpg" alt="Braclet" class="product-image">
                    <h3 class="name">Bracelets</h3>
                    <p class="text">Grace your wrist with our luxurious gold bracelet. Radiates elegance and charm. Perfect for every occasion.</p>
                </li>
              </ul>  
            </div>

         </section>


       <!-- Testimonials section -->
       <section class="testimonials-section" id="testimonials">
            <h2 class="section-title">Testimonials</h2>
            <div class="section-content">
               <div class="slider-container swiper">
                <div class="slider-wrapper">
                    <ul class="testimonials-list swiper-wrapper">
                        <li class="testimonial swiper-slide">
                            <img src="Mom.jpg" alt="User" class="user-image">
                            <h3 class="name">Balika Narayankar</h3>
                            <i class="feedback">"The intricate detailing on this gold necklace is simply stunning. Every time I wear it, I receive endless compliments!"</i>
                        </li>

                        <li class="testimonial swiper-slide">
                            <img src="me.jpg" alt="User" class="user-image">
                            <h3 class="name">Mansi Vhatkar</h3>
                            <i class="feedback">"I've had this gold bracelet for years, and it still looks as beautiful as the day I bought it. Truly timeless and classic."</i>
                        </li>

                        <!-- <li class="testimonial swiper-slide">
                            <img src="pallu.jpg" alt="User" class="user-image">
                            <h3 class="name">Pallavi Varpe</h3>
                            <i class="feedback">"I gifted my mother a pair of gold earrings for her birthday, and she was thrilled. The quality and design exceeded our expectations."</i>
                        </li> -->

                        <li class="testimonial swiper-slide">
                            <img src="nikki.jpg" alt="User" class="user-image">
                            <h3 class="name">Nikita Bagewadi</h3>
                            <i class="feedback">"The gold ring I purchased feels so solid and well-made. You can tell it's a piece that will last a lifetime."</i>
                        </li>

                        <li class="testimonial swiper-slide">
                            <img src="siddhi.jpg" alt="User" class="user-image">
                            <h3 class="name">Siddhi Kharade</h3>
                            <i class="feedback">"Wearing this gold pendant makes me feel so elegant and sophisticated. It's the perfect accessory for any occasion."</i>
                        </li>

                        <li class="testimonial swiper-slide">
                            <img src="shreya.jpg" alt="User" class="user-image">
                            <h3 class="name">Shreya Kalambe</h3>
                            <i class="feedback">"The delicate engravings and flawless finish on my gold bangle are a testament to the jeweler's attention to detail."</i>
                        </li>

                        <li class="testimonial swiper-slide">
                            <img src="Aditi2.jpg" alt="User" class="user-image">
                            <h3 class="name">Aditi Acharekar</h3>
                            <i class="feedback">"Absolutely exquisite!"</i>
                        </li>

                        <li class="testimonial swiper-slide">
                            <img src="janu.jpg" alt="User" class="user-image">
                            <h3 class="name">Janhavi Kadam</h3>
                            <i class="feedback">"The customer service was fantastic."</i>
                        </li>

                        <li class="testimonial swiper-slide">
                            <img src="shruti.jpg" alt="User" class="user-image">
                            <h3 class="name">Shruti Salvi</h3>
                            <i class="feedback">"I was worried about the price, but this gold chain is worth every penny. The quality and beauty are unmatched"</i>
                        </li>

                        <!-- <li class="testimonial">
                            <img src="Aditi2.jpg" alt="User" class="user-image">
                            <h3 class="name">Aditi Acharekar</h3>
                            <i class="feedback">"The delicate engravings and flawless finish on my gold bangle are a testament to the jeweler's attention to detail. Absolutely exquisite!"</i>
                        </li>

                        <li class="testimonial">
                            <img src="janu.jpg" alt="User" class="user-image">
                            <h3 class="name">Janhavi Kadam</h3>
                            <i class="feedback">"The customer service was fantastic. They helped me choose the perfect gold jewelry piece and made the whole shopping experience delightful."</i>
                        </li>
                       
                        <li class="testimonial">
                            <img src="shruti.jpg" alt="User" class="user-image">
                            <h3 class="name">Shruti Salvi</h3>
                            <i class="feedback">"I was worried about the price, but this gold chain is worth every penny. The quality and beauty are unmatched."</i>
                        </li> -->
                    </ul>
 
    
                    <div class="swiper-pagination"></div>
                    <div class="swiper-slide-button swiper-button-prev"></div>
                    <div class="swiper-slide-button swiper-button-next"></div>


               </div> 
            </div>
         </section>


           <!-- Gallery section -->
           <section class="gallery-section" id="gallery">
                <h2 class="section-title">Gallery</h2>
                <div class="section-content">
                    <ul class="gallery-list">
                        <li class="gallery-item">
                            <img src="1.jpg" alt="Gallery" class="gallery-image">
                        </li>

                        <li class="gallery-item">
                            <img src="2.jpg" alt="Gallery" class="gallery-image">
                        </li>

                        <li class="gallery-item">
                            <img src="3.jpeg" alt="Gallery" class="gallery-image">
                        </li>

                        <li class="gallery-item">
                            <img src="4.jpg" alt="Gallery" class="gallery-image">
                        </li>

                        <li class="gallery-item">
                            <img src="5.jpg" alt="Gallery" class="gallery-image">
                        </li>

                        <li class="gallery-item">
                            <img src="6.png" alt="Gallery" class="gallery-image">
                        </li>
                    </ul>
                </div>
            </section>


       <!-- Contact section -->
       <section class="contact-section" id="contact">
            <h2 class="section-title">Contact Us</h2>
            <div class="section-content">
                <ul class="contact-info-list">
                    <li class="contact-info">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>123 Campsite Avenue, Wilderness, CA 98765</p>
                    </li>

                    <li class="contact-info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>vhatkarmanu0703@gmail.com</p>
                    </li>

                    <li class="contact-info">
                        <i class="fa-solid fa-phone"></i>
                        <p>9324007492</p>
                    </li>

                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Monday-Friday : 9:00 AM - 5:00 PM</p>
                    </li>

                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Saturday : 10:00 AM - 3:00 PM</p>
                    </li>

                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Sunday: Closed</p>
                    </li>

                    <li class="contact-info">
                        <i class="fa-solid fa-globe"></i>
                        <p>www.google.com</p>
                    </li>
                </ul>

                <form action="https://api.web3forms.com/submit" method="POST" class="contact-form">

                    <input type="hidden" name="access_key" value="7198c2cd-6cb2-45b8-a1fd-e66e7f77e50f">

                    <input type="text" name="name" placeholder="Your Name" class="form-input" required>

                    <input type="email" name="email"  placeholder="Your Email" class="form-input" required>

                    <textarea name="message" placeholder="Your message" class="form-input"  required></textarea>

                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>
         </section>

   

   <!-- Footer section -->
   <footer class="footer-section">
           <div class="section-content">
            <p class="copyright-text"> &copy; 2025 Ashirwad Gold Emporium</p>
            <div class="social-link-list">
                <a href="https://www.facebook.com/balika.vhatkar" target="_blank" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/vhatkar_mansi/" target="_blank" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                <a href="mailto:vhatkarmanu0703@gmail.com" target="_blank" class="social-link"><i class="fa-regular fa-envelope"></i></a>
                
            </div>

            <p class="policy-text">
                <a href="" class="policy-link">Privacy policy</a>
                <span class="separator">.</span>
                <a href="" class="policy-link">Refund policy</a>
            </p>
           </div>
         </footer>
         </main>  
  <!-- Linking Swiper script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- linking custom script -->
<script src="script.js"></script>

</body>  
</html>  
