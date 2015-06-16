@extends('frontend.layouts.master')

@section('content')

    @role('Admin')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> Role Based</div>
                    <div class="panel-body">
                        You can see this because you have the role of 'Administrator'!
                    </div>
                </div><!-- panel -->
            </div><!-- col-md-10 -->
        </div><!-- row -->
    @endrole

    @include('frontend.includes.lazy-guide')
@endsection
