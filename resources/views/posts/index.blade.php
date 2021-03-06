@extends('layouts.app')

@section('content')
<div class="row">
    <aside class="col-md-offset-4 col-md-4 col-xs-offset-2 col-xs-8">

        <ul class="media-list">

            
            @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'posts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            

            @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
            @endif
            
        </ul>

{!! $posts->render() !!}
@endsection