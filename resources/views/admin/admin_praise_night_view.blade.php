@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Praise Night View
@endsection
    

<div class="page-content bg-white">

				<!---Modal --->  
					<div class="container">
						<div class="row">
							<div class="col-4">
								<div class="col mb-5">
						<!-- Button trigger modal -->
										<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal">Add Praise Night</button>
										<!-- Modal -->
						<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-xl p-2">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Add Praise Night</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body p-5">
                  <form action="{{ route('praise.night.store') }}" method="POST" enctype="multipart/form-data">
										@csrf

									<div class="row mb-3">
										<div class="col-sm-9">
											<input type="hidden" name="minutes_directory" id="" class="form-control">
										</div>
									</div>

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
										<label for="input46" class="col-sm-3 col-form-label">Praise Night</label>
										<div class="col-sm-9">
											<select class="form-select @error('praise_night_type')is-invalid @enderror" name="praise_night_type" id="input46">
												<option selected>Select praise night</option>
												<option value="praise_night_1">Praise Night 1</option>
												<option value="praise_night_2">Praise Night 2</option>
												<option value="praise_night_3">Praise Night 3</option>
												<option value="praise_night_4">Praise Night 4</option>
												<option value="praise_night_5">Praise Night 5</option>
												<option value="praise_night_6">Praise Night 6</option>
												<option value="praise_night_7">Praise Night 7</option>
												<option value="praise_night_8">Praise Night 8</option>
												<option value="praise_night_9">Praise Night 9</option>
												<option value="praise_night_10">Praise Night 10</option>
												<option value="praise_night_11">Praise Night 11</option>
												<option value="praise_night_12">Praise Night 12</option>
												<option value="praise_night_13">Praise Night 13</option>
												<option value="praise_night_14">Praise Night 14</option>
												<option value="praise_night_15">Praise Night 15</option>
												<option value="praise_night_16">Praise Night 16</option>
												<option value="praise_night_17">Praise Night 17</option>
												<option value="praise_night_18">Praise Night 18</option>
												<option value="praise_night_19">Praise Night 19</option>
												<option value="praise_night_20">Praise Night 20</option>
												<option value="praise_night_3">Praise Night 21</option>
												<option value="praise_night_1">Praise Night 22</option>
												<option value="praise_night_2">Praise Night 23</option>
												<option value="praise_night_3">Praise Night 24</option>
												<option value="praise_night_1">Praise Night 25</option>
												<option value="praise_night_2">Praise Night 26</option>
											  </select>
												@error('praise_night_type')
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
												<button type="submit" class="btn btn-primary px-4">Add Praise Night</button>
											</div>
										</div>
									</div>
								</form>
									</div>
									<div class="modal-footer">
										
									</div>
								</div>
								</div>
							</div>
					</div>
							</div>
							<div class="col-8">
							<select onchange="window.location.href=this.value;" class="form-select" name="praise_night" id="input46">
								<option selected>Select Praise Night</option>
								<option value="{{ route('praise_night_one') }}">Praise Night 1</option>
								<option value="{{ route('praise_night_two') }}">Praise Night 2</option>
								<option value="{{ route('praise_night_three') }}">Praise Night 3</option>
								<option value="{{ route('praise_night_four') }}">Praise Night 4</option>
								<option value="{{ route('praise_night_five') }}">Praise Night 5</option>
								<option value="{{ route('praise_night_six') }}">Praise Night 6</option>
								<option value="{{ route('praise_night_seven') }}">Praise Night 7</option>
								<option value="{{ route('praise_night_eight') }}">Praise Night 8</option>
								<option value="{{ route('praise_night_nine') }}">Praise Night 9</option>
								<option value="{{ route('praise_night_ten') }}">Praise Night 10</option>
								<option value="{{ route('praise_night_eleven') }}">Praise Night 11</option>
								<option value="{{ route('praise_night_twelve') }}">Praise Night 12</option>
								<option value="{{ route('praise_night_thirteen') }}">Praise Night 13</option>
								<option value="{{ route('praise_night_fourteen') }}">Praise Night 14</option>
								<option value="{{ route('praise_night_fifteen') }}">Praise Night 15</option>
								<option value="{{ route('praise_night_sixteen') }}">Praise Night 16</option>
								<option value="{{ route('praise_night_seventeen') }}">Praise Night 17</option>
								<option value="{{ route('praise_night_eighteen') }}">Praise Night 18</option>
								<option value="{{ route('praise_night_nineteen') }}">Praise Night 19</option>
								<option value="{{ route('praise_night_twenty') }}">Praise Night 20</option>		
							</select>
						</div>
						</div>
					</div>

				<!--End Modal -->

				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 gy-4">
						{{-- <div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-primary">Praise Night 1</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_two') }}" class="btn btn-success">Praise Night 2</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_three') }}" class="btn btn-secondary">Praise Night 3</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_four') }}" class="btn btn-danger">Praise Night 4</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_five') }}" class="btn btn-primary">Praise Night 5</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_six') }}" class="btn btn-success">Praise Night 6</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-secondary">Praise Night 7</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-danger">Praise Night 8</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-primary">Praise Night 9</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-success">Praise Night 10</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-secondary">Praise Night 11</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-danger">Praise Night 12</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-primary">Praise Night 13</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-success">Praise Night 14</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-secondary">Praise Night 15</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-danger">Praise Night 16</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-primary">Praise Night 17</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-success">Praise Night 18</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-secondary">Praise Night 19</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-danger">Praise Night 20</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-primary">Praise Night 21</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-success">Praise Night 22</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-secondary">Praise Night 23</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-danger">Praise Night 24</a>
						</div> --}}
						{{-- <div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-primary">Praise Night 25</a>
						</div>
						<div class="col">
							<a href="{{ route('praise_night_one') }}" class="btn btn-success">Praise Night 26</a>
						</div> --}}				
				 
				</div>


				<!--Table for Praise Night -->
					<h6 class="mb-0 text-uppercase">Praise Night View</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Minutes Directory</th>
										<th>Praise Nights</th>
										<th>Uploaded PDF Doc</th>
										<th>Content</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($praiseNightView as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->minutes_directory }}</td>
										<td>{{ $item->praise_night_type }}</td>
										<td>{{ Str::substr($item->pdf_file, 0, 30) }}...</td>
										<td>{!! Str::substr($item->content, 0, 60) !!}
											<a href="{{ route('all.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										{{-- <td>{{ $item->date_upload }}</td> --}}
										{{-- <td>{{ $item->date_upload->format('l M d Y') }}</td> --}}
										{{-- <td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td> --}}
										<td>
											<a href="{{ route('view.doc', $item->id) }}" class="btn btn-success">View</a>
                      <a href="{{ route('edit.praise.night', $item->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('delete.praise.night', $item->id) }}" class="btn btn-danger" id="delete" title="Delete Data">Delete</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

					</div>
				<!-- End of Table --->

					<script>
						$(document).ready(function() {
							var table = $('#example').DataTable( {
								lengthChange: false,
								// searching: false,
								"bFilter": false,
								buttons: [ 'copy', 'excel', 'pdf', 'print']
							} );
						
							table.buttons().container()
								.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
						} );
					</script>
      @endsection