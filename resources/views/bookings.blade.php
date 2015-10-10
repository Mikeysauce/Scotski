@extends('layouts.master')
@section('content')
    @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
 <div class="jumbotron nicer">
 <h2 class="special2">Book with us</h2>
    <hr class="style-two"/>
  <div class="row">
  <div class="col-md-12">
   <p>At ScotSki we offer a range of packages to suite all levels of experience and every budget. Our prices start from just £249 and include accommodation, dinner, bed and breakfast, full access to the slopes of your chosen destination together with all transfers and ski lift passes. </p>
    </div>
   <div class="col-md-12">
<div class="bs-example">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Weekend</th>
                    <th>1 Week</th>
                    <th>2 Week</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Glencoe</td>
                    <td>£300</td>
                    <td>£490</td>
                    <td>£860</td>
                </tr>
                <tr>
                    <td>Glenshee</td>
                    <td>£359</td>
                    <td>£511</td>
                    <td>£930</td>
                </tr>
                <tr>
                    <td>Cairngorm</td>
                    <td>£289</td>
                    <td>£510</td>
                    <td>£890</td>
                </tr>
          <tr>
                    <td>Nevis Range</td>
                    <td>£240</td>
                    <td>£430</td>
                    <td>£800</td>
                </tr>
         <tr>
                    <td>Lecht</td>
                    <td>£321</td>
                    <td>£550</td>
                    <td>£1000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
<div class="row">
<h4><b>Contact</b></h4>
<div class="container">
    <div class="col-xs-2">
        <h2 class="special2">Glencoe</h2>
         <p>Manager name<br>Cairngorm Valley<br>Scotland<br> United Kingdom<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
    <div class="col-xs-2">
        <h2 class="special2">Glenshee</h2>
         <p>Manager name<br>Cairngorm Valley<br>Scotland<br> United Kingdom<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
        <div class="col-xs-2">
        <h2 class="special2">Cairngorm</h2>
         <p>Manager name<br>Cairngorm Valley<br>Scotland<br> United Kingdom<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
        <div class="col-xs-2">
        <h2 class="special2">Nevis Range</h2>
         <p>Manager name<br>Cairngorm Valley<br>Scotland<br> United Kingdom<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
        <div class="col-xs-2">
        <h2 class="special2">The Lecht</h2>
         <p>Manager name<br>Cairngorm Valley<br>Scotland<br> United Kingdom<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
    </div>
</div>











<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null,
        array('required',
              'class'=>'form-control',
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!',
      array('class'=>'btn btn-primary')) !!}
</div>
</div>
{!! Form::close() !!}
@stop