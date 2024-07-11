import React from 'react';
import ReactDOM from 'react-dom';

function FeaturedProperties() {
    return (
        <>
        <h1>Featured Properties</h1>
        <div className="row">
            <div className="col-md-3">
                <div className="card featured-card">
                    <div class="img-hover-zoom">
                        <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                    </div>

                    <div className="properties-status">
                        <span class="badge badge-primary">Pre-selling</span>
                    </div>

                    <div className="properties-price">
                        <h5>CONDOMINIUM</h5>
                        <span>Php 21,000.00+ / month</span>
                    </div>

                    <div className="card-body">
                        <h1 className="heading mb-0">South 2 Residences</h1>
                        <small className="location">Las Piñas City beside SM Southmall</small>
                        <p className='excerpt'>Discover the epitome of Southern living at South 2 Residences by SMDC. Situated in Alabang-Zapote Road, Brgy. Almanza Uno, Las Pinas City, this exceptional residential development offers modern living spaces and a range of amenities designed to enhance your lifestyle. South 2 Residences is the perfect place to embrace the warmth and charm of Southern living.</p>
                        <button className='btn btn-learn'>More Details</button>
                    </div>
                </div>
            </div>

            <div className="col-md-3">
                <div className="card featured-card">
                    <div class="img-hover-zoom">
                        <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                    </div>
                    
                    <div className="properties-status">
                        <span class="badge badge-primary">Pre-selling</span>
                    </div>

                    <div className="properties-price">
                        <h5>CONDOMINIUM</h5>
                        <span>Php 21,000.00+ / month</span>
                    </div>

                    <div className="card-body">
                        <h1 className="heading mb-0">Light 2 Residences</h1>
                        <small className="location">EDSA-Boni MRT Station</small>
                        <p className='excerpt'>Illuminate your life at Light 2 Residences by SMDC. Located at EDSA corner Madison St., Mandaluyong City, this exceptional residential development offers modern living spaces and a vibrant lifestyle. Light 2 Residences is the perfect place to thrive, offering a dynamic and energetic atmosphere for residents to flourish. Discover more about this remarkable property by clicking the link and embark on a journey towards a bright and fulfilling future at Light 2 Residences.</p>
                        <button className='btn btn-learn'>More Details</button>
                    </div>
                </div>
            </div>

            <div className="col-md-3">
                <div className="card featured-card">
                    <div class="img-hover-zoom">
                        <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                    </div>
                    
                    <div className="properties-status">
                        <span class="badge badge-primary">Pre-selling</span>
                    </div>

                    <div className="properties-price">
                        <h5>CONDOMINIUM</h5>
                        <span>Php 21,000.00+ / month</span>
                    </div>

                    <div className="card-body">
                        <h1 className="heading mb-0">Field Residences</h1>
                        <small className="location">beside SM Sucat, Sucat, Paranaque City</small>
                        <p className='excerpt'>Found along Dr. A Santos Avenue, Field Residences’ spot in Sucat, Parañaque puts it right next to the entertainment and shopping centers of Entertainment City and SM City Sucat as well as the international and domestic terminals of NAIA. Field Residences offers five star sub urban living south of the metro. From young to growing families, Field Residences offers a wide array of living options suited for your needs and lifestyles. Relax and bond with your loved ones at the development’s host of excellent amenities. For convenience, SM Sucat is right in front of your home and international and local airports are right nearby. Dining and shopping options abound as the Entertainment City is a short drive away. Designed for utmost relaxation and convenience in mind, Field Residences’ strategic location, wide open spaces and generously sized amenities offers families spaces to thrive and grow.</p>
                        <button className='btn btn-learn'>More Details</button>
                    </div>
                </div>
            </div>

            <div className="col-md-3">
                <div className="card featured-card">
                    <div class="img-hover-zoom">
                        <img src="../img/South-2-Residences-Pool-Amenity-2.jpg" alt="South-2-Residences-Pool-Amenity-2" />
                    </div>
                    
                    <div className="properties-status">
                        <span class="badge badge-primary">Pre-selling</span>
                    </div>

                    <div className="properties-price">
                        <h5>CONDOMINIUM</h5>
                        <span>Php 21,000.00+ / month</span>
                    </div>

                    <div className="card-body">
                        <h1 className="heading mb-0">Lush Residences</h1>
                        <small className="location">Makati City</small>
                        <p className='excerpt'>Lush Residences is an iconic landmark located north of the Makati Central Business District. A development that seamlessly blends elements of nature throughout the property.</p>
                        <button className='btn btn-learn'>More Details</button>
                    </div>
                </div>
            </div>
        </div>
        </>

    )
}


if (document.getElementById('featured')) {
    ReactDOM.render(<FeaturedProperties />, document.getElementById('featured'));
}

export default FeaturedProperties;