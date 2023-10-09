@extends('admin.admin_dashboard')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@section('admin')

@section('title')
	RAP - Leader
@endsection

<div class="page-content">

<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add Leader</h5>
								<form action="{{ route('admin.leader.store') }}" method="POST" enctype="multipart/form-data">
											@csrf
									<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Enter Leader Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="leader" id="input35" placeholder="Enter Leader Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Upload Photo</label>
										<div class="col-sm-9">
											<input type="file" id="image" name="photo" class="form-control" name="leader" id="input35" placeholder="Enter Leader Name">
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