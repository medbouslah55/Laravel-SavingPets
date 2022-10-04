@extends('admin.admin_master')
@section('admin')



<div class="page-body">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-6">
					<h3>Default Forms</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item">Forms</li>
						<li class="breadcrumb-item">Form Widgets</li>
						<li class="breadcrumb-item active">Default Forms</li>
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
								<h5>Add Local</h5>
							</div>
							<div class="card-body">

								@if (isset($local))

								<!-- Le formulaire est géré par la route "posts.update" -->
								<form method="POST" action="{{ route('local.update', $local) }}" enctype="multipart/form-data">

									<!-- <input type="hidden" name="_method" value="PUT"> -->
									@method('PUT')

									@else

									<!-- Le formulaire est géré par la route "posts.store" -->
									<form method="POST" action="{{ route('local.store') }}" enctype="multipart/form-data">

										@endif
										<!-- Le token CSRF -->
										@csrf

										<h6>Local Information</h6>
										<div class="mb-3">
											<label class="col-form-label">Nom du centre</label>
											<input class="form-control" type="text" name="NomCentre" value="{{ isset($local->NomCentre) ? $local->NomCentre : old('NomCentre') }}" id="NomCentre" placeholder="Nom du Centre">
											@error("NomCentre")
											<div>{{ $message }}</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="col-form-label">Adresse du centre</label>
											<input class="form-control" type="text" name="Adresse" value="{{ isset($local->Adresse) ? $local->Adresse : old('Adresse') }}" id="NomCentre" placeholder="Adresse du Centre">
											@error("Adresse")
											<div>{{ $message }}</div>
											@enderror
										</div>
										<hr class="mt-4 mb-4">
										<h6>Responsable Information</h6>
										<div class="mb-3">
											<label class="col-form-label">Nom du Responsable</label>
											<input class="form-control" type="text" name="NomResponsable" value="{{ isset($local->NomResponsable) ? $local->NomResponsable : old('NomResponsable') }}" placeholder="Nom du Responsable">
											@error("NomResponsable")
											<div>{{ $message }}</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="col-form-label">Telephone du centre</label>
											<input class="form-control" type="Number" name="Telephone" value="{{ isset($local->Telephone) ? $local->Telephone : old('Telephone') }}" id="Telephone" placeholder="Telephone du centre">
											@error("Telephone")
											<div>{{ $message }}</div>
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