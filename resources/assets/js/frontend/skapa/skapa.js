var Vue = require('vue');
var VueResource = require('vue-resource');
var jQuery = require('jquery');
Vue.use(VueResource, jQuery);

Vue.config.debug = true;

new Vue({
    el: '#skapa',

    data: {
        savedMsg: false,
        searchQuery: '',
        orderby: 'created_at',
        order: 'true',
        orderOfQuestions: [],
        tipsID: '',
        questions: [],
        selectedQuestions: [],
    },
    ready: function () {
        var tips = document.getElementById('tipspromenad-name');
        this.tipsID = tips.dataset.activeTipspromenad;
        this.fetchQuestions();

        this.fethSelectedQuestions();
        this.getOrderOfQuestions();
        this.getTrueDocumentHeight(2000);
    },
    methods: {
        fetchQuestions: function () {
            this.$http.get('/tipspromenad/vuejs/all/questions/'+ this.tipsID, function (questions) {
                this.$set('questions', questions);
            })
        },
        fethSelectedQuestions: function () {
          this.$http.get('/tipspromenad/vuejs/selectedQuestions/' + this.tipsID, function (selectedQuestions) {
              this.$set('selectedQuestions', selectedQuestions);
              this.setOrderOfQuestions();
          })
        },
        getOrderOfQuestions: function () {
          this.$http.get('/tipspromenad/vuejs/orderOfQuestions/' + this.tipsID, function (orderOfQuestions) {
              this.$set('orderOfQuestions', orderOfQuestions);
          })
        },
        updateSelectedQuestionIndex: function () {
            $('.list-group-item').each(function(index, item){
              // Set each items "alt" attribute to it's corresponding spot in the list.
              // Added +1 so that it uses numbers 1-7 instead of 0-6
              $(item).find('.selected-question-number').html(index + 1 + '.');
         });
        },
        updateOrder: function () {
            this.updateSelectedQuestionIndex();
            this.getOrderOfQuestions();
            this.showSavedMsg();
        },
        addRemoveQuestionToSelected: function (question) {
            var found = false;
            for(var i = 0; i < this.selectedQuestions.length; i++) {
                if (this.selectedQuestions[i].id == question.id) {
                    found = true;
                    break;
                }
            }
            var button = $('#add-question-button-id-'+ question.id);
            if(!found){
                console.log('this question is now added');
                this.selectedQuestions.push(question);
                button.removeClass('btn-primary').addClass('btn-warning')
                    .find('i').removeClass('fa-plus').addClass('fa-minus');
                //add it through AJAX
                // $tipspromenad->syncQ(questionID)
                var pos = this.orderOfQuestions.length;
                this.orderOfQuestions.$add(pos, question.id.toString());
                console.log('VueJS.current order: ' + this.orderOfQuestions);
            }
            else{
                console.log('removed this selected question');
                button.removeClass('btn-warning').addClass('btn-primary')
                    .find('i').removeClass('fa-minus').addClass('fa-plus');

                var id = question.id;
                for(var i = 0; i < this.selectedQuestions.length; i++) {
                    if(this.selectedQuestions[i].id == id) {
                        this.selectedQuestions.splice(i, 1);
                        break;
                    }
                }

                // var index = this.orderOfQuestions.indexOf(question.id);
                // if(index <= -1){
                //     var index = this.orderOfQuestions.indexOf("5");
                // }
                // console.log('index: '+index)
                // if (index > -1) {
                //     this.orderOfQuestions.splice(index, 1);
                // }
                this.orderOfQuestions.$remove(question.id.toString());

                console.log('VueJScurrent order: ' + this.orderOfQuestions);

                //add it through AJAX
                // $tipspromenad->syncQ(questionID)
            }
            this.saveAndSyncSelectedQuestions()
        },
        saveAndSyncSelectedQuestions: function () {
            var that = this;
            $.ajax({
              type: "POST",
              url: '/tipspromenad/save-and-sync-selected-questions',
              data: {
                _token: $('meta[name="_token"]').attr('content'),
                tipsID: this.tipsID,
                order_of_questions: this.orderOfQuestions
              },
              success : function(data){
                  console.log('VueJS.syncQ(): '+data);
                  that.showSavedMsg();
                  that.updateSelectedQuestionIndex();
              }
            });
        },
        setOrderOfQuestions: function () {
            // Create a temporary hash table to store the objects
            var tempObj = {};
            var objLength = this.selectedQuestions.length;
            var keyLength = this.orderOfQuestions.length;

            // Key each object by their respective id values
            for(var i = 0; i < objLength; i++) {
                tempObj[this.selectedQuestions[i].id] = this.selectedQuestions[i];
            }
            // Rebuild the this.selectedQuestions based on the order listed in the keyArray
            for(var i = 0; i < keyLength; i++) {
                this.selectedQuestions.$set(i, tempObj[this.orderOfQuestions[i]]);
            }
            // Remove the temporary object (can't ``delete``)
            tempObj = undefined;
        },
        getTrueDocumentHeight: function (delay) {
            setTimeout(function() {
            var body = document.body,
                html = document.documentElement;
            var docHeight = Math.max( body.scrollHeight, body.offsetHeight,html.clientHeight, html.scrollHeight, html.offsetHeight );
            console.log(docHeight);
            if(docHeight > 600){
              /* activate sidebar */
              $('#sidebarAffix').affix({
                offset: {
                  top: 60,
                  bottom: 80
                }
              });
            };
        }, delay);
        },
        showSavedMsg: function(){
            this.savedMsg = true;
            var $that = this;
            $('.saved-container').addClass('saved-container-z-index');
            setTimeout(function() {
                $('.saved-container').removeClass('saved-container-z-index');
                $that.savedMsg = false;
            }, 2000);
        },
        fragebankenExpand: function (id, e) {
            var $this = $("#fragebanken-question-" + id);
            var h = $this[0].scrollHeight;

            if($this.hasClass('hide-trunkated')) {
                // console.log('trunkate scrollHeight: ' + h);
                $this.animate({height:38},200)
                .removeClass('hide-trunkated')
                .addClass('trunkated');
              } else {
                // console.log('expand scrollHeight: ' + h);
                $this.animate({height:h},200)
                .addClass('hide-trunkated')
                .removeClass('trunkated');
              }
        },
    }
})
