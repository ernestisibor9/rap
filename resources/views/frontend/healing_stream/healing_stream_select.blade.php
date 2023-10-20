@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Healing Stream 
@endsection

  <div class="content-wrapper">
    <h6 class="mb-0 text-uppercase">Select Healing Stream </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Healing Stream</th>
										<th>Healing Stream</th>	
										<th>Healing Stream</th>
										<th>Healing Stream</th>									
										<th>Healing Stream</th>
										<th>Healing Stream</th>
                    <th>Healing Stream</th>
                    <th>Healing Stream</th>
									</tr>
								</thead>
								<tbody>								
									<tr>
										<td><a href="{{ route('healing.stream.2020') }}">2020</a></td>
										<td><a href="{{ route('healing.stream.2021') }}">2021</a></td>
										<td><a href="{{ route('healing.stream.2022') }}">2022</a></td>
                    <td><a href="{{ route('healing.stream.2023') }}">2023</a></td>
                    <td><a href="{{ route('healing.stream.2024') }}">2024</a></td>
                    <td><a href="{{ route('healing.stream.2025') }}">2025</a></td>
                    <td><a href="{{ route('healing.stream.2026') }}">2026</a></td>
                    <td><a href="{{ route('healing.stream.2027') }}">2027</a></td>
									</tr>
                  <tr>
										<td><a href="">2028</a></td>
										<td><a href="">2029</a></td>
										<td><a href="">2030</a></td>
                    <td><a href="">2031</a></td>
                    <td><a href="">2032</a></td>
                    <td><a href="">2033</a></td>
                    <td><a href="">2034</a></td>
                    <td><a href="">2035</a></td>
									</tr>
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