@extends('Layout.User.Layout')

@section('title', 'Contact Us')

@section('content')
    <main>

        <section class="hero" style="position: relative;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7724.107590378188!2d120.97197929357911!3d14.538915599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cb7bfe922d2f%3A0xdfe249d0768feafe!2sDirect%20SMDC%20-%20Property%20Sales%20%26%20Promo%20Deals!5e0!3m2!1sen!2sus!4v1720577660111!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="contact-form">
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 contact-info">
                                <div id="contactInfo">
                                    <h2 class='contact-title'>Contact Us</h2>
                                    <p>If you’re interested to buy properties in any of our projects, you may contact the details below:</p>

                                    <div class="contact-number">
                                        <ul>
                                            <li class="phone"><a><i class="fa-solid fa-phone fa-lg me-2"></i><span> +63 905 277 7784</span></a></li>
                                            <li class="whatsapp"><a><i class="fa-brands fa-whatsapp fa-lg me-2 "></i><span> +63 905 277 7784</span></a></li>
                                            <li class="viber"><a><i class="fa-brands fa-viber fa-lg me-2 "></i><span> +63 905 277 7784</span></a></li>
                                            <li class="email"><a><i class="fa-solid fa-envelope fa-lg me-2 "></i><span> info@mysmdc.ph</span></a></li>

                                        </ul>
                                    </div>

                                    <div class="social-media mb-4">
                                        <ul>
                                            <li class="fb"><i class="fa-brands fa-facebook-f fa-lg"></i></li>
                                            <li class="insta"><i class="fa-brands fa-square-instagram fa-lg"></i></li>
                                        </ul>
                                    </div>

                                    <div class="contact-number">
                                        <h1 class="heading mb-4">For Billing & Concerns</h1>
                                        <ul>
                                            <li class="phone"><a><i class="fa-solid fa-phone fa-lg me-2"></i><span> (02) 8858-0300</span></a></li>
                                            <li class="whatsapp"><a><i class="fa-brands fa-whatsapp fa-lg me-2 "></i><span> 0917-500-5151</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 contact-inquiry">
                                <div id="contact">
                                    <div class="container contact-container">
                                        <div class="contact-heading">
                                            <h2 class='contact-title'>Send a message</h2>
                                            <p class='contact-description'>If you are interested to buy in any of our projects, We’re happy to assist you. Simply fill out the form below and we will reach out soon.

                                                <br /> <br /> "*" indicates required fields
                                            </p>
                                        </div>
                                        <form action="" method="" class="inquiry_form">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-group">
                                                        <label htmlFor="">Name *</label>
                                                        <input type="text" class='form-control' placeholder='Juan Delacruz' required name='name'/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-group">
                                                        <label htmlFor="">Phone *</label>
                                                        <input type="text" class='form-control' placeholder='09924401097' required name='phone'/>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label htmlFor="">Email *</label>
                                                    <input type="email" class='form-control' placeholder='juandelacruz@gmail.com' required name='email'/>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label htmlFor="">Message *</label>
                                                    <textarea rows="5" class='form-control' placeholder='send us message' name='msg'></textarea>
                                                </div>
                                                <input type="submit" class="btn-submit" value="Submit" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-properties pt-4" style="margin-top: 36%;">
            <div class="container">
                <div class="card-properties mb-4" id="mission-vission">
                    <div class="vmgo d-flex flex-column justify-content-center align-items-center">
                        <div class="content-wrapper col-md-8">
                            <div class="company-logo text-center">
                                <a href="/">
                                    <img src="../img/smdc-logo.jpeg" width="250" alt="SMDC-LOGO" class="d-block mx-auto" />
                                </a>
                                <p class="company-desc mt-3">SM Development Corporation commits itself to provide access to luxurious urban living through its vertical villages and gated horizontal communities, designed with thoughtful features and generous resort-like amenities, all perfectly integrated with a commercial retail environment, thus giving its residents access to a truly cosmopolitan lifestyle.</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <iframe class="w-100" height="315" src="https://www.youtube.com/embed/s-J43QMAips" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <img src="../img/mission-vission.jpg" class="w-100" alt="Mission and Vision" />
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