@extends('admin.admin_master')
@section('admin')



<div class="page-body">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-6">
					<h3>Event</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item">Event</li>
						<li class="breadcrumb-item active">Add Event</li>
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

			<div class="col-sm-12 col-xl-12">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header pb-0">
								<h5>Add Event</h5>
							</div>
							<div class="card-body">

								@if (isset($evenement))

								<!-- Le formulaire est géré par la route "posts.update" -->
								<form method="POST" action="{{ route('evenement.update', $evenement) }}" enctype="multipart/form-data">

									<!-- <input type="hidden" name="_method" value="PUT"> -->
									@method('PUT')

									@else

									<!-- Le formulaire est géré par la route "posts.store" -->
									<form method="POST" action="{{ route('evenement.store') }}" enctype="multipart/form-data">

										@endif
										<!-- Le token CSRF -->
										@csrf

										<h6>Event Information</h6>
										<div class="mb-3">
											<label class="col-form-label">Adresse de l'Evenement</label>
											<input class="form-control" type="text" name="AdresseEvenement" value="{{ isset($evenement->AdresseEvenement) ? $evenement->AdresseEvenement : old('AdresseEvenement') }}" id="AdresseEvenement" placeholder="Adresse de Evenement">
											@error("AdresseEvenement")
											<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="form-label" for="exampleFormControlSelect9">Local</label>
											<select class="form-select digits" name="local_id">
												@foreach($locals as $local)
												<option value="{{$local->id}}">{{$local->NomCentre}}</option>
												@endforeach
											</select>
										</div>
										<div class="mb-3">
											<label class="col-form-label">Date de Debut</label>
											<input class="form-control" type="date" name="DateDebut" value="{{ isset($evenement->DateDebut) ? $evenement->DateDebut : old('DateDebut') }}" id="DateDebut" placeholder="Date de Debut">
											@error("DateDebut")
											<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
										<!-- <hr class="mt-4 mb-4">
										<h6>Responsable Information</h6> -->
										<div class="mb-3">
											<label class="col-form-label">Date de Fin</label>
											<input class="form-control" type="date" name="DateFin" value="{{ isset($evenement->DateFin) ? $evenement->DateFin : old('DateFin') }}" placeholder="Date de Fin">
											@error("DateFin")
											<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="col-form-label">Capacite</label>
											<input class="form-control" type="Number" name="Capacite" value="{{ isset($evenement->Capacite) ? $evenement->Capacite : old('Capacite') }}" id="Capacite" placeholder="Capacite">
											@error("Capacite")
											<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="col-form-label">Type des Animaux</label>
											<input class="form-control" type="text" name="TypeAnimaux" value="{{ isset($evenement->TypeAnimaux) ? $evenement->TypeAnimaux : old('TypeAnimaux') }}" id="TypeAnimaux" placeholder="TypeAnimaux">
											@error("TypeAnimaux")
											<div class="text-danger">{{ $message }}</div>
											@enderror
										</div>
										
										<div class="card-footer">
											<input class="btn btn-primary" type="submit" name="valider" value="Valider">
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