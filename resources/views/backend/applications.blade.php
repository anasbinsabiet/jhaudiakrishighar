@extends('backend.layouts.master')
@section('title','New Application')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
        <li class="breadcrumb-item active">Application</li>
    </ol>
    <h1 class="page-header">Application</h1>
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4 class="panel-title">New Application</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body table-responsive">
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th class="text-nowrap">Application No.</th>
                                <th class="text-nowrap">Date</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Mobile</th>
                                <th class="text-nowrap">Email</th>
                                
                                <th class="text-nowrap">Certificate Type</th>
                                <!-- <th class="text-nowrap">Registration number</th>
                                <th class="text-nowrap">Address</th> -->
                                <!-- <th class="text-nowrap">Amount</th> -->
                                
                                <th class="text-nowrap">Delivery Method</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->id}}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d M Y')}}</td>
                                <td>{{$row->correct_name}}</td>
                                <td>{{$row->mobile}}</td>
                                <td>{{$row->email}}</td>
                                <td>@if($row->certificate_type == 'birth')
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
                                <!-- <td>{{$row->reg_number}}</td>
                                <td>{{$row->address}}</td> -->
                                <!-- <td>{{$row->order_total}}</td> -->
                                
                                <td>
                                    @if( $row->delivery_method == 1 ) Self Pickup @endif
                                    @if( $row->delivery_method == 2 ) Courier @endif
                                </td>
                                <td>
                                    <select class="o_status btn btn-primary btn-xs text-left" name="o_status" id="o_status" data-order_id="{{$row->id}}" style="margin-right: 10px;">
                                        <option value="0" @if( $row->status == 0 ) selected @endif>Pending</option>
                                        <option value="1" @if( $row->status == 1 ) selected @endif>Processing</option>
                                        <option value="2" @if( $row->status == 2 ) selected @endif>Completed</option>
                                        <option value="3" @if( $row->status == 3 ) selected @endif>Cancel</option>
                                    </select>
                                </td>
                                <td>
                                    <a href="{{url('admin/application',$row->id)}}" target="_blank" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>
                                    @if( $row->status == 2 )
                                    <a href="{{url('admin/applicationd',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-download"></i> Download</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.o_status').on('change', function() {
            if(confirm("Are you sure you want to change this order status?")){
                var order_status = this.value;
                var order_id = $(this).data("order_id");
                $.ajax({
                    url:"{{route('astatus.change')}}",
                    type:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        order_status:order_status,
                        order_id:order_id,
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