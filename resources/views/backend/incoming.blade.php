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