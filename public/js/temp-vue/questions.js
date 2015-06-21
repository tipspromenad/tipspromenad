Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    el: '#questions',

    data: {
        heading: 'Select questions',
        addedQuestions: [],
        editQuestion: [],
        questions: [
            {
            name: 'Question name',
            question: 'My question',
            answer1: 'Lorem ipsum dolor.',
            anwerx: 'Lorem ipsum dolor sit amet.',
            answer3: '1337',
            correct_answer: 'x'
            },
            {
            name: 'Nice question',
            question: 'Verry nice question sir',
            answer1: 'Lorem ipsum dolor.',
            anwerx: 'Lorem ipsum dolor sit amet.',
            answer3: '1337',
            correct_answer: 'x'
            }
        ],
        savedMsg: false,
    },
    methods: {
        ShowSavedMsg: function(){
            this.savedMsg = true;
            var $that = this;
            setTimeout(function() {
                $that.savedMsg = false;
            }, 2000);
        },
        addQuestion: function(question) {
            var exist = $.inArray(question, this.addedQuestions);
           if(exist === -1){ // om frågan inte är tillagd
             this.addedQuestions.push(question);
           }
            //push the added question via post to session
            this.ShowSavedMsg();
        },
        removeAddedQuestion: function(question) {
            var index = $.inArray(question, this.addedQuestions);
            this.addedQuestions.splice(index, 1);
            //pop the added question via post to session
            this.ShowSavedMsg();
        },
        editQuestion: function(question) {
            this.editQuestion = question;
        },
        addAndEditQuestion: function(question) {
            this.editQuestion = question;
        },
        saveEditedQuestion: function() {
            this.addedQuestions.push(editQuestion);
            this.ShowSavedMsg();
        }

    },
    ready: function() {
        //hämta alla questions och set(questions)
    },

});
