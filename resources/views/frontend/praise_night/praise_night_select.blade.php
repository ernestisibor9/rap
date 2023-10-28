@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Praise Night 
@endsection

  <div class="content-wrapper">
    <h6 class="mb-0 text-uppercase">Select Praise Night </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="col-md-6">
							<select onchange="window.location.href=this.value;" class="form-select" name="praise_night" id="input46">
							<option selected>Select Praise Night</option>
							<option value="{{ route('praise.night.1') }}">Praise Night 1</option>
							<option value="{{ route('praise.night.2') }}">Praise Night 2</option>
							<option value="{{ route('praise.night.3') }}">Praise Night 3</option>
							<option value="{{ route('praise.night.4') }}">Praise Night 4</option>
							<option value="{{ route('praise.night.5') }}">Praise Night 5</option>
							<option value="{{ route('praise.night.6') }}">Praise Night 6</option>	
							<option value="{{ route('praise.night.7') }}">Praise Night 6</option>
							<option value="{{ route('praise.night.8') }}">Praise Night 7</option>
							<option value="{{ route('praise.night.9') }}">Praise Night 8</option>
							<option value="{{ route('praise.night.10') }}">Praise Night 9</option>
							<option value="{{ route('praise.night.11') }}">Praise Night 10</option>
							<option value="{{ route('praise.night.12') }}">Praise Night 11</option>	
						</select>
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