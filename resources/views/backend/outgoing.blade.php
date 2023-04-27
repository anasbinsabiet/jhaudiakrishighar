@foreach($applications as $row)
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