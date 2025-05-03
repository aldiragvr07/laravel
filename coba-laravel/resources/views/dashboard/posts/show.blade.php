@extends('dashboard.layouts.main')

@section('container')
<div class="containter">
    <div class="row my-3">
            <div class="col-lg-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>

                    <a href="/dashboard/posts" class="btn btn-success"><i class="fas fa-arrow-left"></i> Back to all my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger " onclick="return confirm('Are you sure?')"><i class="fas fa-trash"> Delete</i></button>
                      </form>   
                    <img src="https://picsum.photos/id/{{ $post->id }}/1200/400" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                    
                    <article class="my-5">
                            {!! $post->body !!}
                    </article>
                    
            

            </div>
    </div>
</div>
@endsection