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

                <div class="d-flex justify-content-center">
                    <div class="p-2">
                        <a href="{{route('qa.recall.view')}}" class="btn bg-gradient-primary btn-sm" role="button" aria-pressed="true">
                            Information</a>
                    </div>
                    <div class="p-2">
                        <a href="{{route('qa.closure.view')}}" class="btn btn-outline-secondary btn-sm" role="button" aria-pressed="true">
                            Closure</a>
                    </div>
                </div>

                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Recall Log</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pe-3 pt-4">
                        <a href="{{route('qa.recall.form')}}" class="btn bg-gradient-info" role="button" aria-pressed="true">+
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
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            S. No.
                                        </th>
                                        <th rowspan="1" colspan="6"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reporter Detail
                                        </th>
                                        <th rowspan="1" colspan="6"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Product Detail
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Distribution Detail
                                        </th>
                                        <th rowspan="1" colspan="6"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Defect Detail
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approvals
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reporter Name
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Organization
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Address
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Contact
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Email
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Receipt Date
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Name
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reigstration No.
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Batch
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Serial
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Expiry
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Manufacturing Date
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Initial Qty.
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Distributed Qty.
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Customer(s)
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Distibution Date(s)
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Source
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Problem Detail
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            No. of Complaint
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Action Taken
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Risk Assessment
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Recall Type
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed By
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Review Date
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approved By
                                        </th>
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approval Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recalls as $recall)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->reporter_name }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->organization }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->address }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->contact }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->email }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->receipt_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->product_name }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->registration_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->batch }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->serial }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->expiry }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->manufacturing_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->qty_before }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->qty_distributed }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->customer_name1 }}<br>
                                                {{ $recall->customer_name2 }}<br>
                                                {{ $recall->customer_name3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->distribution_date1 }}<br>
                                                {{ $recall->distribution_date2 }}<br>
                                                {{ $recall->distribution_date3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->source }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->problem_detail }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->no_of_complaint }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->action_taken }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->risk_assessment }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->recall_type }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($recall->reviewed_by == '')
                                                    <a href="{{route('qa.recall.review', $recall->id)}}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Review</a>
                                                @else
                                                    {{ $recall->reviewed_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->review_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($recall->approved_by == '')
                                                    <a href="{{route('qa.recall.approve', $recall->id)}}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Approve</a>
                                                @else
                                                    {{ $recall->approved_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $recall->approval_date }}
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
                                                        <a href="{{route('qa.recall.edit', $recall->id)}}"
                                                            class="btn bg-gradient-warning btn-sm mb-0 ms-1 me-1"
                                                            role="button" aria-pressed="true">Update</a>
                                                    </div>

                                                    <div>
                                                        <button type="button"
                                                            class="btn bg-gradient-danger btn-sm mb-0 ms-1 me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete-{{ $recall->id }}">Delete</button>

                                                        <div class="modal fade" id="modal-delete-{{ $recall->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-delete-{{ $recall->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Recall Information Form
                                                                            Deletion
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to remove Recall Form?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.recall.delete', $recall->id) }}"
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
