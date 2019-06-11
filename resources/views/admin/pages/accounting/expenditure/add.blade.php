@extends('admin.layout.account_admin')

@section('content')
<style>
.daterangepicker {
    z-index: 1200 !important;
}
.tox-notification {
display: none;
    }
</style>
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Expenditure</h2>
                    <div>
                <ul class="breadcrumb">
               
                    <li>
                        <a href="{{ url('/admin/accounting/expenditure') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">View Expenditure</a>
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
                        <h2>Add Expenditure</h2>

                    </div>
                    <!-- End Widget Header -->

                    <div class="col-md-12">
                        <!-- Begin Widget Body -->
                        <div class="widget-body">
                            <!-- Begin Event -->
                            <div class="panel panel-primary">
                                <div class="panel-body" >
                                    <form action="{{ url('/admin/accounting/expenditure/save') }}" method="POST">
                                        @csrf
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>

                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="lname">Product</label>
                                                        <div class="col-md-12">
                                                            <input name="product" type="text" class="form-control" placeholder="Product" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="lname">Price</label>
                                                        <div class="col-md-12">
                                                            <input name="price" type="text" class="form-control" placeholder="Price" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label">Expenditure Date</label>
                                                        <div class="col-md-12">
                                                       <input id="start_date" name="exp_date" type="text" class="form-control">
                                                        </div>
                                                    </div>


                                                </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="title">Expenditure Category</label>
                                                        <div class="col-md-12">
                                                            <input name="category" type="text" class="form-control" placeholder="Expenditure Category" required>
                                                        </div>
                                                    </div>
                                                                <div class="form-group">
                                                        <label class="col-md-5 control-label">Quantity</label>
                                                        <div class="col-md-12">
                                                            <input name="qty" type="text" class="form-control" placeholder="Quantity" required>
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
                                                            <textarea class="form-control" rows="4" id="basic-example" placeholder="Description" name="description"  ></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="color">&nbsp;</label>
                                                        <div class="col-md-12">
                                                            {{--<input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2 pull-right" style="padding: 10px 5%;">--}}
                                                            <input type="submit" value="Save" class="btn btn-gradient-04 mr-1 mb-2 pull-right" name="">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        </div>
                                    </form>
                                 
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