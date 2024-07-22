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
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class='bx bx-user-circle'></i>
                            </div>
                        </div>

                        <span class="fw-semibold d-block mb-1">Member</span>
                        <h3 class="card-title mb-2">106</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/Admin/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                            </div>
                        </div>

                        <span class="fw-semibold d-block mb-1">Sales</span>
                        <h3 class="card-title text-nowrap mb-2">&#8369;4,679</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/Admin/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>
                        </div>

                        <span class="d-block mb-1">Payments</span>
                        <h3 class="card-title text-nowrap mb-2">&#8369;2,456</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="../assets/Admin/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>
                        </div>

                        <span class="d-block mb-1">Payments</span>
                        <h3 class="card-title text-nowrap mb-2">&#8369;2,456</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection

@section('scripts')
    @parent


@endsection
