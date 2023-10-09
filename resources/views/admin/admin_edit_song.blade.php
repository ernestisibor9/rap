@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Edit Song
@endsection

<div class="page-content">

<div class="card">
	
							<div class="card-body p-4">
								<h5 class="mb-4">Edit Christmas Service</h5>
								<form action="{{ route('song.update') }}" method="POST" enctype="multipart/form-data">
											@csrf
                      <input class="form-control" type="hidden" name="id" id="id" value="{{$songEdit->id}}">
									
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
                      <input type="text" name="title" class="form-control" id="" value="{{ $songEdit->title }}">
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