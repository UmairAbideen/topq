@extends('qa.layout.app')

@section('title')
    Recall Closure
@endsection

@section('page-name')
    Recall Closure
@endsection

@section('active-link-recall')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-center">
                    <div class="p-2">
                        <a href="{{ route('qa.recall.view') }}" class="btn btn-outline-secondary btn-sm" role="button"
                            aria-pressed="true">
                            Information</a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('qa.closure.view') }}" class="btn bg-gradient-primary btn-sm" role="button"
                            aria-pressed="true">
                            Closure</a>
                    </div>
                </div>

                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Recall Closure Report</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pe-3 pt-4">
                        <a href="{{ route('qa.closure.form') }}" class="btn bg-gradient-info" role="button"
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
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            S. No.
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Product
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Recall No.
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Problem Detail
                                        </th>
                                        <th rowspan="1" colspan="10"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reconciliation
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Remarks
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Decision
                                        </th>
                                        <th rowspan="2" colspan="4"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approvals
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions
                                        </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Batch
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Serial
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Expiry
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Manufacturing Date
                                        </th>
                                        <th rowspan="1" colspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Commercial Stock
                                        </th>
                                        <th rowspan="1" colspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Sample Stock
                                        </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Qty. Distributed
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Qty. Recovered
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Recovery Rate
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Qty. Distributed
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Qty. Recovered
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Recovery Rate
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed By
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Review Date
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approved By
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approval Date
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($closures as $closure)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->product }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->recall_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->problem_detail }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->batch }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->serial }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->expiry }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->manufacturing_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->distributed_c }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->recovered_c }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->recovery_c }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->distributed_s }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->recovered_s }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->recovery_s }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->remarks }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->decision }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($closure->reviewed_by == '')
                                                    <a href="{{ route('qa.closure.review', $closure->id) }}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Review</a>
                                                @else
                                                    {{ $closure->reviewed_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->review_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($closure->approved_by == '')
                                                    <a href="{{ route('qa.closure.approve', $closure->id) }}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Approve</a>
                                                @else
                                                    {{ $closure->approved_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $closure->approval_date }}
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <a href=""
                                                            class="btn bg-gradient-success btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Download</a>
                                                    </div>
                                                    <div>
                                                        <a href="" target="_blank"
                                                            class="btn bg-gradient-secondary btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Print</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('qa.closure.edit', $closure->id) }}"
                                                            class="btn bg-gradient-warning btn-sm mb-0 ms-1 me-1"
                                                            role="button" aria-pressed="true">Update</a>
                                                    </div>
                                                    <div>
                                                        <button type="button"
                                                            class="btn bg-gradient-danger btn-sm mb-0 ms-1 me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete-{{ $closure->id }}">Delete</button>

                                                        <div class="modal fade" id="modal-delete-{{ $closure->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-delete-{{ $closure->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Recall Closure Report
                                                                            Deletion
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to remove Recall Report?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.closure.delete', $closure->id) }}"
                                                                            class="btn btn-danger btn-sm mb-0 ms-1 me-1"
                                                                            role="button" aria-pressed="true">Yes</a>

                                                                        <button type="button"
                                                                            class="btn btn-light btn-sm mb-0 ms-1 me-1"
                                                                            data-bs-dismiss="modal">No</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
