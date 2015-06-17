@extends('backend.layouts.master')

@section('after-styles-end')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('page-header')
    <h1>
        Tipspromenader
        <small>skapa ny tipspromenad</small>
    </h1>
@endsection

@section('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Startsida</a></li>
    <li>{!! link_to(action('Backend\TipsController@index'), 'Tipspromenader') !!}</li>
    <li class="active">Skapa ny</li>
@endsection

@section('content')
<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Skapa ny <small>tipspromenad</small></h3>
        </div><!-- /.box-header -->
        <div class="box-body text-center">
            {!! Form::open( ['action'=>'Backend\TipsController@store', 'class' => 'form'] ) !!}

            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
              {!! Form::label('name', 'Namn på tipspromenaden' ) !!}
              {!! Form::text('name', null, ['class'=>'form-control', 'style' => 'text-align:center', 'placeholder' => 'Mindsommarmys 2015']) !!}
            </div>
            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
              {!! Form::label('description', 'Skriv en kort beskrivning av tipspromenaden' ) !!}
              {!! Form::textarea('description', null, ['class'=>'form-control ckeditor', 'id' => 'description', 'rows' => '3']) !!}
            </div>
            <button class="btn btn-success form-control" type="submit">
                Skapa Tipspromenad
              </button>
            </div>
            {!! Form::close() !!}
    </div><!-- /.box-body -->
</div><!--box box-success-->

@endsection

@section('after-scripts-end')
  {!! HTML::script('/js/ckeditor/ckeditor.js') !!}
<script>


</script>
@endsection
