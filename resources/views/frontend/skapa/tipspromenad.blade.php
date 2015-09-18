@extends('frontend.layouts.master-skapa')

@section('before-styles-end')
  <meta name="_token" content="{{ csrf_token() }}" />
@endsection

@section('after-styles-end')
<style type="text/css">
  .saved-container{
    position: fixed;
    top: 15px;
    width: 100%;
    z-index: -100;
  }
  .saved-container-z-index{
    z-index: 10000;
  }
  .saved-msg {
    width: 220px;
    opacity: 0;
    -webkit-transition: opacity 0.15s linear;
    -moz-transition: opacity 0.15s linear;
    -o-transition: opacity 0.15s linear;
    transition: opacity 0.15s linear;
  }
  .saved-msg.in {
    opacity: 1;
  }
  .trunkated-item{
    cursor: pointer;
    height: 38px;
    display:block;
    position: relative;
    overflow:hidden;
    z-index: 1040;
  }
  .fragebanken-trunkated-question{
    cursor: pointer;
    padding-top: 4px;
    height: 38px;
    display:block;
    position: relative;
    overflow:hidden;
    z-index: 1040;
  }
  .question-buttons{
    margin-top: 2px;
  }
  .sidebar-holder{
    width: 100%;
    padding: 5px 15px;
  }
  .textarea-resize1{
    resize: vertical;
  }
  .textarea-resize2{
    resize: none;
    margin-top: 5px;
    margin-bottom: 5px;
  }
  #tipspromenad{
    padding: 20px 0px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
  }
  body {
    background: url('{{ asset("img/frontend/blurrybakgrund.png") }}') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-color:#333;
      font-family: 'Open Sans',Arial,Helvetica,Sans-Serif;
  }
</style>
@endsection

@section('content')
<?php
require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();
?>
<div class="container" id="tipspromenadVueJS">
<div class="row">
  <div class="col-xs-12 left-text" style="height:90px;margin-top: 50px;">
    <a href="{{ url('/') }}">
      <img src="{{ asset('img/frontend/tipspromenadlogo.svg') }}" alt="tipspromenad.NU" style="max-height:50px;" class="img-responsive ">
    </a>
    <ul class="nav navbar-nav navbar-right" style="margin-top:-50px;">
      @if (Auth::guest())
        <li><a href="http://tipspromenad.dev/auth/login"><i class="fa fa-sign-in"></i> Logga in</a></li>
        <li><a href="http://tipspromenad.dev/auth/register"><i class="fa fa-user-plus"></i> Skapa konto</a></li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li>{!! link_to('dashboard', 'Kontrollpanelen') !!}</li>
              <li>{!! link_to('auth/password/change', 'Byt lösenord') !!}</li>
              @permission('view_admin_link')
                  {{-- This can also be @role('Administrator') instead --}}
                  <li>{!! link_to_route('backend.dashboard', 'Adminsidan') !!}</li>
              @endpermission
            <li>{!! link_to('auth/logout', 'Logga ut') !!}</li>
          </ul>
        </li>
      @endif
    </ul>
  </div><!--  /.col-xs-12 -->
