@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	RAP - Manage Leaders
@endsection


<div class="page-content">
  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

  </div>

  <h6 class="mb-0 text-uppercase">Manage Leader</h6>
  <hr />
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>S/N</th>
              <th>PHOTO</th>
              <th>LEADERS</th>
              <th>CREATED AT</th>
              {{-- <th>ACTION</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($leaderData as $key => $item)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td><img src="{{ asset($item->photo) }}" alt="" width="60px" height="60px"></td>
              <td>{{ $item->leader }}</td>
              <td>{{ $item->created_at->format('l M d Y') }}</td>
              <td>
                <a href="{{ route('manage.leader.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('manage.leader.delete', $item->id) }}" class="btn btn-danger" id="delete" title="Delete Data">Delete</a>
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