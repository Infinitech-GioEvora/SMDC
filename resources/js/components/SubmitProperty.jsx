import React, { useState } from 'react';
import ReactDOM from 'react-dom';

function SubmitProperty() {
    const [tab, setTab] = useState(1)

    const Tab1 = () => {
        return (
            <>
                <div className='tab'>

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

                <div className="form-button">
                    <button type='button' id='nextBtn' className='btn btn-form-next me-2' onClick={() => {setTab(tab+1)}}>Next</button>
                </div>
            </>
        )
    }

    const Tab2 = () => {
        return (
            <>
                <div className='tab'>
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
                    <button type='button' id='prevBtn' className='btn btn-form-prev me-2' onClick={() => {setTab(tab-1)}}>Previous</button>
                    <button type='button' id='submitBtn' className='btn btn-form-next me-2'>Submit</button>
                </div>
            </>
        )
    }

    return (

        <form action="" id="regForm">
            <div className="submitProperty">
                <div className="col-md-12 col-panel">
                    <div className="submitHeading">
                        {
                            tab == 1 ? <Tab1></Tab1> : <Tab2></Tab2>
                        }

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