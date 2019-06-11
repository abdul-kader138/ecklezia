@extends('admin.layout.account_admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
}
.tox-notification {
display: none;
    }
.dropdown-toggle::after{
    content: none !important; 
}
.btn {
    padding: 10px !important;
}
label {
    color: #5d5386;

}


</style>
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Create Customer Invoice</h2>
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <div class="btn-group mr-1 mb-2">
                                <button type="button" class="btn btn-info btn-square ">Customer Invoice</button>
                                <a class="btn btn-info btn-square  dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-angle-down mr-0"></i>
                                </a>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(66px, 40px, 0px);">
                                    <a class="dropdown-item" href="{{ url('/admin/accounting/customer_invoice') }}">Customer Invoices</a>
                                    <a class="dropdown-item" href="{{ url('/admin/accounting/customer_invoice/add') }}">Create Customer Invoice</a>
                                </div>
                            </div>
                        </li>
                        <li>
                          <div class="btn-group mr-1 mb-2">
                            <button type="button" class="btn btn-info btn-square ">Direct Invoice</button>
                            <a class="btn btn-info btn-square  dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-angle-down mr-0"></i>
                            </a>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(66px, 40px, 0px);">
                               <a class="dropdown-item" href="{{ url('/admin/accounting/direct_invoice') }}">Direct Invoices</a>
                               <a class="dropdown-item" href="{{ url('/admin/accounting/direct_invoice/add') }}">Create Direct Invoice</a>
                           </div>
                       </div>
                   </li>
                   <li>
                    <div class="btn-group mr-1 mb-2">
                        <button type="button" class="btn btn-info btn-square ">Quotes</button>
                        <a class="btn btn-info btn-square  dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-angle-down mr-0"></i>
                        </a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(66px, 40px, 0px);">
                          <a class="dropdown-item" href="{{ url('/admin/accounting/quotes') }}">Quotes</a>
                          <a class="dropdown-item" href="{{ url('/admin/accounting/quotes/add') }}">New Quote</a>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
  </div>
</div>
</div>
<!-- End Page Header -->

<!-- End Row -->
<div class="row">
    <div class="col-xl-12">
        <!-- Start Sorting -->
        <div class="widget has-shadow">

            <div class="widget-header bordered d-flex align-items-center flex-space-between">
                <div class="widget-title">
                    <h4>Create Customer Invoice</h4>
                </div>

            </div>
            <form action="{{ url('/admin/accounting/customer_invoice/save') }}" method="POST">
              @csrf
                       <div class="widget-body">
                <div class="row filter">
                    <div class="form-group col-md-4">
                        <label>Invoice Number</label>
                        <input type="text" class="form-control" placeholder="Invoice Number" name="invoice_number" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" placeholder="Customer Name" name="customer_name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Customer Email</label>
                        <input type="email" class="form-control" placeholder="Customer Email" name="customer_email" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Invoice Date</label>
                        <input type="text" id="start_date" class="form-control" placeholder="Invoice Date" name="invoice_date" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Due Date</label>
                        <input type="text" id="end_date" class="form-control " placeholder="Due Date" name="due_date" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Prefix</label>
                        <input type="text" class="form-control" placeholder="Prefix" name="prefix" required>
                    </div>
                </div>
                <hr>
                <div class="row">

                     <div class="col-md-3">
                        <label>Item</label>
                        <div class="form-group">
                          <input type="text" class="form-control" name="item[]" required>
                                </div>
                     </div>
                    <div class="col-md-2">
                        <label>Tax Type</label>
     <div class="form-group">
                                 <select class="form-control" name="tax_type[]" id="tax_type1" required>
                                    <option disabled>select</option>
                                    <option value="1" disabled>Flat</option>
                                    <option value="2" selected>Percentage</option>
                                </select>
                                </div>
                    </div>
                    <div class="col-md-2">
                        <label>Tax Rate</label>
                        <div class="form-group">
                                <input type="text" class="form-control" id="tax_rate1"  name="tax_rate[]" onkeyup="subTotal(1)" value="3.35">
                            </div>
                    </div>
                    <div class="col-md-1">
                        <label>Qty/Hrs</label>
