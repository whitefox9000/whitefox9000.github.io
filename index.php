<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baki Restaurant - Where Business Meets Elegance</title>
    <link rel="icon" type="image/png" href="images/bakiLOGOfav.png">
    <link rel="stylesheet" href="style.css?v=11">
</head>
<body>

    <nav class="navbar">
        <div class="container nav-flex">
            <div class="logo">
                <a href="index.html"><img src="images/bakiLOGO.png" alt="Baki Logo"></a>
            </div>
            <div class="hamburger" onclick="toggleMenu()">
                <span class="bar"></span><span class="bar"></span><span class="bar"></span>
            </div>
            <ul class="nav-links">
                <li class="close-btn" onclick="toggleMenu()">✕</li>
                <li><a href="#" onclick="toggleMenu()">HOME</a></li>
                <li><a href="#promo" onclick="toggleMenu()">OFFERS</a></li>
                <li><a href="#about" onclick="toggleMenu()">THE STORY</a></li>
                <li><a href="#menu" onclick="toggleMenu()">MENU</a></li>
                <li><a href="#venues" onclick="toggleMenu()">VENUE</a></li>
                <li><a href="#gallery" onclick="toggleMenu()">GALLERY</a></li>
                <li><a href="#contact" onclick="toggleMenu()">CONTACT</a></li>
                <li class="mobile-btn">
                    <a href="https://wa.me/6281196941710" target="_blank" class="btn-book-menu">RESERVASI</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <span class="hero-subtitle">EST. YOGYAKARTA</span>
            <h1>
                A Premium Dining & Event Space<br>
                <em>Where Business Meets Elegance</em>
            </h1>
            <a href="https://wa.me/6281196941710" target="_blank" class="btn-hero">BOOK A TABLE</a>
        </div>
    </header>

    <section id="promo" class="section-padding bg-black">
        <div class="container center-text">
            <span class="section-tag-white">THE ASTONISHING ENJOYMENT</span>
            <h2>SPECIAL OFFERS</h2>
            
            <div class="promo-grid">
                <?php
                // 1. Ambil data dari file JSON
                $json_data = file_get_contents('data/promos.json');
                // 2. Ubah jadi Array PHP
                $promos = json_decode($json_data, true);

                // 3. Loop (Ulangi) untuk setiap promo
                if ($promos) {
                    foreach ($promos as $promo) {
                ?>
                    <div class="promo-card">
                        <img src="<?php echo $promo['image']; ?>" alt="<?php echo $promo['title']; ?>">
                        <div class="promo-caption">
                            <h3><?php echo $promo['title']; ?></h3>
                            <p><?php echo $promo['subtitle']; ?></p>
                            <a href="<?php echo $promo['link']; ?>" target="_blank">
                                <?php echo $promo['button_text']; ?> &rarr;
                            </a>
                        </div>
                    </div>
                <?php 
                    } // End foreach
                } else {
                    echo "<p style='color:white;'>Belum ada promo saat ini.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <section id="about" class="section-padding bg-white">
        <div class="container split-layout">
            <div class="text-block">
                <span class="section-tag">ABOUT US</span>
                <h2>HERITAGE MEETS<br>MODERNITY</h2>
                <p>Baki Restaurant adalah perpaduan arsitektur Renaissance yang megah dengan kekayaan rempah Nusantara. Kami menghadirkan pengalaman bersantap yang tak terlupakan di jantung Sleman.</p>
                <a href="story.html" class="link-arrow">OUR STORY →</a>
            </div>
            <div class="image-block">
                <img src="images/bakiBG.jpg" alt="Interior Baki">
            </div>
        </div>
    </section>

    <section id="menu" class="section-padding bg-black center-text">
        <div class="container">
            <span class="section-tag-white">DISCOVER FLAVOURS OF NUSANTARA</span>
            <h2 style="margin-bottom: 40px; color: #fff;">OUR MENU</h2>
            
            <div class="menu-embed-container">
                <iframe allowfullscreen="allowfullscreen" allow="clipboard-write" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/036d00c064.html" style="border: none; width: 100%; height: 600px;"></iframe>
            </div>
        </div>
    </section>

    <section id="venues" class="section-padding bg-white">
        <div class="container">
            <div class="center-text">
                <span class="section-tag">HOST YOUR EVENT</span>
                <h2>THE PERFECT VENUE</h2>
                <p style="color: #666; max-width: 600px; margin: 0 auto 50px;">
                    Dari rapat direksi yang privat hingga perayaan megah. 
                    Baki menyediakan ruang fleksibel dengan sentuhan kemewahan Eropa.
                </p>
            </div>

            <div class="venue-grid">
                <div class="venue-card">
                    <div class="venue-img">
                        <img src="images/venue-banquet.jpg" alt="Grand Banquet">
                    </div>
                    <div class="venue-info">
                        <h3>BANQUET</h3>
                        <p class="venue-specs">Up to 500 Pax | Wedding & Socials</p>
                        <p class="venue-desc">Venue luas dengan langit-langit tinggi, sempurna untuk resepsi pernikahan atau gala dinner.</p>
                    </div>
                </div>
                <div class="venue-card">
                    <div class="venue-img">
                        <img src="images/venue-meeting.jpg" alt="Meeting Room">
                    </div>
                    <div class="venue-info">
                        <h3>BUSINESS MEETING</h3>
                        <p class="venue-specs">3 Rooms | Max 60 Pax (Classroom) Per Rooms</p>
                        <p class="venue-desc">3 ruang pertemuan eksklusif. Konfigurasi fleksibel untuk training atau board meeting.</p>
                    </div>
                </div>
                <div class="venue-card">
                    <div class="venue-img">
                        <img src="images/venue-private.jpg" alt="Private Dining">
                    </div>
                    <div class="venue-info">
                        <h3>PRIVATE DINING</h3>
                        <p class="venue-specs">Main Resto | Intimate & Romantic Dining</p>
                        <p class="venue-desc">Nikmati sajian Nusantara Fusion kelas atas dalam suasana arsitektur Renaissance yang hangat.</p>
                    </div>
                </div>
            </div>
            
            <div class="center-text" style="margin-top: 80px; margin-bottom: 30px;">
                <p style="color: #666; font-size: 18px;">Download brosur & pricelist paket eksklusif kami</p>
            </div>

            <div class="packages-grid">
                <a href="documents/Wedding Packages - Brosur.pdf" target="_blank" class="btn-package">WEDDING PACKAGE <span class="download-icon">↓</span></a>
                <a href="documents/Meeting Packages - Brosur.pdf" target="_blank" class="btn-package">MEETING PACKAGE <span class="download-icon">↓</span></a>
                <a href="documents/Buffet Packages - Brosur.pdf" target="_blank" class="btn-package">BUFFET PACKAGE <span class="download-icon">↓</span></a>
                <a href="documents/Coffee Break - Brosur.pdf" target="_blank" class="btn-package">COFFEE BREAK PACKAGE <span class="download-icon">↓</span></a>
            </div>

            <div class="center-text" style="margin-top: 20px;">
			<a href="https://wa.me/6281196941710" class="link-arrow">CONTACT US FOR THE BEST PRICE →</a>
            </div>

        </div>
    </section>

    <section id="gallery" class="section-padding bg-white">
    <section class="section-padding bg-black">
        <div class="container split-layout reverse-mobile">
            <div class="image-block">
                 <div class="fb-gallery-grid">
                     <img src="images/fb-fire.jpg" alt="Passion Cooking">
                     <img src="images/fb-drink2.jpg" alt="Signature Cocktail">
                     <img src="images/fb-shrimp.jpg" alt="Fine Dish">
                     <img src="images/fb-dessert.jpg" alt="Sweet Corners">
                 </div>
            </div>
            <div class="text-block">
                <span class="section-tag-white">THE FOOD & BEVERAGE</span>
                <h2 style="color:white; margin-bottom: 10px !important;">CURATED WITH PASSION</h2>
                <p style="color:#ccc; margin-top:0 !important;">
                    Setiap hidangan di Baki dipersiapkan dengan teknik presisi, menggunakan bahan lokal terbaik. 
                    Dari cocktail yang menyegarkan hingga hidangan Nusantara yang kaya rasa.
                </p>
                <a href="gallery.html" class="link-arrow-white">VIEW GALLERY →</a>
            </div>
        </div>
    </section>

     <footer id="contact" class="footer-section">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col brand-col">
                    <img src="images/bakiLOGO.png" alt="Baki Footer Logo" class="footer-logo">
                    <p class="footer-tagline">Heritage Dining.<br>Timeless Experience.</p>
                </div>
                <div class="footer-col">
                    <h3>LOCATION</h3>
                    <p>Jl. Raya Randugowang, Jatirejo, Sendangadi, Kec. Mlati, Kab. Sleman, <br>Daerah Istimewa Yogyakarta</p>
                    <a href="https://maps.app.goo.gl/1Z3DUqzwPiiK9dDc8" target="_blank" class="footer-link">Check out on Google Maps →</a>
                </div>
                <div class="footer-col">
                    <h3>OPENING HOURS</h3>
                    <p>
                        <strong>Every Day</strong><br>
                        10:00 AM - 10:00 PM
                    </p>
                    <br>
                    <h3>CONTACT</h3>
                    <p>
                        <a href="https://wa.me/6281196941710" style="text-decoration:none; color:inherit;">+62 811 9694 1710</a><br>
                        <a href="mailto:sales@bakirestaurant.com" style="text-decoration:none; color:inherit;">sales@bakirestaurant.com</a>
                    </p>
                </div>
                <div class="footer-col">
                    <h3>SOCIAL</h3>
                    <div class="social-links">
                        <a href="https://www.instagram.com/bakirestaurantyk/" target="_blank">Instagram</a>
                        <a href="https://www.instagram.com/bakirestaurantyk/" target="_blank">TikTok</a>
                    </div>
                </div>
            </div>
            <div class="copyright">© 2025 BAKI RESTAURANT. Made with ± by Kdm (Bukan KDM)</div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('active');
            document.querySelector('.hamburger').classList.toggle('active');
        }
    </script>
</body>
</html>