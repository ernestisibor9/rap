@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Christmas Service View
@endsection
    

<div class="page-content">
				<div class="row d-flex justify-content-between">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>

          <div class="col">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal">Add Christmas Service</button>
										<!-- Modal -->
						<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-xl p-2">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Add Christmas Eve Service</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body p-5">
                  <form action="{{ route('christmas.service.store') }}" method="POST" enctype="multipart/form-data">
										@csrf
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">

											<input type="text" name="title" id="" class="form-control @error('title')is-invalid @enderror" placeholder="Title of song written by">
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
										<label for="input46" class="col-sm-3 col-form-label" hidden>Christmas Eve</label>
										<div class="col-sm-9">
											<input type="hidden" name="christmas" id="" class="form-control" placeholder="">										
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
												<button type="submit" class="btn btn-primary px-4">Add Christmas Service</button>
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
 
				</div><!--end row-->

				<!--end row-->
					<!--Table for Praise Night -->
					<h6 class="mb-0 text-uppercase">Christmas Eve Service View</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Christmas</th>
										<th>Uploaded PDF Doc</th>
										<th>Content</th>
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($christmasData as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->christmas }}</td>
										<td>{{ Str::substr($item->pdf_file, 0, 30) }}...</td>
										<td>{{ Str::substr($item->content, 0, 60) }}
											<a href="{{ route('all.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										{{-- <td>{{ $item->date_upload }}</td> --}}
										{{-- <td>{{ $item->date_upload->format('l M d Y') }}</td> --}}
										<td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td>
										<td>
											<a href="{{ route('view.doc2', $item->id) }}" class="btn btn-success">View</a>
                      <a href="{{ route('christmas.service.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('delete.christmas.service', $item->id) }}" class="btn btn-danger" id="delete" title="Delete Data">Delete</a>
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

					<!--end row-->

			</div>

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