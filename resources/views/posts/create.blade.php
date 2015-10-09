@extends('layouts.master')
@section('content')
<h4>You may add content to the homepage here. Please note that this is not reversible
 and you may blow up the internet if your content is bad.</h4>
<div class="form-group">
	<form method="POST" action="/posts/create">
		<div class="form-group">
		 <label for="title">Title</label>
		 <input type="text" name="title" class="form-control" id="title"
		  placeholder="Title">
		</div>
		<div class="form-group">
		 <label for="content">Content</label>
		 <textarea id="content" name="content" col="5" rows="10" class="form-control"></textarea>
		 </div>
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@stop