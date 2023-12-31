@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Healing Stream 2026
@endsection


  <div class="content-wrapper">
    <h6 class="mb-0 text-uppercase">Healing Streams 2026</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Healing Streams</th>	
                    <th>Year</th>
										<th>Title</th>
										<th>Uploaded PDF Doc</th>									
										<th>Content</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($healing_stream_2026 as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ Str::ucfirst($item->healing_stream_type) }}</td>
                    <td>{{ $item->year }}</td>
										<td>{{ $item->title }}</td>
										<td><a style="text-decoration: none; font-weight: 600" href="{{ route('view2.pdf', $item->id) }}">{{ Str::substr($item->pdf_file, 0, 30) }}...</a></td>
										<td>{!! Str::substr($item->content, 0, 30) !!}
											<a href="{{ route('full.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										{{-- <td><a href="{{ route('view.pdf', $item->id) }}" class="btn btn-success">View</a></td> --}}
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