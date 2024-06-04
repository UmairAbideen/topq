@extends('qa.layout.app')

@section('title')
    Internal Audit
@endsection

@section('page-name')
    Internal Audit
@endsection

@section('active-link-ia')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Add Schedule</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('qa.ia.schedule.view') }}" class="btn bg-gradient-info" role="button"
                                aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="{{ route('qa.ia.schedule.create') }}" method="post">
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
                                        <label>Internal Auditor # 1</label>
                                        <input type="text" name="internal_auditor1" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Internal Auditor # 2</label>
                                        <input type="text" name="internal_auditor2" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Date</label>
                                        <input type="date" name="doc_date" class="form-control">
                                    </div>
                                </div>

                                <!-- Department #1 -->
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department # 1</label>
                                        <input type="text" name="department1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date of Audit</label>
                                        <input type="date" name="date_dep1" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Time</label>
                                        <input type="text" name="time1" placeholder="00:00am - 00:00pm"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Area of Audit</label>
                                        <input type="text" name="area1" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee # 1</label>
                                        <input type="text" name="auditee1a" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee # 2</label>
                                        <input type="text" name="auditee1b" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee # 3</label>
                                        <input type="text" name="auditee1c" class="form-control">
                                    </div>
                                </div>

                                <!-- Department #2 -->

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department #2</label>
                                        <input type="text" name="department2" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date of Audit</label>
                                        <input type="date" name="date_dep2" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Time</label>
                                        <input type="text" name="time2" placeholder="00:00am - 00:00pm"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Area of Audit</label>
                                        <input type="text" name="area2" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee #1</label>
                                        <input type="text" name="auditee2a" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee #2</label>
                                        <input type="text" name="auditee2b" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee #3</label>
                                        <input type="text" name="auditee2c" class="form-control">
                                    </div>
                                </div>

                                <!-- Department #3 -->
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department #3</label>
                                        <input type="text" name="department3" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date of Audit</label>
                                        <input type="date" name="date_dep3" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Time</label>
                                        <input type="text" name="time3" placeholder="00:00am - 00:00pm"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Area of Audit</label>
                                        <input type="text" name="area3" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee #1</label>
                                        <input type="text" name="auditee3a" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee #2</label>
                                        <input type="text" name="auditee3b" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name of Auditee #3</label>
                                        <input type="text" name="auditee3c" class="form-control">
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
