@extends('frontend.layouts.master-skapa')

@section('after-styles-end')
    <style type="text/css">
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
          <div class="list-group-item">
            <div class="row">
              <div class="col-xs-8 col-md-9">
                <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias dicta, incidunt rem accusamus quae illo perspiciatis beatae eaque expedita.</p>
              </div>
              <div class="col-xs-4 col-md-3 text-gray-light">
                <i class="fa fa-ellipsis-v fa-2x"></i>
                <span>
                  <i class="fa fa-arrows-v fa-2x pull-right"></i>
                </span>
              </div>
            </div>
          </div>
           <div class="list-group-item">
             <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quia?</p>
           </div>
           <div class="list-group-item">
             <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quia?</p>
           </div>
         </div>
        </div>
      </div>
    </div><!--/left-->
  </div><!--/row-->
</div><!--/.container-->

@endsection


@section('after-scripts-end')
<script>
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
