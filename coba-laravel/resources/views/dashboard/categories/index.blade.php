@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-6">
    <div class="card">
      <div class="card-header mt-3">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>

      </div>
      <div class="card-body p-0">
        <div class="table-responsive table-invoice">
          <table class="table table-striped">
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td class="font-weight-600">{{ $category->name }}</td>
              <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                </form>   
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection