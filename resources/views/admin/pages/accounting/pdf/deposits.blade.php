    @include('admin.pages.accounting.pdf.index')
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>                
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Date</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Account</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Deposit Amount</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Cathegry</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Ref.</th>
            </tr>

                <?php echo $sl = 1;?>
           @foreach($result as $deposit)
                <tr>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $sl++ }}</span></td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->date }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->account_name }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->deposit_amount }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->category }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->ref_no }}</td>
            @endforeach

        </tbody>
    </table>