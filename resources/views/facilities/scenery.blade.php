@extends('layouts.master')
@section('content')
    @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
 <div class="jumbotron nicer">
 <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Products</a></li>
    <li class="active">Accessories</li>
</ul>
 <h2 class="special2">Scenery</h2>
    <hr class="style-two" style="
    width: 8%;
">

</div>
@stop