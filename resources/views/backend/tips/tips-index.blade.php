@extends('backend.layouts.master')

@section('page-header')
    <h1>
        Tipspromenader
        <small>alla tipspromenader</small>
    </h1>
@endsection

@section('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Startsida</a></li>
    <li class="active">Tipspromenader</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>Tipspromenader</h1>

            <table class="table table-striped table-condensed table-hover">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>ID</th>
                        <th>skapare</th>
                        <th>namn</th>
                        <th>beskrivning</th>
                        <th>antal frågor</th>
                        <th>webb-app</th>
                        <th>frågor i webb-app</th>
                        <th>skapad</th>
                        <th>uppdaterad</th>
                    </tr>
                </thead>
                <tbody>
                @if($tips)
                    @foreach($tips as $tipspromenad)
                        <tr>
                            <td>
                            <a href="{{ action('Backend\TipsController@edit', $tipspromenad->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                            <a data-method="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>

                            </td>
                            <td>{{ $tipspromenad->id }}</td>
                            <td>{{ $tipspromenad->user['name'] }}</td>
                            <td>{{ $tipspromenad->name }}</td>
                            <td>{{ $tipspromenad->description }}</td>
                            <td>{{ $tipspromenad->questions()->count() }}</td>
                            <td>{{ $tipspromenad->mobile }}</td>
                            <td>{{ $tipspromenad->mobile_question }}</td>
                            <td>{{ $tipspromenad->created_at }}</td>
                            <td>{{ $tipspromenad->updated_at }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
