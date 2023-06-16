<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massaggio</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/icons/short_logo.ico">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Fasthand&family=Homemade+Apple&family=Lato&family=Leckerli+One&family=Monsieur+La+Doulaise&family=Montserrat:wght@300;400;500;600;700;800;900&family=Petit+Formal+Script&family=Poppins&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">
    <link 
        rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" 
        crossorigin="anonymous"/>
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">

</head>

<body>

    <!-- Header Section -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/massaggio_logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nav">
                        <ul>
                            <!-- <li><a href="#">HOME</a></li> -->
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#pack">Our Packages</a></li>
                            <li><a href="#book">Book a Session</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- header close -->

    <!-- Banner -->
    <main>
        <div class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="cd-md-12">
                        <div class="banner">
                            <h2>Massaggio</h2>
                            <h5>Massage, Spa, Health</h5>
                            <button class="banner-button" onClick="navigateToForm()">
                                Book a session
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-text" id="about">
            <h2>Get to Know Us</h2>
            <p>Opened in 2022, Great Nature Lounge is dedicated to giving our clients quality and luxury services to ensure their utmost relaxation and pampering.</p>
        </div>
        
        <div class="work-container" id="pack">
            <div class="work">
                <div class="work-des">
                    <h2>Our Packages</h2>
                    <p>We have a variety of services to ensure your wellness.</p>
                </div>
                <div class="gallery">
                    <div class="image-row-1">
                        <div class="img-container">
                            <img src="assets/images/c-1.jpg" alt="">
                            <div class="img-title">Body and Soul spa (BDT 5000/=)</div>
                        </div>
                        <div class="img-container">
                            <img src="assets/images/c-3.jpg" alt="">
                            <div class="img-title">Your glow day (BDT 6500/=)</div>
                        </div>
                        <div class="img-container">
                            <img src="assets/images/c-2.jpg" alt="">
                            <div class="img-title">Queen of the day (BDT 7000/=)</div>
                        </div>
                    </div>
                    <div class="image-row-2" >
                        <div class="img-container">
                            <img src="assets/images/c-4.jpg" alt="">
                            <div class="img-title">Couple Spa Regular (BDT 6000/=)</div>
                        </div>
                        <div class="img-container">
                            <img src="assets/images/c-5.jpg" alt="">
                            <div class="img-title">Free Mind spa (BDT 4000/=)</div>
                        </div>
                        <div class="img-container">
                            <img src="assets/images/c-6.jpg" alt="">
                            <div class="img-title">Couple Spa Premium (BDT 10000/=)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- -----------------Form-------------- -->
        <div class="form" id="book">
            <div class="form-overlay">
                <div class="text-contact">
                    <h2>Book a Spa Session</h2>
                    <p>We ensure quality & support</p>
                </div>
               
                <form action="data/book.php" method="POST">
                    <div class="info">
                        <input type="text" placeholder="Full Name" name="name"> <br>
                        <input type="text" placeholder="Email Address" name="email" require> <br>
                        <input type="text" placeholder="Phone Number" name="phone" require> <br>
                        <input type="date" placeholder="Date" name="date"> <br>
                        <label for="packages">
                            <select name="package[]" id="package">
                                <option value="Body and Soul spa">Body and Soul spa</option>
                                <option value="Your glow day">Your glow day</option>
                                <option value="Queen of the day">Queen of the day</option>
                                <option value="Couple Spa Regular">Couple Spa Regular</option>
                                <option value="Free Mind spa">Free Mind spa</option>
                                <option value="Couple Spa Premium">Couple Spa Premium</option>
                            </select>
                        </label>
                    </div>


                    <div class="contact-sub">
                        <div class="checker">
                            <!-- <input type="checkbox" name="" id="">
                            <p>Are You Agree</p> -->
                        </div>

                        <div class="news-btn">
                            <button type="submit">Book</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </main>


    <!-- --------------------------footer--------------------- -->
    <footer>
        <p>Copyright &#160 &copy &#160 2023,&#160 Massaggio</p>
    </footer>

    <script>
        function navigateToForm() {
            const contactSection = document.querySelector('#book');
            contactSection.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>

</html>