@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>
<div class="table-responsive col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Invoices</h4>
        <div class="card-header-action">
          <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice">
          <table class="table table-striped">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td class="font-weight-600">{{ $post->title }}</td>
              <td><div class="badge badge-warning">{{ $post->category->name }}</div></td>
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                <a href="/dashboard/posts/{{ $post->id }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <a href="/dashboard/posts/{{ $post->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection