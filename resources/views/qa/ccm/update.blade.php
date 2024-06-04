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
                            <h6 class="text-white text-capitalize ps-3">Update Change Request</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('qa.ccm.view') }}" class="btn bg-gradient-info" role="button"
                                aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="{{ route('qa.ccm.update', $change->id) }}" method="post">
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
                                        <label>Change Request Number</label>
                                        <input type="text" name="request_no" class="form-control"
                                            value="{{ $change->request_no }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Logging Date</label>
                                        <input type="date" name="logging_date" class="form-control"
                                            value="{{ $change->logging_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Initiator</label>
                                        <input type="text" name="initiator" class="form-control"
                                            value="{{ $change->initiator }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Department</label>
                                        <input type="text" name="department" class="form-control"
                                            value="{{ $change->department }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control"
                                            value="{{ $change->description }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Justification</label>
                                        <input type="text" name="justification" class="form-control"
                                            value="{{ $change->justification }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Area</label>
                                        <input type="text" name="area" class="form-control"
                                            value="{{ $change->area }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Impact</label>
                                        <input type="text" name="impact" class="form-control"
                                            value="{{ $change->impact }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Action # 1</label>
                                        <input type="text" name="action1" class="form-control"
                                            value="{{ $change->action1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Action # 2</label>
                                        <input type="text" name="action2" class="form-control"
                                            value="{{ $change->action2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Action # 3</label>
                                        <input type="text" name="action3" class="form-control"
                                            value="{{ $change->action3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label class="ms-0">Priority</label>
                                        <select class="form-control" name="priority">
                                            @if ($change->priority == 'Low')
                                                <option value="Low" selected>Low</option>
                                                <option value="Medium">Medium</option>
                                                <option value="High">High</option>
                                            @elseif($change->priority == 'Medium')
                                                <option value="Low">Low</option>
                                                <option value="Medium" selected>Medium</option>
                                                <option value="High">High</option>
                                            @elseif($change->priority == 'High')
                                                <option value="Low">Low</option>
                                                <option value="Medium">Medium</option>
                                                <option value="High" selected>High</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Required Date</label>
                                        <input type="date" name="required_date" class="form-control"
                                            value="{{ $change->required_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Effected Name # 1</label>
                                        <input type="text" name="effected_doc1" class="form-control"
                                            value="{{ $change->effected_doc1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Number # 1</label>
                                        <input type="text" name="doc_no1" class="form-control"
                                            value="{{ $change->doc_no1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Effected Name # 2</label>
                                        <input type="text" name="effected_doc2" class="form-control"
                                            value="{{ $change->effected_doc2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Number # 2</label>
                                        <input type="text" name="doc_no2" class="form-control"
                                            value="{{ $change->doc_no2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Effected Name # 3</label>
                                        <input type="text" name="effected_doc3" class="form-control"
                                            value="{{ $change->effected_doc3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Document Number # 3</label>
                                        <input type="text" name="doc_no3" class="form-control"
                                            value="{{ $change->doc_no3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Classification</label>
                                        <input type="text" name="classification" class="form-control"
                                            value="{{ $change->classification }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Member Name # 1</label>
                                        <input type="text" name="member_name1" class="form-control"
                                            value="{{ $change->member_name1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation # 1</label>
                                        <input type="text" name="designation1" class="form-control"
                                            value="{{ $change->designation1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recommendation # 1</label>
                                        <input type="text" name="recommendation1" class="form-control"
                                            value="{{ $change->recommendation1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Sign # 1</label>
                                        <input type="text" name="sign1" class="form-control"
                                            value="{{ $change->sign1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Member Name # 2</label>
                                        <input type="text" name="member_name2" class="form-control"
                                            value="{{ $change->member_name2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation # 2</label>
                                        <input type="text" name="designation2" class="form-control"
                                            value="{{ $change->designation2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recommendation # 2</label>
                                        <input type="text" name="recommendation2" class="form-control"
                                            value="{{ $change->recommendation2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Sign # 2</label>
                                        <input type="text" name="sign2" class="form-control"
                                            value="{{ $change->sign2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Member Name # 3</label>
                                        <input type="text" name="member_name3" class="form-control"
                                            value="{{ $change->member_name3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Designation # 3</label>
                                        <input type="text" name="designation3" class="form-control"
                                            value="{{ $change->designation3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Recommendation # 3</label>
                                        <input type="text" name="recommendation3" class="form-control"
                                            value="{{ $change->recommendation3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Sign # 3</label>
                                        <input type="text" name="sign3" class="form-control"
                                            value="{{ $change->sign3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Task # 1</label>
                                        <input type="text" name="task1" class="form-control"
                                            value="{{ $change->task1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Responsible Person # 1</label>
                                        <input type="text" name="responsible1" class="form-control"
                                            value="{{ $change->responsible1 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Completion Date # 1</label>
                                        <input type="date" name="completion_date1" class="form-control"
                                            value="{{ $change->completion_date1 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Task # 2</label>
                                        <input type="text" name="task2" class="form-control"
                                            value="{{ $change->task2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Responsible Person # 2</label>
                                        <input type="text" name="responsible2" class="form-control"
                                            value="{{ $change->responsible2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Completion Date # 2</label>
                                        <input type="date" name="completion_date2" class="form-control"
                                            value="{{ $change->completion_date2 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Task # 3</label>
                                        <input type="text" name="task3" class="form-control"
                                            value="{{ $change->task3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Responsible Person # 3</label>
                                        <input type="text" name="responsible3" class="form-control"
                                            value="{{ $change->responsible3 }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Completion Date # 3</label>
                                        <input type="date" name="completion_date3" class="form-control"
                                            value="{{ $change->completion_date3 }}">
                                    </div>
                                </div>

                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Summary</label>
                                        <input type="text" name="summary" class="form-control"
                                            value="{{ $change->summary }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Implementation Date</label>
                                        <input type="date" name="implementation_date" class="form-control"
                                            value="{{ $change->implementation_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Final Assessment</label>
                                        <input type="text" name="final_assessment" class="form-control"
                                            value="{{ $change->final_assessment }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Monitoring</label>
                                        <input type="text" name="monitoring" class="form-control"
                                            value="{{ $change->monitoring }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Closing Date</label>
                                        <input type="date" name="change_closing_date" class="form-control"
                                            value="{{ $change->change_closing_date }}">
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
