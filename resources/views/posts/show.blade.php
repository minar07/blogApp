@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        <img style="width:60%" src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <br>
    <small>Witten on{{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    @if(!Auth::guest())
    <!-- can not see the delete and edit button if in other user's posts   --> 
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'post', 'class'=>"pull-right"])!!}

            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif      
    @endif
@endsection