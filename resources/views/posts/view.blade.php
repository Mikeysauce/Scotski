@extends('layouts.master')
@section('content')
@include('layouts.partials.errors')
@include('layouts.partials.messages')
<div class="jumbotron nicer">
    <h2 class="special">Edit the homepage</h2>
    <hr class="style-two" />
 @foreach ($posts as $post)
 <div class="form-group">
<form action="/posts/update" method="POST">
<h4>{{ $post->title }}</h4> <p>This post was updated at {{ $post->updated_at->format('g:ia \o\n l jS F Y') }} </p>
     <textarea id="content" name="content" rows="5" class="form-control">{{ $post->content }}</textarea>
     <input type="hidden" name="id" value="{{$post->id}}">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     </div>
     <button type="submit" class="btn btn-primary">Submit Changes!</button>
 </form>
@endforeach
</div>
<div class="jumbotron nicer">
        <h2 class="special">Add a new post to homepage</h2>
        <hr class="style-two" />
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
		 <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
@stop