</div><!--  /.row -->
  <div class="row row-offcanvas row-offcanvas-right bg-white" id="tipspromenad">
    <div class="col-xs-12 col-sm-8">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation"><a href="#tab-ny-fraga" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-plus"></i> Ny fråga</a></li>
        <li role="presentation" class="active"><a href="#tab-fragebanken" aria-controls="profile" role="tab" data-toggle="tab">Välj från frågebanken</a></li>
        <li role="presentation"><a href="#tab-tipspromenader" aria-controls="messages" role="tab" data-toggle="tab">Tipspromenader</a></li>
      </ul>
      <br>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="tab-ny-fraga">
          <h2>Skapa ny fråga</h2>
          <p>Här lägger man till egna frågor.</p>
          <form>
            <div class="form-group">
              <h3>Fråga:</h3>
              <p>Skriv din fråga i rutan nedanför.</p>
              <textarea class="form-control textarea-resize1" name="egenfraga" id="" rows="10"></textarea>
            </div>
            <div class="form-group">
              <h3>Svarsalternativ:</h3>
              <p>Skriv svarsalternativen i respektive fält och ange vilket svar som är rätt.</p>
              <textarea class="form-control textarea-resize2" name="egenfraga" id="" rows="1"></textarea>
              <textarea class="form-control textarea-resize2" name="egenfraga" id="" rows="1"></textarea>
              <textarea class="form-control textarea-resize2" name="egenfraga" id="" rows="1"></textarea>
            </div>
          </form>
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <h4>Lägg till kategorier:</h4>
              <p>Kategorier möjliggör enklare sökning efter frågor.</p>
              <input id="kategorier" name="" type="text" placeholder="" class="form-control input-md"></p>
            </div>
            <div class="col-xs-12 col-sm-6">
              <h4>Kan frågan användas av andra?</h4>
              <p>Bestäm om frågan skall vara tillgänglig för andra användare.</p>
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Ja, gör frågan publik.
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Nej, gör frågan privat.
                  </label>
                </div>
              </div><!-- /.form-group -->
            </div><!-- /.col-xs-12 sm-6 -->
            <div class="col-xs-12">
              <button type="button" class="btn btn-lg btn-success center-block" style="margin-top: 15px;"><i class="fa fa-check"></i> Spara frågan.</button>
            </div><!-- /.col-xs-12  -->
          </div><!-- /.row -->
        </div><!--  /.tab-ny-fraga -->

        <div role="tabpanel" class="tab-pane active" id="tab-fragebanken">
          <div class="row">
            <div class="col-sm-12">
              <h1>Välj frågor från frågebanken</h1>
              <div class="btn btn-xs btn-primary" v-on="click: showSavedMsg">Visa spara skylten</div>
            </div>
            <div class="col-sm-12">
              <br>
              <div class="input-group">
                <input type="text" class="form-control" v-model="searchQuery" placeholder="Sök bland frågorna...">
                <div class="input-group-addon"><i class="fa fa-search"></i></div>
              </div><!-- /.input-group -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row-->
          <div class="row">
           <div class="col-xs-12">
             <table class="table table-striped table-hover">
              <thead>
              <tr>
                <th>
                  &nbsp;
                </th>
                <th>
                  Fråga
                  <div class="pull-right">
                    Sortera efter: <span class="orderBy" v-on="click: orderby = 'created_at', click: order = ! order">nyaste</span>
                    -
                    <span class="orderBy" v-on="click: orderby = 'tipspromenaderCount', click: order = ! order">mest använda</span>
                    -
                    <span class="orderBy" v-on="click: orderby = 'user.name', click: order = ! order">Skapare</span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-repeat="question: allQuestions | setButtonPropertiesFilter | filterBy searchQuery | orderBy orderby order">
                <td>
                  <div id="addRemoveBtn@{{ question.id }}"
                    class="btn btn-xs @{{ question.btnClasses }}" v-on="click: addQeuestion(question)">
                    <i class="fa fa-plus"></i>
                  </div>
                  <div class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></div>
                </td>
                <td>

                    <div id="fragebanken-question-@{{question.id}}" class="fragebanken-trunkated-question trunkated" v-on="click: fragebankenExpand(question.id, $event)">
                      <div class="trunkated-text">
                        id:@{{ question.id }}
                        @{{ question.question }}
                        <ol class="ettkrysstva-list-lg">
                          <li class="ettkrysstva-list-item-lg" v-class="correct-answer : question.correct_answer == '1'">
                            @{{ question.answer1 }}
                          </li>
                          <li class="ettkrysstva-list-item-lg" v-class="correct-answer : question.correct_answer == 'x'">
                            @{{ question.answerx }}
                          <li class="ettkrysstva-list-item-lg" v-class="correct-answer : question.correct_answer == '2'">
                              @{{ question.answer2 }}
                          </li>
                        </ol>
                        <small class="pull-left text-gray-light">Denna fråga används i @{{ (question.tipspromenaderCount > 1 ) ? question.tipspromenaderCount + ' tipspromenader' : question.tipspromenaderCount + ' tipspromenad' }}</small>
                        <small class="pull-right text-gray-light">Skapad av: @{{ question.user.name + ' ' + question.created_at_diffForHumans}}</small>
                      </div>
                    </div>
                  </td>
                  </tr>
                </tbody>
              </table>
              <br><br>
{{--               <pre>
               @{{ $data | json }}
             </pre> --}}
           </div><!--  /.col-xs-12 -->
         </div><!--  /.row -->
       </div><!--  /.tab-ny-fraga -->
       <div role="tabpanel" class="tab-pane" id="tab-tipspromenader">
        <h1>Välj en färdig tipspromenad</h1>
      </div><!--  /.tab-tipspromenader -->
    </div><!--  /.tab-content -->
  </div><!--/.col-sm-8 /.left -->


  <!--right sidebar-->
  <div class="col-sm-4 canvas-full-height" id="sidebar">
    <div class="row">
    {{-- add bg color on affix --}}
      <div class="col-sm-12 " id="sidebarAffix" style="border-left: 3px solid #cfcfcf">
        <div class="visible-xs" id="toggle-offcanvas-wrapper">
          <div id="toggle-offcanvas" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i></div>
        </div>
        <div class="btn btn-success" style="margin-top:15px;" v-on="click: showSavedMsg" >Spara</div>
        <div class="btn btn-primary pull-right" style="margin-top:15px;"><i class="fa fa-print"></i> Skriv ut</div>
        <div class="">
        <h1 class="text-gray-light" style="white-space: pre" id="tipspromenad-name" data-active-tipspromenad="{{ $tipspromenad->id }}">{{ $tipspromenad->name }}</h1>
          <button class="btn btn-info btn-xs" style="position: absolute; right: 15px; top: 65px;">
            <i class="fa fa-pencil"></i>
          </button>
        </div>
        @if($tipspromenad->questions())

        <selected-questions new-order-of-selected="@{{ setNewOrderOfSelectedQuestions }}" remove-question="@{{ removeQuestion }}" selected-questions="@{{ selectedQuestions }}"></selected-questions>

        @else
          <p>Lägg till frågor</p>
        @endif
      </div>
    </div>
  </div><!--/left-->
