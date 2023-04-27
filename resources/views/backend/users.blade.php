@extends('backend.layouts.master')
@section('title','Users')
@section('content')
<div id="content" class="content">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-inverse">

                <div class="panel-heading">
                    <h4 class="panel-title">User List</h4>
                    <div class="panel-heading-btn">
                    <!-- <a href="{{url('admin.create')}}" class="btn btn-info btn-xs mr-2"><i class="fa  fa-plus-circle"></i> Add Admin</a> -->
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
                    </div>
                </div>

                <div class="panel-body">
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle example">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>
                                    <select class="o_status btn btn-primary btn-xs text-left" name="o_status" id="o_status" data-user_id="{{$row->id}}" style="margin-right: 10px;" @if(auth()->user()->role == 2) disabled @endif>
                                        <option value="0" @if( $row->status == 0 ) selected @endif>Active</option>
                                        <option value="1" @if( $row->status == 1 ) selected @endif>Inactive</option>
                                    </select>
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
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" defer></script>
<script>
    $(document).ready(function() {
        $('.example').DataTable();
        $('.o_status').on('change', function() {
            if(confirm("Are you sure you want to change this order status?")){
                var order_status = this.value;
                var user_id = $(this).data("user_id");
                $.ajax({
                    url:"{{route('astatus.change')}}",
                    type:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        order_status:order_status,
                        user_id:user_id,
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