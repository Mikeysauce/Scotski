@extends('layouts.master')
@section('title', 'Penguin Club, fun for all the kids!')
@section('scripts')
{!! Html::script('/js/lightbox.js') !!}
@stop
@section('content')
<div class="jumbotron nicer">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="special">Penguin Club
                    <small>Great fun for the little ones</small>
                </h1>
                <hr class="style-one" />
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="./images/penguinclub-1.jpg" data-lightbox="image-1">
                    <img class="img-responsive peng" src="./images/penguinclub-1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="color:#337ab7;">Nursery</h3>
                   <p>All of our resorts have a day nursery, so there's no need to worry about the little ones while you use the slopes</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="./images/nursery1.jpg" data-lightbox="image-2">
                    <img class="img-responsive peng" src="./images/nursery1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 style="color:#337ab7;">Junior Slopes</h3>
                <p>We offer instructional training on our junior slopes with fully accredited trainers.</p>
            </div>
        </div>


</div>
@stop