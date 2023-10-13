@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Search View
@endsection


<div class="page-content">
      <div class="card p-2">
        <h3 class="text-center p-3">Search Directory</h3>
        <div class="card-body">
          <div class="container">
            <div class= "row">
              <form action="{{ route('search.directory.item') }}" method="post" class="search-form">
              @csrf
                <div class = "col-md-6 d-flex justify-content-center">
                  <div class="position-relative input-icon">
                  <input type="text" name="search" class="form-control" id="input15" placeholder="Search Directory">
                  <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-search'></i></span>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary" style="margin-left: 30px">Search</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
</div>

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
                    <th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($search_directory as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										
										<td>{{ $item->title }}</td>
										<td>{{ Str::substr($item->pdf_file, 0, 30) }}...</td>
										<td>{{ Str::substr($item->content, 0, 30) }}
											<a href="{{ route('all.content3', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										<td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td>
                    <td>
                      <button class="btn btn-primary">Edit</button>
                      <button class="btn btn-danger">Delete</button>
                    </td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

  <!--end row-->

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