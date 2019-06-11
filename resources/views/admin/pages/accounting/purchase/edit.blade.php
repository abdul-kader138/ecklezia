@extends('admin.layout.account_admin')

@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Purchase</h2>
                    <div>
                                                        <ul class="breadcrumb">
               
                    <li>
                        <a href="{{ url('/admin/accounting/purchase') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">View Purchase</a>
                    </li>

                </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- End Row -->
        <div class="row no-margin">
            <div class="col-xl-12">
                <!-- Begin Widget -->
                <div class="row widget has-shadow">
                    <!-- Start Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Add Purchase</h2>

                    </div>
                    <!-- End Widget Header -->

                    <div class="col-md-12">
                        <!-- Begin Widget Body -->
                        <div class="widget-body">
                            <!-- Begin Event -->
                            <div class="panel panel-primary">
                                <div class="panel-body" >
                    <form action="{{ url('/admin/accounting/purchase/update/'.$purchase->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                                    
                                        <div class="col-md-12">
   <div class="row">
    <div class="col-md-6">
        <fieldset>
            <div class="form-group">
                <label class="col-md-5 control-label" for="title">Purchase Category</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Purchase Category" name="category" value="{{ $purchase->category }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="lname">Price</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $purchase->price }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="end">Purchase Date</label>
                <div class="col-md-12">
                    <input type="text" id="end_date" class="form-control" placeholder="Purchase Date" name="date" value="{{ $purchase->date }}" required>
                </div>
            </div>
<!--             <div class="form-group">
    <label class="col-md-5 control-label" for="color">Total Amount</label>
    <div class="col-md-12">
        <input type="text" class="form-control" placeholder="Total Amount" name="total_amount" value="{{ $purchase->total_amount }}" required>
    </div>
</div> -->
        </fieldset>
    </div>

    <div class="col-md-6">
        <fieldset>

            <div class="form-group">
                <label class="col-md-5 control-label" for="lname">Product</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Product" name="product" value="{{ $purchase->product }}" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-5 control-label" for="start_date">Quantity</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Quantity" name="qty" value="{{ $purchase->qty }}" required>
                </div>
            </div>
            <!-- Name input-->

        </fieldset>
    </div>
        <div class="col-md-12">
        <fieldset>

            <div class="form-group">
                <label class="col-md-5 control-label" for="sermon">Description</label>
                <div class="col-md-12">
                    <textarea name="description" class="form-control" id="basic-example" rows="4"><?php echo $purchase->description; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="sermon">Invoice Copy</label>
                <div class="col-md-4">                    
                    <img src="{{ asset('uploads/images/files/'.$purchase->file) }}" height="45" width="45" alt="">
                </div>
                <div class="col-md-8">                    
                    <input type="file" class="form-control"  name="file">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="color">&nbsp;</label>
                <div class="col-md-12">
                    {{--<input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2 pull-right" style="padding: 10px 5%;">--}}
                    <input type="submit" value="Save" class="btn btn-gradient-04 mr-1 mb-2 pull-right">
                </div>
            </div>
        </fieldset>
    </div>
</div>
                                            </form>

                                        </div>
                                 
                                </div>
                            </div>
                            <!-- End Event -->
                        </div>
                        <!-- End Widget Body -->
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
@endsection