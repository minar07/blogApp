@extends('layouts.app')

@section('content')

    <h1>Create Posts</h1>
                                                                             <!-- uploading photo -->
    {!! Form::open(['action' => 'PostsController@store', 'method'=> 'post', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title','', ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body','', ['id'=>'article-ckeditor','class'=> 'form-control', 'placeholder'=> 'Body Text'])}}
    </div>
    <!-- tutorial 12, uploading photo -->
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
        {{Form::submit('submit', ['class'=> 'btn btn-primary'])}}

    {!! Form::close() !!}
    
    
@endsection