</div><!--/row-->
@if($tipspromenad->showHelp)
<!-- skapatipspromenad -->
<div class="modal fade" id="showHelp" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                          <h1>Här gnuggas pedagogikens knölar</h1>
                          <p>
                            Vi får se till att göra någon slags enkel men tydlig förklaring på hur det fungerar här.
                            Ska man kanske rent av försöka bryta ner det i fler steg?
                          </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form>
                <div class="form-group pull-left">
                  <input id="showHelpAgain" name="mobile" type="checkbox" value="dont-show" class="input-md">
                  <label for="showHelpAgain">Jag förstår, visa inte detta meddelande igen.</label>
                </div>
                </form>
                <button type="button" class="btn btn-success" onclick="showHelpAgain()" data-dismiss="modal">Kanon, jag förstår!</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--// skapatipspromenad slut -->
@endif
<div class="saved-container">
  <div class="alert alert-info center-block text-center saved-msg text-white bg-primary border-primary" v-class="in : savedMsg">
    Dina ändringar är nu sparade
  </div>
</div>
</div><!--/.container-->

@endsection


@section('after-scripts-end')

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="{{ asset('js/vendor/jquery.ui.touch-punch.min.js') }}"></script>

<script src="{{ asset('js/tipspromenadVue.js') }}"></script>

<script>
@if($tipspromenad->showHelp)
    $(window).load(function(){
        $('#showHelp').modal('show');
    });

    function showHelpAgain () {
      if( $('input[id="showHelpAgain"]:checked').length > 0){
        $.ajax({
          type: "POST",
          url: '{{ action('Frontend\SkapaTipspromenadController@dontShowHelpAgain') }}',
          data: {
            _token: $('meta[name="_token"]').attr('content'),
            tipsID: {{ $tipspromenad->id }}
          },
          success : function(data){
              console.log(data);
          }
        });
      }
    }
@endif

  $(function() {

    // $( ".list-group" ).disableSelection()
    $('[data-toggle="popover"]').popover();

    $( ".list-group-item" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix" );

    $('#tipspromenad-name').truncate({
      width: 'auto',
      token: '&hellip;',
      side: 'right',
      addtitle: true,
    });
  });
</script>
@endsection
