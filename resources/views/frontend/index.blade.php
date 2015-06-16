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

    @role('Admin')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> Role Based</div>
                    <div class="panel-body">
                        You can see this because you have the role of 'Administrator'!
                    </div>
                </div><!-- panel -->
            </div><!-- col-md-10 -->
        </div><!-- row -->
    @endrole
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
