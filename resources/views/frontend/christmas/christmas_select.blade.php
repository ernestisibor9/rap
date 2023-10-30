@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Christmas
@endsection


  <div class="content-wrapper">
    <h6 class="mb-0 text-uppercase">Christmas</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Minutes Directory</th>	
										<th>Title</th>	
                    <th>Uploaded PDF</th>		
                    <th>Content</th>					
									</tr>
								</thead>
								<tbody>
									@foreach ($christmas as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ Str::ucfirst($item->minutes_directory) }}</td>
										<td>{{ $item->title }}</td>
										<td><a style="text-decoration: none; font-weight: 600"  href="{{ route('view4.pdf', $item->id) }}">{{ Str::substr($item->pdf_file, 0, 30) }}...</a></td>
										<td>{!! Str::substr($item->content, 0, 30) !!}
											<a href="{{ route('full.content4', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
										{{-- <td>{{ $item->date_upload }}</td> --}}
										{{-- <td>{{ $item->date_upload->format('l M d Y') }}</td> --}}
										{{-- <td>{{ Carbon\Carbon::parse($item->date_upload)->format('l M d Y') }}</td> --}}
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
  <!--end row-->

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