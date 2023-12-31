@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Praise Night 3
@endsection


<div class="page-content">
  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

  </div>

 <h6 class="mb-0 text-uppercase">Praise Night three</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Praise Night</th>	
										<th>Title</th>
										<th>Uploaded PDF Doc</th>									
										<th>Content</th>
										<th>Created At</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($praise_night_three as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->praise_night_type }}</td>
										<td>{{ $item->title }}</td>
										<td>{{ Str::substr($item->pdf_file, 0, 30) }}...</td>
										<td>{!! Str::substr($item->content, 0, 30) !!}
											<a href="{{ route('all.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										<td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

  <!--end row-->

</div>

@endsection