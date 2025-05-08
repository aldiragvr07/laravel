@extends('dashboard.layouts.main')

@section('container')
<div class="containter">
    <div class="row my-3">
            <div class="col-lg-8">
                    <h1 class="mb-3">{{ $categories->name }}</h1>

                    <a href="/dashboard/categories" class="btn btn-success"><i class="fas fa-arrow-left"></i> Back to all my category</a>
                    <a href="/dashboard/categories/{{ $categories->slug }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <form action="/dashboard/categories/{{ $categories->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger " onclick="return confirm('Are you sure?')"><i class="fas fa-trash"> Delete</i></button>
                      </form>

            

            </div>
    </div>
</div>
@endsection