@extends('qa.layout.app')

@section('title')
    Change Control Management
@endsection

@section('page-name')
    Change Control Management
@endsection

@section('active-link-ccm')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Change Control Log</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pe-3 pt-4">
                        <a href="{{ route('qa.ccm.form') }}" class="btn bg-gradient-info" role="button" aria-pressed="true">+
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
                                            Request No.
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Logging Date
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Initiator
                                        </th>
                                        <th rowspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Department
                                        </th>
                                        <th rowspan="1" colspan="13"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Change Detail
                                        </th>
                                        <th rowspan="1" colspan="6"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Evaluation
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approval
                                        </th>
                                        <th rowspan="1" colspan="6"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Implementation
                                        </th>
                                        <th rowspan="1" colspan="3"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Close-out
                                        </th>
                                        <th rowspan="3"
                                            class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions</th>
                                    </tr>

                                    <tr>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Description
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Justification
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Area
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Impact
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Action(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Priority
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Required Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Effected Document(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Document No(s).
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Initiated By
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Initiation Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Verified By
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Verification Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Classification
                                        </th>
                                        <th rowspan="1" colspan="4"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Review Committee
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed By
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Reviewed Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approved By
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Approval Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Task(s)
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Responsible
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Completion Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Summary
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Implementation Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Final Assessment
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Monitoring
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Date
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Closed By
                                        </th>
                                        <th rowspan="2"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Signing Date
                                        </th>
                                    </tr>

                                    <tr>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Member Name
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Designation
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Recommendation
                                        </th>
                                        <th rowspan="1"
                                            class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            Signature
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($changes as $change)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->request_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->logging_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->initiator }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->department }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->description }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->justification }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->area }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->impact }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->action1 }}<br>
                                                {{ $change->action2 }}<br>
                                                {{ $change->action3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->priority }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->required_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->effected_doc1 }}<br>
                                                {{ $change->effected_doc2 }}<br>
                                                {{ $change->effected_doc3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->doc_no1 }}<br>
                                                {{ $change->doc_no2 }}<br>
                                                {{ $change->doc_no3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($change->initiated_by == '')
                                                    <a href="{{route('qa.ccm.initiate', $change->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Initiate</a>
                                                @else
                                                    {{ $change->initiated_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->initiation_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($change->verified_by == '')
                                                    <a href="{{route('qa.ccm.verify', $change->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Verify</a>
                                                @else
                                                    {{ $change->verified_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->verification_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->classification }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->member_name1 }}<br>
                                                {{ $change->member_name2 }}<br>
                                                {{ $change->member_name3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->designation1 }}<br>
                                                {{ $change->designation2 }}<br>
                                                {{ $change->designation3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->recommendation1 }}<br>
                                                {{ $change->recommendation2 }}<br>
                                                {{ $change->recommendation3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->sign1 }}<br>
                                                {{ $change->sign2 }}<br>
                                                {{ $change->sign3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($change->reviewed_by == '')
                                                    <a href="{{route('qa.ccm.review', $change->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Review</a>
                                                @else
                                                    {{ $change->reviewed_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->review_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($change->approved_by == '')
                                                    <a href="{{route('qa.ccm.approve', $change->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Approve</a>
                                                @else
                                                    {{ $change->approved_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->approval_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->task1 }}<br>
                                                {{ $change->task2 }}<br>
                                                {{ $change->task3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->responsible1 }}<br>
                                                {{ $change->responsible2 }}<br>
                                                {{ $change->responsible3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->completion_date1 }}<br>
                                                {{ $change->completion_date2 }}<br>
                                                {{ $change->completion_date3 }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->summary }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->implementation_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->final_assessment }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->monitoring }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->change_closing_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($change->closed_by == '')
                                                    <a href="{{route('qa.ccm.close', $change->id)}}" class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 "
                                                        role="button" aria-pressed="true">Close</a>
                                                @else
                                                    {{ $change->closed_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $change->signing_date }}
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
                                                        <a href="{{ route('qa.ccm.edit', $change->id) }}"
                                                            class="btn bg-gradient-warning btn-sm mb-0 ms-1 me-1"
                                                            role="button" aria-pressed="true">Update</a>
                                                    </div>

                                                    <div>
                                                        <button type="button"
                                                            class="btn bg-gradient-danger btn-sm mb-0 ms-1 me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete-{{ $change->id }}">Delete</button>

                                                        <div class="modal fade" id="modal-delete-{{ $change->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-delete-{{ $change->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Change Request
                                                                            Deletion
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to remove Change Request?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.ccm.delete', $change->id) }}"
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
