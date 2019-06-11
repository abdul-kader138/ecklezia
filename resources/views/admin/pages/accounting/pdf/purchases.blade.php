   @include('admin.pages.accounting.pdf.index')
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>

                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Category</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Product</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Price</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Quantity</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Total</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Date</th>
            </tr>

                <?php echo $sl = 1;?>
           @foreach($result as $purchase)
                <tr>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $sl++ }}</span></td>

                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $purchase->category }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $purchase->product }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $purchase->price }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $purchase->qty }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $purchase->total_amount }}</td>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $purchase->date }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>