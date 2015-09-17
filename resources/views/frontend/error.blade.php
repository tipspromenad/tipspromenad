@extends('frontend.layouts.master')

@section('after-styles-end')
    <style type="text/css">
        body{
            margin-top: 0px;
        }
        .siffror    {
            margin-top: 55px;
        }
        .logo   {
            margin-top: 20px;
            margin-bottom: 10px;
        }
        section{
            height: auto;
            margin: 0 auto;
            width: 100%;
            position: relative;
            padding: 30px 0;
        }
        .knappar1{
            margin-top: 5px;
            margin-bottom: 10px;
            box-shadow: 3px 3px 8px #555555;
        }
        .modal-header {
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #7bc3ed;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
         }
    </style>
@endsection

@section('content')

    <!-- Section -->
    <section id="bakgrundsbild" class="bakgrundsbild">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="siffror">
                        <img src="{!!asset('img/frontend/ettakrysstva.svg')!!}" style="max-width: 200px;" class="img-responsive center-block" alt="Etta, kryss, två!" />
                    </div>
                </div><!--// col -->
                <div class="col-xs-12">
                    <div class="logo">
                        <a href="http://tipspromenad.dev" title="Klicka för att komma till startsidan."><img src="{!!asset('img/frontend/tipspromenadlogo.svg')!!}" style="max-width: 400px;" class="img-responsive center-block" alt="tipspromenad.NU" /></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center text-white">
                        <h1>{{ $errorHead }}</h1>
                        <p>{{ $errorBody }}</p>
                </div><!--// col -->
            </div><!--// row -->
        </div><!--// container -->
    </section> <!--// sektion -->
@endsection

@section('after-scripts-end')

@endsection
