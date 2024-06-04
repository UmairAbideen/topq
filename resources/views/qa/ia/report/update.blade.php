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
                            <h6 class="text-white text-capitalize ps-3">Update Report</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('qa.ia.report.view') }}" class="btn btn-info" role="button"
                                aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="{{ route('qa.ia.report.update',$report->id) }}" method="post">
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
                                        <label>Report Number</label>
                                        <input type="text" name="report_no" class="form-control"
                                            value="{{ $report->report_no }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Date</label>
                                        <input type="date" name="doc_date" class="form-control"
                                            value="{{ $report->doc_date }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Internal Auditor # 1</label>
                                        <input type="text" name="internal_auditor1" class="form-control"
                                            value="{{ $report->internal_auditor1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Internal Auditor # 2</label>
                                        <input type="text" name="internal_auditor2" class="form-control"
                                            value="{{ $report->internal_auditor2 }}">
                                    </div>
                                </div>

                                <!-- Department #1 -->
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department # 1</label>
                                        <input type="text" name="department1" class="form-control"
                                            value="{{ $report->department1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date of Audit</label>
                                        <input type="date" name="date_dep1" class="form-control"
                                            value="{{ $report->date_dep1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Area of Audit</label>
                                        <input type="text" name="area1" class="form-control"
                                            value="{{ $report->area1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Scope</label>
                                        <input type="text" name="scope1" class="form-control"
                                            value="{{ $report->scope1 }}">
                                    </div>
                                </div>

                                <!-- Department #2 -->
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department # 2</label>
                                        <input type="text" name="department2" class="form-control"
                                            value="{{ $report->department2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date of Audit</label>
                                        <input type="date" name="date_dep2" class="form-control"
                                            value="{{ $report->date_dep2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Area of Audit</label>
                                        <input type="text" name="area2" class="form-control"
                                            value="{{ $report->area2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Scope</label>
                                        <input type="text" name="scope2" class="form-control"
                                            value="{{ $report->scope2 }}">
                                    </div>
                                </div>

                                <!-- Department #3 -->
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department # 3</label>
                                        <input type="text" name="department3" class="form-control"
                                            value="{{ $report->department3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date of Audit</label>
                                        <input type="date" name="date_dep3" class="form-control"
                                            value="{{ $report->date_dep3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Area of Audit</label>
                                        <input type="text" name="area3" class="form-control"
                                            value="{{ $report->area3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Scope</label>
                                        <input type="text" name="scope3" class="form-control"
                                            value="{{ $report->scope3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Summary</label>
                                        <input type="text" name="summary" class="form-control"
                                            value="{{ $report->summary }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Deviation Number</label>
                                        <input type="text" name="deviation_no" class="form-control"
                                            value="{{ $report->deviation_no }}">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
