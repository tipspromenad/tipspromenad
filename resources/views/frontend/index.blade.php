@extends('frontend.layouts.master')

@section('after-styles-end')
    <style type="text/css">
        body{
            margin-top: 0px;
        }
        .siffror    {
            max-width: 500px;
            margin-top: 55px;
        }
        .logo   {
            max-width: 1000px;
            margin-top: 20px;
            margin-bottom: 20px;
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
            box-shadow: 3px 3px 8px #777777;
        }
    </style>
@endsection

@section('content')

    <!-- Section -->
    <section class="bakgrundsbild">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <div class="siffror center-block">
                        <img src="{!!asset('img/frontend/ettakrysstva.svg')!!}" class=”img-responsive" alt=”Etta, kryss, två!" />
                    </div>
                </div><!--// col -->
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <div class="logo center-block">
                        <a href="http://tipspromenad.dev" title="Klicka för att komma till startsidan."><img src="{!!asset('img/frontend/tipspromenadlogo.svg')!!}" class=”img-responsive" alt=”tipspromenad.NU" /></a>
                    </div>
                </div><!--// col -->
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <div class="text-center">
                        <img class="img-responsive" src="{!!asset('img/frontend/instructionsTEST.png')!!}" alt="Steg för steg." />
                    </div>
                </div><!--// col -->
            </div><!--// row -->
        </div><!--// container -->
    </section> <!--// sektion -->

    <!-- Section sektion -->
    <section class="bg-success">
        <div class="container" >
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <button type="button" class="btn btn-lg btn-primary knappar1">Skapa tipspromenad</button>
                </div><!--// col -->
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <button type="button" class="btn btn-lg btn-primary knappar1">Gå tipspromenad</button>
                </div><!--// col -->
            </div><!--// row -->
        </div><!--// container -->
    </section> <!--// sektion -->
@endsection
