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
        .knappar2{
            margin-top: 5px;
            margin-bottom: 10px;
            box-shadow: 2px 2px 6px #999999;
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
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <div class="siffror center-block">
                        <img src="{!!asset('img/frontend/ettakrysstva.svg')!!}" class="img-responsive" alt="Etta, kryss, två!" />
                    </div>
                </div><!--// col -->
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <div class="logo center-block">
                        <a href="http://tipspromenad.dev" title="Klicka för att komma till startsidan."><img src="{!!asset('img/frontend/tipspromenadlogo.svg')!!}" class="img-responsive" alt="tipspromenad.NU" /></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <button type="button" class="btn btn-lg btn-primary knappar1" data-toggle="modal"
                    @if(Auth::user())
                        data-target="#skapatipspromenad"
                    @else
                        data-target="#skapatipsmodal"
                    @endif
                        >Skapa tipspromenad</button>
                </div><!--// col -->
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
                    <button type="button" class="btn btn-lg btn-primary knappar1" data-toggle="modal" data-target="#gapatipsmodal">
                        Gå tipspromenad
                    </button>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1 text-center">
                    <h3>Inforuta #1</h3>
                </div><!--// col -->
                <div class="col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1 text-center">
                    <h3>Inforuta #2</h3>
                </div><!--// col -->
                <div class="col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1 text-center">
                    <h3>Inforuta #3</h3>
                </div><!--// col -->
            </div><!--// row -->
        </div><!--// container -->
    </section> <!--// sektion -->

<!--// modaler -->

    <!--// skapatipsmodalen -->
    <div class="modal fade bs-example-modal-lg" id="skapatipsmodal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Skapa tipspromenad</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 skiljestreck"> <!--// med kontodelen -->
                                <h4 class="text-primary text-center">Med konto</h4>
                                <button class="btn btn-primary knappar2 center-block text-white">
                                    <i class="fa fa-facebook"></i> Logga in med Facebook
                                </button>
                                <button class="btn btn-primary knappar2 center-block text-white">
                                    <i class="fa fa-google"></i> Logga in med Google
                                </button>
                                <form>
                                    <div class="form-group">
                                        <input id="username" name="" type="text" placeholder="E-postadress" class="form-control input-md">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" name="" type="password" placeholder="Lösenord" class="form-control input-md">
                                    </div>
                                    <button type="button" value="Send" class="btn btn-success knappar2 center-block" type="submit" >
                                        <i class="fa fa-sign-in"></i> Logga in
                                    </button>
                                </form>
                                <hr>
                                <p class="font-s-18 text-primary"><i class="fa fa-check text-success"></i> Skapa tipspromenader 1</p>
                                <p class="font-s-18 text-primary"><i class="fa fa-check text-success"></i> Skapa tipspromenader 2</p>
                                <p class="font-s-18 text-primary"><i class="fa fa-check text-success"></i> Skapa tipspromenader 3</p>
                                <p class="font-s-18 text-primary"><i class="fa fa-check text-success"></i> Skapa tipspromenader 4</p>
                                <p class="font-s-18 text-primary"><i class="fa fa-check text-success"></i> Skapa tipspromenader 5</p>
                            </div> <!--// med kontodelen slut -->
                            <div class="col-xs-12 col-sm-5"> <!--// utan kontodelen -->
                                <h4 class="text-primary text-center">Utan konto</h4>
                                <button class="btn btn-primary knappar2 center-block"
                                        data-dismiss="modal" data-toggle="modal" data-target="#skapatipspromenad"
                                >
                                    <i class="fa fa-edit text-white"></i> Skapa tipspromenad<br> utan konto
                                </button>
                                <hr>
                                <p class="text-primary"><i class="fa fa-check text-success"></i> Skapa tipspromenader 1</p>
                                <p class="text-primary"><i class="fa fa-check text-success"></i> Skapa tipspromenader 2</p>
                                <p class="text-gray-lighter"><i class="fa fa-check text-gray-lighter"></i> Skapa tipspromenader 3</p>
                                <p class="text-gray-lighter"><i class="fa fa-check text-gray-lighter"></i> Skapa tipspromenader 4</p>
                                <p class="text-gray-lighter"><i class="fa fa-check text-gray-lighter"></i> Skapa tipspromenader 5</p>
                            </div> <!--// utan kontodelen slut -->
                        </div><!--//.row-->
                    </div><!--//.container-fluid-->
                </div><!--//.modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div> <!-- /.modal -->
    <!--// skapatipsmodalen slut -->

    <!-- skapatipspromenad -->
    <div class="modal fade" id="skapatipspromenad" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @if(Auth::user())
                        <h4 class="modal-title">Skapa tipspromenad</h4>
                    @else
                        <h4 class="modal-title">Skapa tipspromenad utan konto</h4>
                    @endif
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                            @if(Auth::user())
                                <h4 class="text-primary text-center">Skapa tipspromenad som: {{ Auth::user()->name }}</h4>
                            @endif
                                <form name="skaparedaninloggadForm" id="skaparedaninloggadForm" method="POST" action="{{ action('Frontend\SkapaTipspromenadController@store') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <h3 class="text-primary text-center">Ange ett namn för din tipspromenad:</h3>
                                    <div class="form-group">
                                        <input id="tipsnamn" name="name" type="text" placeholder="" class="form-control input-md">
                                    </div>
                                    <h3 class="text-primary text-center">Aktivera mobil tipspromenad?</h3>
                                    <div class="form-group text-center">
                                        <input id="mobiltips" name="mobile" type="checkbox" value="1" class="input-md">
                                    </div>
                                    <h3 class="text-primary text-center">Sluttid?</h3>
                                    <div class="form-group">
                                        <input id="sluttid" name="stop_date" type="text" placeholder="" class="form-control input-md">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if(Auth::user())
                        <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
                    @else
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#skapatipsmodal">Avbryt</button>
                    @endif
                    <button type="button" onclick="$('#skaparedaninloggadForm').submit();" class="btn btn-success">Skapa tipspromenad</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--// skapatipspromenad slut -->

    <!--// gåtipsmodalen -->
    <div class="modal fade" id="gapatipsmodal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Gå tipspromenad</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <h3 class="text-primary text-center">Ange ditt tips-id:</h3>
                                <form>
                                    <div class="form-group">
                                        <input id="username" name="" type="number" placeholder="T.ex: 02846" class="form-control input-lg">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
                    <button type="button" class="btn btn-success">Starta tipspromenad</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--// gåtipsmodalen slut -->

<!--// modaler slut -->

@endsection

@section('after-scripts-end')

@endsection
