@extends('frontend.layouts.master-skapa')

@section('after-styles-end')
    <style type="text/css">
    .saved-container{
      position: fixed;
      top: 20px;
      width: 100%;
      z-index: 0;
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
    .dropdown {
          position: absolute;
        }
    </style>
@endsection

@section('content')
<?php
require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();
 ?>

<div class="container" id="skapa">
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-8">
      <p>lorem ipsum dolor sit amet, consectetur adipisicing elit. cumque, laudantium reiciendis distinctio. repellat laudantium odio debitis doloremque velit qui nisi, est non ipsa. consequuntur, debitis!</p>
      <br>
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
              <textarea name="egenfraga" id="" cols="80" rows="10"></textarea>
            </div>
            <div class="form-group">
              <h3>Svarsalternativ:</h3>
              <p>Skriv svarsalternativen i respektive fält och vilket svar som är rätt.</p>
              <input id="rättsvar1" name="" type="text" placeholder="" class="form-control input-md">
              <input id="rättsvarX" name="" type="text" placeholder="" class="form-control input-md">
              <input id="rättsvar2" name="" type="text" placeholder="" class="form-control input-md">
            </div>
          </form>
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <h4>Lägg till kategorier:</h4>
              <p>Kategorier möjliggör enklare sökning efter frågor</p>
              <input id="kategorier" name="" type="text" placeholder="" class="form-control input-md">
            </div>
            <div class="col-xs-12 col-sm-6">
              <h4>Kan frågan användas av andra?</h4>
              <p>Spara frågan genom att välja ett av nedanstående alternativ.</p>
              <p>
                <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Ja, gör frågan publik.</button>
              </p>
              <p>
                <button type="button" class="btn btn-warning"><i class="fa fa-remove"></i> Nej, gör frågan privat.</button>
              </p>
            </div>
          </div>
        </div><!--  /.tab-ny-fraga -->

        <div role="tabpanel" class="tab-pane active" id="tab-fragebanken">
        <div class="row">
          <div class="col-sm-6">
              <h1>Välj fråga från frågebanken</h1>
              <div class="btn btn-xs btn-primary" v-on="click: showSavedMsg">Visa spara skylten</div>
          </div>
          <div class="col-sm-6">
            <br>
            <div class="input-group">
              <input type="text" class="form-control" v-model="searchQuery" placeholder="Sök bland frågorna...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div><!--/.row-->
         <div class="row">
           <div class="col-xs-12">
             <table class="table table-striped table-hover">
              <thead>
                <td>
                  &nbsp;
                </td>
                <td>
                  Fråga
                  <div class="pull-right">
                    Sortera efter: <span class="orderBy" v-on="click: orderby = 'created_at', click: order = ! order">nyaste</span>
                     -
                    <span class="orderBy" v-on="click: orderby = 'created_at', click: order = ! order">mest använda</span>
                     -
                    <span class="orderBy" v-on="click: orderby = 'user.name', click: order = ! order">Skapare</span>
                  </div>
                </td>
              </thead>
              <tbody>
                <tr v-repeat="questions | filterBy searchQuery | orderBy orderby order">
                  <td>
                    <div class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></div>
                    <div class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></div>
                  </td>
                  <td>

                    <div id="fragebanken-question-@{{id}}" class="fragebanken-trunkated-question trunkated" v-on="click: fragebankenExpand(id, $event)">
                      <div class="trunkated-text">
                        @{{ question }}
                        <ol class="ettkrysstva-list-lg">
                          <li class="ettkrysstva-list-item-lg" v-class="correct-answer : correct_answer == '1'">
                              @{{ answer1 }}
                          </li>
                          <li class="ettkrysstva-list-item-lg" v-class="correct-answer : correct_answer == 'x'">
                            @{{ answerx }}
                          <li class="ettkrysstva-list-item-lg" v-class="correct-answer : correct_answer == '2'">
                            @{{ answer2 }}
                          </li>
                        </ol>
                        <small class="pull-left text-gray-light">Denna fråga används i @{{ (tipspromenaderCount > 1 ) ? tipspromenaderCount + ' tipspromenader' : tipspromenaderCount + ' tipspromenad' }}</small>
                        <small class="pull-right text-gray-light">Skapad av: @{{ user.name + ' ' + created_at_diffForHumans}}</small>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
             </table>
             <br><br>
             <pre>
               @{{ $data | json }}
             </pre>
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
        <div class="col-sm-12 bg-gray-lighter" id="sidebarAffix">
        <div class="visible-xs" id="toggle-offcanvas-wrapper">
          <div id="toggle-offcanvas" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i></div>
        </div>
          <div class="">
            <h1 class="text-gray-light" style="white-space: pre" id="tipspromenad-name">Min tipspromenad är asd asd asd</h1>
            <button class="btn btn-info btn-xs" style="position: absolute; right: 10px; top: 10px;">
              <i class="fa fa-pencil"></i>
            </button>
          </div>
            <div id="ulScroll">
              <div class="list-group">
              @for ($i = 1; $i <= rand(7, 25); $i++)
                <div class="list-group-item trunkated-item">
                  <div class="row">
                    <div class="col-xs-7 col-sm-7 col-md-8">
                    <div class="question-number pull-left">{{ $i }}.</div>
                      <p class="list-group-item-text trunkated-text">
                        {{ $faker->sentence($nbWords = $faker->numberBetween($min = 8, $max = 25)) }}
                      </p>
                    </div>
                    <div class="col-xs-4 col-sm-5 col-md-4 text-gray-light question-buttons text-center">
                      <div class="question-right-answer pull-left">{{ $faker->randomElement($array = array ('1','X','2')) }}</div>
                      <div class="btn-group ">
                          <i onclick="console.log('click on: ellipsis')"class="fa fa-ellipsis-v fa-2x dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        <ul class="dropdown-menu" style="z-index: 10000;">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                      <span>
                        <i onclick="console.log('click on: arrows')"class="fa fa-arrows-v fa-2x pull-right" style="margin-right: 8px;"></i>
                      </span>
                    </div>
                    <div class="col-xs-12 trunkated-text">
                      <ol class="ettkrysstva-list">
                        <li class="ettkrysstva-list-item">
                          {{ $faker->sentence($nbWords = $faker->numberBetween($min = 3, $max = 15)) }}
                        </li>
                        <li class="ettkrysstva-list-item">
                        Här är en nestad lista innuti denna &lt;li&gt;
                        <ul>
                          <li>nested list 1</li>
                          <li>nested list 2</li>
                          <li>nested list 3</li>
                        </ul></li>
                        <li class="ettkrysstva-list-item">
                          {{ $faker->sentence($nbWords = $faker->numberBetween($min = 3, $max = 8)) }}
                        </li>
                      </ol>
                    </div><!-- /.col-xs-12 -->
                  </div><!-- /.row -->
              </div><!-- /.list-group-item -->
              @endfor
            </div><!-- /.list-group -->
         </div><!-- /.ulScroll -->
        </div>
      </div>
    </div><!--/left-->
  </div><!--/row-->
  <div class="saved-container">
    <div class="alert alert-info center-block text-center saved-msg" v-class="in : savedMsg">Dina ändringar är nu sparade</div>
  </div>
</div><!--/.container-->
@endsection


@section('after-scripts-end')

<script src="{{ asset('js/bundle.js') }}"></script>

<script>

$('.trunkated-item').click(function(e) {
  if($(e.target).is('.trunkated-text, .ettkrysstva-list, .ettkrysstva-list li')){
    var h = $(this)[0].scrollHeight;

    if($(this).hasClass('hide-trunkated')) {
        $(this).animate({height:38},200)
        .removeClass('hide-trunkated')
        .addClass('trunkated');
      } else {
        console.log('scrollHeight: ' + h);
        $(this).animate({height:h},200)
        .addClass('hide-trunkated')
        .removeClass('trunkated');
      }
  }
});

$(function() {

    $('#tipspromenad-name').truncate({
    width: 'auto',
    token: '&hellip;',
    side: 'right',
    addtitle: true,
  });
});
</script>
@endsection
