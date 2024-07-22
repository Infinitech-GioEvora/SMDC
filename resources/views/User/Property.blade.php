@extends('Layout.User.Layout')

@section('title', $data['record']->name)

@section('content')
    <main>

        <section class="hero hero-class">
            @if (count($data['record']->images) > 0)
            <img src={{ "../uploads/Properties/Images/". $data['record']->images[0]->img }} alt="{{ $data['record']->name }}"/>
            @else
            <img src="../img/no_image.jpg" alt="no image"/>
            @endif

            <div class="hero-properties">
                <div class="property-category">
                    <h2 class="sub-heading">{{ strtoupper($data['record']->cat) }}</h2>
                </div>

                <div class="property-title">
                    <h1 class="heading">{{ $data['record']->name }}</h1>
                </div>

                <div class="container d-flex justify-content-center">
                    <div class="property-other-details ">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="price-icon d-flex align-items-center">
                                    <i class="fa-solid fa-file-invoice-dollar"></i>
                                    <div class="details">
                                        <span class="price">Price</span>
                                        <span class="d-block unit-price">{{ $data['record']->price }}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="price-icon d-flex align-items-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div class="details">
                                        <span class="price">Location</span>
                                        <span class="d-block unit-price">{{ $data['record']->locat }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="price-icon d-flex align-items-center">
                                    <div class="details">
                                        <span class="price">Share it</span>
                                        <span class="d-block share-media">
                                            <ul>
                                                <li><i class="fa-brands fa-facebook-f fa-lg"></i></li>
                                                <li><i class="fa-brands fa-square-instagram fa-lg"></i></li>
                                                <li><i class="fa-brands fa-whatsapp fa-lg"></i></li>
                                            </ul>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="properties-map">
                    <iframe src="{{ $data['record']->map }}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <section class="properties-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="property-licensed">
                            <h2>License: {{ $data['record']->lice }}</h2>
                        </div>
                        <div class="property-description mb-4">
                            <h2 class="heading">Description</h2>
                            <p>{{ $data['record']->desc }}</p>
                        </div>

                        <hr>

                        <div class="property-description mb-4">
                            <h2 class="heading">Amenities</h2>
                            @if (count($data['record']->amenities))
                            <ul>
                                @foreach ($data['record']->amenities as $amenity)
                                <li>{{ $amenity->name }}</li>
                                @endforeach
                            </ul>
                            @else
                            <p>No Amenities Found</p>
                            @endif
                        </div>

                        <hr>


                        <div class="property-description mb-4">
                            <h2 class="heading">Features</h2>
                            @if (count($data['record']->features) > 0)
                            <ul>
                                @foreach ($data['record']->features as $feature)
                                <li>{{ $feature->name }}</li>
                                @endforeach
                            </ul>
                            @else
                            <p>No Features Found</p>
                            @endif
                        </div>

                        <hr>

                        <div class="property-description mb-4 px-0">
                            <h2 class="heading">Gallery</h2>
                            <div class="gallery">
                                @forelse ($data['record']->images as $image)
                                <img src={{ "../uploads/Properties/Images/". $image->img }} alt="{{ $data['record']->name }}"/>
                                @empty
                                <p>No Images Found</p>
                                @endforelse
                            </div>
                        </div>

                        <hr>

                        <div class="property-description mb-4 px-0">
                            <h2 class="heading">Videos</h2>
                            <div class="gallery">
                                @forelse ($data['record']->videos as $video)
                                <video controls>
                                    <source src={{ "../uploads/Properties/Videos/". $video->vid }}>
                                </video>
                                @empty
                                <p>No Videos Found</p>
                                @endforelse
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card" id="propertyContact">
                            <div class="card-body">
                                <form action="" class="viewing_form">
                                    <div class="text-center">
                                        <h3>Request A Viewing</h3>
                                        <p>"*" indicates required fields</p>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">Name</label>
                                        <input type="text" placeholder="Juan Dela Cruz" name="name">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Phone</label>
                                        <input type="text" placeholder="(63) 9924401097" maxlength="10" name="phone">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Email</label>
                                        <input type="email" placeholder="Juandelacruz@gmail.com" name="email">
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="">Date</label>
                                            <input type="date" placeholder="" name="date"/>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="">Time</label>
                                            <input type="time" placeholder="" name="time"/>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Message</label>
                                        <textarea placeholder="Send us a message...." name="msg"></textarea>
                                    </div>

                                    <input type="hidden" name="status" value="Pending">
                                    <input type="hidden" name="property_id" value="{{ $data['record']->id }}">
                                    
                                    <button class="btn-submit-form">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>


                </div>


            </div>

        </section>



        <section class="featured-properties" id="featureProperties">
            <div class="container">
                <div class="card-properties" id="featured">
                    <div class="row">
                        @forelse ($data["props"] as $property)
                        <div class="col-md-3">
                            <div class="card featured-card">
                                <div class="img-hover-zoom">
                                    @if (count($property->images) > 0)
                                    <img src={{ "../uploads/Properties/Images/". $property->images[0]->img }} alt="{{ $property->name }}"/>
                                    @else 
                                    <img src="../img/no_image.jpg" alt="no image"/>
                                    @endif
                                </div>

                                <div class="properties-status">
                                    <span class="badge badge-primary">{{ $property->type }}</span>
                                </div>

                                <div class="properties-price">
                                    <h5>{{ $property->cat }}</h5>
                                    <span>{{ $property->price }}</span>
                                </div>

                                <div class="card-body">
                                    <h1 class="heading mb-0">{{ $property->name }}</h1>
                                    <small class="location">{{ $property->locat }}</small>
                                    <p class='excerpt'>{{ $property->desc }}</p>
                                    <button class='btn-learn' onClick="location.href='/property/{{ $property->id }}'">More Details</button>
                                </div>
                            </div>
                        </div>
                        @empty

                        <h1 class="d-flex justify-content-center align-items-center">No Properties Found</h1>
                        
                        @endforelse
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection

@section('scripts')
    @parent

    <script>
        window.onscroll = function() {
            myFunction();
        };

        var card = document.getElementById("propertyContact");
        var endSticky = document.getElementById("featureProperties");
        var sticky = card.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky && window.pageYOffset < (endSticky.offsetTop - card.offsetHeight)) {
                card.classList.add("sticky");
            } else {
                card.classList.remove("sticky");
            }
        }
    </script>
@endsection