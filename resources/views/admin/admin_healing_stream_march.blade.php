@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Healing Streams March
@endsection


<div class="page-content">
  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

  </div>

  <h6 class="mb-0 text-uppercase">Healing Streams March</h6>
  <hr />
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Healing Streams</th>
										<th>Title</th>
										<th>Uploaded PDF</th>
										<th>Content</th>
										<th>Created At</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($healing_stream_march as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<<td>{{ Str::ucfirst($item->healing_stream_type) }}</td>
										<td>{{ $item->title }}</td>
										<td>{{ Str::substr($item->pdf_file, 0, 30) }}...</td>
										<td>{!! Str::substr($item->content, 0, 30) !!}
											<a href="{{ route('all.healing.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										{{-- <td>{{ $item->date_upload }}</td> --}}
										{{-- <td>{{ $item->date_upload->format('l M d Y') }}</td> --}}
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