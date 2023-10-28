@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Edit - Praise Night
@endsection

<div class="page-content">

<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Edit Praise Night</h5>
								<form action="{{ route('praise.night.update') }}" method="POST" enctype="multipart/form-data">
											@csrf
                      <input class="form-control" type="hidden" name="id" id="id" value="{{$praiseEdit->id}}">
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Praise Night</label>
										<div class="col-sm-9">
											<select class="form-select" name="praise_night_type" id="input46">
												
												@foreach($praiseNightView as $praise)
												<option value="{{ $praise->praise_night_type }}" {{ $praiseEdit->praise_night_type === $praise->praise_night_type ? 'selected' : '' }}>{{ $praise->praise_night_type }}</option>
												@endforeach
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
										</div>
									</div>
									<div class="row mb-3">
										<label for="input46" class="col-sm-3 col-form-label">Title</label>
										<div class="col-sm-9">
											<input type="text" name="title" class="form-control" id="" value="{{ $praiseEdit->title }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input42" class="col-sm-3 col-form-label">Content</label>
										<div class="col-sm-9">
											<div class="position-relative input-icon">
												<textarea name="content">{{ $praiseEdit->content }}</textarea>
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
                        <object data="{{ url('upload/pdf_doc/'.$praiseEdit->pdf_file) }}" class="mt-4" type="application/pdf" width="300px" height="280px">
            							{{-- <p>Unable to display PDF file. <a href="{{ url('upload/pdf_doc/'.$praiseEdit->pdf_file) }}">Download</a> instead.</p> --}}
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