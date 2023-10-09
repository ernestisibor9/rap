@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Edit Healing Stream
@endsection

<div class="page-content">

<div class="card">
	
							<div class="card-body p-4">
								<h5 class="mb-4">Edit Healing Stream</h5>
								<form action="{{ route('healing.stream.update') }}" method="POST" enctype="multipart/form-data">
											@csrf
                      <input class="form-control" type="hidden" name="id" id="id" value="{{$healingStreamEdit->id}}">
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Healing Stream</label>
										<div class="col-sm-9">
											<select class="form-select" name="healing_stream" id="input46">
												@foreach($healingStreamData as $item)
												<option value="{{ $item->healing_stream }}" {{ $healingStreamEdit->healing_stream === $item->healing_stream ? 'selected' : '' }}>{{ $item->healing_stream }}</option>
												@endforeach
											</select>
										</div>
			
									</div>
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Date</label>
										<div class="col-sm-9">
											<input type="date" name="date_upload" id="" class="form-control" placeholder="">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
											<input type="text" name="title" class="form-control" id="" value="{{ $healingStreamEdit->title }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input42" class="col-sm-3 col-form-label">Content</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<textarea name="content" class="form-control">{{ $healingStreamEdit->content }}</textarea>
												<span class="position-absolute top-50 translate-middle-y"><i class='bx bx-paper-clip'></i></span>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input42" class="col-sm-3 col-form-label">Upload PDF</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<input type="file" class="form-control" id="input42" name="pdf_file">
												<span class="position-absolute top-50 translate-middle-y"><i class='bx bx-paper-clip'></i></span>
                        <object data="{{ url('upload/pdf_doc/'.$healingStreamEdit->pdf_file) }}" class="mt-4" type="application/pdf" width="300px" height="280px">
            							{{-- <p>Unable to display PDF file. <a href="{{ url('upload/pdf_doc/'.$praiseEdit->pdf_file) }}">Download</a> instead.</p> --}}
         								 </object>
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