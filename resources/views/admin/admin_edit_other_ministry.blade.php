@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Edit - Other Ministry Programs
@endsection

<div class="page-content">

<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Edit Other Ministry Programs</h5>
								<form action="{{ route('other.ministry.update') }}" method="POST" enctype="multipart/form-data">
											@csrf
                      <input class="form-control" type="hidden" name="id" id="id" value="{{$otherMinistryEdit->id}}">
									{{-- <div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">otherMinistry Night</label>
										<div class="col-sm-9">
											<input type="text" name="otherMinistry" class="form-control" id="" value="{{ $otherMinistryEdit->otherMinistry }}">
										</div>
									</div> --}}
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
											<input type="text" name="title" class="form-control" id="" value="{{ $otherMinistryEdit->title }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input42" class="col-sm-3 col-form-label">Content</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<textarea name="content">{!! $otherMinistryEdit->content !!}</textarea>
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
                        <object data="{{ url('upload/pdf_doc/'.$otherMinistryEdit->pdf_file) }}" class="mt-4" type="application/pdf" width="300px" height="280px">
            							{{-- <p>Unable to display PDF file. <a href="{{ url('upload/pdf_doc/'.$otherMinistryEdit->pdf_file) }}">Download</a> instead.</p> --}}
         								 </object>
											</div>
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" class="btn btn-primary px-4">Update</button>
											</div>
										</div>
									</div>
								</div>
								</form>
							</div>
            </div>

@endsection