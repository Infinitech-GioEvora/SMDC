import { auto } from '@popperjs/core';
import React from 'react';
import ReactDOM from 'react-dom';


 function MissionVission() {
    return (
        <div className="vmgo d-flex flex-column justify-content-center align-items-center">
            <div className="content-wrapper col-md-8">
                <div className="company-logo text-center">
                    <a href="/">
                        <img src="../img/smdc-logo.jpeg" width="250" alt="SMDC-LOGO" className="d-block mx-auto" />
                    </a>
                    <p className="company-desc mt-3">SM Development Corporation commits itself to provide access to luxurious urban living through its vertical villages and gated horizontal communities, designed with thoughtful features and generous resort-like amenities, all perfectly integrated with a commercial retail environment, thus giving its residents access to a truly cosmopolitan lifestyle.</p>
                </div>
            </div>

            <div className="col-md-12">
                <div className="row mt-4">
                    <div className="col-md-6">
                     <iframe className="w-100" height="315" src="https://www.youtube.com/embed/s-J43QMAips" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div className="col-md-6 d-flex align-items-center">
                        <img src="../img/mission-vission.jpg" className="w-100" alt="Mission and Vision" />
                    </div>
                </div>
            </div>
        </div>

    )
}



if (document.getElementById('mission-vission')) {
    ReactDOM.render(<MissionVission />, document.getElementById('mission-vission'));
}

export default MissionVission;