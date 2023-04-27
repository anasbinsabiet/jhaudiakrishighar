@extends('backend.layouts.master')
@section('title','Home')
@section('content')
<style>
input.update, input.update:focus-visible {
    border: 1px solid #ddd;
    outline: 0;
}

.btn-sm {
    line-height: 1.8;
}

.btn-light {
    color: #2d353c !important;
    background-color: white;
    border-color: #d5dbe0;
}

th.text-white {
    text-align: center !important;
}
#example td.select-checkbox:before, #example td.select-checkbox:after {
    display: none;
}
td.select-checkbox.select-checkbox:after {
    margin-top: -25px !important;
}
#example tbody tr.selected>* {
    box-shadow: none;
}
i.fa.fa-trash.text-danger {
    font-size: 15px;
}
div#example_filter, a.btn.btn-info.btn-sm.p-4 {
    display:none;
}

@media only screen and (max-width: 768px) {
    .form-group.col {
        min-width: 50%;
    }
    .col-md-6 {
        width: 50%;
    }
    .btn-sm {
        padding: 0;
        font-size: 9px;
    }
    /* ul.navbar-nav.navbar-right{
        display:none;
    } */
    .page-header-fixed {
        padding-top: 55px;
    }
    a.btn.btn-info.btn-sm.p-4 {
        display:block !important;
    }
}
</style>
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" defer></script>
<script>
$.fn.poshytip = {
    defaults: null
}
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js">
</script>
<div id="content" class="content">
    @php 
        $selectedItems = request()->get('productName');
        $incoming_price_total = 0;
        $incoming_quantity_total = 0;
        $total_taka_total = 0;
        $outgoing_price_total = 0;
        $outgoing_quantity_total = 0;
        $balance_quantity_total = 0;
        $outgoing_price_2_total = 0;
        $entertainment_name_total = 0;
        $rent_type_total = 0;
        $others_expense_total = 0;
        $profit_total = 0;
        $lose_total = 0;
        $total_taka_add_total = 0;
    @endphp
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <form class="row justify-content-between w-100 ">
                        <div class="form-group col">
                            <label for="startDate">Purchase date from</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="text" id="startDate" name="startDate" autocomplete="off"
                                    class="form-control" placeholder="Start date">
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="endDate">Purchase date to</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="text" id="endDate" name="endDate" class="form-control"
                                    placeholder="End date" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="sellingDateFrom">Selling date from</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="text" id="sellingDateFrom" name="sellingDateFrom" autocomplete="off"
                                    class="form-control" placeholder="Start date">
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="sellingDateTo">Selling date to</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="text" id="sellingDateTo" name="sellingDateTo" class="form-control"
                                    placeholder="End date" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="product_name">Product Name</label>
                            <select name="productName[]" class="form-control product_name selectpicker" multiple
                                data-live-search="true">
                                <option value="" disabled>Select Product</option>
                                @foreach($products as $row)
                                <option value="{{$row->id}}"
                                    <?php if($selectedItems && in_array( $row->id, $selectedItems )){?>
                                    selected="selected" <?php } ?>>{{$row->product_name}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-group col text-center mt-3">
                            <br />
                            <button id="filterBtn" type="submit"
                                class="form-control btn btn-success ml-2 filterBtn btn-sm mt-2">Filter</button>
                            <a href="{{url('home')}}"
                                class="form-control btn btn-danger ml-2 filterBtn btn-sm mt-2">Clear</a>
                            <button id="AddRow" type="button"
                                class="form-control btn btn-warning ml-2 filterBtn btn-sm mt-2">Add</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#Incoming">Incoming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Outgoing">Outgoing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Profit">Profit/Loss</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container-fluid px-0 active" id="Incoming">
                    <div class="panel-body table-responsive w-100">
                        <table id="example" class="table table-striped table-bordered table-td-valign-middle w-100 example">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-trash text-danger" id="remove"></i></th>
                                    <th>SL</th>
                                    <th class="text-nowrap">Purchase Date</th>
                                    <th class="text-nowrap">Product Name</th>
                                    <th class="text-nowrap">Price</th>
                                    <th class="text-nowrap">Quantity</th>
                                </tr>
                            </thead>
                            <tbody class="buying">
                                @foreach($applications as $row)
                                @php
                                    $incoming_price_total += $row->incoming_price;
                                    $incoming_quantity_total += $row->incoming_quantity;
                                @endphp
                                <tr class="odd gradeX">
                                    <td>
                                        <input data-id="{{ $row->id }}" type="checkbox" class="select-checkbox">
                                    </td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="update datepicker" 
                                            data-id="{{ $row->id }}" 
                                            data-name="purchase_date"
                                            @if($row->purchase_date != null && $row->purchase_date != "1970-01-01")
                                                value="<?php echo date('d-m-Y',strtotime($row->purchase_date)); ?>"
                                            @endif
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="update" 
                                            data-id="{{ $row->id }}" 
                                            data-name="product_name"
                                            value="{{ $row->product_name }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update incoming_price" 
                                            data-id="{{ $row->id }}" 
                                            data-name="incoming_price"
                                            value="{{ $row->incoming_price }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update incoming_quantity" 
                                            data-id="{{ $row->id }}" 
                                            data-name="incoming_quantity"
                                            value="{{ $row->incoming_quantity }}" 
                                        />
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="text-align:right">Total:</th>
                                    <td><span class="count">{{$applications->count()}}</td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="incoming_price_total">{{$incoming_price_total}}</td>
                                    <td><span class="incoming_quantity_total">{{$incoming_quantity_total}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="tab-pane container-fluid px-0 fade" id="Outgoing">
                    <div class="panel-body table-responsive w-100">
                        <table id="example" class="table table-striped table-bordered table-td-valign-middle w-100 example">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-trash text-danger" id="remove"></i></th>
                                    <th>SL</th>
                                    <th class="text-nowrap">Selling Date</th>
                                    <th class="text-nowrap">Product Name</th>
                                    <th class="text-nowrap">Total Taka</th>
                                    <th class="text-nowrap">Price</th>
                                    <th class="text-nowrap">Quantity</th>
                                    <th class="text-nowrap">Balance Quantity</th>
                                </tr>
                            </thead>
                            <tbody class="selling">
                                @foreach($applications as $row)
                                @php
                                    $total_taka_total += $row->total_taka;
                                    $outgoing_price_total += $row->outgoing_price;
                                    $outgoing_quantity_total += $row->outgoing_quantity;
                                    $balance_quantity_total += $row->balance_quantity;
                                @endphp
                                <tr class="odd gradeX">
                                    <td>
                                        <input data-id="{{ $row->id }}" type="checkbox" class="select-checkbox">
                                    </td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="update datepicker" 
                                            data-id="{{ $row->id }}" 
                                            data-name="selling_date"
                                            @if($row->selling_date != null && $row->selling_date != "1970-01-01")
                                                value="<?php echo date('d-m-Y',strtotime($row->selling_date)); ?>"
                                            @endif
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="update" 
                                            data-id="{{ $row->id }}" 
                                            data-name="product_name"
                                            value="{{ $row->product_name }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update total_taka" 
                                            data-id="{{ $row->id }}" 
                                            data-name="total_taka"
                                            value="{{ $row->total_taka }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update outgoing_price" 
                                            data-id="{{ $row->id }}" 
                                            data-name="outgoing_price"
                                            value="{{ $row->outgoing_price }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update outgoing_quantity" 
                                            data-id="{{ $row->id }}" 
                                            data-name="outgoing_quantity"
                                            value="{{ $row->outgoing_quantity }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update balance_quantity" 
                                            data-id="{{ $row->id }}" 
                                            data-name="balance_quantity"
                                            value="{{ $row->balance_quantity }}" 
                                        />
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="text-align:right">Total:</th>
                                    <td><span class="count">{{$applications->count()}}</td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="total_taka_total">{{$total_taka_total}}</td>
                                    <td><span class="outgoing_price_total">{{$outgoing_price_total}}</td>
                                    <td><span class="outgoing_quantity_total">{{$outgoing_quantity_total}}</td>
                                    <td><span class="balance_quantity_total">{{$balance_quantity_total}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="tab-pane container-fluid px-0 fade" id="Profit">
                <div class="panel-body table-responsive w-100">
                        <table id="example" class="table table-striped table-bordered table-td-valign-middle w-100 example">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-trash text-danger" id="remove"></i></th>
                                    <th>SL</th>
                                    <th class="text-nowrap">Product Name</th>
                                    <th class="text-nowrap">Price</th>
                                    <th class="text-nowrap">Entertainment</th>
                                    <th class="text-nowrap">Rent Type</th>
                                    <th class="text-nowrap">Others Expense</th>
                                    <th class="text-nowrap">Profit</th>
                                    <th class="text-nowrap">Lose</th>
                                    <th class="text-nowrap">Total Taka Add</th>
                                </tr>
                            </thead>
                            <tbody class="profit">
                                @foreach($applications as $row)
                                @php
                                    $outgoing_price_2_total += $row->outgoing_price_2;
                                    $entertainment_name_total += $row->entertainment_name;
                                    $rent_type_total += $row->rent_type;
                                    $others_expense_total += $row->others_expense;
                                    $profit_total += $row->profit;
                                    $lose_total += $row->lose;
                                    $total_taka_add_total += $row->total_taka_add;
                                @endphp
                                <tr class="odd gradeX">
                                    <td>
                                        <input data-id="{{ $row->id }}" type="checkbox" class="select-checkbox">
                                    </td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="update" 
                                            data-id="{{ $row->id }}" 
                                            data-name="product_name"
                                            value="{{ $row->product_name }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update outgoing_price_2" 
                                            data-id="{{ $row->id }}" 
                                            data-name="outgoing_price_2"
                                            value="{{ $row->outgoing_price_2 }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update entertainment_name" 
                                            data-id="{{ $row->id }}" 
                                            data-name="entertainment_name"
                                            value="{{ $row->entertainment_name }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update rent_type" 
                                            data-id="{{ $row->id }}" 
                                            data-name="rent_type"
                                            value="{{ $row->rent_type }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update others_expense" 
                                            data-id="{{ $row->id }}" 
                                            data-name="others_expense"
                                            value="{{ $row->others_expense }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update profit" 
                                            data-id="{{ $row->id }}" 
                                            data-name="profit"
                                            value="{{ $row->profit }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update lose" 
                                            data-id="{{ $row->id }}" 
                                            data-name="lose"
                                            value="{{ $row->lose }}" 
                                        />
                                    </td>
                                    <td>
                                        <input 
                                            type="number" 
                                            class="update total_taka_add" 
                                            data-id="{{ $row->id }}" 
                                            data-name="total_taka_add"
                                            value="{{ $row->total_taka_add }}" 
                                        />
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="text-align:right">Total:</th>
                                    <td><span class="count">{{$applications->count()}}</td>
                                    <td></td>
                                    <td><span class="outgoing_price_2_total">{{$outgoing_price_2_total}}</td>
                                    <td><span class="entertainment_name_total">{{$entertainment_name_total}}</td>
                                    <td><span class="rent_type_total">{{$rent_type_total}}</td>
                                    <td><span class="others_expense_total">{{$others_expense_total}}</td>
                                    <td><span class="profit_total">{{$profit_total}}</td>
                                    <td><span class="lose_total">{{$lose_total}}</td>
                                    <td><span class="total_taka_add_total">{{$total_taka_add_total}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{request()->startDate}}" id="start_date" />
    <input type="hidden" value="{{request()->endDate}}" id="end_date" />
    
    <input type="hidden" value="{{request()->sellingDateFrom}}" id="selling_date_from" />
    <input type="hidden" value="{{request()->sellingDateTo}}" id="selling_date_to" />
</div>
<script>
$(document).ready(function() {
    $(".datepicker").datepicker({
        dateFormat: "dd-mm-yy"
    });
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();
    
    var selling_date_from = $('#selling_date_from').val();
    var selling_date_to = $('#selling_date_to').val();

    if (start_date) {
        $("#startDate").datepicker({
            dateFormat: "dd-mm-yy"
        }).val(start_date);
    } else {
        $("#startDate").datepicker({
            dateFormat: "dd-mm-yy"
        }).val();
    }
    if (end_date) {
        $("#endDate").datepicker({
            dateFormat: "dd-mm-yy"
        }).val(end_date);
    } else {
        $("#endDate").datepicker({
            dateFormat: "dd-mm-yy"
        }).val();
    }
    
    if (selling_date_from) {
        $("#sellingDateFrom").datepicker({
            dateFormat: "dd-mm-yy"
        }).val(selling_date_from);
    } else {
        $("#sellingDateFrom").datepicker({
            dateFormat: "dd-mm-yy"
        }).val();
    }

    if (selling_date_to) {
        $("#sellingDateTo").datepicker({
            dateFormat: "dd-mm-yy"
        }).val(selling_date_to);
    } else {
        $("#sellingDateTo").datepicker({
            dateFormat: "dd-mm-yy"
        }).val();
    }
    
    $('.selectpicker').selectpicker();

    $('.example').DataTable();

    Array.prototype.removeByValue = function (val) {
        for (var i = 0; i < this.length; i++) {
            if (this[i] === val) {
            this.splice(i, 1);
            i--;
            }
        }
        return this;
    }

    var selectedIds = [];
    $(document.body).on('change', '.select-checkbox', function() {
        if ($(this).is(':checked')) {
            selectedIds.push($(this).data("id"));
        }else{
            selectedIds.removeByValue($(this).data("id"));
        }
    });

    $('#remove').click(function() {
        if(confirm("Are you sure you want to delete this?")){
            if(selectedIds && selectedIds.length > 0){
                $.ajax({
                    url: "{{url('deleted-data')}}",
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    },
                    type: "POST",
                    data: {selectedIds},
                    success: function(responsed) {
                        if (responsed) {
                            location.reload();
                        }
                    },
                });
            }
        }
        else{
            return false;
        }
    });

    $('#AddRow').click(function() {
        $.ajax({
            url: "{{url('changed-data')}}",
            type: "GET",
            success: function(response) {
                if (response) {
                    location.reload();
                }
            },
        });
        var count = 1;
        $(".incoming_price").each(function(){
            count += 1;
        });
        $(".count").html(count);
    });

    $(document.body).on('change', '.datepicker', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var value = this.value;
        $.ajax({
            url: "{{ route('application.update') }}",
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            type: "POST",
            data: {
                id,
                name,
                value
            },
            success: function(response) {
                console.log(response);
            },
        });
    });

    $(document.body).on('keyup', '.update', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var value = this.value;
        $.ajax({
            url: "{{ route('application.update') }}",
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            },
            type: "POST",
            data: {
                id,
                name,
                value
            },
            success: function(response) {
                console.log(response);
            },
        });
    });
    
    $(document.body).on('change', '.incoming_price', function() {
        var incoming_price_total = 0;
        $(".incoming_price").each(function(){
            incoming_price_total += +$(this).val();
        });
        $(".incoming_price_total").html(incoming_price_total);
    });
    $(document.body).on('keyup', '.incoming_price', function() {
        var incoming_price_total = 0;
        $(".incoming_price").each(function(){
            incoming_price_total += +$(this).val();
        });
        $(".incoming_price_total").html(incoming_price_total);
    });
    
    $(document.body).on('change', '.incoming_quantity', function() {
        var incoming_quantity_total = 0;
        $(".incoming_quantity").each(function(){
            incoming_quantity_total += +$(this).val();
        });
        $(".incoming_quantity_total").html(incoming_quantity_total);
    });
    $(document.body).on('keyup', '.incoming_quantity', function() {
        var incoming_quantity_total = 0;
        $(".incoming_quantity").each(function(){
            incoming_quantity_total += +$(this).val();
        });
        $(".incoming_quantity_total").html(incoming_quantity_total);
    });
    
    $(document.body).on('change', '.total_taka', function() {
        var total_taka_total = 0;
        $(".total_taka").each(function(){
            total_taka_total += +$(this).val();
        });
        $(".total_taka_total").html(total_taka_total);
    });
    $(document.body).on('keyup', '.total_taka', function() {
        var total_taka_total = 0;
        $(".total_taka").each(function(){
            total_taka_total += +$(this).val();
        });
        $(".total_taka_total").html(total_taka_total);
    });
    
    $(document.body).on('change', '.outgoing_price', function() {
        var outgoing_price_total = 0;
        $(".outgoing_price").each(function(){
            outgoing_price_total += +$(this).val();
        });
        $(".outgoing_price_total").html(outgoing_price_total);
    });
    $(document.body).on('keyup', '.outgoing_price', function() {
        var outgoing_price_total = 0;
        $(".outgoing_price").each(function(){
            outgoing_price_total += +$(this).val();
        });
        $(".outgoing_price_total").html(outgoing_price_total);
    });
    
    $(document.body).on('change', '.outgoing_quantity', function() {
        var outgoing_quantity_total = 0;
        $(".outgoing_quantity").each(function(){
            outgoing_quantity_total += +$(this).val();
        });
        $(".outgoing_quantity_total").html(outgoing_quantity_total);
    });
    $(document.body).on('keyup', '.outgoing_quantity', function() {
        var outgoing_quantity_total = 0;
        $(".outgoing_quantity").each(function(){
            outgoing_quantity_total += +$(this).val();
        });
        $(".outgoing_quantity_total").html(outgoing_quantity_total);
    });
    
    $(document.body).on('change', '.balance_quantity', function() {
        var balance_quantity_total = 0;
        $(".balance_quantity").each(function(){
            balance_quantity_total += +$(this).val();
        });
        $(".balance_quantity_total").html(balance_quantity_total);
    });
    $(document.body).on('keyup', '.balance_quantity', function() {
        var balance_quantity_total = 0;
        $(".balance_quantity").each(function(){
            balance_quantity_total += +$(this).val();
        });
        $(".balance_quantity_total").html(balance_quantity_total);
    });
    
    $(document.body).on('change', '.outgoing_price_2', function() {
        var outgoing_price_2_total = 0;
        $(".outgoing_price_2").each(function(){
            outgoing_price_2_total += +$(this).val();
        });
        $(".outgoing_price_2_total").html(outgoing_price_2_total);
    });
    $(document.body).on('keyup', '.outgoing_price_2', function() {
        var outgoing_price_2_total = 0;
        $(".outgoing_price_2").each(function(){
            outgoing_price_2_total += +$(this).val();
        });
        $(".outgoing_price_2_total").html(outgoing_price_2_total);
    });
    
    $(document.body).on('change', '.entertainment_name', function() {
        var entertainment_name_total = 0;
        $(".entertainment_name").each(function(){
            entertainment_name_total += +$(this).val();
        });
        $(".entertainment_name_total").html(entertainment_name_total);
    });
    $(document.body).on('keyup', '.entertainment_name', function() {
        var entertainment_name_total = 0;
        $(".entertainment_name").each(function(){
            entertainment_name_total += +$(this).val();
        });
        $(".entertainment_name_total").html(entertainment_name_total);
    });
    
    $(document.body).on('change', '.rent_type', function() {
        var rent_type_total = 0;
        $(".rent_type").each(function(){
            rent_type_total += +$(this).val();
        });
        $(".rent_type_total").html(rent_type_total);
    });
    $(document.body).on('keyup', '.rent_type', function() {
        var rent_type_total = 0;
        $(".rent_type").each(function(){
            rent_type_total += +$(this).val();
        });
        $(".rent_type_total").html(rent_type_total);
    });
    
    $(document.body).on('change', '.others_expense', function() {
        var others_expense_total = 0;
        $(".others_expense").each(function(){
            others_expense_total += +$(this).val();
        });
        $(".others_expense_total").html(others_expense_total);
    });
    $(document.body).on('keyup', '.others_expense', function() {
        var others_expense_total = 0;
        $(".others_expense").each(function(){
            others_expense_total += +$(this).val();
        });
        $(".others_expense_total").html(others_expense_total);
    });
    
    $(document.body).on('change', '.profit', function() {
        var profit_total = 0;
        $(".profit").each(function(){
            profit_total += +$(this).val();
        });
        $(".profit_total").html(profit_total);
    });
    $(document.body).on('keyup', '.profit', function() {
        var profit_total = 0;
        $(".profit").each(function(){
            profit_total += +$(this).val();
        });
        $(".profit_total").html(profit_total);
    });
    
    $(document.body).on('change', '.lose', function() {
        var lose_total = 0;
        $(".lose").each(function(){
            lose_total += +$(this).val();
        });
        $(".lose_total").html(lose_total);
    });
    $(document.body).on('keyup', '.lose', function() {
        var lose_total = 0;
        $(".lose").each(function(){
            lose_total += +$(this).val();
        });
        $(".lose_total").html(lose_total);
    });
    
    $(document.body).on('change', '.total_taka_add', function() {
        var total_taka_add_total = 0;
        $(".total_taka_add").each(function(){
            total_taka_add_total += +$(this).val();
        });
        $(".total_taka_add_total").html(total_taka_add_total);
    });
    $(document.body).on('keyup', '.total_taka_add', function() {
        var total_taka_add_total = 0;
        $(".total_taka_add").each(function(){
            total_taka_add_total += +$(this).val();
        });
        $(".total_taka_add_total").html(total_taka_add_total);
    });
    
});
</script>
@endsection