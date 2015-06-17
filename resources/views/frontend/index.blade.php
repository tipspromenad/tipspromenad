@extends('frontend.layouts.master')

@section('after-styles-end')
    <style type="text/css">
        .siffror    {
            max-width: 500px;
            margin-top: 15px;
        }
        .logo   {
            max-width: 1000px;
            margin-top: 20px;
        }
        section{
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 30px 0;
        }
        .bakgrundsbild {
          background: url(blurrybakgrund.png) ;
          background-position: center;
          background-size: cover;
          height:  300px;
        }
    </style>
@endsection

@section('content')

    <!-- Section konferensbild -->
    <section class="bakgrundsbild" data-speed="10" data-type="background">
        <div class="container" >
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                </div><!--// col -->
            </div><!--// row -->
        </div><!--// container -->
    </section> <!--// konferensbild -->

    <div class="row">
        <div class="col-xs-12">
            <div class="siffror center-block">
                <img src="{!!asset('img/frontend/ettakrysstva.svg')!!}" class=”img-responsive" alt=”Etta, kryss, två!" />
            </div>
        </div>
    </div><!--  /.row -->

    <div class="row">
        <div class="col-xs-12">
            <div class="logo center-block">
                <a href="http://tipspromenad.dev" title="Klicka för att komma till startsidan."><img src="{!!asset('img/frontend/tipspromenadlogo.svg')!!}" class=”img-responsive" alt=”tipspromenad.NU" /></a>
            </div>
        </div>
    </div><!--  /.row -->

    <div class="row">
        <div class="col-xs-12">
            <div class="img-responsive text-center">
                <img src="{!!asset('img/frontend/blurrybild.png')!!}" style="max-width: 80%; margin-top: 20px; margin-bottom: 40px;" alt=”Bild med suddig skog." />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="text-center">
                <hr>
                <p><i class="fa fa-copyright"></i> Daniel Blomdahl & Wictor Johansson</p>
            </div>
        </div>
    </div>
@endsection
