@extends('Layout.Admin.Layout')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="row pt-4 px-4 py-4">
            <div class="col-md-6">
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="row mx-2">
            <div class="col-lg-3 col-md-12 col-6 mb-4 count" title="View Properties" onclick="location.href='/admin/properties'">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-building-house'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">Properties</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-6 mb-4 count" title="View Inquiries" onclick="location.href='/admin/inquiries'">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-message-rounded-detail'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">Inquiries</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-6 mb-4 count" title="View Request Viewings" onclick="location.href='/admin/viewings'">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-calendar'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">Request Viewings</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-6 mb-4 count" title="View Property Registrations" onclick="location.href='/admin/registrations'">
                <div class="card">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center ms-4">
                            <i class='bx bx-notepad'></i>
                        </div>
                        <div class="col my-3">
                            <span class="fw-semibold d-block mb-1">Property Registrations</span>
                            <h3 class="card-title text-nowrap mb-2"></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-2 mb-4">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Property Categories</h5>
                    </div>
                    <div class="card-body props_cats">
                        
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Amenities and Features</h5>
                    </div>
                    <div class="card-body props_af">
                        
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Viewings Per Property</h5>
                    </div>
                    <div class="card-body props_views">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Admin/Scripts.js') }}"></script>
@endsection
