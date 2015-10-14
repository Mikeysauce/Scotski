@extends('layouts.master')
@section('title', 'Bookings')
@section('content')
@include('layouts.partials.errors')
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
<p>
<i>Children under 16 years of age will receive a 40 percent reduction in the full adult cost.</i>
</p>
</div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-2 evenmore">
        <h2 class="special2">Glencoe</h2>
         <p>Karen Smith<br>Argyll<br>Scotland<br>PH49 4HZ<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-2 evenmore">
        <h2 class="special2">Glenshee</h2>
         <p>George Allan<br>Braemar<br>Scotland<br>AB35 5XU<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
        <div class="col-xs-6 col-sm-6 col-md-2 evenmore">
        <h2 class="special2">Cairngorm</h2>
         <p>Nicola Brown<br>Aviemore<br>Scotland<br>PH22 1RB<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
        <div class="col-xs-6 col-sm-6 col-md-2 evenmore">
        <h2 class="special2">Nevis</h2>
         <p>Steven Boyd<br>Torlundy<br>Scotland<br>PH33 6SQ<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
        <div class="col-xs-6 col-sm-6 col-md-2 evenmore">
        <h2 class="special2">The Lecht</h2>
         <p>Sarah Jones<br>Strathdon<br>Scotland<br>AB36 8YP<br><i class="fa fa-phone fa-fw"></i> (44) 1333-321536</p>
    </div>
</div>
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
