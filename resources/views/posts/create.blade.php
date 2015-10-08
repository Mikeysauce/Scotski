@extends('layouts.master')

@section('content')
	<form method="POST" action="/posts/create">
		<div class="form-group">
		 <label for="title">Title</label>
		 <input type="text" name="title" class="form-control" id="title"
		  placeholder="Title">
		</div>
		<div class="form-group">
		 <label for="content">Content</label>
		 <textarea id="content" name="content" col="5" rows="10" class="form-
		 control"></textarea>
		 </div>

		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <button type="submit" class="btn btn-default">Submit</button>
		 </form>
@stop