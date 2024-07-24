@extends('Layout.Admin.Layout')

@section('title', 'Settings')

@section('content')
    @php $ent = 'Settings' @endphp

    <div class="card">
        <div class="card-body row px-4">
            <div class="col-md-6">
                <h4 class="ent">{{ $ent }}</h4>
            </div>

            <form class="upd_form">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="" class="form-label">Logo</label>
                        <input type="file" class="form-control" placeholder="" name="logo"/>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img name="logo_prev" src="/img/no_image.jpg">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="" class="form-label">Facebook Link</label>
                        <input type="text" class="form-control" placeholder="Enter Facebook Link" name="fb"/>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Instagram Link</label>
                        <input type="text" class="form-control" placeholder="Enter Instagram Link" name="insta"/>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter Email Address" name="email"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone"/>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Viber Number</label>
                        <input type="text" class="form-control" placeholder="Enter Viber Number" name="viber"/>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">What's App Number</label>
                        <input type="text" class="form-control" placeholder="Enter What's App Number" name="whatsapp"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" cols="30" rows="7" placeholder="Enter Description" name="desc"></textarea>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Disclaimer</label>
                        <textarea class="form-control" cols="30" rows="7" placeholder="Enter Disclaimer" name="disc"></textarea>
                    </div>
                </div>

                <div class="row">
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                            <button type="button" class="btn btn-outline-secondary cancel_btn" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Admin/Settings.js') }}"></script>
@endsection
