@extends('qa.layout.app')

@section('title')
    Users
@endsection

@section('page-name')
    User Management
@endsection

@section('active-link-users')
    active bg-gradient-primary
@endsection

@section('main-content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 my-0 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Update User</h6>
                        </div>

                        <div class="d-flex justify-content-end pe-0 pt-4">
                            <a href="{{ route('qa.users.view')}}" class="btn bg-gradient-info" role="button" aria-pressed="true">Go
                                Back</a>
                        </div>

                        <form class='px-3' action="{{ route('qa.users.update', $user->id) }}" method="post">
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
                                    <span class="text-danger small mb-2">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Name</label>
                                        <input type="text" name="username" class="form-control"
                                            value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <span class="text-danger small mb-2">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <span class="text-danger small mb-2">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control"
                                            value="{{ $user->password }}">
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label class="ms-0">Department</label>
                                        <select class="form-control" name="department">
                                            @if ($user->department == 'TS')
                                                <option value="TS" selected>Technical Service</option>
                                                <option value="INS">Instrumentation</option>
                                                <option value="DE">Dry Eye</option>
                                                <option value="SC">Supply Chain</option>
                                                <option value="IOL">IOL</option>
                                            @elseif ($user->department == 'INS')
                                                <option value="TS">Technical Service</option>
                                                <option value="INS" selected>Instrumentation</option>
                                                <option value="DE">Dry Eye</option>
                                                <option value="SC">Supply Chain</option>
                                                <option value="IOL">IOL</option>
                                            @elseif ($user->department == 'De')
                                                <option value="TS">Technical Service</option>
                                                <option value="INS">Instrumentation</option>
                                                <option value="DE" selected>Dry Eye</option>
                                                <option value="SC">Supply Chain</option>
                                                <option value="IOL">IOL</option>
                                            @elseif ($user->department == 'SC')
                                                <option value="TS">Technical Service</option>
                                                <option value="INS">Instrumentation</option>
                                                <option value="DE">Dry Eye</option>
                                                <option value="SC" selected>Supply Chain</option>
                                                <option value="IOL">IOL</option>
                                            @elseif ($user->department == 'IOL')
                                                <option value="TS">Technical Service</option>
                                                <option value="INS">Instrumentation</option>
                                                <option value="DE">Dry Eye</option>
                                                <option value="SC">Supply Chain</option>
                                                <option value="IOL" selected>IOL</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 px-3">
                                    <div class="input-group input-group-static mb-4">
                                        <label class="ms-0">Role</label>
                                        <select class="form-control" name="role">
                                            @if($user->role == 'Director')
                                                <option value="Director" selected>Director</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Officer">Officer</option>
                                            @elseif($user->role == 'Manager')
                                                <option value="Director">Director</option>
                                                <option value="Manager" selected>Manager</option>
                                                <option value="Officer">Officer</option>
                                            @elseif($user->role == 'Officer')
                                                <option value="Director">Director</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Officer" selected>Officer</option>
                                                @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-3" >
                                    <button type="submit" class="btn bg-gradient-success">update</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
