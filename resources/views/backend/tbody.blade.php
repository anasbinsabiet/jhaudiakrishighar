@foreach($applications as $row)
<tr class="odd gradeX">
    <td>
        <input data-id="{{ $row->id }}" type="checkbox" class="select-checkbox">
    </td>
    <td>{{$loop->iteration}}</td>
    <td>
        <input type="text" class="update" data-id="{{ $row->id }}" data-name="product_name"
            value="{{ $row->product_name }}" />
    </td>
    <td>
        <input type="number" class="update incoming_price" data-id="{{ $row->id }}" data-name="incoming_price"
            value="{{ $row->incoming_price }}" />
    </td>
    <td>
        <input type="number" class="update incoming_quantity" data-id="{{ $row->id }}" data-name="incoming_quantity"
            value="{{ $row->incoming_quantity }}" />
    </td>
    <td>
        <input type="number" class="update total_taka" data-id="{{ $row->id }}" data-name="total_taka"
            value="{{ $row->total_taka }}" />
    </td>
    <td>
        <input type="number" class="update outgoing_price" data-id="{{ $row->id }}" data-name="outgoing_price"
            value="{{ $row->outgoing_price }}" />
    </td>
    <td>
        <input type="number" class="update outgoing_quantity" data-id="{{ $row->id }}" data-name="outgoing_quantity"
            value="{{ $row->outgoing_quantity }}" />
    </td>
    <td>
        <input type="number" class="update balance_quantity" data-id="{{ $row->id }}" data-name="balance_quantity"
            value="{{ $row->balance_quantity }}" />
    </td>
    <td>
        <input type="number" class="update outgoing_price_2" data-id="{{ $row->id }}" data-name="outgoing_price_2"
            value="{{ $row->outgoing_price_2 }}" />
    </td>
    <td>
        <input type="text" class="update" data-id="{{ $row->id }}" data-name="entertainment_name"
            value="{{ $row->entertainment_name }}" />
    </td>
    <td>
        <input type="number" class="update" data-id="{{ $row->id }}" data-name="rent_type"
            value="{{ $row->rent_type }}" />
    </td>
    <td>
        <input type="number" class="update others_expense" data-id="{{ $row->id }}" data-name="others_expense"
            value="{{ $row->others_expense }}" />
    </td>
    <td>
        <input type="number" class="update profit" data-id="{{ $row->id }}" data-name="profit"
            value="{{ $row->profit }}" />
    </td>
    <td>
        <input type="number" class="update lose" data-id="{{ $row->id }}" data-name="lose" value="{{ $row->lose }}" />
    </td>
    <td>
        <input type="number" class="update total_taka_add" data-id="{{ $row->id }}" data-name="total_taka_add"
            value="{{ $row->total_taka_add }}" />
    </td>
</tr>
@endforeach