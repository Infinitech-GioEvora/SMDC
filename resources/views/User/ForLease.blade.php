@extends('Layout.User.Layout')

@section('title', 'For Lease')

@section('content')
    <main>

        <section class="hero">
            <img src="../img/Bloom-Residences.jpg" alt="">
            <div class="about-header">
                <h1 class="heading">For Lease</h1>
            </div>
        </section>

        <section class="featured-properties">
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
@endsection

@section('scripts')
    @parent

@endsection