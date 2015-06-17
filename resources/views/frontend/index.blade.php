@extends('frontend.layouts.master')

@section('after-styles-end')
    <style type="text/css">
        .siffror    {
            max-width: 500px;
            margin-top: 15px;
        }
        .press  {
            max-width: 400px;
        }
        .logo   {
            max-width: 1000px;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="row center-block siffror">
        <div class="col-xs-12">
            <img src="{!!asset('img/frontend/ettakrysstva.svg')!!}" class=”img-responsive" alt=”Etta, kryss, två!" />
        </div>
    </div><!--  /.row -->
    <div class="row center-block logo">
        <div class="col-xs-12">
            <img src="{!!asset('img/frontend/tipspromenadlogo.svg')!!}" class=”img-responsive" alt=”Etta, kryss, två!" />
        </div>
    </div><!--  /.row -->
@endsection
