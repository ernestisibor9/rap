@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Healing Streams 
@endsection

  <div class="content-wrapper">
    <h6 class="mb-0 text-uppercase">Select Healing Streams Year </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="col-md-6">
							<select onchange="window.location.href=this.value;" class="form-select" name="praise_night" id="input46">
							<option selected>Select Year</option>
							<option value="{{ route('healing.stream.2020') }}">2020</option>
							<option value="{{ route('healing.stream.2021') }}">2021</option>
							<option value="{{ route('healing.stream.2022') }}">2022</option>
							<option value="{{ route('healing.stream.2023') }}">2023</option>
							<option value="{{ route('healing.stream.2024') }}">2024</option>
							<option value="{{ route('healing.stream.2025') }}">2025</option>		
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