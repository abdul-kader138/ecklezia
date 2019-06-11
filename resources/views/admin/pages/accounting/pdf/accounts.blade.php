    @include('admin.pages.accounting.pdf.index')
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Account Name</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Account No</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Branch Code</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Balance</th>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Bank Branch</th>
            </tr>

                <?php echo $sl = 1;?>
           @foreach($result as $account)
                <tr>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $sl++ }}</span></td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $account->account_name }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $account->account_number }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $account->branch_code }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">${{ $account->initial_balance }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $account->bank_branch }}</td>
            @endforeach

        </tbody>
    </table>