@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Seach Content
@endsection

<div class="page-content">
  <div class="container">
		<div class="row">
			<div class="card p-3">
				<h3 class="text-center pt-2">Search Directory</h3>
				<div class="card-body">
					<form action="{{ route('search.directory.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
		<div class="row mb-3">
			<label for="input46" class="col-sm-3 col-form-label">Title</label>
			<div class="col-sm-9">

				<input type="text" name="title" id="" class="form-control @error('title')is-invalid @enderror" placeholder="Title">
				@error('title')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="row mb-3">
			<label for="input46" class="col-sm-3 col-form-label">Date</label>
			<div class="col-sm-9">
				<input type="date" name="date_upload" id="" class="form-control @error('date_upload')is-invalid @enderror" placeholder="">
				@error('date_upload')
					<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="row mb-3">
			<label for="input42" class="col-sm-3 col-form-label">Upload PDF</label>
			<div class="col-sm-9">
				<div class="position-relative input-icon">
					<input type="file" class="form-control @error('pdf_file')is-invalid @enderror" id="input42" name="pdf_file">
					<span class="position-absolute top-50 translate-middle-y"><i class='bx bx-paper-clip'></i></span>
					@error('pdf_file')
					<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<label for="input42" class="col-sm-3 col-form-label">Content</label>
			<div class="col-sm-9">
				<div class="position-relative input-icon">
					<textarea name="content" class="form-control @error('content')is-invalid @enderror"></textarea>
					<span class="position-absolute top-50 translate-middle-y"><i class='bx bx-paper-clip'></i></span>
					@error('content')
					<span class="text-danger">{{ $message }}</span>
					@enderror
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
		</div>
	</div>
</div>


@endsection