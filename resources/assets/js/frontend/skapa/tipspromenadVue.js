var Vue = require('vue');

Vue.use(require('vue-resource'));


Vue.config.debug = true; // turn on debugging mode

new Vue({
    el: '#tipspromenadVueJS',
    data: {
            tipsID: '',
            savedMsg: false,
            postData: {
                _token: $('meta[name="_token"]').attr('content'),
                tipsID: document.getElementById('tipspromenad-name').dataset.activeTipspromenad
            },
            orderOfSelectedQuestions: [],
            test: 'Hello world',
            selectedQuestions: [],
            allQuestions: [],
            tempSelectedQ: [],
        },

    components: {
        selectedQuestions: require('./views/selectedQuestions'),
    },
    ready: function () {
        var tips = document.getElementById('tipspromenad-name');
        this.tipsID = tips.dataset.activeTipspromenad;
        this.getAllQuestions();
        this.getTrueDocumentHeight(0);
    },
    filters:{
        setButtonPropertiesFilter: function (questions) {
            for (var question of questions) {
                if(question.selected === true){
                    // console.log('btn förändrad i filter ID: "'+question.id+'"');
                    this.setAddedProperties(question)
                }
                else{
                    this.setRemovedProperties(question);
                }
            }
            return questions;
        }
    },
    methods: {
        getAllQuestions: function () {
            this.$http.get('/tipspromenad/vuejs/all/questions/' + this.tipsID, function (allQuestions) {
                this.$set('allQuestions', allQuestions);
                this.getOrderOfSelectedQuestions();
            })
        },
        getOrderOfSelectedQuestions: function () {
            this.$http.get('/tipspromenad/vuejs/orderOfQuestions/' + this.tipsID, function (orderOfSelectedQuestions) {
                this.$set('orderOfSelectedQuestions', orderOfSelectedQuestions);
                this.addToSelectedQuestion();
            })
        },
        addToSelectedQuestion: function () {
            var $that = this;
            for(var question of $that.allQuestions){
                var index = $that.orderOfSelectedQuestions.indexOf(question.id.toString())
                // console.log('finding Index id:'+question.id + ' index:'+index)
                    if( index  > -1){
                        // console.log('add index: '+index +' value: "'+question.id+'"')
                        $that.addRemoveQeuestion(question, index)
                    }
            }
        },
        addRemoveQeuestion: function (question, indexSpecific = "false") {
            if(question.selected != true && this.orderOfSelectedQuestions.indexOf(question.id) == -1){
                //lägg till fråga
                console.log('added ID: "'+question.id+'"');
                this.setAddedProperties(question)
                if(indexSpecific != "false"){
                    this.selectedQuestions.$add(indexSpecific, question);
                }
                else{
                    this.selectedQuestions.push(question);
                    console.log('pushing to ordOfSeQs!');
                    this.orderOfSelectedQuestions.push(question.id);
                    this.saveAndSyncSelectedQuestions();
                }
                question.$set('selected', !question.selected);
            }
        },
        setAddedProperties: function (question) {
            question.$set('btnClasses', 'btn-default');
            this.selectedQuestions.$delete(question);
            $('#addRemoveBtn'+question.id).attr('disabled', 'disabled');
        },
        setRemovedProperties: function (question) {
            question.$set('btnClasses', 'btn-primary');
            $('#addRemoveBtn'+question.id).attr('disabled', false);
        },
        addQeuestion: function (question) {
            this.addRemoveQeuestion(question);
        },
        removeQuestion: function (question) {
            if(question.selected == true){
                //ta bort fråga
                console.log('removed ID: "'+question.id+'"');
                this.removeQuestionFromSelected(question);
                this.setRemovedProperties(question);
                this.saveAndSyncSelectedQuestions();
                question.$set('selected', !question.selected);
            }
        },
        removeQuestionFromSelected: function (question) {
            var dropQ;
            for(var sQuestion of this.selectedQuestions){
                if(sQuestion.id == question.id){
                    dropQ = sQuestion;
                }
            }
            this.selectedQuestions.$remove(dropQ);

            var index = this.orderOfSelectedQuestions.indexOf(question.id.toString());
            console.log('index:'+index)
            if (index > -1) {
                this.orderOfSelectedQuestions.splice(index, 1);
            }
        },
        setNewOrderOfSelectedQuestions: function (newArray) {
            console.log('här är den nya ordningen: ' + newArray)
            for(var question of this.selectedQuestions){
                for(var id of newArray){
                    var newIndex = newArray.indexOf(id)
                    if(id == question.id){
                        this.tempSelectedQ.$add(newIndex, question)
                    }
                }
            }
            this.selectedQuestions = this.tempSelectedQ
            this.tempSelectedQ = [];
            this.orderOfSelectedQuestions = newArray;
            this.saveAndSyncSelectedQuestions();
            return 'success dude!';
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
        saveAndSyncSelectedQuestions: function () {
            var data = {
                order_of_questions: this.orderOfSelectedQuestions,
                _token: $('meta[name="_token"]').attr('content'),
                tipsID: document.getElementById('tipspromenad-name').dataset.activeTipspromenad
            }
            this.$http.post('/tipspromenad/save-and-sync-selected-questions', data, function (returnData) {
                console.log('VueJS.syncQ(|'+returnData + '])' );
                this.showSavedMsg();
            })
            return 'saved and synced :)'
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
                  top: 150,
                  bottom: 120
                }
              });
            };
        }, delay);
        },
    }
});



