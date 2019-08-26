@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Dashboard</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
            <hr>
                   <h3>Your Blog Post</h3>

                   @if (count($posts)> 0)
                    <table class="table table-striped">
                            <tr>
                            <th><h4>Title</h4></th>
                            <th></th>
                            <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                    <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit"
                                         class="btn btn-default">Edit</a></td>
                                    <td>
                                            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'post', 'class'=>"pull-right"])!!}
                                             {{Form::hidden('_method','DELETE')}}
                                             {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                            {!!Form::close()!!}</td>
                                    </tr>  
                            @endforeach
                    </table>
                   @else 
                    <p>Your have no posts</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
