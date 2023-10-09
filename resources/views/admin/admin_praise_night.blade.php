@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Praise Night 
@endsection

<div class="page-content">

<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Upload Praise Night</h5>
								<form action="{{ route('praise.night.store') }}" method="POST" enctype="multipart/form-data">
											@csrf
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
											<select class="form-select" name="title_id" id="input46">
												<option selected>Select song title</option>
												@foreach($titleData as $item)
												<option value="{{ $item->id }}">{{ $item->title }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Praise Night</label>
										<div class="col-sm-9">
											<select class="form-select" name="praise_night" id="input46">
												<option selected>Select praise night</option>
												<option value="praise_night_1">Praise Night 1</option>
												<option value="praise_night_2">Praise Night 2</option>
												<option value="praise_night_3">Praise Night 3</option>
												<option value="praise_night_4">Praise Night 4</option>
												<option value="praise_night_2">Praise Night 2</option>
												<option value="praise_night_3">Praise Night 3</option>
												<option value="praise_night_1">Praise Night 1</option>
												<option value="praise_night_2">Praise Night 2</option>
												<option value="praise_night_3">Praise Night 3</option>
												<option value="praise_night_1">Praise Night 1</option>
												<option value="praise_night_2">Praise Night 2</option>
												<option value="praise_night_3">Praise Night 3</option>
												<option value="praise_night_1">Praise Night 1</option>
												<option value="praise_night_2">Praise Night 2</option>
												<option value="praise_night_3">Praise Night 3</option>
												<option value="praise_night_1">Praise Night 1</option>
												<option value="praise_night_2">Praise Night 2</option>
												<option value="praise_night_3">Praise Night 3</option>
											  </select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input42" class="col-sm-3 col-form-label">Upload PDF</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<input type="file" class="form-control" id="input42" name="pdf_file">
												<span class="position-absolute top-50 translate-middle-y"><i class='bx bx-paper-clip'></i></span>
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
								</form>
							</div>
            </div>

@endsection