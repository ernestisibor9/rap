@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Lyrics
@endsection

  <div class="content-wrapper">
    <h6 class="mb-0 text-uppercase">Lyrics </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Title</th>	
										<th>Lyrics</th>								
									</tr>
								</thead>
								<tbody>								
									@foreach ($lyrics as $key => $item)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $item->title }}</td>
										<td>{{ Str::substr($item->lyrics, 0, 60) }}
											<a href="{{ route('full.content3', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
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

  <script>
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
			</script>


@endsection