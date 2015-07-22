@extends('frontend.layouts.master-skapa')

@section('after-styles-end')
    <style type="text/css">
    .trunkated-item{
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

    </style>
@endsection

@section('content')
<?php
require_once '../vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();
 ?>

<div class="container">
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, laudantium reiciendis distinctio. Repellat laudantium odio debitis doloremque velit qui nisi, est non ipsa. Consequuntur, debitis!</p>
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
          <h1>Ny fråga</h1>
          <h3>Här lägger man till ny fråga</h3>
        </div><!--  /.tab-ny-fraga -->

        <div role="tabpanel" class="tab-pane active" id="tab-fragebanken">
        <div class="row">
          <div class="col-sm-6">
              <h1>Lorem ipsum</h1>
          </div>
          <div class="col-sm-6">
            <br>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Sök bland frågorna...">
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
                </td>
              </thead>
              <tbody>
              @for($i = 0; $i < 20; $i++)
                <tr>
                  <td>
                    <div class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></div>
                    <div class="btn btn-danger btn-xs"><i class="fa fa-minus"></i></div>
                  </td>
                  <td>

                    <div class="fragebanken-trunkated-question">
                      <div class="trunkated-text">
                        {{ $faker->sentence($nbWords = $faker->numberBetween($min = 10, $max = 35))}}
                        <ol class="ettkrysstva-list-lg">
                          <li class="ettkrysstva-list-item-lg">
                              {{ $faker->sentence($nbWords = $faker->numberBetween($min = 3, $max = 15)) }}
                          </li>
                          <li class="ettkrysstva-list-item-lg">
                          Här är en nestad lista innuti denna &lt;li&gt;
                          <ul>
                            <li>nested list 1</li>
                            <li>nested list 2</li>
                            <li>nested list 3</li>
                          </ul></li>
                          <li class="ettkrysstva-list-item-lg">
                            {{ $faker->sentence($nbWords = $faker->numberBetween($min = 3, $max = 8)) }}
                          </li>
                        </ol>
                      </div>
                    </div>
                  </td>
                </tr>
              @endfor
              </tbody>
             </table>
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
                      <i onclick="console.log('click on: ellipsis')"class="fa fa-ellipsis-v fa-2x"></i>
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
</div><!--/.container-->
@endsection


@section('after-scripts-end')
<script>
$('.fragebanken-trunkated-question').click(function(e) {
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
