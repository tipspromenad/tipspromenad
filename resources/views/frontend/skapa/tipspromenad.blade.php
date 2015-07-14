@extends('frontend.layouts.master-skapa')

@section('after-styles-end')
    <style type="text/css">
    .trunkated-item{
      padding-top: 4px;
      height: 36px;
      display:block;
      position: relative;
      overflow:hidden;
      z-index: 1040;
    }
    .ettkrysstva-list{
      margin-top: 15px;
      padding-left: 18px;
      font-size: 10px;
    }
    .question-buttons{
      margin-top: 2px;
    }

    </style>
@endsection

@section('content')
<div class="container">
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, laudantium reiciendis distinctio. Repellat laudantium odio debitis doloremque velit qui nisi, est non ipsa. Consequuntur, debitis!</p>
      <br>
      <ul class="nav nav-tabs nav-justified">
         <li role="presentation"><a href="#"><i class="fa fa-plus"></i> Ny fråga</a></li>
         <li role="presentation" class="active"><a href="#">Välj från frågebanken</a></li>
         <li role="presentation"><a href="#">Tipspromenader</a></li>
       </ul>
       <br>
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
          </div>
       <table class="table table-striped table-hover">
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
         <tr>
           <td>Column 1</td>
           <td>Column 2</td>
           <td>Column 3</td>
           <td>Column 4</td>
           <td>Column 5</td>
         </tr>
       </table>
    </div><!--/.col-xs-12.col-sm-8-->

    <!--left-->
    <div class="col-sm-4 canvas-full-height" id="sidebar">
      <div class="col-xs-12 bg-gray-lighter" id="sidebarAffix">
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
          <div class="list-group-item trunkated-item">
            <div class="row">
              <div class="col-xs-8 col-sm-7 col-md-8">
              <div class="question-number pull-left">1.</div>
                <p class="list-group-item-text trunkated-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias dicta, incidunt rem accusamus quae illo perspiciatis beatae eaque expedita.</p>
              </div>
              <div class="col-xs-4 col-sm-5 col-md-4 text-gray-light question-buttons text-center">
                <div class="question-right-answer pull-left">X</div>
                <i onclick="console.log('click on: ellipsis')"class="fa fa-ellipsis-v fa-2x"></i>
                <span>
                  <i onclick="console.log('click on: arrows')"class="fa fa-arrows-v fa-2x pull-right"></i>
                </span>
              </div>
              <div class="col-xs-12 trunkated-text">
                <ol class="ettkrysstva-list">
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, velit.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quae eligendi unde saepe, assumenda, fugit.</li>
                </ol>
              </div><!-- /.col-xs-12 -->
            </div><!-- /.row -->
          </div><!-- /.list-group-item -->
          <div class="list-group-item trunkated-item">
            <div class="row">
              <div class="col-xs-8 col-sm-7 col-md-8">
              <div class="question-number pull-left">2.</div>
                <p class="list-group-item-text trunkated-text">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              </div>
              <div class="col-xs-4 col-sm-5 col-md-4 text-gray-light question-buttons text-center">
                <div class="question-right-answer pull-left">2</div>
                <i onclick="console.log('click on: ellipsis')"class="fa fa-ellipsis-v fa-2x"></i>
                <span>
                  <i onclick="console.log('click on: arrows')"class="fa fa-arrows-v fa-2x pull-right"></i>
                </span>
              </div>
              <div class="col-xs-12 trunkated-text">
                <ol class="ettkrysstva-list">
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, velit.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quae eligendi unde saepe, assumenda, fugit.</li>
                </ol>
              </div><!-- /.col-xs-12 -->
            </div><!-- /.row -->
          </div><!-- /.list-group-item -->

          <div class="list-group-item trunkated-item">
            <div class="row">
              <div class="col-xs-8 col-sm-7 col-md-8">
              <div class="question-number pull-left">3.</div>
                <p class="list-group-item-text trunkated-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex provident officiis cum, nihil dolore suscipit.</p>
              </div>
              <div class="col-xs-4 col-sm-5 col-md-4 text-gray-light question-buttons text-center">
                <div class="question-right-answer pull-left">X</div>
                <i onclick="console.log('click on: ellipsis')"class="fa fa-ellipsis-v fa-2x"></i>
                <span>
                  <i onclick="console.log('click on: arrows')"class="fa fa-arrows-v fa-2x pull-right"></i>
                </span>
              </div>
              <div class="col-xs-12 trunkated-text">
                <ol class="ettkrysstva-list">
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, velit.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quae eligendi unde saepe, assumenda, fugit.</li>
                </ol>
              </div><!-- /.col-xs-12 -->
            </div><!-- /.row -->
          </div><!-- /.list-group-item -->

          <div class="list-group-item trunkated-item">
            <div class="row">
              <div class="col-xs-8 col-sm-7 col-md-8">
              <div class="question-number pull-left">4.</div>
                <p class="list-group-item-text trunkated-text">Lorem ipsum dolor sit amet, consectetur.</p>
              </div>
              <div class="col-xs-4 col-sm-5 col-md-4 text-gray-light question-buttons text-center">
                <div class="question-right-answer pull-left">1</div>
                <i onclick="console.log('click on: ellipsis')"class="fa fa-ellipsis-v fa-2x"></i>
                <span>
                  <i onclick="console.log('click on: arrows')"class="fa fa-arrows-v fa-2x pull-right"></i>
                </span>
              </div>
              <div class="col-xs-12 trunkated-text">
                <ol class="ettkrysstva-list">
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, velit.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quae eligendi unde saepe, assumenda, fugit.</li>
                </ol>
              </div><!-- /.col-xs-12 -->
            </div><!-- /.row -->
          </div><!-- /.list-group-item -->
         </div>
        </div>
      </div>
    </div><!--/left-->
  </div><!--/row-->
</div><!--/.container-->
@endsection


@section('after-scripts-end')
<script>
$('.trunkated-item').click(function(e) {
  if($(e.target).is('.trunkated-text, .ettkrysstva-list, .ettkrysstva-list li')){
    var h = $(this)[0].scrollHeight;

    if($(this).hasClass('hide-trunkated')) {
        $(this).animate({height:40},200)
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
