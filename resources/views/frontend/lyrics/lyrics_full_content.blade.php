@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - View Content
@endsection
   


<div class="content-wrapper">
	<div class="container">
    <div class="row bg-white p-3">
      <div class="col-md-2">
        <h6 style="color: blue;">{{ Carbon\Carbon::parse($contentData->date_upload)->format('l M d Y') }}</h6>
      </div>
      <div class="col-md-10">
        <h4 class="text-center">{{ $contentData->title }}</h4>
        <p class="p-2" >{!! $contentData->lyrics !!}</p>
      </div>
    </div>
  </div>	
</div>

      @endsection