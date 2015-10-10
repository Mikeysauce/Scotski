@extends('layouts.master')
@section('content')
    @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
 <div class="jumbotron nicer">
 <h2 class="special2">Gym</h2>
    <hr class="style-two" style="
    width: 8%;
">

</div>
@stop