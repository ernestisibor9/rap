@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Search View
@endsection


<div class="page-content">


  <div class="container">
    <div class="row">
      {{-- <div class="card p-3">
        <div class = "card-body">
          @foreach($searchData as $search)
          <h5>{{ Carbon\Carbon::parse($search->date_upload)->format('l M d Y') }}</h5>
          <h5 class="text-center">{{ $search->title }}</h5>
          <h6>{!! $search->content !!}</h6>
          @endforeach
        </div>
      </div> --}}


      <h6 class="mb-0 text-uppercase">Manage Search</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										
										<th>Title</th>
										<th>Uploaded PDF Doc</th>									
										<th>Content</th>
										<th>Created At</th>
                    {{-- <th>Action</th> --}}
									</tr>
								</thead>
								<tbody>
									@foreach ($searchData as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										
										<td>{{ $item->title }}</td>
										<td>{{ Str::substr($item->pdf_file, 0, 30) }}...</td>
										<td>{{ Str::substr($item->content, 0, 30) }}
											<a href="{{ route('all.content3', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										<td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td>
                    {{-- <td>
                      <button class="btn btn-primary">Edit</button>
                      <button class="btn btn-danger">Delete</button>
                    </td> --}}
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
    </div>
  </div>

</div>
</div>

@endsection