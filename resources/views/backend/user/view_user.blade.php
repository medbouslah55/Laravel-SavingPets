@extends('admin.admin_master')
@section('admin')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Show All Users</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Apps </li>
                            <li class="breadcrumb-item active">Contacts</li>
                        </ol>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="email-wrap bookmark-wrap">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="email-right-aside bookmark-tabcontent contacts-tabs">
                            <div class="card email-body radius-left">
                                <div class="ps-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                                            aria-labelledby="pills-personal-tab">
                                            <div class="card mb-0">
                                                <div class="card-header d-flex">
                                                    <h5>({{ $allData->count() }}) Users</h5>
                                                    <button class="btn btn-primary f-14 pull-right mt-0" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                            class="me-2" data-feather="users"></i> New User</button>
                                                    <!-- Add user modal -->
                                                    <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add
                                                                        User</h5>
                                                                    <button class="btn-close" type="button"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="form-bookmark needs-validation"
                                                                        id="bookmark-form" novalidate="" method="POST"
                                                                        action="{{ route('user.store') }}">
                                                                        @csrf
                                                                        <div class="row g-2">
                                                                            <div class="mb-3 col-md-12 mt-0">
                                                                                <label for="con-name">Name<span
                                                                                        class="text-danger">*</span></label>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <input class="form-control"
                                                                                            id="con-name" type="text"
                                                                                            name="name" required=""
                                                                                            placeholder="Name"
                                                                                            autocomplete="off">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3 col-md-12 mt-0">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <label for="con-mail">Email
                                                                                            Address<span
                                                                                                class="text-danger">*</span></label>
                                                                                        <input class="form-control"
                                                                                            id="con-mail" type="email"
                                                                                            placeholder="Email Address"
                                                                                            name="email" required=""
                                                                                            autocomplete="off">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label for="con-mail">Password<span
                                                                                                class="text-danger">*</span></label>
                                                                                        <input class="form-control"
                                                                                            id="con-name" type="password"
                                                                                            name="password" required=""
                                                                                            placeholder="Password"
                                                                                            autocomplete="off">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3 col-md-12 my-0">
                                                                                <label for="con-phone">Phone<span
                                                                                        class="text-danger">*</span></label>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <input class="form-control"
                                                                                            id="con-phone" type="number"
                                                                                            required=""
                                                                                            autocomplete="off">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <select name="usertype"
                                                                                            id="role" required=""
                                                                                            class="form-control">
                                                                                            <option value=""
                                                                                                selected=""
                                                                                                disabled="">--- Select
                                                                                                Role ---
                                                                                            </option>
                                                                                            <option value="Admin">Admin
                                                                                            </option>
                                                                                            <option value="User">User
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <input id="index_var" type="hidden"
                                                                            value="5">
                                                                        <button class="btn btn-secondary" type="submit"
                                                                            {{-- onclick="submitContact()" --}}>Save</button>
                                                                        <button class="btn btn-primary" type="button"
                                                                            data-bs-dismiss="modal">Cancel</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end add user modal -->
                                                </div>
                                                <div class="card-body p-0">
                                                    <div class="row list-persons" id="addcon">
                                                        <div class="col-xl-5">
                                                            <div class="nav flex-column nav-pills" id="v-pills-tab"
                                                                role="tablist" aria-orientation="vertical">
                                                                @foreach ($allData as $key => $user)
                                                                    <a class="contact-tab-{{ $key }} nav-link @if ($key == 0) active @endif"
                                                                        id="v-pills-user-tab" data-bs-toggle="pill"
                                                                        onclick="activeDiv({{ $key }})"
                                                                        href="#v-pills-user-{{ $key }}"
                                                                        role="tab" aria-controls="v-pills-user"
                                                                        aria-selected="true">
                                                                        <div class="media"><img
                                                                                class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                                                                src="../assets/images/user/2.png"
                                                                                alt="">
                                                                            <div class="media-body">
                                                                                <h6>
                                                                                    <span
                                                                                        class="first_name_0">{{ $user->name }}
                                                                                    </span>
                                                                                </h6>
                                                                                <p class="email_add_0">{{ $user->email }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7">
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                @foreach ($allData as $key => $user)
                                                                    <div class="tab-pane contact-tab-{{ $key }} tab-content-child fade @if ($key == 0) show active @endif"
                                                                        id="v-pills-user-{{ $key }}"
                                                                        role="tabpanel"
                                                                        aria-labelledby="v-pills-user-tab">
                                                                        <div class="profile-mail">
                                                                            <div class="media"><img
                                                                                    class="img-100 img-fluid m-r-20 rounded-circle update_img_{{ $key }}"
                                                                                    src="../assets/images/user/2.png"
                                                                                    alt="">
                                                                                <input class="updateimg" type="file"
                                                                                    name="img"
                                                                                    onchange="readURL(this,{{ $key }})">
                                                                                <div class="media-body mt-0">
                                                                                    <h5> <span
                                                                                            class="first_name_{{ $key }}">{{ $user->name }}
                                                                                        </span>
                                                                                    </h5>
                                                                                    <p
                                                                                        class="email_add_{{ $key }}">
                                                                                        {{ $user->email }}</p>
                                                                                    <ul>
                                                                                        <li><a href="{{ route('user.edit', $user->id) }}"
                                                                                                onclick="editContact({{ $key }})">Edit</a>
                                                                                        </li>
                                                                                        <li><a href="{{ route('user.delete', $user->id) }}"
                                                                                                id="delete_user"
                                                                                                {{-- onclick="deleteContact({{ $key }})" --}}>Delete</a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"
                                                                                                onclick="history({{ $key }})">History</a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"
                                                                                                onclick="printContact({{ $key }})"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#printModal">Print</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="email-general">
                                                                                <div class="container">
                                                                                    <h6 class="mb-3">General</h6>
                                                                                    <ul>
                                                                                        <li>Role <span
                                                                                                class="font-primary">{{ $user->usertype }}</span>
                                                                                        </li>
                                                                                        <li>Name <span
                                                                                                class="font-primary first_name_2">{{ $user->name }}</span>
                                                                                        </li>
                                                                                        <li>Gender <span
                                                                                                class="font-primary">Male</span>
                                                                                        </li>

                                                                                        <li>Profession <span
                                                                                                class="font-primary">
                                                                                                Doctor </span>
                                                                                        </li>
                                                                                        <li>Email Address <span
                                                                                                class="font-primary email_add_2">{{ $user->email }}</span>
                                                                                        </li>
                                                                                        <li>Birthday<span
                                                                                                class="font-primary">
                                                                                                <span
                                                                                                    class="birth_day_2">20</span><span
                                                                                                    class="birth_month_2 ms-1">Jul</span><span
                                                                                                    class="birth_year_2 ms-1">1993</span></span>
                                                                                        </li>
                                                                                        <li>City<span
                                                                                                class="font-primary city_2">Mumbai</span>
                                                                                        </li>
                                                                                        <li>Mobile No<span
                                                                                                class="font-primary mobile_num_2">+216
                                                                                                94 026 575</span>
                                                                                        </li>
                                                                                        <li>Joined <span
                                                                                                class="font-primary">{{ $user->created_at->diffForHumans() }}</span>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="right-history">
                                            <div class="modal-header p-l-20 p-r-20">
                                                <h6 class="modal-title w-100">Contact History<span class="pull-right"><a
                                                            class="closehistory" href="javascript:void(0)"><i
                                                                class="icofont icofont-close"></i></a></span></h6>
                                            </div>
                                            <div class="history-details">
                                                <div class="text-center"><i class="icofont icofont-ui-edit"></i>
                                                    <p>Contact has not been modified yet.</p>
                                                </div>
                                                <div class="media"><i class="icofont icofont-star me-3"></i>
                                                    <div class="media-body mt-0">
                                                        <h6 class="mt-0">Contact Created</h6>
                                                        <p class="mb-0">Contact is created via mail</p><span
                                                            class="f-12">Sep 10, 2019 4:00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade modal-bookmark" id="printModal" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Print preview</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body list-persons">
                                                        <div class="profile-mail pt-0" id="DivIdToPrint">
                                                            <div class="media"><img
                                                                    class="img-100 img-fluid m-r-20 rounded-circle"
                                                                    id="updateimg" src="../assets/images/user/2.png"
                                                                    alt="">
                                                                <div class="media-body mt-0">
                                                                    <h5><span id="printname">Bucky </span><span
                                                                            id="printlast">Barnes</span></h5>
                                                                    <p id="printmail">barnes@gmail.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="email-general">
                                                                <h6>General</h6>
                                                                <p>Email Address: <span class="font-primary"
                                                                        id="mailadd">barnes@gmail.com </span></p>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-secondary" id="btnPrint" type="button"
                                                            onclick="printDiv();">Print</button>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
