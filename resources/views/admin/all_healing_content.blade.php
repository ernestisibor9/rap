@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - View Content
@endsection
    

<div class="page-content bg-white">
				<div class="row justify-content-center">
          <div class="col-md-12 text-dark">
            <h5 style="color: blue;">{{ Carbon\Carbon::parse($contentData->date_upload)->format('l M d Y') }}</h5> <br>
            <h4 class="text-center">{{ $contentData->title }}</h4>
            <p class="p-2" style="line-height: 25px; text-align:justify">{{ $contentData->content }}</p>
          </div>
        </div>
			</div>

      @endsection