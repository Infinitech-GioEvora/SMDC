import React, { useState, useRef, useEffect } from 'react';
import ReactDOM from 'react-dom';

function SubmitProperty() {
    var display = ""
    const tab1 = useRef();
    useEffect(() => {
        const computed = window
            .getComputedStyle(tab1.current)
            .getPropertyValue("display");

        if (computed == 'block') {
            document.getElementById('prevBtn').style.display = 'none'
            
        }
    }, []);



    const nextTab = () => {

    }

    



    return (

        <form action="" id="regForm">
            <div className="submitProperty">
                <div className="col-md-12 col-panel">
                    <div className="submitHeading">
                        <div ref={tab1} className="tab-1">

                            <h1 className='heading'>Personal Information</h1>
                            <hr />

                            <div className="row">
                                <div className="col-sm-6 mb-4">
                                    <div className="form-group">
                                        <label htmlFor="">Firstname</label>
                                        <input type="text" className='form-control' placeholder='Juan' />
                                    </div>
                                </div>
                                <div className="col-sm-6 mb-4">
                                    <div className="form-group">
                                        <label htmlFor="">Lastname</label>
                                        <input type="text" className='form-control' placeholder='Dela Cruz' />
                                    </div>
                                </div>
                                <div className="col-sm-6 mb-4">
                                    <div className="form-group">
                                        <label htmlFor="">Mobile Number</label>
                                        <input type="text" className='form-control' placeholder='(+63) 9924401097' />
                                    </div>
                                </div>
                                <div className="col-sm-6 mb-4">
                                    <div className="form-group">
                                        <label htmlFor="">Email</label>
                                        <input type="email" className='form-control' placeholder='juandelacruz@gmail.com' />
                                    </div>
                                </div>

                                <div className="col-sm-12 mb-4">
                                    <div className="form-group">
                                        <label htmlFor="">Address</label>
                                        <input type="text" className='form-control' placeholder='Makati City, Philippines' />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="tab-2">
                            <h1 className='heading'>Personal Information</h1>
                            <hr />

                            <div className="col-sm-6 mb-4">
                                <div className="form-group">
                                    <label htmlFor="">Email</label>
                                    <input type="email" className='form-control' placeholder='juandelacruz@gmail.com' />
                                </div>
                            </div>

                        </div>

                        <div className="form-button">
                            <button id='prevBtn' className='btn btn-form-prev me-2'>Previous</button>
                            <button id='nextBtn' className='btn btn-form-next me-2' onClick={nextTab}>Next</button>
                        </div>


                    </div>
                </div>
            </div>
        </form>

    )
}

if (document.getElementById('submit-property')) {
    ReactDOM.render(<SubmitProperty />, document.getElementById('submit-property'));
}

export default SubmitProperty;