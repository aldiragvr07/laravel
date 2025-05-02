@extends('dashboard.layouts.main')

@section('container')
<div class="containter">
    <div class="row my-3">
            <div class="col-lg-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>

                    <a href="/dashboard/posts" class="btn btn-success"><i class="fas fa-arrow-left"></i> Back to all my posts</a>
                    <a href="" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</a>

                    <img src="https://picsum.photos/id/{{ $post->id }}/1200/400" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                    
                    <article class="my-5">
                            {!! $post->body !!}
                    </article>
                    
            

            </div>
    </div>
</div>
@endsection