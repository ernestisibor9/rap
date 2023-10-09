@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Edit Christmas Service
@endsection

<div class="page-content">

<div class="card">
	
							<div class="card-body p-4">
								<h5 class="mb-4">Edit Christmas Service</h5>
								<form action="{{ route('christmas.service.update') }}" method="POST" enctype="multipart/form-data">
											@csrf
                      <input class="form-control" type="hidden" name="id" id="id" value="{{$christmasEdit->id}}">
									
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Year</label>
										<div class="col-sm-9">
											<select class="form-select" name="year" id="input46">
												@foreach($christmasView as $item)
												<option value="{{ $item->year }}" {{ $christmasEdit->year === $item->year ? 'selected' : '' }}>{{ $item->year }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
											<select class="form-select" name="title_id" id="input46">
												
												@foreach($christmasView  as $item)
												<option value="{{ $item->title_id }}" {{ $christmasEdit->title_id === $item->title_id ? 'selected' : '' }}>{{ $item->title->title }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Leader</label>
										<div class="col-sm-9">
											<select class="form-select" name="leader_id" id="input46">
												
												@foreach($christmasView  as $item)
												<option value="{{ $item->leader_id }}" {{ $christmasEdit->leader_id === $item->leader_id ? 'selected' : '' }}>{{ $item->leader->leader }}</option>
												@endforeach
											</select>
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