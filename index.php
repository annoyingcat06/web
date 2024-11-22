<?php session_start();
$loginError = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';
$registerError = isset($_SESSION['register_error']) ? $_SESSION['register_error'] : '';
unset($_SESSION['login_error']);
unset($_SESSION['register_error']); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>TOURIST SPOTS</title>
    <script>
        window.loginError = "<?php echo $loginError; ?>";
        window.registerError = "<?php echo $registerError; ?>";
    </script>
</head>

<body>
    <header>
        <div class="menu-bar" id="menu-bar"><i class="fa-solid fa-bars"></i></div>
        <a href="#" class="logo">Welcome to <span>BATANES</span></a>
        <nav class="navbar" id="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#tourist-spots">Tourist Spots</a></li>
            <li><a href="#travel-tips">Travel Tips</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#about">About</a></li>
        </nav>

        <div class="icons"> <i class="fas fa-search" id="search-btn"></i> <?php if (isset($_SESSION['email'])): ?> <div class="dropdown"> <button class="dropbtn">User Account (<?php echo $_SESSION['email']; ?>)</button>
                    <div class="dropdown-content"> <a href="profile.php">My Account</a> <a href="orders.php">My Purchase</a> <a href="logout.php">Logout</a> </div>
                </div> <?php else: ?> <i class="fas fa-user" id="login-btn"></i> <?php endif; ?> </div>
        <form action="" class="search-bar-container" id="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

    <?php if (!isset($_SESSION['email'])): ?>
        <div class="login-form-container" id="login-form-container"> <i class="fas fa-times" id="form-close"></i>
            <form method="post" action="login.php" id="loginForm">
                <h3>Login</h3> <input type="email" name="email" class="box" placeholder="Enter your email" required> <input type="password" name="pass" class="box" placeholder="Enter your password" required> <input type="submit" value="Login Now" class="btn" name="login" id="loginBtn">
                <p>Forgot password? <a href="#">Click here</a></p>
                <p>Don't have an account? <a href="#" onclick="openRegisterForm()">Register now</a></p>
            </form>
        </div>


        <div class="registerformcontainer" id="registerformcontainer" ">
        <i class=" fas fa-times" id="register-form-close" onclick="closeRegisterForm()"></i>
            <form method="post" action="register.php" id="registerform">
                <h3>Register</h3>
                <input type="text" name="fname" class="box" placeholder="Enter your firstname" required>
                <input type="text" name="lname" class="box" placeholder="Enter your lastname" required>
                <input type="email" name="email" class="box" placeholder="Enter your email" required>
                <input type="password" name="password" class="box" placeholder="Enter your password" id="password" required>
                <input type="password" class="box" placeholder="Confirm your password" name="cpass" id="cpass" required>
                <input type="submit" value="Register Now" class="btn" name="register" id="register">
                <p>Already have an account? <a href="#" onclick="openLoginForm()">Login now</a></p>


            </form>

        </div>

        <section class="home" id="home">
            <div class="content wow fadeInUp" data-wow-duration="4s">
                <h1>Welcome to Batanes</h1>
                <h3>Discover the Jewel of the North</h3>
                <p>
                    Nestled at the northernmost tip of the Philippines, Batanes is an enchanting archipelago that captivates
                    the hearts of all who visit. Known for its breathtaking landscapes, tranquil beaches, and rich cultural
                    heritage, Batanes offers an idyllic escape from the hustle and bustle of everyday life.
                </p>
                <a href="#tourist-spots" class="btn">Discover more</a>
            </div>
            <div class="video-container">
                <video src="images/vid1.mp4" id="video-slider" loop autoplay muted></video>
            </div>
        </section>


        <section class="tourist-spots" id="tourist-spots">
            <h2>Explore Batanes</h2>

            <!-- Nature Category -->
            <div class="category" id="nature">
                <h3>Nature</h3>
                <div class="gallery">
                    <div class="spot" onclick="openModal('modal1')">
                        <img src="images/mt matarem.jpg" alt="Mt. Matarem">
                        <h4>Mt. Matarem</h4>
                    </div>
                    <div class="spot" onclick="openModal('modal2')">
                        <img src="images/racuh a payaman.webp" alt="Racuh A Payaman">
                        <h4>Racuh A Payaman</h4>

                    </div>
                </div>
            </div>
            <!-- Adventure Category -->
            <div class="category" id="adventure">
                <h3>Adventure</h3>
                <div class="gallery">
                    <div class="spot" onclick="openModal('modal3')">
                        <img src="images/chawa cave.webp" alt="Chawa Cave">
                        <h4>Chawa Cave</h4>

                    </div>
                    <div class="spot" onclick="openModal('modal4')">
                        <img src="images/mt iraya.jpg" alt="MT. Iraya">
                        <h4>MT. Iraya</h4>

                    </div>
                    <div class="spot" onclick="openModal('modal5')">
                        <img src="images/naidi hills.jpg" alt="Naidi Hills">
                        <h4>Naidi Hills</h4>

                    </div>
                </div>
            </div>

            <!-- Culture Category -->
            <div class="category" id="culture">
                <h3>Culture</h3>
                <div class="gallery">
                    <div class="spot" onclick="openModal('modal6')">
                        <img src="images/san carlos borromeo church.jpg" alt="San Carlos borromed church">
                        <h4>San Carlos borromed church</h4>
                    </div>
                    <div class="spot" onclick="openModal('modal7')">
                        <img src="images/house of dakkay.png" alt="House of Dakkay">
                        <h4>House of Dakkay</h4>
                    </div>
                    <div class="spot" onclick="openModal('modal8')">
                        <img src="images/san jose church.jpg" alt="San Jose Church">
                        <h4>San Jose Church</h4>
                    </div>
                    <div class="spot" onclick="openModal('modal9')">
                        <img src="images/old loran station.jpg" alt="Old Loran Station">
                        <h4>Old Loran Station</h4>
                    </div>
                    <div class="spot" onclick="openModal('modal10')">
                        <img src="images/diura fishing village.webp" alt="Diura Fishing Village">
                        <h4>Diura Fishing Village</h4>
                    </div>
                    <div class="spot" onclick="openModal('modal11')">
                        <img src="images/ruins of songsong.jpg" alt="Ruins of Song-Song">
                        <h4>Ruins of Song-Song</h4>
                    </div>
                </div>
            </div>
            <!-- Nature Category -->
            <!-- Beach Category -->
            <div class="category" id="beach">
                <h3>Beach</h3>
                <div class="gallery">
                    <div class="spot" onclick="openModal('modal12')">
                        <img src="images/sabtang island.jpg" alt="Sabtang Island">
                        <h4>Sabtang Island</h4>
                    </div>
                    <div class="spot" onclick="openModal('modal13')">
                        <img src="images/valugan bay.jpg" alt="Valugan Bay">
                        <h4>Valugan Bay</h4>
                    </div>
                </div>
            </div>


            <!-- Modals for Pop-up Information -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal1')">&times;</span>
                    <div class="carousel">
                        <img src="images/mt matarem.jpg" class="carousel-img" alt="Mt. Matarem">
                        <img src="images/mt matarem2.jpg" class="carousel-img" alt="Mt. Matarem View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Mt. Matarem</h3>
                    <p>Mt. Matarem is an extinct volcano 495 meters at its summit found in the municipality of Ivana.</p>
                </div>
            </div>

            <div id="modal2" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal2')">&times;</span>
                    <div class="carousel">
                        <img src="images/racuh a payaman.webp" class="carousel-img" alt="Racuh A Payaman">
                        <img src="images/racuh a payaman 2.jpg" class="carousel-img" alt="Racuh A Payaman View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Racuh A Payaman</h3>
                    <p>This is 25 minutes on good road from Basco. Also called Communal Pasture Land, it offers a panoramic
                        view of the hills and the sea; in this area, the cows outnumber the people.</p>
                </div>
            </div>

            <div id="modal3" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal3')">&times;</span>
                    <div class="carousel">
                        <img src="images/chawa cave.webp" class="carousel-img" alt="Chawa Cave">
                        <img src="images/chawa cave 2.webp" class="carousel-img" alt="Chawa Cave View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Chawa Cave</h3>
                    <p>Chawa Cave in Mahatao is for the adventurous tripper. An enchanted cave with natural salt beds whose
                        mouth opens to the South China Sea and is accessible through the boulders of Chawa Point. It is four
                        kilometers from Basco.
                    </p>
                </div>
            </div>

            <div id="modal4" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal4')">&times;</span>
                    <div class="carousel">
                        <img src="images/mt iraya.jpg" class="carousel-img" alt="MT. Iraya">
                        <img src="images/mt iraya 2.jpg" class="carousel-img" alt="MT. Iraya View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>MT. Iraya</h3>
                    <p>Mt. Iraya is a dormant volcano standing at 1,517 meters above sea level. It is good for mountain
                        climbing and trail blazing and is a few kilometers from Basco. Its last eruption was in 505 AD and
                        has become the source of fertile soil in Basco and parts of Mahatao.
                    </p>
                </div>
            </div>



            <div id="modal5" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal5')">&times;</span>
                    <div class="carousel">
                        <img src="images/naidi hills.jpg" class="carousel-img" alt="Naidi Hills">
                        <img src="images/naidi hills 2.jpg" class="carousel-img" alt="Naidi Hills View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Naidi Hills</h3>
                    <p>It is an old sitio derived from the Ivatan words "Na" which means past and "Idi" which means
                        settlement or community. Located here are the American period wireless telegraph facilities that
                        were bombed by the Japanese Imperial Army. One may also get a breathtaking view of Basco atop the
                        lighthouse situated on top of the hill.
                    </p>
                </div>
            </div>

            <div id="modal6" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal6')">&times;</span>
                    <div class="carousel">
                        <img src="images/san carlos borromeo church.jpg" class="carousel-img"
                            alt="San Carlos Borromed Church">
                        <img src="images/san carlos borromeo church 2.webp" class="carousel-img"
                            alt="San Carlos Borromed Church View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>San Carlos Borromed Church</h3>
                    <p>San Carlos Borromeo Church in Mahatao was completed in 1789 and still retains its centuries old
                        features. It has been declared by the National Historical Institute as Heritage Site and is one of
                        the region’s National Cultural Treasure. Visitors are invited to write their messages and prayers at
                        the Batanes Blank Book Archive located at the side of the church.
                    </p>
                </div>
            </div>

            <div id="modal7" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal7')">&times;</span>
                    <div class="carousel">
                        <img src="images/house of dakkay.png" class="carousel-img" alt="House of Dakkay">
                        <img src="images/house of dakkay 2.jpg" class="carousel-img" alt="House of Dakkay View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>House of Dakkay</h3>
                    <p>House of Dakkay is one of the oldest houses in Ivana open to visitors who sign the guest book and
                        give donations and take pictures with the homeowner.
                    </p>
                </div>
            </div>

            <div id="modal8" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal8')">&times;</span>
                    <div class="carousel">
                        <img src="images/san jose church.jpg" class="carousel-img" alt="San Jose Church">
                        <img src="images/san jose church 2.jpg" class="carousel-img" alt="San Jose Church View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>San Jose Church</h3>
                    <p>San Jose Church was built in 1814. One can climb and explore its crenellated fortress-like campanile.
                        The church faces the Ivana Seaport and Honesty Shop.
                    </p>
                </div>
            </div>

            <div id="modal9" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal9')">&times;</span>
                    <div class="carousel">
                        <img src="images/old loran station.jpg" class="carousel-img" alt="Old Loran Station">
                        <img src="images/old loran station 2.JPG" class="carousel-img" alt="Old Loran Station View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Old Loran Station</h3>
                    <p>Old Loran Station in Uyugan used to house an old US Coast Guard detachment for almost two decades and
                        is only 45 minutes from Basco on good roads. The place is now being renovated to preserve its old
                        glory.
                    </p>
                </div>
            </div>

            <div id="modal10" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal10')">&times;</span>
                    <div class="carousel">
                        <img src="images/diura fishing village.webp" class="carousel-img" alt="Diura Fishing Village">
                        <img src="images/diura fishing village 2.webp" class="carousel-img"
                            alt="Diura Fishing Village View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Diura Fishing Village</h3>
                    <p>This is a sitio in the eastern part of Mahatao twon where an association of fishermen called Mataw
                        practice the traditional fishing for Arayu (dorado). They have a ritual called kapayvanuvanua
                        signifying the start ofg the fishing season which usually falls in March. The village offers a good
                        view of the Pacific Ocean and Mt. Iraya.
                    </p>
                </div>
            </div>

            <div id="modal11" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal11')">&times;</span>
                    <div class="carousel">
                        <img src="images/ruins of songsong.jpg" class="carousel-img" alt="Ruins of Song-Song">
                        <img src="images/ruins of songsong 2.jpg" class="carousel-img" alt="Ruins of Song-Song View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Ruins of Song-Song</h3>
                    <p>Ruins of Song-Song is a ghost barangay in Uyugan which features a cluster of roofless shells of old
                        houses abandoned after the tidal wave that hit the island of Batan in the 50s and is a one hour road
                        trip from Basco. It has a good stretch of beach recommended for swimming.
                    </p>
                </div>
            </div>

            <div id="modal12" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal12')">&times;</span>
                    <div class="carousel">
                        <img src="images/sabtang island.jpg" class="carousel-img" alt="Sabtang Island">
                        <img src="images/sabtang island.jpg" class="carousel-img" alt="Sabtang Island View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Sabtang Island</h3>
                    <p>Sabtang Island is a 30-minute rocky ride from Ivana Seaport on a round-bottomed falowa, 14 kilometers
                        southwest of Batan Island. It has intermittent sand beaches and is dominated with steep mountains
                        and deep canyons with small level areas sporadically found along the coastline. It is one of the
                        most beautiful islands in Batanes. Visit Chavayan and witness the rolling of the seven waves:
                        Sumnanga or the Little Hongkong; Nakanmuan, the fishing village; watch the “Kuyab” or Migratory
                        Birds from China that flock by the hundreds during the month of October.
                    </p>
                </div>
            </div>

            <div id="modal13" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal13')">&times;</span>
                    <div class="carousel">
                        <img src="images/valugan bay.jpg" class="carousel-img" alt="Valugan Bay">
                        <img src="images/valugan bay 2.jpg" class="carousel-img" alt="Valugan Bay View">
                        <!-- Add more images as needed -->
                    </div>
                    <h3>Valugan Bay</h3>
                    <p>Valugan Bay in Basco has a kilometer-long stretch of beach with multi-colored rocks and is only
                        three kilometers from Basco proper. It has a good view of the calming sea while the stones and
                        rocks offer visitors to spend the hours away as they play.
                    </p>
                </div>
            </div>

            </div>
        </section>


        <section class="travel-tips" id="travel-tips">
            <h2>Travel Tips</h2>

            <div class="tip">
                <h3>Plan Ahead</h3>
                <p>Batanes is a popular destination with limited accommodations, so make sure to book your lodging and
                    flights in advance.</p>
            </div>

            <div class="tip">
                <h3>Pack Wisely</h3>
                <p>Bring clothing suitable for varying weather conditions. The weather can be unpredictable, so pack layers,
                    a raincoat, and comfortable walking shoes.</p>
            </div>

            <div class="tip">
                <h3>Respect the Culture</h3>
                <p>The Ivatan people have a rich cultural heritage. Be respectful of local customs and traditions. Always
                    ask permission before taking photos of people or their homes.</p>
            </div>

            <div class="tip">
                <h3>Stay Connected</h3>
                <p>Mobile signal can be intermittent in some areas. Consider purchasing a local SIM card for better
                    connectivity, and inform your accommodation of your travel plans.</p>
            </div>

            <div class="tip">
                <h3>Bring Cash</h3>
                <p>ATMs are scarce, and many establishments may not accept credit cards. Bring enough cash to cover your
                    expenses, but keep it secure.</p>
            </div>

            <div class="tip">
                <h3>Environmental Responsibility</h3>
                <p>Batanes is known for its pristine environment. Help preserve its natural beauty by disposing of trash
                    properly, minimizing plastic use, and following the Leave No Trace principles.</p>
            </div>
        </section>

        <section class="shop" id="shop">
            <h2>Our Shop</h2>

            <div class="products">
                <div class="product">
                    <img src="images/products/anaha tea.jpg" alt="Anaha Tea">
                    <h4>Anaha Tea</h4>
                    <p>₱50.00</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/batanes basket.jpg" alt="Batanes Basket">
                    <h4>Batanes Basket</h4>
                    <p>$29.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/garlic bits.jpg" alt="Garlic Bits">
                    <h4>Garlic Bits</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/kamote cookies.jpg" alt="Kamote Cookies">
                    <h4>Kamote Cookies</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/kanayi.jpg" alt="Kanayi Headgear">
                    <h4>Kanayi Headgear</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/refrigerator magnet.jpg" alt="Batanes refrigerator Magnet">
                    <h4>Batanes refrigerator Magnet</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/souvenier shirts.jpg" alt="Souvenier Shirts">
                    <h4>Souvenier Shirts</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/turmeric powder.jpg" alt="Turmeric Powder">
                    <h4>Turmeric Powder</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/turmeric tea.jpg" alt="Turmeric Tea">
                    <h4>Turmeric Tea</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/vakul headgear.jpg" alt="Vakul Headgear">
                    <h4>Vakul Headgear</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/products/wakay.jpg" alt="Wakay (Camote) Chips">
                    <h4>Wakay (Camote) Chips</h4>
                    <p>$39.99</p>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <!-- Add more products as needed -->
            </div>
        </section>

        <section class="about" id="about">
            <div class="content">
                <h2>About Us</h2>
                <p>
                    Welcome to our corner of paradise—Batanes! Nestled at the northernmost tip of the Philippines, Batanes
                    is an enchanting archipelago that captivates the hearts of all who visit. Our mission is to share the
                    stunning beauty, rich cultural heritage, and tranquil ambiance of Batanes with the world.
                </p>
                <h3>Our Mission</h3>
                <p>
                    To provide an unforgettable travel experience that blends adventure, relaxation, and cultural immersion.
                    We strive to promote sustainable tourism and support the local community by showcasing the natural
                    wonders and traditions of Batanes.
                </p>
                <h3>Our Values</h3>
                <ul>
                    <li>Authenticity: Embrace and promote the authentic culture and traditions of Batanes.</li>
                    <li>Sustainability: Foster sustainable tourism practices that protect the environment and benefit the
                        local community.</li>
                    <li>Adventure: Offer exciting and unique experiences for all types of travelers.</li>
                    <li>Community: Support and empower the local Ivatan community.</li>
                </ul>
                <h3>What We Offer</h3>
                <p>
                    From guided tours of Batanes' picturesque landscapes and historical sites to cultural experiences that
                    connect you with the Ivatan people, we offer a range of activities designed to immerse you in the beauty
                    and charm of Batanes. Whether you're hiking the rolling hills, exploring ancient villages, or relaxing
                    on serene beaches, every moment in Batanes is an opportunity to create lasting memories.
                </p>
                <!-- Contact Us Button -->
                <button class="contact-us-btn" onclick="openContactForm()">Contact Us</button>

                <!-- Contact Us Form Container -->
                <div class="contact-form-container" id="contact-form-container">
                    <div class="contact-form">
                        <span class="close-btn" onclick="closeContactForm()">&times;</span>
                        <h2>Contact Us</h2>
                        <form action="">
                            <input type="text" class="box" placeholder="Your Name" required>
                            <input type="email" class="box" placeholder="Your Email" required>
                            <textarea class="box" placeholder="Your Message" required></textarea>
                            <input type="submit" value="Send Message" class="btn">
                        </form>
                    </div>
                </div>


                <!-- Social Media Links with Icons -->
                <div class="social-media">
                    <h3>Follow Us</h3>
                    <br>
                    <ul>
                        <li><a href="https://facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook"></i>
                            </a></li>
                        <li><a href="https://twitter.com/yourprofile" target="_blank"><i class="fab fa-twitter"></i>
                            </a></li>
                        <li><a href="https://instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i>
                            </a></li>
                        <li><a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </section>





        <script src="main.js"></script>
    <?php endif; ?>
</body>

</html>