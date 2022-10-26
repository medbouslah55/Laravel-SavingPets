@extends('admin.admin_master')
@section('admin')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3> All Events</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Gestion des Evenements</li>
                        <li class="breadcrumb-item">All Events</li>
                        <!-- <li class="breadcrumb-item active">Basic Tables</li> -->
                    </ol>
                </div>
                <div class="col-sm-6">
                    <!-- Bookmark Start-->
                    <div class="bookmark">
                        <ul>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                            <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <h5>Event</h5>

                        <form method="GET" action="../searchEvenement">
                            @csrf
                            <div class="search-box">
                                <input type="text" class="form-control search" name="search" placeholder="Search for...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Adresse de l'Evenement</th>
                                    <th scope="col">Date de Debut</th>
                                    <th scope="col">Date de Fin</th>
                                    <th scope="col">Capacite</th>
                                    <th scope="col">TypeAnimaux</th>
                                    <th scope="col">Centre</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- On parcourt la collection de Post -->
                                @foreach ($evenements as $evenement)
                                <tr>
                                    <td>{{ $evenement->AdresseEvenement }}</td>
                                    <td>{{ $evenement->DateDebut }}</td>
                                    <td>{{ $evenement->DateFin }}</td>
                                    <td>{{ $evenement->Capacite }}</td>
                                    <td>{{ $evenement->TypeAnimaux }}</td>
                                    @php
                                    $local = App\Http\Controllers\EvenementController::eventLocal($evenement->local_id);
                                    @endphp
                                    <td>{{$local }}</td>
                                    <td> <a class="btn btn-warning" href="{{ route('evenement.edit', $evenement) }}" title="Modifier le centre">Update</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('evenement.destroy', $evenement) }}">
                                            <!-- CSRF token -->
                                            @csrf
                                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                            @method("DELETE")
                                            <input class="btn btn-danger" type="submit" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center ">
                            {!! $evenements->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection