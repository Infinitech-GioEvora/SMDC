import React from 'react';
import ReactDOM from 'react-dom';

function Call() {
    const handleCall = () => {
        window.location.href = 'tel:09924401097';
    }

    return (
        <button className='btn btn-call' onClick={handleCall}><i class="fa-solid fa-phone"></i> Call Us Now</button>
    );
}

function Navbar() {
    return (

        <div className="Navigation">
            <div className="container d-flex justify-content-between">

                <div className="menu-item d-flex">
                    <div className="nav-logo">
                        <a href="/"> <img src="../img/smdc-logo.jpeg" alt="SMDC-LOGO" /></a>
                    </div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/for-sale">For Sale</a></li>
                        <li><a href="/for-lease">For Lease</a></li>
                        <li><a href="/submit-property">Submit Property</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        <li><a href="/loan-calculator">Loan Calculator</a></li>
                    </ul>
                </div>

                <div className="call-button">
                    <Call />
                </div>
            </div>

        </div>
    );
}



if (document.getElementById('nav')) {
    ReactDOM.render(<Navbar />, document.getElementById('nav'));
}

export default Navbar;
