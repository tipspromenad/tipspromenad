@extends('backend.layouts.master')

@section('after-styles-end')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('page-header')
    <h1>
        Tipspromenader
        <small>redigera tipspromenad</small>
    </h1>
@endsection

@section('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Startsida</a></li>
    <li>{!! link_to(action('Backend\TipsController@index'), 'Tipspromenader') !!}</li>
    <li class="active">Redigera</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>Redigera</h2>

            <h1 id="name" class="text-center" contenteditable="true">{{ $tipspromenad->name }}</h1>
            <div id="description" class="text-center" contenteditable="true">
                <p>
                    {!! $tipspromenad->description !!}
                </p>
            </div>

        </div>
    </div>
</div>
@endsection

@section('after-scripts-end')
{!! HTML::script('/js/ckeditor/ckeditor.js') !!}

<script>

$(function() {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
});

    // This code is generally not necessary, but it is here to demonstrate
        // how to customize specific editor instances on the fly. This fits this
        // demo well because some editable elements (like headers) may
        // require a smaller number of features.

        // The "instanceCreated" event is fired for every editor instance created.
        CKEDITOR.on( 'instanceCreated', function ( event ) {
            var editor = event.editor,
            element = editor.element;


            // Customize editors for headers and tag list.
            // These editors do not need features like smileys, templates, iframes etc.
            if ( element.is( 'h1', 'h2', 'h3' ) || element.getAttribute( 'id' ) == 'taglist' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.
                editor.on( 'configLoaded', function () {

                    // Remove redundant plugins to make the editor simpler.
                    editor.config.removePlugins = 'colorbutton,find,flash,font,' +
                            'forms,iframe,image,newpage,removeformat,' +
                            'smiley,specialchar,stylescombo,templates';

                    // Rearrange the toolbar layout.
                    editor.config.toolbarGroups = [
                        { name: 'editing', groups: [ 'basicstyles', 'links' ] },
                        { name: 'undo' },
                        { name: 'clipboard', groups: [ 'selection', 'clipboard' ] },
                        { name: 'about' }
                    ];
                } );
            }
        } );

    CKEDITOR.disableAutoInline = true;
            CKEDITOR.inline('name');
            CKEDITOR.inline('description', {
                contentsCss: [CKEDITOR.basePath + 'contents.css', '/public/css/backend.css'],
                allowedContent: true,
            });
            CKEDITOR.config.extraAllowedContent = '*(container, row, col-*, text*, success*, primary*, danger*, default*,  info*)';

        $('[contenteditable="true"]').on('blur', function(){
            var $id = this.id;
            var newData = CKEDITOR.instances[$id].getData();
            console.log('this.id: ' + $id + '=' + newData);

            var data = {};
            data[$id] = newData;
            $.ajax({
                    type: "POST",
                    url : "{{ url('admin/test/' . $tipspromenad->id ) }}",
                    data : data,
                    success : function(data){
                        console.log('Jag tror att vi klarade det!' + data.message + data['message']);
                    }
                },"json");
        });

</script>
@endsection
