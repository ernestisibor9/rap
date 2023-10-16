@extends('frontend.main_master')

@section('main')



  <div class="content-wrapper">
    <h6 class="mb-0 text-uppercase">Praise Night Five</h6>
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
									@foreach ($praise_night_five as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->praise_night }}</td>
										<td>{{ $item->title }}</td>
										<td><a href="{{ route('view.pdf', $item->id) }}">{{ Str::substr($item->pdf_file, 0, 30) }}...</a></td>
										<td>{{ Str::substr($item->content, 0, 30) }}
											<a href="{{ route('full.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
  <!--end row-->
  </div>
  </div>

@endsection