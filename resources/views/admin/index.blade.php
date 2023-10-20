@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Dashboard
@endsection
    

<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-4 border-info">
						<div class="card-body">
							<a href="{{ route('admin.praise.night.view') }}">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Upload Praise Night</p>
									<h4 class="my-1 text-info">Minutes</h4>
									<p class="mb-0 font-13">+2.5% from last week</p>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class='bx bxs-cart'></i>
								</div>
							</div>
							</a>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-danger">
					   <div class="card-body">
							<a href = "{{ route('admin.add.lyrics') }}">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Upload</p>
								   <h4 class="my-1 text-danger">Lyrics</h4>
								   <p class="mb-0 font-13">+5.4% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class='bx bxs-wallet'></i>
							   </div>
						   </div>
							</a>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-success">
					   <div class="card-body">
							<a href = "#">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Upload List of</p>
								   <h4 class="my-1 text-success">Songs</h4>
								   <p class="mb-0 font-13">-4.5% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
							   </div>
						   </div>
							</a>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-warning">
					   <div class="card-body">
							<a href = "#">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Upload Lead</p>
								   <h4 class="my-1 text-warning">Singers</h4>
								   <p class="mb-0 font-13">+8.4% from last week</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i class='bx bxs-group'></i>
							   </div>
						   </div>
							</a>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->

				<!--end row-->
					

					</div>

						
					 </div><!--end row-->

					<!--end row-->

			</div>

      @endsection