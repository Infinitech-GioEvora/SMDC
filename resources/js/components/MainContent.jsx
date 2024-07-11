import React, { useEffect } from 'react';
import ReactDOM from 'react-dom';



function MainContent() {

    return (
        <>
            <div id="carouselExampleIndicators" className="carousel slide" data-bs-ride="carousel">
                <div className="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" className="active"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                </div>
                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <img src="/img/Gold-Residences-Amenity-4.webp" className="d-block w-100" alt="Gold Residences Amenity 4" />
                        <div className='slide-heading'>
                            <h1>Gold Residences</h1>
                            <p>Find the perfect combination of homey comfort and modern in-city living in Gold Residences. Developed with the typical urban family in mind, Gold Residences offers a seamless blend of resort-like and luxury living.</p>
                            <button className='btn btn-learn'>Learn More</button>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <img src="/img/Gold-Residences-Amenity-4.webp" className="d-block w-100" alt="Gold Residences Amenity 4" />
                        <div className='slide-heading'>
                            <h1>Shore 3 Residences</h1>
                            <p>Shore Residences pampers you to enjoy a summer vibe life in the beach experience that makes you want to stay and just chill.</p>
                            <button className='btn btn-learn'>Learn More</button>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <img src="/img/Gold-Residences-Amenity-4.webp" className="d-block w-100" alt="Gold Residences Amenity 4" />
                        <div className='slide-heading'>
                            <h1>Light 2 Residences</h1>
                            <p>Located along the Mandaluyong stretch of EDSA, Light 2 Residences is sure to be an iconic landmark that shines brightly along this vital thoroughfare.</p>
                            <button className='btn btn-learn'>Learn More</button>
                        </div>
                    </div>
                </div>
                <button className="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span className="carousel-control-prev-icon" aria-hidden="false"></span>
                    <span className="visually-hidden">Previous</span>
                </button>
                <button className="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span className="carousel-control-next-icon" aria-hidden="false"></span>
                    <span className="visurally-hidden"></span>
                </button>
            </div>

            <div className="inquiry-form">
                <div className="card">
                    <div className="card-body">
                        <div className="container">
                            <div className="contact-heading">
                                <h2 className='contact-title'>Contact Us</h2>
                                <p className='contact-description'>If you are interested to buy in any of our projects, We’re happy to assist you. Simply fill out the form below and we will reach out soon.

                                    <br /> <br /> "*" indicates required fields</p>
                            </div>
                            <form action="" method="post">
                                <div className="row">
                                    <div className="col-md-6 mb-4">
                                        <div className="form-group">
                                            <label htmlFor="">Name *</label>
                                            <input type="text" className='form-control' placeholder='Juan Delacruz' required />
                                        </div>
                                    </div>
                                    <div className="col-md-6">
                                        <div className="form-group mb-4">
                                            <label htmlFor="">Phone *</label>
                                            <input type="text" className='form-control' placeholder='09924401097' required />
                                        </div>
                                    </div>
                                    <div className="form-group mb-4">
                                        <label htmlFor="">Email *</label>
                                        <input type="email" className='form-control' placeholder='juandelacruz@gmail.com' required />
                                    </div>
                                    <div className="form-group mb-4">
                                        <label htmlFor="">Message *</label>
                                        <textarea name="" id="" rows={3} className='form-control' placeholder='send us message'></textarea>
                                    </div>
                                    <input type="submit" className='btn btn-submit' value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div className="featured-properties">

            </div>
        </>
    );
}

// Rendering the MainContent component
if (document.getElementById('main')) {
    ReactDOM.render(<MainContent />, document.getElementById('main'));
}

export default MainContent;
