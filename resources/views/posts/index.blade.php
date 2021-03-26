@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h2>List Post <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a> </h2>
            </div>
            @foreach ($posts as $post)
            <div class="card">
                <img class="img img-fluid img-thumbnail" src="https://picsum.photos/seed/picsum/200/300" alt="" style="height: 400px; ">
                <div class="card-body">
                  <h5 class="card-title">ID : {{$post->id}}</h5>
                  <h5 class="card-title">{{$post->title}}</h5>
                  <h7> Slug : {{$post->slug}}{{$post->created_at}}</h7>
                  <p class="card-text">{!!$post->content!!}</p>
                </div>
              </div>
              @endforeach
        </div>
    </div>
</div>
@endsection
