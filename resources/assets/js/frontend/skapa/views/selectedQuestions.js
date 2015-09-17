module.exports = {
    template: require('./selectedQuestions.template.html'),

    props: ['remove-question', 'selected-questions', 'new-order-of-selected'],

    data: function () {
        return {
          tempRemoveQuestion: ''
        }
    },
    ready: function () {
        var $this = this;
        $( ".list-group" ).sortable({
                connectWith: ".list-group",
                handle: ".sortable-handle",
                cancel: ".portlet-toggle",
                placeholder: "selected-question-placeholder",
                forcePlaceholderSize: true,
                start: function(event, ui) {
                  console.log('start of sortable');
                },
                stop: function(event) {
                  console.log('stop of sortable');
                  var tempArr = [];
                  $('div[data-question-id]').each(function() {
                    tempArr.push($(this).attr('data-question-id') )
                  })
                  console.log('success to add? : ' + $this.newOrderOfSelected(tempArr));
                }
              })
        $('body').on('click', function (e) {
            $('.popoverTest').each(function () {
                //the 'is' for buttons that trigger popups
                //the 'has' for icons within a button that triggers a popup
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide');
                    $(this).popover('destroy')
                }
            });
        });
          },
    methods: {
        removeQuestion: function (question) {
        },
        newOrderOfSelected: function (newArray) {
        },
        funcStuff: function (question) {
          console.log('preparing tempQuestion.id: '+ question.id);
          this.tempRemoveQuestion = question;
                $(".popoverTest").popover({
                        html : true,
                        placement: 'left',
                        container: '#sidebarAffix',
                        content: '<div><i class="fa fa-pencil-square-o fa-2x text-primary text-hover pointer" alt="Redigera fråga" alt="Redigera fråga" onclick="console.log(edit id:' + question.id + ')"></i><i class="fa fa-remove fa-2x text-danger text-hover pointer" alt="Ta bort fråga" title="Ta bort fråga" onclick="event.preventDefault(); '+ "$('#tempRemoveButton').click()"+'"></i></div>',
                    }).bind(question);
                $(".popoverTest").popover('show');
        // content: function() {
        //   return $('#popoverExampleTwoHiddenContent').html();
        // }
        },
        removeSpecialTrigger: function () {
          this.removeQuestion(this.tempRemoveQuestion);
          this.tempRemoveQuestion = '';
        },
        expandTrunkatedItem: function (id, e) {
              console.log('expandTrunkatedItem plz')
              if($(e.target).is('.trunkated-text, .selected-question-number, .selected-question-right-answer, .ettkrysstva-list, .ettkrysstva-list li')){
                console.log('expand trunkated item')
                var that = $('#selectedQID'+ id);
                var h = that[0].scrollHeight;

                if(that.hasClass('hide-trunkated')) {
                  that.animate({height:38},200)
                  .removeClass('hide-trunkated')
                  .addClass('trunkated');
                } else {
                  console.log('scrollHeight: ' + h);
                  that.animate({height:h},200)
                  .addClass('hide-trunkated')
                  .removeClass('trunkated');
                }
              }else if($(e.target).is('.fa-remove')){
                e.preventDefault();
                console.log('remove plz')
              }

        }

    }
}
