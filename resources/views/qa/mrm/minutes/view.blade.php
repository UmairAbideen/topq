@extends('qa.layout.app')

@section('title')
    Management Review Minutes
@endsection

@section('page-name')
    Management Review Meeting
@endsection

@section('active-link-mrm')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">

                <div class="d-flex justify-content-center">
                    <div class="p-2">
                        <a href="{{ route('qa.mrm.agenda.view') }}" class="btn btn-outline-secondary btn-sm" role="button"
                            aria-pressed="true">
                            Agenda</a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('qa.mrm.minutes.view') }}" class="btn bg-gradient-primary btn-sm" role="button"
                            aria-pressed="true">
                            Minutes</a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('qa.mrm.attendance.view') }}" class="btn btn-outline-secondary btn-sm"
                            role="button" aria-pressed="true">
                            Attendance</a>
                    </div>
                </div>

                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Management Review Minutes</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pe-3 pt-4">
                        <a href="{{ route('qa.mrm.minutes.form') }}" class="btn bg-gradient-info" role="button"
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
                                        <th class=" text-center text-secondary small font-weight-bolder opacity-9">
                                            S. No.
                                        </th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Meeting No.</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9 ps-2">
                                            Decisions</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Responsible Person</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Completion Date</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Remarks</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Prepared By</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Approved By</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($minutes as $minute)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $minute->meeting_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $minute->decision1 }}<br>
                                                {{ $minute->decision2 }}<br>
                                                {{ $minute->decision3 }}<br>
                                                {{ $minute->decision4 }}<br>
                                                {{ $minute->decision5 }}<br>
                                                {{ $minute->decision6 }}<br>
                                                {{ $minute->decision7 }}<br>
                                                {{ $minute->decision8 }}<br>
                                                {{ $minute->decision9 }}<br>
                                                {{ $minute->decision10 }}<br>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $minute->action1 }}<br>
                                                {{ $minute->action2 }}<br>
                                                {{ $minute->action3 }}<br>
                                                {{ $minute->action4 }}<br>
                                                {{ $minute->action5 }}<br>
                                                {{ $minute->action6 }}<br>
                                                {{ $minute->action7 }}<br>
                                                {{ $minute->action8 }}<br>
                                                {{ $minute->action9 }}<br>
                                                {{ $minute->action10 }}<br>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $minute->responsible1 }}<br>
                                                {{ $minute->responsible2 }}<br>
                                                {{ $minute->responsible3 }}<br>
                                                {{ $minute->responsible4 }}<br>
                                                {{ $minute->responsible5 }}<br>
                                                {{ $minute->responsible6 }}<br>
                                                {{ $minute->responsible7 }}<br>
                                                {{ $minute->responsible8 }}<br>
                                                {{ $minute->responsible9 }}<br>
                                                {{ $minute->responsible10 }}<br>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $minute->completion_date1 }}<br>
                                                {{ $minute->completion_date2 }}<br>
                                                {{ $minute->completion_date3 }}<br>
                                                {{ $minute->completion_date4 }}<br>
                                                {{ $minute->completion_date5 }}<br>
                                                {{ $minute->completion_date6 }}<br>
                                                {{ $minute->completion_date7 }}<br>
                                                {{ $minute->completion_date8 }}<br>
                                                {{ $minute->completion_date9 }}<br>
                                                {{ $minute->completion_date10 }}<br>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $minute->remarks1 }}<br>
                                                {{ $minute->remarks2 }}<br>
                                                {{ $minute->remarks3 }}<br>
                                                {{ $minute->remarks4 }}<br>
                                                {{ $minute->remarks5 }}<br>
                                                {{ $minute->remarks6 }}<br>
                                                {{ $minute->remarks7 }}<br>
                                                {{ $minute->remarks8 }}<br>
                                                {{ $minute->remarks9 }}<br>
                                                {{ $minute->remarks10 }}<br>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($minute->prepared_by == '')
                                                    <a href="{{ route('qa.mrm.minutes.prepare', $minute->id) }}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Prepare</a>
                                                @else
                                                    {{ $minute->prepared_by }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($minute->approved_by == '')
                                                    <a href="{{ route('qa.mrm.minutes.approve', $minute->id) }}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Approve</a>
                                                @else
                                                    {{ $minute->approved_by }}
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <a href="{{ route('qa.mrm.minutes.download', $minute->id) }}"
                                                            class="btn bg-gradient-success btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Download</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('qa.mrm.minutes.print', $minute->id) }}"
                                                            target="_blank"
                                                            class="btn bg-gradient-secondary btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Print</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('qa.mrm.minutes.edit', $minute->id) }}"
                                                            class="btn bg-gradient-warning btn-sm mb-0 ms-1 me-1"
                                                            role="button" aria-pressed="true">Update</a>
                                                    </div>





                                                    <div>
                                                        <button type="button"
                                                            class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-share-{{ $minute->id }}">Share</button>

                                                        <div class="modal fade" id="modal-share-{{ $minute->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-share-{{ $minute->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Share Minutes via
                                                                            E-Mail
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to share the Minutes?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.mrm.minutes.mail', $minute->id) }}"
                                                                            class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1"
                                                                            role="button" aria-pressed="true">Yes</a>

                                                                        <button type="button"
                                                                            class="btn btn-light btn-sm mb-0 ms-1 me-1"
                                                                            data-bs-dismiss="modal">No</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <button type="button"
                                                            class="btn bg-gradient-danger btn-sm mb-0 ms-1 me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete-{{ $minute->id }}">Delete</button>

                                                        <div class="modal fade" id="modal-delete-{{ $minute->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-delete-{{ $minute->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Meeting Minutes
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to remove the Meeting Minutes?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.mrm.minutes.delete', $minute->id) }}"
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
