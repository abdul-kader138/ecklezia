    @include('admin.pages.accounting.pdf.index')
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>                
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Quote#</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Customer</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Total</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Invoice Date</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Due Date</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Status</th>

                <?php echo $sl = 1;?>
           @foreach($result as $quote)
                <tr>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $sl++ }}</span></td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">#{{ $quote->quote_number }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $quote->name }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $quote->grand_total }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $quote->quote_date }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $quote->due_date }} </td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">@if($quote->status == 1)
                        <button type="button" class="btn btn-success btn-square btn-sm mr-1 mb-2">Paid</button>
                        @else
                        <button type="button" class="btn btn-danger btn-square btn-sm mr-1 mb-2">Due</button>
                        @endif
                    </td>
            @endforeach

        </tbody>
    </table>
