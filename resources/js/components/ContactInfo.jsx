import React from 'react'
import ReactDOM from 'react-dom';

function Call() {
    return (
        <ul>
            <li><a href="tel:+639052777784"><i class="fa-solid fa-phone fa-lg me-2"></i> +63 905 277 7784</a></li>
            <li><a href="tel:+639052777784"><i class="fa-brands fa-whatsapp fa-lg me-2 "></i> +63 905 277 7784</a></li>
            <li><a href="tel:+639052777784"><i class="fa-brands fa-viber fa-lg me-2 "></i> +63 905 277 7784</a></li>
            <li><a href="tel:+639052777784"><i class="fa-solid fa-envelope fa-lg me-2 "></i> info@mysmdc.ph</a></li>

        </ul>

    );
}

function Billing(){
    return (
        <ul>
            <li><a href="tel:+639052777784"><i class="fa-solid fa-phone fa-lg me-2"></i> (02) 8858-0300</a></li>
            <li><a href="tel:+639175005151"><i class="fa-brands fa-whatsapp fa-lg me-2 "></i> 0917-500-5151</a></li>

        </ul>

    );
}


function ContactInfo() {
    return (
        <>
            <h2 className='contact-title'>Contact Us</h2>
            <p>If you’re interested to buy properties in any of our projects, you may contact the details below:</p>

            <div class="contact-number">
                <Call />
            </div>

            <div className="social-media mb-4">
                <ul>
                    <li><i class="fa-brands fa-facebook-f fa-lg"></i></li>
                    <li><i class="fa-brands fa-square-instagram fa-lg"></i></li>

                </ul>
            </div>

            <div className="contact-number">
                <h1 className="heading mb-4">For Billing & Concerns</h1>
                <Billing/>
            </div>


        </>
    )
}

if (document.getElementById('contactInfo')) {
    ReactDOM.render(<ContactInfo />, document.getElementById('contactInfo'));
}
export default ContactInfo