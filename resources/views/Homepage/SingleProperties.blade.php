<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South 2 Residences | SMDC Condominium | SMDC Condo</title>

    @include('Layout/Header')

</head>


<body>

    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>

        <section class="hero hero-class">
            <img src="../img/Bloom-Residences.jpg" alt="">
            <div class="hero-properties">
                <div class="property-category">
                    <h2 class="sub-heading">CONDOMINIUM</h2>
                </div>

                <div class="property-title">
                    <h1 class="heading">South 2 Residences</h1>
                </div>

                <div class="container d-flex justify-content-center">
                    <div class="property-other-details ">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="price-icon d-flex align-items-center">
                                    <i class="fa-solid fa-file-invoice-dollar"></i>
                                    <div class="details">
                                        <span class="price">Price</span>
                                        <span class="d-block unit-price">14,000+ / month</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="price-icon d-flex align-items-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div class="details">
                                        <span class="price">Location</span>
                                        <span class="d-block unit-price">"Alabang-Zapote Road, Brgy. Almanza Uno, Las Pinas City"</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="price-icon d-flex align-items-center">
                                    <div class="details">
                                        <span class="price">Share it</span>
                                        <span class="d-block share-media">
                                            <ul>
                                                <li><i class="fa-brands fa-facebook-f fa-lg"></i></li>
                                                <li><i class="fa-brands fa-square-instagram fa-lg"></i></li>
                                                <li><i class="fa-brands fa-whatsapp fa-lg"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="properties-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7727.852210331857!2d121.009331!3d14.431422!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1a5aa10e2b7%3A0x3d8af3ed0ec46017!2sSouth%20Residences%20Tower%202!5e0!3m2!1sen!2sus!4v1721090819885!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <section class="properties-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="property-licensed">
                            <h2>License: DHSUD Provisional LS No. 085</h2>
                        </div>
                        <div class="property-description mb-4">
                            <h2 class="heading">Description</h2>
                            <p>Discover the epitome of Southern living at South 2 Residences by SMDC. Situated in Alabang-Zapote Road, Brgy. Almanza Uno, Las Pinas City, this exceptional residential development offers modern living spaces and a range of amenities designed to enhance your lifestyle. South 2 Residences is the perfect place to embrace the warmth and charm of Southern living.</p>
                        </div>

                        <hr>

                        <div class="property-description mb-4">
                            <h2 class="heading">Amenities</h2>
                            <ul>
                                <li>Adult and Kiddie Swimming Pools</li>
                                <li> Gated Community</li>
                                <li> Grand Lobby at Tower 1</li>
                                <li> Landscape Garden</li>
                                <li> Function Rooms</li>
                                <li> Playground</li>
                            </ul>
                        </div>

                        <hr>


                        <div class="property-description mb-4">
                            <h2 class="heading">Units</h2>
                            <ul>
                                <li>1-Bedroom Unit</li>
                                <li> 1-Bedroom Unit with Balcony</li>
                                <li> 1-Bedroom End Unit with Balcony</li>
                                <li> 2-Bedroom Unit</li>
                                <li> 2-Bedroom End Unit with Balcony</li>
                            </ul>
                        </div>

                        <hr>

                        <div class="property-description mb-4 px-0">
                            <h2 class="heading">Gallery</h2>
                            <div class="gallery">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                                <img src="../img/Bloom-Residences.jpg" alt="">
                            </div>
                        </div>



                    </div>

                    <div class="col-md-4">
                        <div class="card" id="propertyContact">
                            <div class="card-body">
                                <h2>Send us a message.</h2>
                                <p>"*" indicates required fields</p>
                                <div class="form-group mb-2">
                                    <label for="">Name</label>
                                    <input type="text" placeholder="Juan Dela Cruz">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Juandelacruz@gmail.com">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Phone</label>
                                    <input type="number" placeholder="(63) 9924401097" maxlength="10">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Message</label>
                                    <textarea placeholder="Send us a message...."></textarea>
                                </div>
                                <button class="btn-submit-form">Submit</button>
                            </div>
                        </div>

                    </div>


                </div>


            </div>

        </section>



        <section class="featured-properties" id="featureProperties">
            <div class="container">
                <div class="card-properties" id="featured">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card featured-card">
                                <div class="img-hover-zoom">
                                    <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                                </div>

                                <div class="properties-status">
                                    <span class="badge badge-primary">Pre-selling</span>
                                </div>

                                <div class="properties-price">
                                    <h5>CONDOMINIUM</h5>
                                    <span>Php 21,000.00+ / month</span>
                                </div>

                                <div class="card-body">
                                    <h1 class="heading mb-0">South 2 Residences</h1>
                                    <small class="location">Las Piñas City beside SM Southmall</small>
                                    <p class='excerpt'>Discover the epitome of Southern living at South 2 Residences by SMDC. Situated in Alabang-Zapote Road, Brgy. Almanza Uno, Las Pinas City, this exceptional residential development offers modern living spaces and a range of amenities designed to enhance your lifestyle. South 2 Residences is the perfect place to embrace the warmth and charm of Southern living.</p>
                                    <button class='btn-learn'>More Details</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card featured-card">
                                <div class="img-hover-zoom">
                                    <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                                </div>

                                <div class="properties-status">
                                    <span class="badge badge-primary">Pre-selling</span>
                                </div>

                                <div class="properties-price">
                                    <h5>CONDOMINIUM</h5>
                                    <span>Php 21,000.00+ / month</span>
                                </div>

                                <div class="card-body">
                                    <h1 class="heading mb-0">Light 2 Residences</h1>
                                    <small class="location">EDSA-Boni MRT Station</small>
                                    <p class='excerpt'>Illuminate your life at Light 2 Residences by SMDC. Located at EDSA corner Madison St., Mandaluyong City, this exceptional residential development offers modern living spaces and a vibrant lifestyle. Light 2 Residences is the perfect place to thrive, offering a dynamic and energetic atmosphere for residents to flourish. Discover more about this remarkable property by clicking the link and embark on a journey towards a bright and fulfilling future at Light 2 Residences.</p>
                                    <button class='btn-learn'>More Details</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card featured-card">
                                <div class="img-hover-zoom">
                                    <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                                </div>

                                <div class="properties-status">
                                    <span class="badge badge-primary">Pre-selling</span>
                                </div>

                                <div class="properties-price">
                                    <h5>CONDOMINIUM</h5>
                                    <span>Php 21,000.00+ / month</span>
                                </div>

                                <div class="card-body">
                                    <h1 class="heading mb-0">Field Residences</h1>
                                    <small class="location">beside SM Sucat, Sucat, Paranaque City</small>
                                    <p class='excerpt'>Found along Dr. A Santos Avenue, Field Residences’ spot in Sucat, Parañaque puts it right next to the entertainment and shopping centers of Entertainment City and SM City Sucat as well as the international and domestic terminals of NAIA. Field Residences offers five star sub urban living south of the metro. From young to growing families, Field Residences offers a wide array of living options suited for your needs and lifestyles. Relax and bond with your loved ones at the development’s host of excellent amenities. For convenience, SM Sucat is right in front of your home and international and local airports are right nearby. Dining and shopping options abound as the Entertainment City is a short drive away. Designed for utmost relaxation and convenience in mind, Field Residences’ strategic location, wide open spaces and generously sized amenities offers families spaces to thrive and grow.</p>
                                    <button class='btn-learn'>More Details</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card featured-card">
                                <div class="img-hover-zoom">
                                    <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                                </div>

                                <div class="properties-status">
                                    <span class="badge badge-primary">Pre-selling</span>
                                </div>

                                <div class="properties-price">
                                    <h5>CONDOMINIUM</h5>
                                    <span>Php 21,000.00+ / month</span>
                                </div>

                                <div class="card-body">
                                    <h1 class="heading mb-0">Lush Residences</h1>
                                    <small class="location">Makati City</small>
                                    <p class="excerpt">Lush Residences is an iconic landmark located north of the Makati Central Business District. A development that seamlessly blends elements of nature throughout the property.</p>
                                    <button class="btn-learn">More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer>
        <div id="footer"></div>
    </footer>



    <!-- Footer -->
    @include('Layout/Footer')

    <script>
        window.onscroll = function() {
            myFunction();
        };

        var card = document.getElementById("propertyContact");
        var endSticky = document.getElementById("featureProperties");
        var sticky = card.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky && window.pageYOffset < (endSticky.offsetTop - card.offsetHeight)) {
                card.classList.add("sticky");
            } else {
                card.classList.remove("sticky");
            }
        }
    </script>



    <!-- Script -->
    @include('Layout/script')


</body>

</html>