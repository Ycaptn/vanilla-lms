@extends('layouts.app')

@section('title_postfix')
Course Load Details
@stop

@section('page_title')
Course Load Details
@stop


@section('content')

    <div class="col-sm-9">
        <div class="panel panel-default card-view">

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    
                    <div class="form-wrap">
                        <div class="row">
                            @include('course_loads.show_fields')
                            <div class="col-sm-6">
                                <hr class="light-grey-hr mb-10">
                                <a class="btn btn-default" href="{{ route('course_loads.index') }}"> Go Back </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-3">
        @include("dashboard.partials.side-panel")
    </div>
@endsection
