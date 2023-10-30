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
							<option value="{{ route('praise.night.7') }}">Praise Night 7</option>
							<option value="{{ route('praise.night.8') }}">Praise Night 8</option>
							<option value="{{ route('praise.night.9') }}">Praise Night 9</option>
							<option value="{{ route('praise.night.10') }}">Praise Night 10</option>
							<option value="{{ route('praise.night.11') }}">Praise Night 11</option>
							<option value="{{ route('praise.night.12') }}">Praise Night 12</option>
							<option value="{{ route('praise.night.13') }}">Praise Night 13</option>
							<option value="{{ route('praise.night.14') }}">Praise Night 14</option>
							<option value="{{ route('praise.night.15') }}">Praise Night 15</option>
							<option value="{{ route('praise.night.16') }}">Praise Night 16</option>
							<option value="{{ route('praise.night.17') }}">Praise Night 17</option>
							<option value="{{ route('praise.night.18') }}">Praise Night 18</option>
							<option value="{{ route('praise.night.19') }}">Praise Night 19</option>
							<option value="{{ route('praise.night.20') }}">Praise Night 20</option>
							<option value="{{ route('praise.night.21') }}">Praise Night 21</option>
							<option value="{{ route('praise.night.22') }}">Praise Night 22</option>
							<option value="{{ route('praise.night.23') }}">Praise Night 23</option>
							<option value="{{ route('praise.night.24') }}">Praise Night 24</option>
							<option value="{{ route('praise.night.25') }}">Praise Night 25</option>
							<option value="{{ route('praise.night.26') }}">Praise Night 26</option>
							<option value="{{ route('praise.night.27') }}">Praise Night 27</option>
							<option value="{{ route('praise.night.28') }}">Praise Night 28</option>
							<option value="{{ route('praise.night.29') }}">Praise Night 29</option>
							<option value="{{ route('praise.night.30') }}">Praise Night 30</option>
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