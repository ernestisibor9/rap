@extends('frontend.main_master')

@section('main')

@section('title')
	RAP - Directory
@endsection


<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Rehearsal Archival Portal</h3>
          <h6 class="font-weight-normal mb-0"></h6>
        </div>
        <div class="col-12 col-xl-4">
          <div class="justify-content-end d-flex">
            {{-- <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="{{asset('frontend/images/pastorchris.jpg')}}" alt="people">
          {{-- <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal">Bangalore</h4>
                <h6 class="font-weight-normal">India</h6>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <a href="{{ route('praise_night_select') }}" style="text-decoration: none; color: white; font-weight:bold;">
                <p class="mb-4"></p>
                <p class="fs-30 mb-2">Praise</p>
                <p>Night</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <a href="{{ route('healing_stream_select') }}" style="text-decoration: none; color: white; font-weight:bold;">
                <p class="mb-4"></p>
                <p class="fs-30 mb-2">Healing</p>
                <p>Stream</p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <a href="{{ route('christmas_select_user') }}" style="text-decoration: none; color: white; font-weight:bold;">
              <p class="mb-4"></p>
              <p class="fs-30 mb-2">Christmas</p>
              <p>Service</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <a href="{{ route('other_ministry_select_user') }}" style="text-decoration: none; color: white; font-weight:bold;">
              <p class="mb-4"></p>
              <p class="fs-30 mb-2">Other</p>
              <p>Ministry Programmes</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
</div>

@endsection