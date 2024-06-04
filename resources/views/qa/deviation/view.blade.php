@extends('qa.layout.app')

@section('title')
    Deviation Management
@endsection

@section('page-name')
    Deviation Management
@endsection

@section('active-link-dm')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Deviation Log</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pe-3 pt-4">
                        <a href="{{ route('qa.deviation.form') }}" class="btn bg-gradient-info" role="button"
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
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            S. No.
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Deviation Date
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Deviation No.
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Initiator
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Department
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Designation
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Initial Assessment
                                        </th>
                                        <th rowspan="1" colspan="6"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Immediate Action(s)
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Root Cause
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Categorization
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Committee
                                        </th>
                                        <th rowspan="1" colspan="5"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Evaluation
                                        </th>
                                        <th rowspan="1" colspan="2"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Recall
                                        </th>
                                        <th rowspan="1" colspan="2"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            CAPA
                                        </th>
                                        <th rowspan="1" colspan="2"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Change Control
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            CAPA Implementation
                                        </th>
                                        <th rowspan="1" colspan="5"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            CAPA Close-out
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions
                                        </th>
                                    </tr>

                                    <tr>
                                        <th rowspan="2"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Product/Service/Process
                                        </th>
                                        <th rowspan="2"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Detail
                                        </th>
                                        <th rowspan="2"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Status
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Statement
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Action
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Date
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approval
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Name(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Designation(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Recommendation(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Date(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Device
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Patient
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Other
                                        </th>
                                        <th rowspan="1" colspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approval
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Required
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Number
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Required
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Number
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Required
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Number
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Task(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Responsible(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Designation(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Due Date(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Remarks
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approvals
                                        </th>
                                    </tr>

                                    <tr>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed By
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed Date
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approved By
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approval Date
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Verified By
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Verification Date
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed By
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed Date
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
                                    @foreach ($deviations as $deviation)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->deviation_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->deviation_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->initiator }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->department }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->designation }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->subject }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->detail }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->status }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->statement }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->action }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->date }}
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($deviation->ini_reviewed_by == '')
                                                    <a href="{{route('qa.deviaiton.ini.review', $deviation->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Review</a>
                                                @else
                                                    {{ $deviation->ini_reviewed_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->ini_review_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($deviation->ini_approved_by == '')
                                                    <a href="{{route('qa.deviaiton.ini.approve', $deviation->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Approve</a>
                                                @else
                                                    {{ $deviation->ini_approved_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->ini_approval_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->root_cause }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->categorization }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->name1 }}<br>
                                                {{ $deviation->name2 }}<br>
                                                {{ $deviation->name3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->designation1 }}<br>
                                                {{ $deviation->designation2 }}<br>
                                                {{ $deviation->designation3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->recommendation1 }}<br>
                                                {{ $deviation->recommendation2 }}<br>
                                                {{ $deviation->recommendation3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->date1 }}<br>
                                                {{ $deviation->date2 }}<br>
                                                {{ $deviation->date3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->device }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->patient }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->other }}
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($deviation->verified_by == '')
                                                    <a href="{{route('qa.deviaiton.verify', $deviation->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Verify</a>
                                                @else
                                                    {{ $deviation->verified_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->verification_date }}
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->required_recall }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->recall_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->required_capa }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->capa_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->required_ccm }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->ccm_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->capa_task1 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->capa_name1 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->capa_designation1 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->capa_duedate1 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->remarks }}
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($deviation->closing_reviewed_by == '')
                                                    <a href="{{route('qa.deviaiton.closing.review', $deviation->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Review</a>
                                                @else
                                                    {{ $deviation->closing_reviewed_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->closing_review_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($deviation->closing_approved_by == '')
                                                    <a href="{{route('qa.deviaiton.closing.approve', $deviation->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Approve</a>
                                                @else
                                                    {{ $deviation->closing_approved_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $deviation->closing_approval_date }}
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
                                                        <a href="{{route('qa.deviation.edit', $deviation->id)}}"
                                                            class="btn bg-gradient-warning btn-sm mb-0 ms-1 me-1"
                                                            role="button" aria-pressed="true">Update</a>
                                                    </div>

                                                    <div>
                                                        <button type="button"
                                                            class="btn bg-gradient-danger btn-sm mb-0 ms-1 me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete-{{ $deviation->id }}">Delete</button>

                                                        <div class="modal fade" id="modal-delete-{{ $deviation->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-delete-{{ $deviation->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Deviation Form
                                                                            Deletion
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to remove Deviation Form?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.deviation.delete', $deviation->id) }}"
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
