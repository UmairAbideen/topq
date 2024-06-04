@extends('qa.layout.app')

@section('title')
    Product Recall
@endsection

@section('page-name')
    Product Recall
@endsection

@section('active-link-recall')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Update Recall Information</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('qa.recall.view') }}" class="btn bg-gradient-info" role="button"
                                aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="{{ route('qa.recall.update', $recall->id) }}" method="post">
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
                                        <label>Reporter Name</label>
                                        <input type="text" name="reporter_name" class="form-control"
                                            value="{{ $recall->reporter_name }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Organization</label>
                                        <input type="text" name="organization" class="form-control"
                                            value="{{ $recall->organization }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{ $recall->address }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Contact</label>
                                        <input type="text" name="contact" class="form-control"
                                            value="{{ $recall->contact }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $recall->email }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Receipt Date</label>
                                        <input type="date" name="receipt_date" class="form-control"
                                            value="{{ $recall->receipt_date }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" class="form-control"
                                            value="{{ $recall->product_name }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Registration Number</label>
                                        <input type="text" name="registration_no" class="form-control"
                                            value="{{ $recall->registration_no }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Batch</label>
                                        <input type="text" name="batch" class="form-control"
                                            value="{{ $recall->batch }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Serial</label>
                                        <input type="text" name="serial" class="form-control"
                                            value="{{ $recall->serial }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Expiry</label>
                                        <input type="text" name="expiry" class="form-control"
                                            value="{{ $recall->expiry }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Manufacturing Date</label>
                                        <input type="date" name="manufacturing_date" class="form-control"
                                            value="{{ $recall->manufacturing_date }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Initial Product Quantity</label>
                                        <input type="text" name="qty_before" class="form-control"
                                            value="{{ $recall->qty_before }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Quantity Distributed</label>
                                        <input type="text" name="qty_distributed" class="form-control"
                                            value="{{ $recall->qty_distributed }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Customer Name # 1</label>
                                        <input type="text" name="customer_name1" class="form-control"
                                            value="{{ $recall->customer_name1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Distribution Date # 1</label>
                                        <input type="date" name="distribution_date1" class="form-control"
                                            value="{{ $recall->distribution_date1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Customer Name # 2</label>
                                        <input type="text" name="customer_name2" class="form-control"
                                            value="{{ $recall->customer_name2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Distribution Date # 2</label>
                                        <input type="date" name="distribution_date2" class="form-control"
                                            value="{{ $recall->distribution_date2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Customer Name # 3</label>
                                        <input type="text" name="customer_name3" class="form-control"
                                            value="{{ $recall->customer_name3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Distribution Date # 3</label>
                                        <input type="date" name="distribution_date3" class="form-control"
                                            value="{{ $recall->distribution_date3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Source of Problem</label>
                                        <input type="text" name="source" class="form-control"
                                            value="{{ $recall->source }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Problem Detail</label>
                                        <input type="text" name="problem_detail" class="form-control"
                                            value="{{ $recall->problem_detail }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Number of Complaints Received</label>
                                        <input type="text" name="no_of_complaint" class="form-control"
                                            value="{{ $recall->no_of_complaint }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Action Taken</label>
                                        <input type="text" name="action_taken" class="form-control"
                                            value="{{ $recall->action_taken }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Risk Assessment</label>
                                        <input type="text" name="risk_assessment" class="form-control"
                                            value="{{ $recall->risk_assessment }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recall Class</label>
                                        <select class="form-control" name="recall_type">
                                            @if ($recall->recall_type == 'Class I')
                                                <option value="Class I" selected>Class I</option>
                                                <option value="Class II">Class II</option>
                                                <option value="Class III">Class III</option>
                                                <option value="Class IV">Class IV</option>
                                            @elseif($recall->recall_type == 'Class II')
                                                <option value="Class I">Class I</option>
                                                <option value="Class II" selected>Class II</option>
                                                <option value="Class III">Class III</option>
                                                <option value="Class IV">Class IV</option>
                                            @elseif($recall->recall_type == 'Class III')
                                                <option value="Class I">Class I</option>
                                                <option value="Class II">Class II</option>
                                                <option value="Class III" selected>Class III</option>
                                                <option value="Class IV">Class IV</option>
                                            @elseif($recall->recall_type == 'Class IV')
                                                <option value="Class I">Class I</option>
                                                <option value="Class II">Class II</option>
                                                <option value="Class III">Class III</option>
                                                <option value="Class IV" selected>Class IV</option>
                                            @endif
                                        </select>
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
