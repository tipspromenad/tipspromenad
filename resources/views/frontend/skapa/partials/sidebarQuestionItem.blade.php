<div id="ulScroll">
  <div class="list-group">

    <div class="list-group-item trunkated-item" v-repeat="question : selectedQuestions | orderBy 'question.orderOfQuestions'" v-on="click: expandTrunkatedItem($event, question.id)" data-question-id="@{{ question.id }}" id="selectedQID@{{ question.id }}">
      <div class="row">
        <div class="col-xs-8 col-sm-7 col-md-8">
          <div class="selected-question-number pull-left"></div>
          <p class="list-group-item-text trunkated-text">
            id: @{{ question.id }} - @{{ question.question }}
          </p>
        </div>
        <div class="col-xs-4 col-sm-5 col-md-4 text-gray-light selected-question-buttons text-center">
          <div class="selected-question-right-answer pull-left">@{{ question.correct_answer }}</div>
          <div class="btn-group elipsis-buttonelipsis-button" data-container="body"
          data-html="true" data-toggle="popover" data-placement="left"
          data-content="
          <i class='fa fa-pencil-square-o fa-2x text-primary text-hover pointer' alt='Redigera fråga' alt='Redigera fråga'
          ></i>
          <i class='fa fa-times fa-2x text-danger text-hover pointer' v-on='click: addRemoveQuestionToSelected(question)' alt='Ta bort fråga' title='Ta bort fråga'
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
            @{{ question.answer1 }}
          </li>
          <li class="ettkrysstva-list-item">
            @{{ question.answerx }}
          </li>
          <li class="ettkrysstva-list-item">
            @{{ question.answer2 }}
          </li>
        </ol>
      </div><!-- /.col-xs-12 -->
    </div><!-- /.row -->
  </div><!-- /.list-group-item -->

</div><!-- /.list-group -->
</div><!-- /.ulScroll -->
