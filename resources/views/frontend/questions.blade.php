<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>VueJS</title>
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <meta id="token" name="token" value="{{ csrf_token() }}">

  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style>
    body{
      margin: 3em 0;
    }
    .saved-container{
      position: fixed;
      top: 20px;
      width: 100%;
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
  </style>
</head>
<body>
  <div class="container-fluid" id="questions">
    <div class="row">
      <div class="col-xs-12">
       <img src="{{ asset('img/frontend/vuejs.png') }}" class="img-responsive" alt="" style="max-width: 100px;">
       <h1>Vue.JS <small>question app <button class="btn btn-xs btn-success" v-on="click: ShowSavedMsg();">Save button</button></small></h1>
       <p>Just nu är det bara förinlagda lotsas-frågor som är inlagda, man kan (just nu) inte skapa nya, bara redigera befintliga. Tanken är dock att om man redigerar en fråga, så läggs då den redigerade frågan i "Valda" och den frågan som ligger i "biblioteket" skall inte ändras, det gör dom nu dock..</p>
     </div><!-- /col -->
   </div><!-- /row -->
   <div class="row">
    <div class="col-sm-8">
      <h3>@{{ heading }}</h3>
      <ul class="list-group">
        <li class="list-group-item" v-repeat="question: questions">
          <div class="container">
            <div class="row">
              <div class="col-xs-2 col-md-2">
                <button class="btn btn-xs btn-success" v-on="click: addQuestion(question)"><i class="fa fa-plus"></i> Lägg till</button>
                <button class="btn btn-xs btn-info" v-on="click: addAndEditQuestion(question)" data-toggle="modal" data-target="#editQuestion"><i class="fa fa-pencil"></i> Redigera och lägg till</button>
              </div>
              <div class="col-xs-10 col-md-10">
                <h2>@{{ question.name }}</h2>
                <p>@{{ question.question }}</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div><!--  /.col -->
    <div class="col-sm-4">
      <h3>Valda frågor</h3>
      <ul class="list-group">
        <li class="list-group-item" v-repeat="question: addedQuestions">
          <div class="container">
            <div class="row">
              <div class="col-xs-2 col-md-1">
                <button class="btn btn-xs btn-danger" v-on="click: removeAddedQuestion(question)"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#editQuestion" v-on="click: editQuestion(question)">
                  <i class="fa fa-pencil"></i>
                </button>
              </div>
              <div class="col-xs-10 col-md-11">
                <h2>@{{ question.name }}</h2>
                <p>@{{ question.question }}</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="col-xs-12">
      <p>Här ligger all data som sparas i VueJS, jag lägger ut all data här för att kunna granska och se vad som händer.</p>
     <pre>@{{ $data | json }}</pre>
   </div>
 </div><!-- row -->

 <!-- Modal -->
 <div class="modal fade" tabindex="-1" id="editQuestion" role="dialog"
 aria-labelledby="editQuestion" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
                 <button type="button" class="close"
                    data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                 </button>
                 <h4 class="modal-title" id="myModalLabel">
                     Modal title
                 </h4>
             </div>

             <!-- Modal Body -->
             <div class="modal-body">
                 <form role="form">
                   <div class="form-group">
                    <label for="name">Namn på frågan</label>
                    <input type="text" class="form-control" id="name" v-model="editQuestion.name" />
                  </div>
                  <div class="form-group">
                    <label for="question">Fråga:</label>
                    <textarea class="form-control" rows="5" id="question" v-model="editQuestion.question"></textarea>
                  </div>
                  <div class="checkbox">
                    <label>
                        <input type="checkbox"/> Rätt svar
                    </label>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                 </form>
             </div>

             <!-- Modal Footer -->
             <div class="modal-footer">
                 <button type="button" class="btn btn-default"
                         data-dismiss="modal">
                             Close
                 </button>
                 <button type="button" class="btn btn-primary" v-on="click: saveEditedData()" data-dismiss="modal">
                     Save changes
                 </button>
             </div>
         </div>
     </div>
 </div>
 <div class="saved-container">
   <div class="alert alert-success center-block text-center saved-msg" v-class="in : savedMsg">Dina ändringar är nu sparade</div>
 </div>

</div><!--  /.container -->

<script src="{{ asset('js/vue.js') }}"></script>
<script src="js/temp-vue/questions.js"></script>
</body>
</html>