<div class="form-group">
                            <input type="text" class="form-control key" id="qty1" onkeyup="subTotal(1)"   value="1" name="qty[]"  required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Unit Price</label>
                     <div class="form-group">
                        <input type="text" class="form-control" value="0" name="unit_price[]" id="unit_price1" onkeyup="subTotal(1)"  required>
                    </div></div>
                    <div class="col-md-2">
                        <label>Subtotal</label>
                     <div class="form-group">
                    <input type="text" class="form-control" disabled name="sub_total[]" id="sub_total1">
                </div>
              </div>
              <div class="after-add-more">
                
              </div>
                <div class="col-md-12">
                    <input value="Add Item" class="btn btn-gradient-04 mr-1 mb-2 add-more" style="padding: 10px 5%;">
                </div>
            </div>

                </div>
                <hr>
                <div class="row">
                        <div class="col-md-7 col-sm-12 text-xs-center text-md-left">&nbsp; </div>
                        <div class="col-md-5 col-sm-12">
                          <div class="table-responsive">
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  <td>Sub Total</td>
                                  <td class="text-xs-right">$ <span class="sub">0</span></td>
                                </tr>
                                <tr>
                                  <td>TAX</td>
                                  <td class="text-xs-right">$ <span class="tax_total">0</span></td>
                                </tr>
                                <tr>
                                  <td colspan="2" style="border-bottom:1px solid #dddddd; padding:0px !important; text-align:left"><table class="table table-bordered">
                                      <tbody>
                                        <tr>
                                          <td width="30%" style="border-bottom:1px solid #dddddd; text-align:left"><strong>Discount Type</strong></td>
                                          <td style="border-bottom:1px solid #dddddd; text-align:center"><strong>Discount</strong></td>
                                          <td style="border-bottom:1px solid #dddddd; text-align:left"><strong>Discount Amount</strong></td>
                                        </tr>
                                        <tr>
                                          <td><div class="form-group">
                                              <select name="discount_type" class="form-control discount_type">
                                                <option value="1"> Flat</option>
                                                <option value="2"> Percent</option>
                                              </select>
                                            </div></td>
                                          <td align="right"><div class="form-group">
                                              <input style="text-align:right" type="text" name="discount_figure" class="form-control discount_figure" value="0" data-valid-num="required">
                                            </div></td>
                                          <td align="right"><div class="form-group">
                                              <input type="text" style="text-align:right" readonly="" name="discount_amount" value="0" class="discount_amount form-control">
                                            </div></td>
                                        </tr>
                                      </tbody>
                                    </table></td>
                                </tr>
                              <input type="hidden" class="fgrand_total" name="fgrand_total" value="0">
                              <tr>
                                <td>Grand Total</td>
                                <td class="text-xs-right">$ <span class="grand_total">0</span></td>
                              </tr>
                                </tbody>
                              
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-12">
                          <label for="invoice_note">Invoice Note</label>
                          <textarea name="invoice_note" rows="5" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="row">
                    <div class="col-md-7 col-sm-12">
                      <h6>Terms &amp; Condition</h6>
                      <p>You know, being a test pilot isn't always the healthiest business in the world. We predict too much for the next year and yet far too little for the next 10.</p>
                    </div>
                    <div class="col-md-5 col-sm-12 text-xs-center">
                      <button type="submit" name="invoice_submit" class="btn btn-square btn-primary pull-right my-1" style="margin-right: 5px;"><i class="fa fa fa-check-square-o"></i> Submit Invoice</button>
                    </div>
                  </div>
              </form>
</div>
</div>
<!-- End Sorting -->
</div>
<!-- End Row -->
</div>
<!-- End Container -->

<script src="{{ asset('js/jquery.min.js') }}"></script> 
  <script type="text/javascript">

    $(document).ready(function() {
      var itemId = 2;
      $(".add-more").click(function(){ 
        newItemId = itemId++;
          $('.after-add-more').append('<div class="control-group input-group" style="margin-top:10px"><div class="col-md-3"><label>Item</label><div class="form-group"><input type="text" class="form-control" name="item[]" required></div></div><div class="col-md-2"><label>Tax Type</label><div class="form-group"><select class="form-control" onchange="subTotal('+newItemId+');" name="tax_type[]" id="tax_type" required><option disabled>select</option><option value="1" disabled>Flat</option><option value="2">Percentage</option></select></div></div><div class="col-md-2"><label>Tax Rate</label><div class="form-group"><input type="text" class="form-control" id="tax_rate'+newItemId+'" onkeyup="subTotal('+newItemId+')"  name="tax_rate[]" value="3.35"></div></div><div class="col-md-1"><label>Qty/Hrs</label><div class="form-group"><input type="text" class="form-control key" id="qty'+newItemId+'" onkeyup="subTotal('+newItemId+')"   value="1" name="qty[]"  required></div></div><div class="col-md-2"><label>Unit Price</label><div class="form-group"><input type="text" class="form-control" value="0" name="unit_price[]" id="unit_price'+newItemId+'" onkeyup="subTotal('+newItemId+')"  required></div></div><div class="col-md-2"><label>Subtotal</label><div class="form-group"><input type="text" class="form-control" disabled name="sub_total[]" id="sub_total'+newItemId+'"></div></div><div class="col-md-12"><div class="form-group"><button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button></div></div></div>');
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>

<script type="text/javascript">
  
  function subTotal(d){
    //alert(d);
    var qty=$("#qty"+d).val();
    var unit_price=$("#unit_price"+d).val();
    var tax_rate=$("#tax_rate"+d).val();

    var sub_total=$(qty*unit_price/100);
    var sub_total=$(sub_total*tax_rate);


    $("#sub_total"+d).val(qty*unit_price/100*tax_rate + qty*unit_price);

    //var id=$("#sub_total1").val();
  }
</script>

@endsection



