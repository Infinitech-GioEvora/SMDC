@extends('Layout.User.Layout')

@section('title', 'Submit Property')

@section('content')
    <main>
        <section class="hero" style="position: relative;">
            <img src="../img/Bloom-Residences.jpg" alt="">



            <div class="container">
                <div class="submit-form">
                <form action="" class="registration_form">
                        @csrf
                        <div class="tab">
                            <h4 class="personal-title">Personal Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name"  placeholder="Juan">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="">ID Picture</label>
                                        <input type="file" name="img"  placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone"  placeholder="0992 440 1097">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email"  placeholder="juan.delacruz@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        <textarea cols="30" rows="7" placeholder="Enter Message" name="msg"></textarea>
                                    </div>
                                </div>

                                <input type="hidden" name="status" value="Pending">
                            </div>
                        </div>

                        <div class="tab">
                            <h4 class="personal-title">Property Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="prop_name" placeholder="Megaworld Hotel">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="" >Category</label>
                                    <select name="cat">
                                        <option>For Sale</option>
                                        <option>For Lease</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Type</label>
                                    <select name="type"> 
    
                                    </select>
                                </div>
                                <div class="col-8 mb-3">
                                    <label for="" class="form-label">Price</label>
                                    <input type="text" class="form-control" placeholder="PHP 14,000+ /month" name="price"/>
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="">License</label>
                                    <input type="text" placeholder="DHSUD Provisional LS No. 085" name="lice"/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="">Location</label>
                                    <input type="text" placeholder="Alabang-Zapote Road, Brgy. Almanza Uno, Las Pinas City" name="locat"/>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="">Google Map Link</label>
                                    <input type="text" placeholder="" name="map"/>
                                </div>
                                <div class="col-12">
                                    <label for="">Description</label>
                                    <textarea cols="30" rows="7" placeholder="Discover the epitome of Southern living at South 2 Residences by SMDC." name="desc"></textarea>
                                </div>

                                <input type="hidden" name="prop_status" value="Unpublished">
                            </div>
                        </div>

                        <div class="tab">
                            <h4 class="personal-title">Property's Amenities and Features</h4>
                            <hr>
                            <div class="col-12 mb-3">
                                <label for="">Amenities</label>
                                <textarea cols="30" rows="7" placeholder="Seperate each amenity by line." name="amens"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="">Features</label>
                                <textarea cols="30" rows="7" placeholder="Seperate each feature by line." name="feats"></textarea>
                            </div>
                        </div>

                        <div class="tab">
                            <h4 class="personal-title">Property's Images and Videos</h4>
                            <hr>
                            <div class="col-12 mb-3">
                                <label for="">Images</label>
                                <input type="file" name="imgs[]"  placeholder="" multiple>
                            </div>
                            <div class="col-12">
                                <label for="">Videos</label>
                                <input type="file" name="vids[]"  placeholder="" multiple>
                            </div>
                        </div>

                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" class="btn-prev" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" class="btn-next" onclick="nextPrev(1)">Next</button>
                                <button type="submit" id="submitBtn" class="btn-submit">Submit</button>
                            </div>
                        </div>

                        <!-- Circles which indicates the steps of the form: -->
                        <div class="mb-4" style="text-align:center;margin-top:20px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>
            </div>
        </section>



    </main>
@endsection

@section('scripts')
    @parent
    
    <script src="{{ asset('js/User/Registrations.js') }}"></script>
@endsection