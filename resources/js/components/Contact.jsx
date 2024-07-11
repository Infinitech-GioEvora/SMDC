import React from 'react'
import ReactDOM from 'react-dom';

function Contact() {
    return (
        <div className="container contact-container">
            <div className="contact-heading">
                <h2 className='contact-title'>Send a message</h2>
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
    )
}

if (document.getElementById('contact')) {
    ReactDOM.render(<Contact />, document.getElementById('contact'));
}

export default Contact