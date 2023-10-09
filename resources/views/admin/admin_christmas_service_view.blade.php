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
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Add Christmas Service</button>
										<!-- Modal -->
										<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Modal title</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                            <form action="{{ route('christmas.service.store') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                      
                              <div class="row mb-3">
                                <label for="input46" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                  <input type="date" name="date_upload" id="" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="input42" class="col-sm-3 col-form-label">Upload PDF</label>
                                <div class="col-sm-9">
                                  <div class="position-relative input-icon">
                                    <input type="file" class="form-control" id="input42" name="pdf_file">
                                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-paper-clip'></i></span>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="input42" class="col-sm-3 col-form-label">Add Message</label>
                                <div class="col-sm-9">
                                  <div class="position-relative input-icon">
                                    <textarea>Hello, World!</textarea>
                                    <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-paper-clip'></i></span>
                                  </div>
                                </div>
                              </div>
                              {{-- <div class="row mb-3">
                                <label for="input46" class="col-sm-3 col-form-label">Year</label>
                                <div class="col-sm-9">
                                  <select class="form-select" name="year" id="input46">
                                    <option selected>Select year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    </select>
                                </div>
                              </div> --}}
                              <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                  <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                    <button type="button" class="btn btn-light px-4">Reset</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
													</div>
												</div>
											</div>
										</div>
									</div>
 
				</div><!--end row-->

				<!--end row-->
					<h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Uploaded PDF</th>
										<th>Created At</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                  @foreach($christmasData as $key=>$item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->pdf_file }}</td>							
										<td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td>
                    <td>
                      <a href="{{ route('christmas.service.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('christmas.service.delete', $item->id) }}" class="btn btn-danger" id="delete">Delete</a>
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

      @endsection