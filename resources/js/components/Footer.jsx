import React from 'react';
import ReactDOM from 'react-dom';


function Footer() {
    return (
        <div className="footer-section">
            <div className="container">
                <div className="row">
                    <div className="col-md-3">
                        <div className="company-logo">
                            <a href="/">
                                <img src="../img/smdc-logo.jpeg" width="100" alt="SMDC-LOGO" />
                            </a>
                            <p className="footer-desc mt-3">Every single day, SM touches the lives of millions of people through its stores, malls, banks, hotels and leisure facilities. Now, Filipinos can live in style, comfort, and convenience with SM Development Corporation</p>
                        </div>

                        <div className="social-media">
                            <ul>
                                <li><i class="fa-brands fa-facebook-f fa-lg"></i></li>
                                <li><i class="fa-brands fa-square-instagram fa-lg"></i></li>
                                <li><i class="fa-solid fa-envelope fa-lg"></i></li>
                                <li><i class="fa-solid fa-phone fa-lg"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <h1 className="heading footer-heading">Quick Links</h1>
                        <div className="quick-links">
                            <ul>
                                <li><i class="fa-solid fa-play "></i> <a href="#"> Home</a></li>
                                <li><i class="fa-solid fa-play "></i> <a href="#"> About Us</a></li>
                                <li><i class="fa-solid fa-play "></i> <a href="#"> For Sale</a></li>
                                <li><i class="fa-solid fa-play "></i> <a href="#"> For Lease</a></li>
                                <li><i class="fa-solid fa-play "></i> <a href="#"> Submit Property</a></li>
                                <li><i class="fa-solid fa-play "></i> <a href="#"> Contact Us</a></li>
                                <li><i class="fa-solid fa-play "></i> <a href="#"> Loan Calculator</a></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <h1 className="heading footer-heading inquiries">For inquiries</h1>
                        <div className="quick-call">
                            <ul>
                                <li><i class="fa-solid fa-phone fa-lg"></i> +63 905 277 7784 </li>
                                <li><i class="fa-brands fa-whatsapp fa-lg"></i> +63 905 277 7784</li>
                                <li><i class="fa-brands fa-viber fa-lg"></i> +63 905 277 7784</li>
                                <li><i class="fa-solid fa-envelope fa-lg"></i> info@mysmdc.ph</li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <h1 className="heading footer-heading">Disclaimer</h1>
                        <p className="footer-desc mt-3">To promote SMDC Projects and increase Sales and Marketing of SMDC Condominiums, all information stated are intended to give a general overview of the project only and does not constitute any part of an offer or contract. www.smdc.com is the official website of SMDC.</p>
                    </div>
                </div>

                
            </div>
        </div>
    )
}




if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}

export default Footer;