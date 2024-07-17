@extends('Layout.User.Layout')

@section('title', 'Home')

@section('content')
    <main>
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/Gold-Residences-Amenity-4.webp" class="d-block w-100" alt="Gold Residences Amenity 4" />
                        <div class='slide-heading'>
                            <h1>Gold Residences</h1>
                            <p>Find the perfect combination of homey comfort and modern in-city living in Gold Residences. Developed with the typical urban family in mind, Gold Residences offers a seamless blend of resort-like and luxury living.</p>
                            <button class='btn-learn'>Learn More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Gold-Residences-Amenity-4.webp" class="d-block w-100" alt="Gold Residences Amenity 4" />
                        <div class='slide-heading'>
                            <h1>Shore 3 Residences</h1>
                            <p>Shore Residences pampers you to enjoy a summer vibe life in the beach experience that makes you want to stay and just chill.</p>
                            <button class='btn-learn'>Learn More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Gold-Residences-Amenity-4.webp" class="d-block w-100" alt="Gold Residences Amenity 4" />
                        <div class='slide-heading'>
                            <h1>Light 2 Residences</h1>
                            <p>Located along the Mandaluyong stretch of EDSA, Light 2 Residences is sure to be an iconic landmark that shines brightly along this vital thoroughfare.</p>
                            <button class='btn-learn'>Learn More</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="false"></span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="false"></span>

                </button>
            </div>

            <div class="inquiry-form">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="contact-heading">
                                <h2 class='contact-title'>Contact Us</h2>
                                <p class='contact-description'>If you are interested to buy in any of our projects, We’re happy to assist you. Simply fill out the form below and we will reach out soon.

                                    <br /> <br /> "*" indicates required fields
                                </p>
                            </div>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label htmlFor="">Name *</label>
                                            <input type="text" class='form-control' placeholder='Juan Delacruz' required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label htmlFor="">Phone *</label>
                                            <input type="text" class='form-control' placeholder='09924401097' required />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label htmlFor="">Email *</label>
                                        <input type="email" class='form-control' placeholder='juandelacruz@gmail.com' required />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label htmlFor="">Message *</label>
                                        <textarea name="" id="" rows={3} class='form-control' placeholder='send us message'></textarea>
                                    </div>
                                    <input type="submit" class='btn-submit' value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-properties">
            <div class="container">
                <h1>Featured Properties</h1>
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

        <section class="featured-properties">
            <div class="container">
                <div class="card-properties mb-4" id="mission-vission">
                    <div class="vmgo d-flex flex-column justify-content-center align-items-center">
                        <div class="content-wrapper col-md-8">
                            <div class="company-logo text-center">
                                <a href="/">
                                    <img src="../img/smdc-logo.jpeg" width="250" alt="SMDC-LOGO" class="d-block mx-auto" />
                                </a>
                                <p class="company-desc mt-3">SM Development Corporation commits itself to provide access to luxurious urban living through its vertical villages and gated horizontal communities, designed with thoughtful features and generous resort-like amenities, all perfectly integrated with a commercial retail environment, thus giving its residents access to a truly cosmopolitan lifestyle.</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <iframe class="w-100" height="315" src="https://www.youtube.com/embed/s-J43QMAips" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <img src="../img/mission-vission.jpg" class="w-100" alt="Mission and Vision" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@section('scripts')
    @parent

@endsection