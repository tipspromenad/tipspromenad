var Vue = require('vue');
var VueResource = require('vue-resource');
var jQuery = require('jquery');
Vue.use(VueResource, jQuery);

new Vue({
    el: '#skapa',

    data: {
        savedMsg: false,
        searchQuery: '',
        orderby: 'created_at',
        order: 'true',
        questions: [
    {
      "id": 1,
      "user_id": 2,
      "name": "Tomasa Stracke",
      "question": "Dolorum dolores quibusdam velit aut quaerat. Sunt laborum rem nihil debitis. Exercitationem nam magnam qui voluptas exercitationem corporis dolores. Vero totam enim quia minima eos consequatur.",
      "answer1": "Laboriosam voluptate neque unde cumque.",
      "answerx": "Ducimus velit vel veritatis autem doloribus.",
      "answer2": "Veniam et odit adipisci maxime et autem rerum sint.",
      "correct_answer": "x",
      "created_at": "2015-03-28 23:57:39",
      "updated_at": "2015-05-19 11:18:09",
      "tipspromenaderCount": 1,
      "created_at_diffForHumans": "3 månader sedan",
      "user": {
        "id": 2,
        "name": "Anders Svensson",
        "email": "user@user.com",
        "status": 1,
        "confirmation_code": "70845e84dfcffab752228158a834e545",
        "confirmed": 1,
        "created_at": "2015-06-17 00:53:23",
        "updated_at": "2015-06-17 00:53:23",
        "deleted_at": null
      },
      "tipspromenader": [
        {
          "id": 1,
          "user_id": 2,
          "name": "Prof. Jay Gutkowski Sr.",
          "description": "Placeat consequatur neque commodi adipisci libero voluptatem.",
          "mobile": 1,
          "mobile_question": 1,
          "created_at": "1978-08-28 17:17:50",
          "updated_at": "2006-10-21 00:07:11",
          "pivot": {
            "question_id": 1,
            "tipspromenad_id": 1,
            "created_at": "2015-07-23 23:21:07",
            "updated_at": "2015-07-23 23:21:07"
          }
        }
      ]
    },
    {
      "id": 2,
      "user_id": 2,
      "name": "Lemuel Kutch",
      "question": "Rerum aliquam repellat qui quo omnis sed optio. Possimus in eveniet voluptatum qui id fuga impedit. Minus et fugiat cupiditate ipsam recusandae. Dolores nihil cum officiis.",
      "answer1": "Et quibusdam culpa ut et et impedit officiis.",
      "answerx": "Minima ex voluptatum est molestias.",
      "answer2": "Officia natus facilis dolorum quia sequi.",
      "correct_answer": "1",
      "created_at": "2015-01-01 19:58:00",
      "updated_at": "2015-12-15 21:23:59",
      "tipspromenaderCount": 1,
      "created_at_diffForHumans": "6 månader sedan",
      "user": {
        "id": 2,
        "name": "Anders Svensson",
        "email": "user@user.com",
        "status": 1,
        "confirmation_code": "70845e84dfcffab752228158a834e545",
        "confirmed": 1,
        "created_at": "2015-06-17 00:53:23",
        "updated_at": "2015-06-17 00:53:23",
        "deleted_at": null
      },
      "tipspromenader": [
        {
          "id": 1,
          "user_id": 2,
          "name": "Prof. Jay Gutkowski Sr.",
          "description": "Placeat consequatur neque commodi adipisci libero voluptatem.",
          "mobile": 1,
          "mobile_question": 1,
          "created_at": "1978-08-28 17:17:50",
          "updated_at": "2006-10-21 00:07:11",
          "pivot": {
            "question_id": 2,
            "tipspromenad_id": 1,
            "created_at": "2015-07-23 23:29:00",
            "updated_at": "2015-07-23 23:29:00"
          }
        }
      ]
    },
    {
      "id": 3,
      "user_id": 2,
      "name": "Forest Funk",
      "question": "Debitis cumque provident distinctio asperiores eum totam qui. Nihil cumque sunt sit officia quae vero. Ipsam veniam non eos recusandae iusto laborum. Quia ducimus consequatur earum aut impedit.",
      "answer1": "Libero eum ut quasi sint et.",
      "answerx": "Quis qui facilis quia sit voluptatem quod ipsa.",
      "answer2": "Sit sunt eius dolor facere suscipit atque.",
      "correct_answer": "x",
      "created_at": "2015-07-15 17:45:32",
      "updated_at": "2015-07-09 00:26:10",
      "tipspromenaderCount": 1,
      "created_at_diffForHumans": "1 vecka sedan",
      "user": {
        "id": 2,
        "name": "Anders Svensson",
        "email": "user@user.com",
        "status": 1,
        "confirmation_code": "70845e84dfcffab752228158a834e545",
        "confirmed": 1,
        "created_at": "2015-06-17 00:53:23",
        "updated_at": "2015-06-17 00:53:23",
        "deleted_at": null
      },
      "tipspromenader": [
        {
          "id": 1,
          "user_id": 2,
          "name": "Prof. Jay Gutkowski Sr.",
          "description": "Placeat consequatur neque commodi adipisci libero voluptatem.",
          "mobile": 1,
          "mobile_question": 1,
          "created_at": "1978-08-28 17:17:50",
          "updated_at": "2006-10-21 00:07:11",
          "pivot": {
            "question_id": 3,
            "tipspromenad_id": 1,
            "created_at": "2015-07-23 23:29:00",
            "updated_at": "2015-07-23 23:29:00"
          }
        }
      ]
    },
    {
      "id": 4,
      "user_id": 3,
      "name": "Dr. Alysha Miller",
      "question": "Quae aut molestias excepturi et ut ea architecto aliquam. Dolore corporis iste rerum voluptates quod. Ut sit omnis ut nisi nobis et.",
      "answer1": "Quidem laboriosam aliquam in qui.",
      "answerx": "Illum id a ab occaecati et excepturi eius excepturi.",
      "answer2": "Culpa cumque eos perspiciatis ipsa.",
      "correct_answer": "1",
      "created_at": "2015-03-07 20:50:26",
      "updated_at": "2015-12-24 18:10:35",
      "tipspromenaderCount": 1,
      "created_at_diffForHumans": "4 månader sedan",
      "user": {
        "id": 3,
        "name": "Daniel Blomdahl",
        "email": "blomdahl.daniel@gmail.com",
        "status": 1,
        "confirmation_code": "a270276c9211d6b39a928f06301498bb",
        "confirmed": 1,
        "created_at": "2015-06-17 00:53:23",
        "updated_at": "2015-07-10 02:34:10",
        "deleted_at": null
      },
      "tipspromenader": [
        {
          "id": 1,
          "user_id": 2,
          "name": "Prof. Jay Gutkowski Sr.",
          "description": "Placeat consequatur neque commodi adipisci libero voluptatem.",
          "mobile": 1,
          "mobile_question": 1,
          "created_at": "1978-08-28 17:17:50",
          "updated_at": "2006-10-21 00:07:11",
          "pivot": {
            "question_id": 4,
            "tipspromenad_id": 1,
            "created_at": "2015-07-23 23:29:00",
            "updated_at": "2015-07-23 23:29:00"
          }
        }
      ]
    },
    {
      "id": 5,
      "user_id": 3,
      "name": "Keara Miller",
      "question": "Sed exercitationem corporis harum libero fugit. Dolor et tenetur aut odio repellendus nobis. Sapiente et nostrum et omnis non aut modi.",
      "answer1": "Molestiae quae sed qui accusantium pariatur.",
      "answerx": "Tenetur in quidem magni deleniti consectetur veniam distinctio et.",
      "answer2": "Cum dolorem eligendi quia consectetur eum.",
      "correct_answer": "2",
      "created_at": "2015-06-21 12:34:30",
      "updated_at": "2015-06-13 10:01:59",
      "tipspromenaderCount": 1,
      "created_at_diffForHumans": "1 månad sedan",
      "user": {
        "id": 3,
        "name": "Daniel Blomdahl",
        "email": "blomdahl.daniel@gmail.com",
        "status": 1,
        "confirmation_code": "a270276c9211d6b39a928f06301498bb",
        "confirmed": 1,
        "created_at": "2015-06-17 00:53:23",
        "updated_at": "2015-07-10 02:34:10",
        "deleted_at": null
      },
      "tipspromenader": [
        {
          "id": 1,
          "user_id": 2,
          "name": "Prof. Jay Gutkowski Sr.",
          "description": "Placeat consequatur neque commodi adipisci libero voluptatem.",
          "mobile": 1,
          "mobile_question": 1,
          "created_at": "1978-08-28 17:17:50",
          "updated_at": "2006-10-21 00:07:11",
          "pivot": {
            "question_id": 5,
            "tipspromenad_id": 1,
            "created_at": "2015-07-23 23:29:00",
            "updated_at": "2015-07-23 23:29:00"
          }
        }
      ]
    },
    {
      "id": 6,
      "user_id": 4,
      "name": "Porro cum inventore ut nostrum nesciunt.",
      "question": "Dolor dicta rerum aut officia harum consequatur non odit. Eos quasi ut reiciendis rerum. Qui voluptatem sint deleniti sit. Et possimus blanditiis exercitationem magni neque.",
      "answer1": "Est ratione non aut necessitatibus ut maiores earum velit.",
      "answerx": "Perspiciatis beatae ea enim omnis dolorum.",
      "answer2": "Dolor saepe blanditiis minima et aliquam ut possimus qui.",
      "correct_answer": "x",
      "created_at": "2015-01-17 10:50:13",
      "updated_at": "2015-01-20 09:56:42",
      "tipspromenaderCount": 1,
      "created_at_diffForHumans": "6 månader sedan",
      "user": {
        "id": 4,
        "name": "Wictor Johansson",
        "email": "wictor.johansson@gmail.com",
        "status": 1,
        "confirmation_code": "9cdc9676e20b44e44d674e4bf8f217b2",
        "confirmed": 1,
        "created_at": "2015-06-17 00:53:24",
        "updated_at": "2015-06-17 00:53:24",
        "deleted_at": null
      },
      "tipspromenader": [
        {
          "id": 1,
          "user_id": 2,
          "name": "Prof. Jay Gutkowski Sr.",
          "description": "Placeat consequatur neque commodi adipisci libero voluptatem.",
          "mobile": 1,
          "mobile_question": 1,
          "created_at": "1978-08-28 17:17:50",
          "updated_at": "2006-10-21 00:07:11",
          "pivot": {
            "question_id": 6,
            "tipspromenad_id": 1,
            "created_at": "2015-07-24 11:45:28",
            "updated_at": "2015-07-24 11:45:28"
          }
        }
      ]
    },
    {
      "id": 7,
      "user_id": 2,
      "name": "Perferendis doloremque veritatis in similique.",
      "question": "Facere quo ad ad. Ratione repellendus quibusdam iure est voluptas.\nQuia sed explicabo repudiandae ab consectetur. Consectetur quo sunt similique et. Et nobis laudantium aliquid eum culpa.",
      "answer1": "Eaque inventore explicabo officia blanditiis corporis.",
      "answerx": "Corrupti consectetur beatae a rerum enim voluptate autem.",
      "answer2": "Esse ipsam ratione aliquam odit magni dolorum qui.",
      "correct_answer": "1",
      "created_at": "2015-05-13 11:49:23",
      "updated_at": "2015-05-09 03:38:46",
      "tipspromenaderCount": 1,
      "created_at_diffForHumans": "2 månader sedan",
      "user": {
        "id": 2,
        "name": "Anders Svensson",
        "email": "user@user.com",
        "status": 1,
        "confirmation_code": "70845e84dfcffab752228158a834e545",
        "confirmed": 1,
        "created_at": "2015-06-17 00:53:23",
        "updated_at": "2015-06-17 00:53:23",
        "deleted_at": null
      },
      "tipspromenader": [
        {
          "id": 1,
          "user_id": 2,
          "name": "Prof. Jay Gutkowski Sr.",
          "description": "Placeat consequatur neque commodi adipisci libero voluptatem.",
          "mobile": 1,
          "mobile_question": 1,
          "created_at": "1978-08-28 17:17:50",
          "updated_at": "2006-10-21 00:07:11",
          "pivot": {
            "question_id": 7,
            "tipspromenad_id": 1,
            "created_at": "2015-07-24 13:57:11",
            "updated_at": "2015-07-24 13:57:11"
          }
        }
      ]
    }
  ]
    },

    ready: function () {
        // this.fetchQuestions();
        this.getTrueDocumentHeight(2000);
    },

    methods: {
        fetchQuestions: function () {
            this.$http.get('api/fragor', function (questions) {
                this.$set('questions', questions);
            })
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
        }
    }
})
