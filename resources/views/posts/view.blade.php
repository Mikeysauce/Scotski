@extends('layouts.master')
@section('content')
<h4>You may edit the homepage here.</h4>
    @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
 @foreach ($posts as $post)
 <div class="form-group">
<form action="/posts/update" method="POST">
<h1>{{ $post->title }}</h1>
     <textarea id="content" name="content" col="5" rows="10" class="form-control">{{ $post->content }}</textarea>
     <input type="hidden" name="id" value="{{$post->id}}">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <button type="submit" class="btn btn-default">Submit Changes!</button>
 </form>
</div>
@endforeach
<h4>Add a new post here</h4>
<div class="form-group">
	<form method="POST" action="/posts/create">
		<div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title"
          placeholder="Title">
		 <label for="content">Content</label>
		 <textarea placeholder="Add a new post here" id="content" name="content" col="5" rows="10" class="form-control"></textarea>
		 </div>
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@stop