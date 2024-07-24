@extends('Layout.Admin.Layout')

@section('title', 'Awards')

@section('content')
    @php $ent = 'Award' @endphp
    <!-- Data table -->

    <div class="card">
        <div class="row pt-4 px-4 py-4">
            <div class="col-md-6">
                <h4 class="ent">{{ $ent }}s</h4>
            </div>

            <div class="col-md-6">
                <div class="dt-buttons btn-group d-flex justify-content-end gap-2 ">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                            <i class='bx bx-export'></i> Export
                        </button>
                        <ul class="dropdown-menu">
                            <li><button type="button" class="btn dropdown-item copy_btn"><i class='bx bx-copy'></i> Copy</button></li>
                            <li><button type="button" class="btn dropdown-item print_btn"><i class='bx bx-printer'></i> Print</button></li>
                            <li><button type="button" class="btn dropdown-item excel_btn"><i class='bx bx-file'></i>Excel</button></li>
                            <li><button type="button" class="btn dropdown-item pdf_btn"><i class='bx bxs-file-pdf'></i> Pdf</button></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target=".add_modal">
                            <i class='bx bx-plus-circle'></i> Add {{ $ent }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="table-responsive tbl_div">

        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade add_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add {{ $ent }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="add_form">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" placeholder="" name="img"/>
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <img name="img_prev" src="/img/no_image.jpg">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col">
                                <label for="" class="form-label">Type</label>
                                <select class="form-select" name="type">
                                    <option>Best Developer in the Philippines</option>
                                    <option>International Awards</option>
                                    <option>Philippine Awards</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade upd_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit {{ $ent }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="upd_form">
                        <input type="hidden" name="id" class="form-control">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" placeholder="" name="img"/>
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <img name="img_prev" src="/img/no_image.jpg">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col">
                                <label for="" class="form-label">Type</label>
                                <select class="form-select" name="type">
                                    <option>Best Developer in the Philippines</option>
                                    <option>International Awards</option>
                                    <option>Philippine Awards</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade del_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete {{ $ent }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure you want to delete this {{ $ent }}?</h5>
                    <form class="del_form">
                        <input type="hidden" name="id" class="form-control">

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-primary me-1">Yes</button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
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
