@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Manage Lyrics
@endsection


<div class="page-content">
  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

  </div>

  <h6 class="mb-0 text-uppercase">Manage Lyrics</h6>
  <hr />
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>S/N</th>
              <th>TITLE</th>
              <th>LYRICS</th>
              <th>CREATED AT</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lyrics as $key => $item)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $item->title }}</td>
              <td>{!! Str::substr($item->lyrics, 0, 60) !!}
											<a href="{{ route('lyrics.content', $item->id) }}"><small style="color: blueviolet">read more ...</small></a>
										</td>
              <td>{{ $item->created_at->format('l M d Y') }}</td>
              <td>
                <a href="{{ route('manage.lyrics.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('manage.lyrics.delete', $item->id) }}" class="btn btn-danger" id="delete" title="Delete Data">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!--end row-->

</div>

@endsection