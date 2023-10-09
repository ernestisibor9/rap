@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Edit Leader
@endsection

<div class="page-content">

<div class="card">
	
							<div class="card-body p-4">
								<h5 class="mb-4">Edit Lyrics</h5>
								<form action="{{ route('leader.update') }}" method="POST" enctype="multipart/form-data">
											@csrf
                      <input class="form-control" type="hidden" name="id" id="id" value="{{$leaderEdit->id}}">
									
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Leader</label>
										<div class="col-sm-9">
                      <input type="text" name="leader" class="form-control" id=""  value="{{ $leaderEdit->leader }}">
										</div>
									</div>
                  <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Photo</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="file" name="photo" id="image2" class="form-control" />
                        </div>
                      </div>
                  <div class="row mb-3">
										<label for="input47" class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<img id="showImage2" src="{{ asset($leaderEdit->photo) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="90">
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

            <script>
        $(document).ready(function(){
          $('#image2').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
              $('#showImage2').attr('src',e.target.result)
            }
            reader.readAsDataURL(e.target.files['0']);
          })
        })
      </script>

@endsection