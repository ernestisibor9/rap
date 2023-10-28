@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Healing Streams View
@endsection
    

<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-4 border-info">
						<div class="card-body">
							<a href="{{ route('healing_stream_march') }}">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Healing Streams</p>
									<h4 class="my-1 text-info">MARCH</h4>
									<p class="mb-0 font-13"></p>
								</div>
								{{-- <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto">
								</div> --}}
							</div>
							</a>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-danger">
					   <div class="card-body">
							<a href = "{{ route('healing_stream_july') }}">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Healing Streams</p>
								   <h4 class="my-1 text-danger">JULY</h4>
								   <p class="mb-0 font-13"></p>
							   </div>
							   {{-- <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto">
							   </div> --}}
						   </div>
							</a>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-4 border-success">
					   <div class="card-body">
							<a href = "{{ route('healing_stream_october') }}">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Healing Streams</p>
								   <h4 class="my-1 text-success">OCTOBER</h4>
								   <p class="mb-0 font-13"></p>
							   </div>
							   {{-- <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
							   </div> --}}
						   </div>
							</a>
					   </div>
					</div>
				  </div>
          <div class="col">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Add Healing Streams</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-lg p-4">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Healing Streams</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                            <form action="{{ route('healing.stream.store') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                              
															<div class="row mb-3">
																<div class="col-sm-9">
																	<input type="hidden" name="minutes_directory" id="" class="form-control">
																</div>
															</div>
                              <div class="row mb-3">
                                <label for="input46" class="col-sm-3 col-form-label">Healing Streams</label>
                                <div class="col-sm-9">
                                  <select class="form-select @error('healing_stream')is-invalid @enderror" name="healing_stream_type" id="input46">
                                    <option selected>Select healing streams </option>
                                    <option value="march">March</option>
                                    <option value="july">July</option>
                                    <option value="october">October</option>
                                  </select>
                                </div>
																@error('healing_stream_type')
																	<span class="text-danger">{{ $message }}</span>
																@enderror
                              </div>
															<div class="row mb-3">
                                <label for="input46" class="col-sm-3 col-form-label">Select Year</label>
                                <div class="col-sm-9">
                                  <select class="form-select @error('year')is-invalid @enderror" name="year" id="input46">
                                    <option selected>Select Year </option>
                                    {{-- <option value="2030">2030</option>
                                    <option value="2029">2029</option>
                                    <option value="2028">2028</option>
																		<option value="2027">2027</option>
																		<option value="2026">2026</option> --}}
																		<option value="2025">2025</option>
																		<option value="2024">2024</option>
																		<option value="2023">2023</option>
																		<option value="2022">2022</option>
																		<option value="2021">2021</option>
																		<option value="2020">2020</option>
                                  </select>
                                </div>
																	@error('year')
																		<span class="text-danger">{{ $message }}</span>
																	@enderror
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
                                    <button type="submit" class="btn btn-primary px-4">Add Healing Streams</button>
                       
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
 
				</div><!--end row-->

				<!--end row-->
					<h6 class="mb-0 text-uppercase">Healing Streams View</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Minutes Directory</th>
										<th>Healing Streams</th>
										<th>Year</th>
										<th>Uploaded PDF</th>
										<th>Content</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($healingStream as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->minutes_directory }}</td>
										<td>{{ $item->healing_stream_type }}</td>
										<td>{{ $item->year }}</td>
										<td>{{ Str::substr($item->pdf_file, 0, 30) }}...</td>
										<td>{!! Str::substr($item->content, 0, 60) !!}
											<a href="{{ route('all.healing.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										{{-- <td>{{ $item->date_upload }}</td> --}}
										{{-- <td>{{ $item->date_upload->format('l M d Y') }}</td> --}}
										{{-- <td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td> --}}
										<td>
											<a href="{{ route('view.doc3', $item->id) }}" class="btn btn-success">View</a>
                      <a href="{{ route('edit.healing.stream', $item->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('delete.healing.stream', $item->id) }}" class="btn btn-danger" id="delete" title="Delete Data">Delete</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

					</div>

						
					 </div><!--end row-->

					<!--end row-->

			</div>

			<script>
				$(document).ready(function() {
					var table = $('#example').DataTable( {
						lengthChange: false,
						searching: false,
						// "bFilter": false,
						buttons: [ 'copy', 'excel', 'pdf', 'print']
					} );
				
					table.buttons().container()
						.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
				} );
			</script>
      @endsection