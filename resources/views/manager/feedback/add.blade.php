@extends('manager.layout.app')

@section('title')
    Customer Feedback
@endsection

@section('page-name')
    Customer Feedback
@endsection

@section('active-link-feedback')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Customer Feedback</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('manager.feedback.view') }}" class="btn bg-gradient-info" role="button"
                                aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 px-3">
                                    <span class="text-danger mb-2">
                                        @error('name')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </span>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <span class="text-danger mb-2">
                                        @error('designation')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </span>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control"
                                            value="{{ old('designation') }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <span class="text-danger mb-2">
                                        @error('organization')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </span>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Organization</label>
                                        <input type="text" name="organization" class="form-control"
                                            value="{{ old('organization') }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <span class="text-danger mb-2">
                                        @error('email')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </span>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>

                                {{-- Instrumentation --}}
                                <h5 class="text-center text-muted pt-5 pb-2">Instrumentation Feedback</h5>
                                <div class="col-md-12 pb-0">
                                    <p class="small ps-1">Please tick the below options to the best of your experience</p>
                                </div>
                                {{-- Radio Buttons --}}
                                <div class="col-md-12 px-3 pt-0">
                                    <p class="small"><strong>Product Quality</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insp" value="Excellent">
                                            <label class="custom-control-label">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insp" value="Good">
                                            <label class="custom-control-label">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insp" value="Average"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insp" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insp" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Economical Solution For Patients</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inse" value="Excellent"
                                                id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inse" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inse"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inse" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inse" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Overall Services</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inso"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inso" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inso"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inso" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="inso" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Response to Complaints</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insr"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insr" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insr"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insr" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="insr" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 py-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label><strong>Remarks (if any)</strong></label>
                                        <textarea name="remarksins" rows="1" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>


                                {{-- IOLs --}}
                                <h5 class="text-center text-muted pt-5 pb-2">Intraocular Lens Feedback</h5>
                                <div class="col-md-12 pb-0">
                                    <p class="small ps-1">Please tick the below options to the best of your experience</p>
                                </div>
                                {{-- Radio Buttons --}}
                                <div class="col-md-12 px-3 pt-0">
                                    <p class="small"><strong>Product Quality</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolp"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolp" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolp"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolp" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolp" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Economical Solution For Patients</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iole"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iole" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iole"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iole" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iole" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Overall Services</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolo"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolo" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolo"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolo" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolo" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Response to Complaints</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolr"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolr" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolr"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolr" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="iolr" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 py-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label><strong>Remarks (if any)</strong></label>
                                        <textarea name="remarksiol" rows="1" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>

                                {{-- Dry Eye --}}
                                <h5 class="text-center text-muted pt-5 pb-2">Dry Eye Feedback</h5>
                                <div class="col-md-12 pb-0">
                                    <p class="small ps-1">Please tick the below options to the best of your experience</p>
                                </div>
                                {{-- Radio Buttons --}}
                                <div class="col-md-12 px-3 pt-0">
                                    <p class="small"><strong>Product Quality</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dep"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dep" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dep"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dep" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dep" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Economical Solution For Patients</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dee"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dee" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dee"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dee" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="dee" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Overall Services</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="deo"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="deo" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="deo"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="deo" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="deo" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 pt-3">
                                    <p class="small"><strong>Response to Complaints</strong></p>

                                    <div class="col-md-12 px-1 py-0 my-0 d-flex justify-content-between">
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="der"
                                                value="Excellent" id="customRadio1">
                                            <label class="custom-control-label" for="customRadio1">Excellent</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="der" value="Good"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Good</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="der"
                                                value="Average" id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Average</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="der" value="Low"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Low</label>
                                        </div>
                                        <div class="form-check px-0">
                                            <input class="form-check-input" type="radio" name="der" value="Poor"
                                                id="customRadio2">
                                            <label class="custom-control-label" for="customRadio2">Poor
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 px-3 py-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label><strong>Remarks (if any)</strong></label>
                                        <textarea name="remarksde" rows="1" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
