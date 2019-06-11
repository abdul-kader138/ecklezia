@extends('admin.layout.account_admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
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
                <h2 class="page-header-title">Create Quote</h2>
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
                                    <a class="dropdown-item" href="{{ url('/admin/accounting/customer_invoice/add') }}">New Customer Invoice</a>
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
                    <h4>Create Quote</h4>
                </div>

            </div>
            <form action="{{ url('/admin/accounting/quotes/save') }}" method="POST">
              @csrf

            <div class="widget-body">
                <div class="row filter">
                    <div class="form-group col-md-4">
                        <label>Quote Number</label>
                        <input type="text" class="form-control" placeholder="Quote Number" name="quote_number" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Customer/Company</label>
                        <input type="text" class="form-control" placeholder="Customer/Company" name="name">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Quote Date</label>
                    <input type="text" id="start_date" class="form-control" placeholder="Quote Date" name="quote_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Due Date</label>
                        <input type="text" id="end_date" class="form-control" placeholder="Due Date" name="due_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Prefix</label>
                        <input type="text" class="form-control" placeholder="Prefix" name="prefix">
                    </div>
                </div>
                <hr>
                <div class="row">

                     <div class="col-md-3">
                        <label>Item</label>
                        <div class="form-group">                                 
                          <input type="text" class="form-control" name="item[]" required="">
                                </div>
                     </div>
                    <div class="col-md-2">
                        <label>Tax Type</label>
     <div class="form-group">
                                 <select class="form-control" onchange="selectTax();" name="tax_type[]" id="tax_type[]" required>
                                    <option value="1">select</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Percentage</option>
                                </select>
                                </div>
                    </div>
                    <div class="col-md-2">
                        <label>Tax Rate</label>
                        <div class="form-group">
                                <input type="text" class="form-control" id="tax_result[]"  name="tax_rate[]" value="0" disabled="">
                            </div>
                    </div>
                    <div class="col-md-1">
                        <label>Qty/Hrs</label>
<div class="form-group">
                            <input type="text" class="form-control key" id="qty[]"   value="1" name="qty[]"  required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Unit Price</label>
                     <div class="form-group">
                        <input type="text" class="form-control" value="0" name="unit_price[]" id="unit_price[]"  required>
                    </div></div>
                    <div class="col-md-2">
                        <label>Subtotal</label>
                     <div class="form-group">
                    <input type="text" class="form-control" disabled name="sub_total[]" id="sub_total[]">
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
                          <label for="quote_note">Invoice Note</label>
                          <textarea name="quote_note" rows="5" class="form-control"></textarea>
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



        <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px"> 

                     <div class="col-md-3">
                        <label>Item</label>
                        <div class="form-group">
                                                       
                          <input type="text" class="form-control" name="item[]" required="">
                                </div>
                     </div>
                    <div class="col-md-2">
                        <label>Tax Type</label>
     <div class="form-group">
                                 <select class="form-control" onchange="selectTax();" name="tax_type[]" id="tax_type" required>
                                    <option value="1">select</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Percentage</option>
                                </select>
                                </div>
                    </div>
                    <div class="col-md-2">
                        <label>Tax Rate</label>
                        <div class="form-group">
                                <input type="text" class="form-control" id="tax_result[]"  name="tax_rate[]" value="0" disabled="">
                            </div>
                    </div>
                    <div class="col-md-1">
                        <label>Qty/Hrs</label>
<div class="form-group">
                            <input type="text" class="form-control key" id="qty[]"   value="1" name="qty[]"  required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Unit Price</label>
                     <div class="form-group">
                        <input type="text" class="form-control" value="0" name="unit_price[]" id="unit_price"  required>
                    </div></div>
                    <div class="col-md-2">
                        <label>Subtotal</label>
                     <div class="form-group">
                    <input type="text" class="form-control" disabled name="sub_total[]" id="sub_total">
                </div>
              </div>

                <div class="col-md-12">
                     <div class="form-group">                    
                      <button class="btn btn-danger remove" type="button">
                        <i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>

          </div>
        </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script type="text/javascript">

    $(document).ready(function() {


      $(".add-more").click(function(){ 
        //alert('hi')
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>

<script>
  function selectTax(){
    var id=$("#tax_type").val();

        $.ajax({
        url  : "{{URL::to('/set-tax')}}",
        type : "get",
        data : {id:id},
        success : function(response){
          $("#tax_result").val(response);
          //alert(response);
        },
        error : function(xhr, status){
            alert('There is some error.Try after some time.');
        }
    });
  }


  $(document).ready(function() {
    $(".sum").val("0");
    $(".key").val("");

    function calc() {
        //alert('hi');
        var $num1 = ($.trim($("#qty[]").val()) != "" && !isNaN($("#qty[]").val())) ? parseInt($("#qty[]").val()) : 0;
        console.log($num1);
        //alert($num1);
        var $num2 = ($.trim($("#unit_price[]").val()) != "" && !isNaN($("#unit_price[]").val())) ? parseInt($("#unit_price[]").val()) : 0;
        console.log($num2);
        $("#sub_total[]").val($num1*$num2);
    }
    $("#qty[]").keyup(function() {
        calc();
    });
    $("#unit_price[]").keyup(function() {
        calc();
    });
});
</script>

@endsection



