@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - View PDF Document
@endsection
    

<div class="page-content">
				<div class="row">
          <object data="{{ url('upload/pdf_doc/'.$docs->pdf_file) }}" type="application/pdf" width="100%" height="650px">
            <p>Unable to display PDF file. <a href="{{ url('upload/pdf_doc/'.$docs->pdf_file) }}">Download</a> instead.</p>
          </object>
        </div>
			</div>

      @endsection