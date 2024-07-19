@extends('Layout.User.Layout')

@section('title', 'Home')

@section('content')
    <main>
        <section>
            @if (count($data['props']) > 0)
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @for ($i = 0; $i < count($data['props']); $i++)
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="{{ $i }}" {{ $i == 0 ? "class=active" : "" }}></button>
                    @endfor
                </div>
                <div class="carousel-inner">
                    @forelse ($data['props'] as $property)
                    <div class="carousel-item">
                        @if (count($property->pictures) > 0)
                        <img src={{ "/uploads/Properties/Pictures/". $property->pictures[0]->img}} class="d-block w-100" alt="{{ $property->name }}" />
                        @else
                        <img src="../img/no_image.jpg" class="d-block w-100" alt="no image"/>
                        @endif
                        <div class='slide-heading'>
                            <h1>{{ $property->name }}</h1>
                            <p>{{ $property->desc }}</p>
                            <button class='btn-learn' onClick="location.href='/property/{{ $property->id }}'">Learn More</button>
                        </div>
                    </div>
                    @empty
                    <div class="carousel-item active">
                        <div class="d-block w-100">
                            <h1>No Properties Found</h1>
                        </div>
                    </div>
                    @endforelse
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="false"></span>

                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="false"></span>

                </button>
            </div>
            @endif

            <div class="inquiry-form">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="contact-heading">
                                <h2 class='contact-title'>Contact Us</h2>
                                <p class='contact-description'>If you are interested to buy in any of our projects, We’re happy to assist you. Simply fill out the form below and we will reach out soon.

                                    <br /> <br /> "*" indicates required fields
                                </p>
                            </div>
                            <form action="" method="" class="inquiry_form">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label htmlFor="">Name *</label>
                                            <input type="text" class='form-control' placeholder='Juan Delacruz' required name='name' />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label htmlFor="">Phone *</label>
                                            <input type="text" class='form-control' placeholder='09924401097' required name='phone' />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label htmlFor="">Email *</label>
                                        <input type="email" class='form-control' placeholder='juandelacruz@gmail.com' required name='email' />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label htmlFor="">Message *</label>
                                        <textarea rows={3} class='form-control' placeholder='send us message' name='msg'></textarea>
                                    </div>
                                    <input type="submit" class='btn-submit' value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-properties">
            <div class="container">
                <h1>Featured Properties</h1>
                <div class="card-properties" id="featured">
                    <div class="row">
                        @forelse ($data["props"] as $property)
                        <div class="col-md-3">
                            <div class="card featured-card">
                                <div class="img-hover-zoom">
                                    @if (count($property->pictures) > 0)
                                    <img src={{ "../uploads/Properties/Pictures/". $property->pictures[0]->img }} alt="{{ $property->name }}"/>
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

                        <p class="d-flex align-items-center">No Properties Found</p>
                        
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-properties">
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