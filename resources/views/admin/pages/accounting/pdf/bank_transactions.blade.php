    @include('admin.pages.accounting.pdf.index')
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Date</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Account</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Amount</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Cathegry</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Deposit Ref.</th>
            </tr>

                <?php echo $sl = 1;?>
           @foreach($result as $transaction)
                <tr>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $sl++ }}</span></td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->date }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->account_name }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->transaction_amount }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->method }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->ref_no }}</td>
            @endforeach

        </tbody>
    </table>