@extends('manager.layout.app')

@section('title')
    Risk Assessment
@endsection

@section('page-name')
    Risk Assessment
@endsection

@section('active-link-risk')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Risk Assessment Table</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pe-3 pt-4">
                        <a href="{{ route('manager.risk.form') }}" class="btn bg-gradient-info" role="button"
                            aria-pressed="true">+
                            Add New</a>
                    </div>

                    @if (session('status'))
                        <div class="px-3">
                            <div class="alert alert-secondary alert-dismissible text-white fade show" role="alert">
                                <small>{{ session('status') }}</small>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif

                    <div class="card-body ps-3 pe-2 pb-5 pt-0">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            S. No.</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            QRE No.</th>
                                        <th rowspan=2
                                            class="text-center text-secondary small font-weight-bolder opacity-9 ps-2">
                                            Date</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Department</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Co-ordinator</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Area</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Description</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Existing Controls</th>
                                        <th colspan=5 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Risk Category - Before</th>
                                        <th colspan=3 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Recommended Actions <p class="small p-0 m-0">(Needed if the risk <Br>is Medium
                                                or High)
                                            </p>
                                        </th>
                                        <th colspan=5 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Risk Category - After</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Closing Date</th>
                                        <th colspan=3 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Approvals</th>
                                        <th rowspan=2 class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">Severity
                                            (S)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">Probablity
                                            (P)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Detectability (D)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">RPN Number
                                            (SxPxD)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Criticality</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Action</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Responsibility</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Completion Date</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">Severity
                                            (S)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">Probablity
                                            (P)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Detectability (D)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">RPN Number
                                            (SxPxD)</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Criticality</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Manager</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            RA & QA</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Director</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($risks as $risk)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->qre_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->receipt_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->department }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->coordinator }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->area }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->description }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->existing_controls }}
                                            </td>
                                            <td class="align-middle text-center text-sm">{{ $risk->severity_before }}
                                            </td>
                                            <td class="align-middle text-center text-sm">{{ $risk->probablity_before }}
                                            </td>
                                            <td class="align-middle text-center text-sm">{{ $risk->detectability_before }}
                                            </td>
                                            <td class="align-middle text-center text-sm">{{ $risk->rpn_before }}
                                            </td>
                                            <td class="align-middle text-center text-sm">{{ $risk->criticality_before }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->action1 }}<br>
                                                {{ $risk->action2 }}<br>
                                                {{ $risk->action3 }}<br>
                                                {{ $risk->action4 }}<br>
                                                {{ $risk->action5 }}<br>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->responsibility1 }}<br>
                                                {{ $risk->responsibility2 }}<br>
                                                {{ $risk->responsibility3 }}<br>
                                                {{ $risk->responsibility4 }}<br>
                                                {{ $risk->responsibility5 }}<br>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $risk->completion_date1 }}<br>
                                                {{ $risk->completion_date2 }}<br>
                                                {{ $risk->completion_date3 }}<br>
                                                {{ $risk->completion_date4 }}<br>
                                                {{ $risk->completion_date5 }}<br>
                                            </td>

                                            <td class="align-middle text-center text-sm">{{ $risk->severity_after }}</td>
                                            <td class="align-middle text-center text-sm">{{ $risk->probablity_after }}</td>
                                            <td class="align-middle text-center text-sm">{{ $risk->detectability_after }}
                                            </td>
                                            <td class="align-middle text-center text-sm">{{ $risk->rpn_after }}</td>
                                            <td class="align-middle text-center text-sm">{{ $risk->criticality_after }}
                                            </td>
                                            <td class="align-middle text-center text-sm">{{ $risk->closing_date }}</td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($risk->verified_by == '')
                                                    <a href="{{ route('manager.risk.verify', $risk->id) }}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Verify</a>
                                                @else
                                                    {{ $risk->verified_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($risk->reviewed_by == '')
                                                    Pending
                                                @else
                                                    {{ $risk->reviewed_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($risk->approved_by == '')
                                                    Pending
                                                @else
                                                    {{ $risk->approved_by }}
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <a href="{{ route('manager.risk.download', $risk->id) }}"
                                                            class="btn bg-gradient-success btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Download</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('manager.risk.print', $risk->id) }}"
                                                            target ="_blank"
                                                            class="btn bg-gradient-secondary btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Print</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('manager.risk.edit', $risk->id) }}"
                                                            class="btn bg-gradient-warning btn-sm mb-0 ms-1 me-1"
                                                            role="button" aria-pressed="true">Update</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
