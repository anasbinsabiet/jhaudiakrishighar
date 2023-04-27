@extends('layouts.app')
@section('title','Profile')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start row" style="margin-top: 30px;">
            <!-- ////////////////sidenav here -->
            <div class="aiz-user-sidenav-wrap pt-4 position-relative z-1 shadow-sm col-md-3">
                <div class="absolute-top-right d-xl-none">
                    <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                        <i class="las la-times la-2x"></i>
                    </button>
                </div>
                <div class="absolute-top-left d-xl-none">
                    <a class="btn btn-sm p-2" href="https://circle.com.bd/logout">
                        <i class="las la-sign-out-alt la-2x"></i>
                    </a>
                </div>
                <div class="aiz-user-sidenav rounded overflow-hidden  c-scrollbar-light">
                    <div class="px-4 text-left mb-4">
                        <span class="avatar avatar-md mb-3">
                            <img src="https://circle.com.bd/public/assets/img/avatar-place.png" class="image rounded-circle" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/avatar-place.png';">
                        </span>
                        <h4 class="h5 fw-600">{{auth()->user()->name}}
                            <span class="ml-2">
                                <i class="las la-check-circle" style="color:green"></i>
                            </span>
                        </h4>
                    </div>
                    <div class="sidemnenu mb-3">
                        <ul class="aiz-side-nav-list metismenu" data-toggle="aiz-side-menu" style="padding: 0px; list-style: none;">
                            <li class="aiz-side-nav-item" style="padding: 10px 0px;">
                                <a href="{{url('profile')}}" class="aiz-side-nav-link ">
                                    <i class="las la-user aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Profile</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{url('applications')}}" class="aiz-side-nav-link ">
                                    <i class="las la-money-bill aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Applications</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="aiz-user-panel col-md-9" style="margin-top: 30px;">
                <div class="card">
                    <form id="sort_orders" action="" method="GET">
                        <div class="card-header row gutters-5">
                            <div class="col text-left text-md-left" style="padding-left: 15px;">
                                <h5 class="mb-md-0 h6">Applications</h5>
                            </div>
                        </div>
                    </form>
                    <div class="card-body p-3">
                        <table class="table aiz-table mb-0 footable footable-1 breakpoint breakpoint-lg" id="myTable">
                            <thead>
                                <tr class="footable-header">
                                    <th style="display: table-cell;">Application ID</th>
                                    <th data-breakpoints="lg">Mobile Number </th>
                                    <th data-breakpoints="md" style="display: table-cell;">Email</th>
                                    <th data-breakpoints="md" style="display: table-cell;">Name</th>
                                    <th data-breakpoints="md" style="display: table-cell;">Address</th>
                                    <th style="display: table-cell;">Application Type</th>
                                    <th style="display: table-cell;">Status</th>
                                    <th style="display: table-cell;">Delivery Method</th>
                                    <th class="text-right footable-last-visible" style="display: table-cell;">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $row)
                                <tr class="odd gradeX">
                                    <!-- <td>{{$loop->iteration}}</td> -->
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->mobile}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->correct_name}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>
                                        @if($row->certificate_type == 'birth')
                                        Birth Cirtificate
                                        @elseif($row->certificate_type == 'death')
                                        Death Cirtificate
                                        @elseif($row->certificate_type == 'number')
                                        Mark Sheet
                                        @elseif($row->certificate_type == 'certificate')
                                        Academic Transcript
                                        @elseif($row->certificate_type == 'registration')
                                        Registration Card
                                        @endif
                                    </td>
                                    <td>
                                        @if( $row->status == 0 ) <span class="badge badge-info w-auto">Pending</span> @endif
                                        @if( $row->status == 1 ) <span class="badge badge-info w-auto">Processing</span> @endif
                                        @if( $row->status == 2 ) <span class="badge badge-info w-auto">Completed</span> @endif
                                        @if( $row->status == 3 ) <span class="badge badge-info w-auto">Cancel</span> @endif
                                    </td>
                                    <td>
                                        <select class="btn btn-primary btn-xs o_status" data-application_id="{{$row->id}}" name="delivery_method" id="delivery_method">
                                            <option>Select</option>
                                            <option value="1" @if( $row->delivery_method == 1 ) selected @endif>Self Pickup</option>
                                            <option value="2" @if( $row->delivery_method == 2 ) selected @endif>Courier</option>
                                        </select>
                                    </td>
                                    <td>
                                        <a href="{{url('user/applicationdetails',$row->id)}}" target="_blank" class="btn btn-info btn-xs">View</a>
                                        @if( $row->status == 2 )
                                        <a href="{{url('user/application',$row->id)}}" class="btn btn-success btn-xs">Download</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.o_status').on('change', function() {
            if(confirm("Are you sure you want to change this order status?")){
                var dm = this.value;
                var application_id = $(this).data("application_id");
                $.ajax({
                    url:"{{route('adm.change')}}",
                    type:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        dm:dm,
                        application_id:application_id,
                    },
                    success:function(response)
                    {   
                        console.log(response);
                        if(response == 'success')
                        {   
                            location.reload();
                        }
                    },
                });
            }
            else{
                return false;
            }
        });
    });
</script>
@endsection