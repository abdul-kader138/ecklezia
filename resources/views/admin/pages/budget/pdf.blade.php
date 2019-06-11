    <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">
        <thead>
        <th width="100%" align="center" style="height: 40px;background: #6AA9E3;font-size: 15px;font-family: monospace;">Budget Description</th>
            
        </thead>
    </table>

    <table>            
        <tbody style="width: 730px; padding-bottom: 10px;">           
            
            <tr>
                <td colspan="1" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Budget Holder</td>
                <td colspan="3" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">{{ $budget->first_name.' '.$budget->last_name }}</td>
            </tr>          
            
            <tr>
                <td colspan="1" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Title</td>
                <td colspan="3" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">{{ $budget->title }}</td>
            </tr>          
            
            <tr>
                <td colspan="1" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Total Amount</td>
                <td colspan="3" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">${{ $budget->total_amount }}</td>
            </tr>          
            
            <tr>
                <td colspan="1" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Spent</td>
                <td colspan="3" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">${{ $budget->spent }}</td>
            </tr>          
            
            <tr>
                <td colspan="1" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Remaining</td>
                <td colspan="3" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">${{ $budget->remaining }}</td>
            </tr>          
            
            <tr>
                <td colspan="1" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Created</td>
                <td colspan="3" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">
                    {{ date('M-d-Y h:i A', strtotime($budget->created_at)) }}</td>
            </tr>          
            
            <tr>
                <td colspan="1" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Last Amount Update</td>
                <td colspan="3" align="left" style="padding: 5px;font-size: 15px;font-family: sans-serif;">{{ date('M-d-Y h:i A', strtotime($budget->updated_at)) }}</td>
            </tr>
        </tbody>
    </table>


     <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">
        <thead>
        <th width="100%" align="center" style="height: 30px;background: #6AA9E3;font-size: 15px;font-family: monospace;">Expansions</th>
            
        </thead>
    </table>
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">              
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Date</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Amount</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Note</th>
            </tr>align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;"
            
        @foreach($expantions as $expantion)
            <tr>
                <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ date('M-d-Y', strtotime($expantion->created_at)) }}</td>
                <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">${{ $expantion->expansion_amount }}</td>
                <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><?php echo $expantion->note; ?></td>
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
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Date</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Amount</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Title</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Author</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">note</th>                                
            </tr>
          @foreach($transactions as $transaction)
            <tr>
                <th align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->date }}</th>
                <th align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->transaction_amount }}</th>
                <th align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->transaction_title }}</th>
                <th align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $transaction->name }}</th>
                <th align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><?php echo $transaction->note; ?></th>
            </tr>
          @endforeach
        </tbody>
    </table>