<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Maldives Tour Packages | ESPI Travels</title>
    <?php include 'components/meta.php'; ?>
</head>

<body>

    <?php include 'components/header.php'; ?>

    <!-- tri hero style start -->
    <div class="tri-hero-style d-flex align-items-center">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class=" col-lg-10 order-1 order-lg-0 d-flex align-items-center justify-content-center">
                    <div class="tri-hero-content">
                        <h1 class="tri-hero-title text-center">
                            Discover the Wonders of Maldives With<br> the Best Maldives Travel Agent
                        </h1>
                        <p class="text-white text-center">
                            Start an unforgettable journey through Maldives’ crystal-clear waters, pristine white-sand beaches, luxury overwater villas, and serene island life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tri hero style end -->

    <!-- tri explore bar start -->
    <div class="tri-explore-bar">
        <div class="container">
            <div class="row justify-content-end ">
                <div class="col-xl-9 tri-explore-bar-row">
                    <form action="mini-inquiry.php" method="post" class="contact-input">
                        <div class=" d-flex align-items-center justify-content-lg-between gap-4 flex-lg-nowrap flex-wrap">
                            <div class="d-flex gap-lg-5 gap-2 gap-sm-3 flex-wrap flex-sm-nowrap">
                                <div class="filter-single location-select">
                                    <h5 class="mb-1">Name</h5>
                                    <input class="mb-3" type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="filter-single date-input">
                                    <h5 class="mb-1">Phone</h5>
                                    <input class="mb-3" type="tel" name="phone" placeholder="Your Phone Number">
                                </div>
                                <div class="filter-single location-select">
                                    <h5 class="mb-1">Date of departure</h5>
                                    <input class="mb-3" type="month" name="date" min="2025-01">
                                    <input type="hidden" id="g-recaptcha-response-2" name="g-recaptcha-response-2" required>
                                </div>
                            </div>

                            <div class="submit-btn">
                                <button class="tri-submit-btn tri-btn-fill" type="submit">Explore <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute('6Ldq5asqAAAAAKxdTGMgX4Ba8WxVNdy7yVWkgdoA', {
                                    action: 'submit'
                                }).then(function(token) {
                                    document.getElementById('g-recaptcha-response-2').value = token;
                                });
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- tri explore bar end -->



    <!-- Trip Services Area Start -->

    <div class="trip-service-area positioning pt-100 pb-76">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class=" col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="trip-section-title">
                        <h3 class="text-center">Start Your Adventure with Our Exclusive Maldives Tours!</h3>
                    </div>

                </div>
            </div>
            <div class="row mt-50">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="trip-service-box text-center">
                        <div class="trip-service-icon">
                            <img src="assets/images/icon/family.webp" alt="">
                        </div>
                        <div class="trip-service-content">
                            <h4><a href="https://www.espitravels.in/ba_activity/family-tour/" target="_blank" rel="noopener noreferrer">Family Tours</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="trip-service-box text-center">
                        <div class="trip-service-icon">
                            <img src="assets/images/icon/couple.webp" alt="">
                        </div>
                        <div class="trip-service-content">
                            <h4><a href="https://www.espitravels.in/ba_activity/honymoon-special/" target="_blank" rel="noopener noreferrer">Honeymoon Special</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="trip-service-box text-center">
                        <div class="trip-service-icon">
                            <img src="assets/images/icon/building.webp" alt="">
                        </div>
                        <div class="trip-service-content">
                            <h4><a href="https://www.espitravels.in/ba_activity/luxury-holiday/" target="_blank" rel="noopener noreferrer">Luxury Tours</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="trip-service-box text-center">
                        <div class="trip-service-icon">
                            <img src="assets/images/icon/adventurer.webp" alt="">
                        </div>
                        <div class="trip-service-content">
                            <h4><a href="https://www.espitravels.in/ba_activity/adventure-tour/" target="_blank" rel="noopener noreferrer">Adventure Tours</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-7 col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12 mobt-24">
                    <div class="trip-service-btn text-lg-end text-md-start text-sm-start">
                        <a href="https://www.espitravels.in/holiday-packages/" target="_blank" rel="noopener noreferrer">View All Services <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="container-text trip-service-text">Services</h4>
    </div>

    <!-- Trip Services Area End -->


    <!-- tri package style start -->

    <div class="tri-package-style bg-white destination-area positioning overflow-hidden pt-100 pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="trip-section-title text-center">
                        <h3>Experience the Timeless <br> Beauty of Maldives!</h3>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="destination-slide-wrap">
                        <div class="single-destination-slide-box">
                            <div class="tri-package-card">
                                <div class="tri-package-thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/trip/hulhumalev.webp" alt="">
                                    </a>
                                </div>
                                <div class="tri-package-disc">
                                    <div class="package-info">
                                        <div class="location-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                        <div class="location">
                                            <h4><a href="javascript:void(0)">Hulhumalev</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-destination-slide-box">
                            <div class="tri-package-card">
                                <div class="tri-package-thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/trip/maldives.webp" alt="">
                                    </a>
                                </div>
                                <div class="tri-package-disc">
                                    <div class="package-info">
                                        <div class="location-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                        <div class="location">
                                            <h4><a href="javascript:void(0)">Maldives</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-destination-slide-box">
                            <div class="tri-package-card">
                                <div class="tri-package-thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/trip/maldives2.webp" alt="">
                                    </a>
                                </div>
                                <div class="tri-package-disc">
                                    <div class="package-info">
                                        <div class="location-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                        <div class="location">
                                            <h4><a href="javascript:void(0)">Maldives</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-destination-slide-box">
                            <div class="tri-package-card">
                                <div class="tri-package-thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/trip/sultan-park.webp" alt="">
                                    </a>
                                </div>
                                <div class="tri-package-disc">
                                    <div class="package-info">
                                        <div class="location-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                        <div class="location">
                                            <h4><a href="javascript:void(0)">Sultan Park</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-destination-slide-box">
                            <div class="tri-package-card">
                                <div class="tri-package-thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/trip/villingili-island.webp" alt="">
                                    </a>
                                </div>
                                <div class="tri-package-disc">
                                    <div class="package-info">
                                        <div class="location-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                        <div class="location">
                                            <h4><a href="javascript:void(0)">Villingili Island</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <h4 class="container-text package-text">Marvels</h4>
    </div>

    <!-- tri package style end -->


    <!-- Destination Area Start -->

    <div class="destination-area positioning mt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 col-12 mobt-50">
                    <div class="destination-right-wrap">
                        <div class="trip-section-title text-center">
                            <h2>Most Popular <br> Maldives Tour Packages</h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-3 mb-3 col-md-6 col-sm-12">
                    <a href="https://www.espitravels.in/tour/5d-4n-maldives-tour-package/" target="_blank" rel="noopener noreferrer">
                        <div class="tour-card">
                            <div class="tour-image">
                                <img src="assets/images/trip/packages/hulhumale-island.webp" alt="Maldives Tour">
                            </div>
                            <div class="tour-info">
                                <div class="rating">
                                    <span class="stars">★★★★★</span>
                                    <span class="reviews">(0)</span>
                                    <span class="days"><i class="fa-regular fa-clock"></i> 5 Days</span>
                                </div>
                                <h5>5D / 4N Maldives Tour Package</h5>
                                <p class="price">From <span>₹62,499*</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <h4 class="container-text destination-text">Packages</h4>
    </div>

    <!-- Destination Area End -->


    <!-- Map Area Start -->

    <div class="trip-map-area mt-100 d-lg-block">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-7 col-md-12 custom-japan-text">
                    <div class="trip-section-title mb-4">
                        <h3>From India to Maldives <br> A Journey With ESPI</h3>
                    </div>
                    <p>
                        Step into a tropical haven of tranquility and beauty! Our India to Maldives tour package takes you on an unforgettable journey to explore
                        <strong>the turquoise lagoons</strong>, <strong>luxurious overwater bungalows</strong>, <strong>vibrant coral reefs</strong>, and
                        <strong>serene island retreats</strong>. Experience the Maldives’ perfect mix of relaxation, marine adventure, and luxury with expert-guided experiences, top-notch stays, and seamless travel arrangements.
                        Whether you're snorkeling with vibrant marine life or enjoying a sunset dinner by the sea, every moment is designed for pure bliss.
                        Book your trip today and let the serenity of the Maldives rejuvenate your soul!
                    </p>

                </div>
                <div class="col-lg-4 col-md-12">
                    <video autoplay loop muted class="w-100 japan-video">
                        <source src="assets/images/video/india-maldives.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <h4 class="container-text places-text">Maldives</h4>
    </div>

    <!-- Map Area End -->


    <!-- Contact Form -->

    <div class="contact-area positioning mt-100" id="contact">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <form action="inquiry.php" method="POST" class="contact-input">
                        <div class="contact-title">
                            <h3>Send Us A Message</h3>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                                <input type="text" name="name" placeholder="Enter your name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                                <input type="tel" name="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                                <input type="email" name="email" placeholder="Enter your email address">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Write your message..."></textarea>
                                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>
                            </div>
                            <div class="contact-btn-wrap">
                                <button type="submit" class="common-btn btn-hrrd-1">Send Message</button>
                            </div>
                            <p class="form-message"></p>
                        </div>
                        <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute('6Ldq5asqAAAAAKxdTGMgX4Ba8WxVNdy7yVWkgdoA', {
                                    action: 'submit'
                                }).then(function(token) {
                                    document.getElementById('g-recaptcha-response').value = token;
                                });
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
        <h4 class="container-text contact-text">Contact</h4>
    </div>

    <!-- Contact Form End -->


    <?php include 'components/footer.php'; ?>

</body>


</html>