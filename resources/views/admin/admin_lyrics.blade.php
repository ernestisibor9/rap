@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Lyrics
@endsection

<div class="page-content">

<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add Lyrics</h5>
								<form action="{{ route('admin.lyrics.store') }}" method="POST" enctype="multipart/form-data">
											@csrf
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
											<input type="text" name="title" class="form-control" id="" placeholder="Title of song written by ">
										</div>
									</div>
                  <div class="row mb-3">
										<label for="input47" class="col-sm-3 col-form-label">Lyrics</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="lyrics" id="input47" rows="3" placeholder="Song Lyrics"></textarea>
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