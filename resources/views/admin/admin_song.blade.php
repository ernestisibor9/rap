@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Songs
@endsection

<div class="page-content">

<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add Song</h5>
								<form action="{{ route('admin.song.store') }}" method="POST" enctype="multipart/form-data">
											@csrf
									<div class="row mb-3">
										<label for="input42" class="col-sm-3 col-form-label">Title of Song</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<input type="text" name="title" class="form-control" id="input42" placeholder="Title of Song written by">
												<span class="position-absolute top-50 translate-middle-y"><i class='bx bx-book-add'></i></span>
											</div>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" class="btn btn-primary px-4">Submit</button>
												<button type="button" class="btn btn-light px-4">Reset</button>
											</div>
										</div>
									</div>
								</div>
								</form>
							</div>
            </div>

@endsection