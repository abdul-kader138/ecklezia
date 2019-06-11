    @include('admin.pages.accounting.pdf.index')
        <table border="1" cellspacing="0" cellpadding="0" style="width: 730px; padding-bottom: 10px;">    
        <tbody style="width: 730px;">
            <tr>
                <th align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Sl</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Name</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Purchase Year</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Cost</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Lifespan</th>
                <th  align="center" style="padding: 5px;font-size: 15px;font-family: sans-serif;">Salvage Value</th>
            </tr>

                <?php echo $sl = 1;?>
           @foreach($result as $depreciation)
                <tr>
                    <td align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;"><span class="text-primary">{{ $sl++ }}</span></td>

                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $depreciation->asset_name }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $depreciation->purchase_year }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $depreciation->cost }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $depreciation->lifespan }}</td>
                    <td  align="center" style="padding: 3px;font-size: 15px;font-family: sans-serif;">{{ $depreciation->salvage_value }}</td>
            @endforeach

        </tbody>
    </table>