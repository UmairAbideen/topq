@extends('qa.layout.app')

@section('title')
    Product Complaint
@endsection

@section('page-name')
    Product Complaint
@endsection

@section('active-link-complaint')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Update Complaint</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('qa.complaint.view') }}" class="btn bg-gradient-info" role="button"
                                aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="{{ route('qa.complaint.update', $complaint->id) }}" method="post">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible text-white fade show" role="alert">
                                    <small>{{ session('status') }}</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Complaint Number</label>
                                        <input type="text" name="complaint_no" class="form-control"
                                            value="{{ $complaint->complaint_no }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Receipt Date</label>
                                        <input type="date" name="receipt_date" class="form-control"
                                            value="{{ $complaint->receipt_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Customer Name</label>
                                        <input type="text" name="customer_name" class="form-control"
                                            value="{{ $complaint->customer }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Complaint Detail</label>
                                        <input type="text" name="detail" class="form-control"
                                            value="{{ $complaint->detail }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label class="ms-0">Complaint Category</label>
                                        <select class="form-control" name="category">
                                            @if ($complaint->category == 'proComp')
                                                <option value="proComp" selected>Product Complaint</option>
                                                <option value="techComp">Technical Complaint</option>
                                            @elseif ($complaint->category == 'techComp')
                                                <option value="proComp">Product Complaint</option>
                                                <option value="techComp" selected>Technical Complaint</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" class="form-control"
                                            value="{{ $complaint->product }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Batch Number</label>
                                        <input type="text" name="batch" class="form-control"
                                            value="{{ $complaint->batch }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Serial Number</label>
                                        <input type="text" name="serial" class="form-control"
                                            value="{{ $complaint->serial }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Expiry</label>
                                        <input type="date" name="expiry" class="form-control"
                                            value="{{ $complaint->expiry }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Quantity</label>
                                        <input type="text" name="quantity" class="form-control"
                                            value="{{ $complaint->quantity }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Initiation Date</label>
                                        <input type="date" name="capa_init" class="form-control"
                                            value="{{ $complaint->capa_init }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Number</label>
                                        <input type="text" name="capa_no" class="form-control"
                                            value="{{ $complaint->capa_no }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control"
                                            value="{{ $complaint->capa_status }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Associate Name</label>
                                        <input type="text" name="associate_name" class="form-control"
                                        value="{{ $complaint->associate_name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Associate Email</label>
                                        <input type="text" name="associate_email" class="form-control"
                                        value="{{ $complaint->associate_email }}">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn bg-gradient-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
