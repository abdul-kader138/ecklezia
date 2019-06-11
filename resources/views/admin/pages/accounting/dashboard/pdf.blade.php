    <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">
        <thead>
        <th width="100%" align="center" style="height: 40px;background: #9C226E;font-size: 15px;font-family: monospace;">Ecklezia </th>            
        </thead>
    </table>
     <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">
        <thead>
        <th width="100%" align="center" style="height: 40px;background: #6AA9E3;font-size: 15px;font-family: monospace;">Bank Statement of {{ date('M-Y', strtotime($from)) }} </th>            
        </thead>
    </table>

     <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">
        <thead>
        <th width="100%" align="center" style="height: 30px;background: #6AA9E3;font-size: 15px;font-family: monospace;">Deposits</th>
            
        </thead>
    </table>
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">ID</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Date</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Account</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Amount</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Cathegry</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Deposit Ref.</th>
            </tr>

                <?php echo $sl = 1;?>
            @foreach($deposits as $deposit)
                <tr>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $sl++ }}</span></td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->id }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->date }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->account_name }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->deposit_amount }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->category }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $deposit->ref_no }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

     <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">
        <thead>
        <th width="100%" align="center" style="height: 30px;background: #6AA9E3;font-size: 15px;font-family: monospace;">Transactions</th>
            
        </thead>
    </table>
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px;">    
        <tbody style="width: 730px;">  

            <tr>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Id</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Date</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Account</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Amount</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Cathegry</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Ref.</th>
            </tr>

                <?php echo $sl = 1;?>
            @foreach($transactions as $transaction)
                <tr>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $sl++ }}</span></td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->id }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->date }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->account_name }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->transaction_amount }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->method }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->ref_no }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>