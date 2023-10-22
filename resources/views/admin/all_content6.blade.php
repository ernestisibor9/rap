@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - View Content
@endsection
    

      <div class="page-content">
				<div class="container bg-white p-5">
          <div class="row justify-content-center">
            <div class="col-md-2">
              <h5 style="color: blue;">{{ Carbon\Carbon::parse($contentData->date_upload)->format('l M d Y') }}</h5>
            </div>
            <div class="col-md-10">
              <h4 class="text-center">{{ $contentData->title }}</h4>
              <p class="p-2" style="line-height: 25px; text-align:justify">{!! $contentData->lyrics !!}</p>
            </div>
          </div>
        </div>
			</div>

      @endsection