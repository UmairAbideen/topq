@extends('qa.layout.app')

@section('title')
    Management Review Agenda
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
                        <a href="{{ route('qa.mrm.agenda.view') }}" class="btn bg-gradient-primary btn-sm" role="button"
                            aria-pressed="true">
                            Agenda</a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('qa.mrm.minutes.view') }}" class="btn btn-outline-secondary btn-sm" role="button"
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
                            <h6 class="text-white text-capitalize ps-3">Management Review Agenda</h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pe-3 pt-4">
                        <a href="{{ route('qa.mrm.agenda.form') }}" class="btn bg-gradient-info" role="button"
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
                                            Meeting Date</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Review Period</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Start Time</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            End Time</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Venue</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Review Items</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Prepared By</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Approved By</th>
                                        <th class="text-center text-secondary small font-weight-bolder opacity-9">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agendas as $agenda)
                                        <tr>
                                            <td class="align-middle text-center text-sm">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $agenda->meeting_no }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $agenda->meeting_date }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $agenda->review_period }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $agenda->start_time }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $agenda->end_time }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $agenda->venue }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                {{ $agenda->review_item1 }} <br>
                                                {{ $agenda->review_item2 }} <br>
                                                {{ $agenda->review_item3 }} <br>
                                                {{ $agenda->review_item4 }} <br>
                                                {{ $agenda->review_item5 }} <br>
                                                {{ $agenda->review_item6 }} <br>
                                                {{ $agenda->review_item7 }} <br>
                                                {{ $agenda->review_item8 }} <br>
                                                {{ $agenda->review_item9 }} <br>
                                                {{ $agenda->review_item10 }} <br>
                                                @if ($agenda->review_item11)
                                                    {{ $agenda->review_item11 }} <br>
                                                    {{ $agenda->review_item12 }} <br>
                                                    {{ $agenda->review_item13 }} <br>
                                                    {{ $agenda->review_item14 }} <br>
                                                    {{ $agenda->review_item15 }} <br>
                                                    {{ $agenda->review_item16 }} <br>
                                                    {{ $agenda->review_item17 }} <br>
                                                    {{ $agenda->review_item18 }} <br>
                                                    {{ $agenda->review_item19 }} <br>
                                                    {{ $agenda->review_item20 }} <br>
                                                @endif
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($agenda->prepared_by == '')
                                                    <a href="{{ route('qa.mrm.agenda.prepare', $agenda->id) }}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Prepare</a>
                                                @else
                                                    {{ $agenda->prepared_by }}
                                                @endif
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($agenda->approved_by == '')
                                                    <a href="{{ route('qa.mrm.agenda.approve', $agenda->id) }}"
                                                        class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1 " role="button"
                                                        aria-pressed="true">Approve</a>
                                                @else
                                                    {{ $agenda->approved_by }}
                                                @endif
                                            </td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <a href="{{ route('qa.mrm.agenda.download', $agenda->id) }}"
                                                            class="btn bg-gradient-success btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Download</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('qa.mrm.agenda.print', $agenda->id) }}"
                                                            target="_blank"
                                                            class="btn bg-gradient-secondary btn-sm mb-0 ms-1 me-1 "
                                                            role="button" aria-pressed="true">Print</a>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('qa.mrm.agenda.edit', $agenda->id) }}"
                                                            class="btn bg-gradient-warning btn-sm mb-0 ms-1 me-1"
                                                            role="button" aria-pressed="true">Update</a>
                                                    </div>

                                                    <div>
                                                        <button type="button"
                                                            class="btn bg-gradient-info btn-sm mb-0 ms-1 me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-share-{{ $agenda->id }}">Share</button>

                                                        <div class="modal fade" id="modal-share-{{ $agenda->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-share-{{ $agenda->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Share Agenda via E-Mail
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to share the Agenda?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.mrm.agenda.mail', $agenda->id) }}"
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
                                                            data-bs-target="#modal-delete-{{ $agenda->id }}">Delete</button>

                                                        <div class="modal fade" id="modal-delete-{{ $agenda->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-delete-{{ $agenda->id }}"
                                                            aria-hidden="true">

                                                            <div class="modal-dialog modal-dialog-centered modal-"
                                                                role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title font-weight-normal"
                                                                            id="modal-title-default">Delete Agenda
                                                                        </h6>
                                                                        <button type="button" class="btn-close text-dark"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to remove the Agenda?</p>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <a href="{{ route('qa.mrm.agenda.delete', $agenda->id) }}"
                                                                            class="btn bg-gradient-danger btn-sm mb-0 ms-1 me-1"
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
