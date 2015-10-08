@extends('layouts.master')
@section('title', 'Welcome to Scotski!')
@section('scripts')
{!! Html::script('/js/lightbox.js') !!}
@stop
@section('content')
    <div class="jumbotron nicer">

                <div class="row">
            <div class="col-lg-12">
 <h2 class="special2">Our Facilities</h2>
      <hr class="style-two"/>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item">
                <a href="./images/otherbg.jpg" data-lightbox="image-1" data-title="Click the right half of the image to move forward.">
                    <img class="img-responsive facpage" src="./images/otherbg.jpg" alt="">
                </a>
                <h3>
                   Scenery
                </h3>
                <p>Perfectly located at the heart of the best peaks in Scotland</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="./images/somebg.jpg" data-lightbox="image-2" data-title="Click the right half of the image to move forward.">
                    <img class="img-responsive facpage" src="./images/somebg.jpg" alt="">
                </a>
                <h3>
                    Hotel
                </h3>
                <p>Our staff know that client satisfaction is our number one priority and are always ready to satisfy any requests you may have.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="./images/3.png" data-lightbox="image-3" data-title="Click the right half of the image to move forward.">
                    <img class="img-responsive facpage" src="./images/3.png" alt="">
                </a>
                <h3>
                   Food & Drinks
                </h3>
                <p>All of resorts have a bookings only restaurant, pub and an all day cafe.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="./images/main5.jpg" data-lightbox="image-4" data-title="Click the right half of the image to move forward.">
                    <img class="img-responsive facpage" src="./images/main5.jpg" alt="">
                </a>
                <h3>
                    Spa & Sauna
                </h3>
                <p>All of our resorts have a day spa and 24 hour access to the sauna and jacuzzi.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="./images/gym.jpg" data-lightbox="image-5">
                    <img class="img-responsive facpage" src="./images/gym.jpg" alt="">
                </a>
                <h3>
                    Gym
                </h3>
                <p>All of our resorts have a 24 hour gym for use at any time.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
                <a href="./images/penguin3.jpg" data-lightbox="image-6">
                    <img class="img-responsive facpage" src="./images/penguin3.jpg" alt="">
                </a>
                <h3>
                    Penguin Club
                </h3>
                <p>You can find more information about the Penguin Club in our dedicated section in the menu above.</p>
            </div>
        </div>




    </div>
</div>

<!--Scenery-->
<a href="./images/beautiful-nature-100.jpg" data-lightbox="image-1"></a>
<a href="./images/5.png" data-lightbox="image-1" data-title="Click the left half of the image to move back."></a>
<!--Hotel/rooms etc-->
<a href="./images/1.png" data-lightbox="image-2"></a>
<a href="./images/hotel1.jpg" data-lightbox="image-2"></a>
<a href="./images/hotel2.jpg" data-lightbox="image-2"></a>
<a href="./images/hotel3.jpg" data-lightbox="image-2" data-title="Click the left half of the image to move back."></a>
<!--Food/cafe/restaurant etc-->
<a href="./images/cafe.jpg" data-lightbox="image-3"></a>
<a href="./images/restaurant1.jpg" data-lightbox="image-3"></a>
<a href="./images/4.png" data-lightbox="image-3"></a>
<a href="./images/BeersWide-2.jpg" data-lightbox="image-3"></a>
<!--Spa and Sauna-->
<a href="./images/Stone_Massage.jpg" data-lightbox="image-4"></a>
<a href="./images/spa-2.jpg" data-lightbox="image-4"></a>
<!--Gym -->
@stop