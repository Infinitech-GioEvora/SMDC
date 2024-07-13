<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Property | SMDC Condominium | SMDC Condo</title>

    @include('Layout/Header')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>


<body>

    <!-- Navigation Bar -->
    @include('Layout/Navigation')

    <main>
        <section class="hero" style="position: relative;">
            <img src="../img/Bloom-Residences.jpg" alt="">



            <div class="container">
                <div class="submit-form">
                <form action="/Admin/Add/for_lease_properties" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="tab">
                            <h4 class="personal-title">Personal Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" id="first_name" name="first_name"  placeholder="Juan" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" id="last_name" name="last_name"  placeholder="Dela Cruz" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number</label>
                                        <input type="text" id="mobile_number" name="mobile_number"  placeholder="+63 992 440 1097" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email"  placeholder="juan.delacruz@gmail.com" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" name="address"  placeholder="Makati City, Manila Philippines" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab">
                            <h4 class="personal-title">Upload Image</h4>
                            <hr>
                            <div class="col-md-12">
                                <div class="container container-file">
                                    <div class="drop_box">
                                        <input type="file" accept="image/png, image/gif, image/jpeg" id="fileID" style="display:none;">
                                        <label for="fileID" class="file-label">
                                            <i class='bx bx-image-add'></i>
                                            <header>
                                                <h4>Select File here</h4>
                                            </header>
                                            <p class="supported">Files Supported: image, png, jpg, jpeg</p>
                                            <img id="previewImage" src="#" alt="Preview" style="display:none; max-width: 100%; max-height: 200px;">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab">
                            <h4 class="personal-title">Property Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="lease_name">Property Name</label>
                                        <input type="text" id="lease_name" name="lease_name"  placeholder="Megaworld Hotel..." required>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="division">Division</label>
                                        <select id="division" name="division"  required>
                                            <option value="">Select Division</option>
                                            <option value="Metro Manila">Metro Manila</option>
                                            <option value="Luzon">Luzon</option>
                                            <option value="Visayas">Visayas</option>
                                            <option value="Mindanao">Mindanao</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" id="location" name="location"  placeholder="Makati City..." required>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="type">Category</label>
                                        <select id="type" name="type"  required>
                                            <option value="">Select Category</option>
                                            <option value="Residentials">Residentials</option>
                                            <option value="Commercials">Commercials</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="unit_price">Unit Price</label>
                                        <input type="text" id="unit_price" name="unit_price"  placeholder="00.00" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="unit_type">Unit Type</label>
                                        <select id="unit_type" name="unit_type"  required>
                                            <option value="">Select Bed Room</option>
                                            <option value="N/A">N/A</option>
                                            <option value="1BR">1 Bed Room</option>
                                            <option value="2BR">2 Bed Room</option>
                                            <option value="3BR">3 Bed Room</option>
                                            <option value="4BR">4 Bed Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description"  rows="5" placeholder="Add something about the property..." required></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab">
                            <div class="col-sm-4 col-md-12">
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload images</p>
                                            <input type="file" multiple="" name="image[]" accept="image/*" data-max_length="20" class="upload__inputfile">
                                            <i class='bx bx-image-add bx-lg'></i>
                                            <header>
                                                <h4>Select File here</h4>
                                            </header>
                                            <p class="supported">Files Supported: image, png, jpg, jpeg</p>
                                            <img id="previewImage" src="#" alt="Preview" style="display:none; max-width: 100%; max-height: 200px;">

                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>

                            </div>

                            <input type="hidden" name="status" value="Pending">
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

    <script src="{{asset('js/previewImage.js')}}"></script>


    <!-- Footer -->
    @include('Layout/Footer')

    <!-- Script -->
    @include('Layout/script')

   


    
</body>

</html>