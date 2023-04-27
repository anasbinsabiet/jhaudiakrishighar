@extends('layouts.app')

@section('content')
<style>
    .panel-title a{
        cursor: pointer;
    }
</style>
<!-- Main content starts-->
<section class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="heading_5">
                                <h4 class="panel-title">
                                    <a href="{{url('login')}}">
                                        Login
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="heading_1">
                                <h4 class="panel-title">
                                    <a href="{{url('birth')}}">
                                        Birth Certificate
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="heading_2">
                                <h4 class="panel-title">
                                    <a href="{{url('death')}}">
                                        Death Certificate
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="heading_3">
                                <h4 class="panel-title">
                                    <a href="{{url('certificate')}}">
                                        Educational Certificate
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="heading_4">
                                <h4 class="panel-title">
                                    <a href="{{url('number')}}">
                                        Mark Sheet
                                    </a>
                                </h4>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="heading_7">
                                <h4 class="panel-title">
                                <a href="{{url('registration')}}">
                                     Registration Card
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .panel-title a {
                    font-size: 20px;
                }

                .panel-body a {
                    margin-bottom: 10px;
                }
            </style>
</section>
<!-- /.Main content ends -->
@endsection