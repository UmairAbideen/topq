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
                            <h6 class="text-white text-capitalize ps-3">Update Deviation Form</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('qa.deviation.view') }}" class="btn bg-gradient-info" role="button"
                                aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="{{ route('qa.deviation.update', $deviation->id) }}" method="post">
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
                                        <label>Deviation Date</label>
                                        <input type="date" name="deviation_date" class="form-control"
                                            value="{{ $deviation->deviation_date }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Deviation Number</label>
                                        <input type="text" name="deviation_no" class="form-control"
                                            value="{{ $deviation->deviation_no }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Initiator Name</label>
                                        <input type="text" name="initiator" class="form-control"
                                            value="{{ $deviation->initiator }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department</label>
                                        <input type="text" name="department" class="form-control"
                                            value="{{ $deviation->department }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control"
                                            value="{{ $deviation->designation }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Product/Service/Process</label>
                                        <input type="text" name="subject" class="form-control"
                                            value="{{ $deviation->subject }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Detail</label>
                                        <input type="text" name="detail" class="form-control"
                                            value="{{ $deviation->detail }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Deviation Status</label>
                                        <select class="form-control" name="status">
                                            @if ($deviation->status == 'Planned Deviation')
                                                <option value="Planned Deviation" selected>Planned Deviation</option>
                                                <option value="Un-Planned Deviation">Un-Planned Deviation</option>
                                            @elseif($deviation->status == 'Un-Planned Deviation')
                                                <option value="Planned Deviation">Planned Deviation</option>
                                                <option value="Un-Planned Deviation" selected>Un-Planned Deviation</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Deviation Statement</label>
                                        <input type="text" name="statement" class="form-control"
                                            value="{{ $deviation->statement }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Action</label>
                                        <input type="text" name="action" class="form-control"
                                            value="{{ $deviation->action }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control"
                                            value="{{ $deviation->date }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Root Cause</label>
                                        <input type="text" name="root_cause" class="form-control"
                                            value="{{ $deviation->root_cause }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Deviation Categorization</label>
                                        <input type="text" name="categorization" class="form-control"
                                            value="{{ $deviation->categorization }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name # 1</label>
                                        <input type="text" name="name1" class="form-control"
                                            value="{{ $deviation->name1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation # 1</label>
                                        <input type="text" name="deisgnation1" class="form-control"
                                            value="{{ $deviation->deisgnation1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recommendation # 1</label>
                                        <input type="text" name="recommendation1" class="form-control"
                                            value="{{ $deviation->recommendation1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date # 1</label>
                                        <input type="date" name="date1" class="form-control"
                                            value="{{ $deviation->date1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name # 2</label>
                                        <input type="" name="name2" class="form-control"
                                            value="{{ $deviation->name2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation # 2</label>
                                        <input type="text" name="deisgnation2" class="form-control"
                                            value="{{ $deviation->deisgnation2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recommendation # 2</label>
                                        <input type="text" name="recommendation2" class="form-control"
                                            value="{{ $deviation->recommendation2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date # 2</label>
                                        <input type="date" name="date2" class="form-control"
                                            value="{{ $deviation->date2 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name # 3</label>
                                        <input type="text" name="name3" class="form-control"
                                            value="{{ $deviation->name3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation # 3</label>
                                        <input type="text" name="deisgnation3" class="form-control"
                                            value="{{ $deviation->deisgnation3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recommendation # 3</label>
                                        <input type="text" name="recommendation3" class="form-control"
                                            value="{{ $deviation->recommendation3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date # 3</label>
                                        <input type="date" name="date3" class="form-control"
                                            value="{{ $deviation->date3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Medical Device Effected? If yes, give details</label>
                                        <input type="text" name="device" class="form-control"
                                            value="{{ $deviation->device }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Pateint Effected? If yes, give details</label>
                                        <input type="text" name="patient" class="form-control"
                                            value="{{ $deviation->patient }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Any Other Process or Service Effected?</label>
                                        <input type="text" name="other" class="form-control"
                                            value="{{ $deviation->other }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recall Required?</label>
                                        <select class="form-control" name="required_recall">
                                            @if ($deviation->required_recall == 'Yes')
                                                <option value="Yes" selected>Yes</option>
                                                <option value="No">No</option>
                                            @elseif($deviation->required_recall == 'No')
                                                <option value="Yes">Yes</option>
                                                <option value="No" selected>No</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recall Number</label>
                                        <input type="text" name="recall_no" class="form-control"
                                            value="{{ $deviation->recall_no }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>CAPA Required?</label>
                                        <select class="form-control" name="required_capa">
                                            @if ($deviation->required_capa == 'Yes')
                                                <option value="Yes" selected>Yes</option>
                                                <option value="No">No</option>
                                            @elseif($deviation->required_capa == 'No')
                                                <option value="Yes">Yes</option>
                                                <option value="No" selected>No</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>CAPA Number</label>
                                        <input type="text" name="capa_no" class="form-control"
                                            value="{{ $deviation->capa_no }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Change Control Required?</label>
                                        <select class="form-control" name="required_ccm">
                                            @if ($deviation->required_ccm == 'Yes')
                                                <option value="Yes" selected>Yes</option>
                                                <option value="No">No</option>
                                            @elseif($deviation->required_ccm == 'No')
                                                <option value="Yes">Yes</option>
                                                <option value="No" selected>No</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Chnage Control Number</label>
                                        <input type="text" name="ccm_no" class="form-control"
                                            value="{{ $deviation->ccm_no }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>CAPA Task</label>
                                        <input type="text" name="capa_task1" class="form-control"
                                            value="{{ $deviation->capa_task1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Responsible Person</label>
                                        <input type="text" name="capa_name1" class="form-control"
                                            value="{{ $deviation->capa_name1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation</label>
                                        <input type="text" name="capa_designation1" class="form-control"
                                            value="{{ $deviation->capa_designation1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>CAPA Due Date</label>
                                        <input type="date" name="capa_duedate1" class="form-control"
                                            value="{{ $deviation->capa_duedate1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Close-out Remarks</label>
                                        <input type="text" name="remarks" class="form-control"
                                            value="{{ $deviation->remarks }}">
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
