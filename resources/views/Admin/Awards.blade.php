@extends('Sections.Admin.Layout')

@section('title', 'Awards')

@section('content')
    @php $ent = 'Award' @endphp

    <div class="card rounded-0">
        <div class="card-body ">
            <div class="row">
                <div class="col">
                    <h2 class='ent'>{{ $ent }}s</h2>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary mb-3 p-2 me-3" data-bs-target=".add_modal" data-bs-toggle="modal">
                    <i class="fa-solid fa-plus"></i>
                    Add {{ $ent }}
                </button>
            </div>

            <div class="tbl_div">

            </div>
        </div>
    </div>

    <div class="modal fade add_modal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-primary">
                        <i class="fa-solid fa-user mr-1"></i>
                        Add {{ $ent }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add_form">

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control">
                                    <label for="">Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="file" name="img" class="form-control">
                                    <label for="">Image</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" name="type">
                                        <option>Best Developer in the Philippines</option>
                                        <option>International Awards</option>
                                        <option>Philippine Awards</option>
                                    </select>
                                    <label for="">Type</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-3 me-2 fw-semibold">Save</button>
                            <button type="button" class="btn btn-warning px-3 me-2 fw-semibold">Clear</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade upd_modal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-primary">
                        <i class="fa-solid fa-user mr-1"></i>
                        Edit {{ $ent }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="upd_form">

                        <input type="hidden" name="id" class="form-control">

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control">
                                    <label for="">Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" name="img" class="form-control">
                                    <label for="">Image</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" name="type">
                                        <option>Best Developer in the Philippines</option>
                                        <option>International Awards</option>
                                        <option>Philippine Awards</option>
                                    </select>
                                    <label for="">Type</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-3 me-2 fw-semibold">Update</button>
                            <button type="button" class="btn btn-warning px-3 me-2 fw-semibold">Clear</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade del_modal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-primary">
                        <i class="fa-solid fa-user mr-1"></i>
                        Delete {{ $ent }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h5 class="mb-3">Are you sure you want to delete this {{ $ent }}?</h5>
                    <form class="del_form">

                        <input type="hidden" name="id" class="form-control">
                        
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-3 me-2 fw-semibold">Yes</button>
                            <button type="button" class="btn btn-danger px-3 me-2 fw-semibold" data-bs-dismiss="modal">No</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @parent

    <script src="{{ asset('js/Admin/Awards.js') }}"></script>
@endsection
