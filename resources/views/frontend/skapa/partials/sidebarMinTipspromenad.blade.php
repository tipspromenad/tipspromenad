<!--right sidebar-->
<div class="col-sm-4 canvas-full-height" id="sidebar">
  <div class="row">
    <div class="col-sm-12 bg-gray-lighter" id="sidebarAffix">
      <div class="visible-xs" id="toggle-offcanvas-wrapper">
        <div id="toggle-offcanvas" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i></div>
      </div>
      <div class="">
        <h1 class="text-gray-light" style="white-space: pre" id="tipspromenad-name">

        </h1>
        <button class="btn btn-info btn-xs" style="position: absolute; right: 10px; top: 10px;">
          <i class="fa fa-pencil"></i>
        </button>
      </div>
      <div id="ulScroll">
        <div class="list-group">
          @for ($i = 1; $i <= rand(7, 25); $i++)
          <div class="list-group-item trunkated-item">
            <div class="row">
              <div class="col-xs-8 col-sm-7 col-md-8">
                <div class="selected-question-number pull-left">{{ $i }}.</div>
                <p class="list-group-item-text trunkated-text">
                  op: {{ $i }} - {{ $faker->sentence($nbWords = $faker->numberBetween($min = 8, $max = 25)) }}
                </p>
              </div>
              <div class="col-xs-4 col-sm-5 col-md-4 text-gray-light selected-question-buttons text-center">
                <div class="selected-question-right-answer pull-left">{{ $faker->randomElement($array = array ('1','X','2')) }}</div>
                <div class="btn-group elipsis-buttonelipsis-button" data-container="body"
                data-html="true" data-toggle="popover" data-placement="left"
                data-content="
                <i class='fa fa-pencil-square-o fa-2x text-primary text-hover pointer'
                data-toggle='tooltip' data-placement='top' title='Redigera fråga'
                ></i>
                <i class='fa fa-times fa-2x text-danger text-hover pointer'
                data-toggle='tooltip' data-placement='top' title='Ta bort fråga från din tipspromenad'
                ></i>
                ">
                <i class="fa fa-ellipsis-v fa-2x"></i>
              </div>
              <span>
                <i class="fa fa-arrows-v fa-2x sortable-handle"></i>
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
