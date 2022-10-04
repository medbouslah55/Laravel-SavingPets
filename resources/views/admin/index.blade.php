@extends('admin.admin_master')
@section('admin')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Layout Light</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../ltr/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">Starter Kit</li>
                            <li class="breadcrumb-item">Color Version</li>
                            <li class="breadcrumb-item active">Layout Light</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <!-- Bookmark Start-->
                        <div class="bookmark">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                        data-placement="top" title="" data-original-title="Tables">
                                        <i data-feather="inbox"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                        data-placement="top" title="" data-original-title="Chat">
                                        <i data-feather="message-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                        data-placement="top" title="" data-original-title="Icons">
                                        <i data-feather="command"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-container="body" data-bs-toggle="popover"
                                        data-placement="top" title="" data-original-title="Learning">
                                        <i data-feather="layers"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="bookmark-search" data-feather="star"></i>
                                    </a>
                                    <form class="form-inline search-form">
                                        <div class="form-group form-control-search">
                                            <input type="text" placeholder="Search..">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row starter-main">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Kick start your project development !</h5>
                            <div class="setting-list">
                                <ul class="list-unstyled setting-option">
                                    <li>
                                        <div class="setting-primary">
                                            <i class="icon-settings"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="view-html fa fa-code font-primary"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-maximize full-card font-primary"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-minus minimize-card font-primary"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-refresh reload-card font-primary"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-error close-card font-primary"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Getting start with your project custom requirements using a ready template which is quite
                                difficult and time taking process, viho Admin provides useful features to kick start your
                                project development with no efforts !</p>
                            <ul>
                                <li>
                                    <p>viho Admin provides you getting start pages with different layouts, use the layout as
                                        per your custom requirements and just change the branding, menu & content. </p>
                                </li>
                                <li>
                                    <p>Every components in viho Admin are decoupled, it means use only components you
                                        actually need! Remove unnecessary and extra code easily just by excluding the path
                                        to specific SCSS, JS file. </p>
                                </li>
                                <li>
                                    <p>It use PUG as template engine to generate pages and whole template quickly using node
                                        js. Save your time for doing the common changes for each page (i.e menu, branding
                                        and footer) by generating template with pug. </p>
                                </li>
                            </ul>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                    title="Copy">
                                    <i class="icofont icofont-copy-alt"></i>
                                </button>
                                <pre>
                                    <code class="language-html" id="example-head">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem incidunt voluptas error harum facilis. Culpa neque architecto fugiat odio harum.</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
