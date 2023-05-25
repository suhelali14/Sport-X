<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- Cover -->
<main>
    <div class="slider-container">
      <?php include("includes/slide-co.php");?>
    </div>

    <div class="second-container">
      <?php include("includes/second-co.php");?>
    </div>
    <!-- Main -->
    <div class="wrapper">
        <h1>Featured Collection<h1>

    </div>






    <div id="content" class="container">
        <!-- container Starts -->
          
        <div class="row">
            <!-- row Starts -->

            <?php

    getPro();

    ?>

        </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <br>
       <!--
    - FOOTER
  -->

  <footer>

<div class="footer-category">

    <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        <div class="footer-category-box">

            <h3 class="category-box-title">Sports Shoes :</h3>

            <a href="#" class="footer-category-link">Adidas</a>
            <a href="#" class="footer-category-link">Nike</a>
            <a href="#" class="footer-category-link">Puma</a>
            <a href="#" class="footer-category-link">Bacca Bussi</a>
            <a href="#" class="footer-category-link">Fila</a>
            <a href="#" class="footer-category-link">Sparx</a>
            

        </div>

        

        <div class="footer-category-box">
            <h3 class="category-box-title">Cricket :</h3>

            <a href="#" class="footer-category-link">Bat</a>
            <a href="#" class="footer-category-link">Ball</a>
            <a href="#" class="footer-category-link">Complete Kit</a>
            <a href="#" class="footer-category-link">Stumps</a>
            <a href="#" class="footer-category-link">Caps</a>
            <a href="#" class="footer-category-link">Kashmir Willow Bat</a>
            <a href="#" class="footer-category-link">English Willow Bat</a>
            
        </div>

        <div class="footer-category-box">
            <h3 class="category-box-title">Others :</h3>

            <a href="#" class="footer-category-link">Football</a>
            <a href="#" class="footer-category-link">Basketball</a>
            <a href="#" class="footer-category-link">Baseball</a>
            <a href="#" class="footer-category-link">Tenis kit</a>
            <a href="#" class="footer-category-link">Table tenis</a>
            <a href="#" class="footer-category-link">Swimming Glass</a>
            <a href="#" class="footer-category-link">Dumbbell</a>
            <a href="#" class="footer-category-link">Sport Short</a>
            <a href="#" class="footer-category-link">Helmete</a>
            <a href="#" class="footer-category-link">Cycle Kit</a>
            
        </div>

    </div>

</div>

<div class="footer-nav">

    <div class="container">

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Popular Categories</h2>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Cricket</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Football</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Table Tenis</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Gym</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Watches</a>
            </li>

        </ul>

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Products</h2>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Prices drop</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">New products</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Best sales</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Contact us</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Sitemap</a>
            </li>

        </ul>

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Our Company</h2>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Delivery</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Legal Notice</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Terms and conditions</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">About us</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Secure payment</a>
            </li>

        </ul>

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Services</h2>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Prices drop</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">New products</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Best sales</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Contact us</a>
            </li>

            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">Sitemap</a>
            </li>

        </ul>

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Contact</h2>
            </li>

            <li class="footer-nav-item flex">
                <div class="icon-box">
                    <ion-icon name="location-outline"></ion-icon>
                </div>

                <address class="content">
                    419 State 414 Rte
                    Vallabh Nagar, Pune, Pimpri, India
                </address>
            </li>

            <li class="footer-nav-item flex">
                <div class="icon-box">
                    <ion-icon name="call-outline"></ion-icon>
                </div>

                <a href="tel:+917558436263" class="footer-nav-link">(91) 7558436263</a>
            </li>

            <li class="footer-nav-item flex">
                <div class="icon-box">
                    <ion-icon name="mail-outline"></ion-icon>
                </div>

                <a href="mailto:Sportx@gmail.com" class="footer-nav-link">Sportx@gmail.com</a>
            </li>

        </ul>

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <h2 class="nav-title">Follow Us</h2>
            </li>

            <li>
                <ul class="social-link">

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>

    </div>

</div>

<div class="footer-bottom">

    <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
            Copyright &copy; <a href="#">SportX</a> all rights reserved.
        </p>

    </div>

</div>

</footer>
    </body>
    <script src="js/nav.js"></script>

    <!--
  - ionicon link
-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </html>