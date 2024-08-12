@extends('Layout.User.Layout')

@section('title', 'For Sale')

@section('content')
    <main>

        <section class="hero">
            <img src="../img/Bloom-Residences.jpg" alt="">
            <div class="about-header">
                <h1 class="heading">For Sale</h1>
            </div>
        </section>

        <section class="featured-properties">
            <div class="container">
                <div class="card-properties" id="featured">
                    <div class="row">
                        @forelse ($data["records"] as $property)

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

@endsection