@extends('layouts.app')


@section('title_postfix')
Credit Loads
@stop

@section('page_title')
Credit Loads
@stop

@section('content')
    
    @include('flash::message')

    <div class="col-sm-9">
        <div class="panel panel-default card-view">

            <div class="panel-wrapper collapse in">
                <div class="panel-heading" style="padding: 10px 15px;">
                    <div class="pull-left">
                        <h4 class="txt-primary mt-5">Credit Loads</h4>
                    </div>
                    <div class="pull-right">
                        <div class="pull-left inline-block dropdown">
                            {{-- <a id="btn-show-modify-credit-load-modal" href="#" class="btn-new-mdl-credit-load-modal btn btn-primary btn-xs"><i class="icon wb-reply" aria-hidden="true"></i>Add Level</a>
                            <a id="btn-change-student-credit-load-modal" href="#" class="btn-change-student-credit-load-modal btn btn-danger btn-xs"><i class="icon wb-reply" aria-hidden="true"></i>Change Student Level</a> --}}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">

                    <div class="table-wrap">
                        <div class="table-responsive">
                            @include('course_loads.table')

                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-3">
        @include("dashboard.partials.side-panel")
    </div>

@include('credit_loads.modal')

@endsection

