
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category </h1>

    <div class="containter">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category/{{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/id/{{ $category->id }}/500/500" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill fs-3 p-4" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                      
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection

