@extends('admin.admin_master')
@section('admin')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Edit User</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"></a>Home</li>
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="job-search">
                            <div class="card-body pb-0">
                                <h5 class="f-w-700 mb-0"><a href="javascript:void(0)">Edit User:
                                        {{ $editData->name }} </a>
                                </h5>
                                <div class="job-description">
                                    <h6 class="mb-0">Edit Personal Informations</h6>
                                    <form class="form theme-form" method="POST"
                                        action="{{ route('user.update', $editData->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="form-label" for="exampleFormControlInput1">Full
                                                        Name:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="exampleFormControlInput1" name="name"
                                                        type="text" placeholder="Enter your full name" required=""
                                                        value="{{ $editData->name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="form-label" for="exampleFormControlInput3">Email:<span
                                                            class="font-danger">*</span></label>
                                                    <input class="form-control" id="exampleFormControlInput3" name="email"
                                                        type="email" placeholder="Enter email" required=""
                                                        value="{{ $editData->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="form-group">
                                                <label class="form-label">Role:<span class="font-danger">*</span></label>
                                                <select name="usertype" required="" class="form-control">
                                                    <option value="" selected="" disabled="">--- Select Role
                                                        ---
                                                    </option>
                                                    <option value="Admin"
                                                        {{ $editData->usertype == 'Admin' ? 'selected' : '' }}>Admin
                                                    </option>
                                                    <option value="User"
                                                        {{ $editData->usertype == 'User' ? 'selected' : '' }}>User
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
