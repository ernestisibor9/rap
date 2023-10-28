@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Search Directory
@endsection

  <div class="content-wrapper">

      <form action="{{ route('search_directory_item') }}" method="post">
              @csrf
                <div class = "col-md-6 d-flex justify-content-center">
                  <div class="mr-3">
                    <input type="text" name="search" placeholder="Search Content here" id="" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
				<h5 class="text-center">Search Directory</h5>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Minutes Directory</th>
										<th>Praise Night Type</th>
										<th>Healing Stream Type</th>
										<th>Year</th>
										<th>Title</th>
										<th>Uploaded PDF Doc</th>									
										<th>Content</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($search_directory as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->minutes_directory }}</td>
										<td>{{ $item->praise_night_type }}</td>
										<td>{{ $item->healing_stream_type }}</td>
										<td>{{ $item->year }}</td>
										<td>{{ $item->title }}</td>
										<td><a href="{{ route('view.pdfdoc', $item->id) }}">{{ Str::substr($item->pdf_file, 0, 30) }}...</a></td>
										<td>{!! Str::substr($item->content, 0, 60) !!}
											<a href="{{ route('full.content.doc', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
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
    </div>
  </div>

    {{-- <script>
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
    </script> --}}
@endsection