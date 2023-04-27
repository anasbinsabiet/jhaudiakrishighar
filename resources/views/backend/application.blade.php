@extends('backend.layouts.master')
@section('title','Application Details')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
        <li class="breadcrumb-item active">Application Details</li>
    </ol>
    <h1 class="page-header">Application</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">Application Details</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                            data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>
                @if($data->certificate_type == 'birth' || $data->certificate_type == 'death')
                <div class="panel-body table-responsive">
                    <table class="table borderless table-striped">
                        <tr>
                            @if($data->certificate_type == 'birth')
                                <th>Birth Certificate Number:</th>
                                <td>{{$data->birth_reg_number}}</td>
                            @endif
                            @if($data->certificate_type == 'death')
                                <th>Death Certificate Number:</th>
                                <td>{{$data->death_reg_number}}</td>
                            @endif
                        </tr>
                        <th>Wrong Name:</th>
                        <td>{{$data->incorrect_name}}</td>
                        </tr>
                        <tr>
                            <th>Right Name:</th>
                            <td>{{$data->correct_name}}</td>
                        </tr>
                        @if($data->certificate_type == 'birth')
                        <tr>
                            <th>Birth Date:</th>
                            <td>{{$data->birthdate}}</td>
                        </tr>
                        <tr>
                            <th>Birth Place:</th>
                            <td>{{$data->birthplace}}</td>
                        </tr>
                        @endif
                        @if($data->certificate_type == 'death')
                        <tr>
                            <th>Death Date:</th>
                            <td>{{$data->deathhdate}}</td>
                        </tr>
                        <tr>
                            <th>Death Place:</th>
                            <td>{{$data->deathplace}}</td>
                        </tr>
                        @endif
                        <tr>
                            <th>Gender:</th>
                            <td>
                                @if($data->efemale == 1) Male @endif
                                @if($data->efemale == 2) Female @endif
                                @if($data->efemale == 3) Others @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Father Name:</th>
                            <td>{{$data->father}}</td>
                        </tr>
                        <tr>
                            <th>Mother Name:</th>
                            <td>{{$data->mother}}</td>
                        </tr>
                        <tr>
                            <th>Mobile No:</th>
                            <td>{{$data->mobile}}</td>
                        </tr>
                        <tr>
                            <th>Email Address:</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Full Address:</th>
                            <td>{{$data->address}}</td>
                        </tr>
                        <tr>
                            <th>Passport Size Image:</th>
                            <td><img height="100" width="auto" src="{{asset($data->app_photo)}}" </td>
                        </tr>
                        <tr>
                            <th>Birth Certificate:</th>
                            <td><img height="100" width="auto" src="{{asset($data->birth_certificate)}}" </td>
                        </tr>
                        <tr>
                            <th>Citizen Certificate:</th>
                            <td><img height="100" width="auto" src="{{asset($data->citizen_certificate)}}" </td>
                        </tr>
                    </table>
                </div>
                @else
                <div class="row">
                    <div class="col-md-6">
                        <table class="table borderless table-striped">
                            <tr>
                                <th style="width: 30%;">Registration Number</th>
                                <td>{{$application->reg_number}}</td>
                            </tr>
                            <tr>
                                <th>Incorrect Name</th>
                                <td>{{$application->incorrect_name}}</td>
                            </tr>
                            <tr>
                                <th>Correct Name</th>
                                <td>{{$application->correct_name}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>
                                    @if($application->efemale == 1)
                                    Male
                                    @endif
                                    @if($application->efemale == 2)
                                    Female
                                    @endif
                                    @if($application->efemale == 3)
                                    Others
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Father Name</th>
                                <td>{{$application->father}}</td>
                            </tr>
                            <tr>
                                <th>Mother Name</th>
                                <td>{{$application->mother}}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td>{{$application->mobile}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$application->email}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$application->address}}</td>
                            </tr>
                            <tr>
                                <th>User Photo {{$application->app_photo}}</th>
                                <td>
                                    <img src="{{asset($application->app_photo)}}" height="100" width="100%"
                                        alt="User Photo" />
                                </td>
                            </tr>
                            <tr>
                                <th>Certificate Type</th>
                                <td>
                                    @if($application->certificate_type == 'birth')
                                    Birth Cirtificate
                                    @elseif($application->certificate_type == 'death')
                                    Death Cirtificate
                                    @elseif($application->certificate_type == 'number')
                                    Mark Sheet
                                    @elseif($application->certificate_type == 'certificate')
                                    Academic Transcript
                                    @elseif($application->certificate_type == 'registration')
                                    Registration Card
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Exam</th>
                                <td>{{$application->exam}}</td>
                            </tr>
                            <tr>
                                <th>year</th>
                                <td>{{$application->year}}</td>
                            </tr>
                            <tr>
                                <th>institute</th>
                                <td>{{$application->institute}}</td>
                            </tr>
                            <tr>
                                <th>board</th>
                                <td>{{$application->board}}</td>
                            </tr>
                            <tr>
                                <th>country</th>
                                <td>{{$application->country}}</td>
                            </tr>
                            <tr>
                                <th>Group</th>
                                <td>{{$application->group}}</td>
                            </tr>
                            <tr>
                                <th>Result</th>
                                <td>{{$application->result}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 1</th>
                                <td>{{$application->sub1}}</td>
                            </tr>
                            </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table borderless table-striped">
                            <tr>
                                <th>Subject - 2</th>
                                <td>{{$application->sub2}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 3</th>
                                <td>{{$application->sub3}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 4</th>
                                <td>{{$application->sub4}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 5</th>
                                <td>{{$application->sub5}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 6</th>
                                <td>{{$application->sub6}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 7</th>
                                <td>{{$application->sub7}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 8</th>
                                <td>{{$application->sub8}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 9</th>
                                <td>{{$application->sub9}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 10</th>
                                <td>{{$application->sub10}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 11</th>
                                <td>{{$application->sub11}}</td>
                            </tr>
                            <tr>
                                <th>Subject - 12</th>
                                <td>{{$application->sub12}}</td>
                            </tr>
                            <!-- <tr>
                                <th>Birth Certificate</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->birth_certificate)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Death Certificate</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->death_certificate)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Citizen Certificate</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->citizen_certificate)}}">View</a>
                                </td>
                            </tr> -->
                            <tr>
                                <th>Registration Card</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->reg_card)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Admit Card</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->admit_card)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Marksheet</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->marksheet)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Main Certificate</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->ssc_certificate)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Board Testimonial</th>
                                <td>
                                    <a class="badge badge-info" href="{{asset($application->board_testimonial)}}">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td> {{ \Carbon\Carbon::parse($application->created_at)->format('d M Y')}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if($application->status == 0)
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif($application->status == 1)
                                    <span class="badge badge-info">Payment Accept</span>
                                    @elseif($application->status == 2)
                                    <span class="badge badge-info">Progress Delivery</span>
                                    @elseif($application->status == 3)
                                    <span class="badge badge-success">Delivered</span>
                                    @elseif($application->status == 4)
                                    <span class="badge badge-danger">Cancel</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection