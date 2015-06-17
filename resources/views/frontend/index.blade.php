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
    </style>
@endsection

@section('content')
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
                <img src="{!!asset('img/frontend/tipspromenadlogo.svg')!!}" class=”img-responsive" alt=”Etta, kryss, två!" />
            </div>
        </div>
    </div><!--  /.row -->
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="text-center">
                <hr>
                <p><i class="fa fa-copyright"></i> Daniel Blomdahl & Wictor Johansson</p>
            </div>
        </div>
    </div>
@endsection
