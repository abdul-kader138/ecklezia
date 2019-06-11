@extends('admin.layout.admin')
@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Asset Contribution List</h2>
                <div>
                 <ul class="breadcrumb">
                  <li>
                    <a href="{{ route('admin.pledge.create') }}" class="btn btn-md btn-info btn-square mr-1 mb-2">Add Pledge</a>
                </li>
                <li>
                    <a href="{{ route('admin.contribution.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Contribution</a>
                </li>
                <li>
                    <a href="{{ route('admin.contribution_giving.create') }}" class="btn btn-info btn-square mr-1 mb-2">Add Giving</a>
                </li>
                <li>
                    <a href="{{ route('admin.asset-contribution.create') }}"
                    class="btn btn-info btn-square mr-1 mb-2">Add Asset Contribution</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-xl-12">
        <!-- Start Sorting -->
        <div class="widget has-shadow">

            <div class="widget-header bordered no-actions d-flex align-items-center flex-space-between">
                <div class="widget-title">
                    <h4>Asset Contribution List</h4>
                </div>

            </div>

            <div class="widget-body">
                <div class="table-responsive">
                    <table id="sorting-table" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>First,Last Name</th>
                                <th>Phone</th>
                                <th>Assets Donation</th>
                                <th>Assesment Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($assetcontributions as $key => $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->occupation }}</td>
                                <td>{{ $row->estimated_amount }}</td>
                                <td class="td-actions">
                                    {!! Form::open(['route' => ['admin.asset-contribution.destroy', $row->id], 'method' => 'delete']) !!}
                                    <abbr title="View">
                                        <a href="{!! route('admin.asset-contribution.show', [$row->id]) !!}"><i class="la la-eye view"></i></a>
                                    </abbr>
                                    <abbr title="Edit">
                                        <a href="{!! route('admin.asset-contribution.edit', [$row->id]) !!}"><i class="la la-edit edit"></i></a>
                                    </abbr>
                                    <abbr title="Delete">
                                        {!! Form::button('<i class="la la-trash-o delete"></i>', ['type' => 'submit', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </abbr>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Sorting -->
    </div>
</div>
<!-- End Row -->
</div>
<!-- End Container -->
@endsection

@push('alljs')
<script src="{{ asset('church/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('church/vendors/js/datatables/vfs_fonts.js') }}"></script>

<script>
    (function ($) {

        'use strict';

        $(function () {
            $('#sorting-table').DataTable({
                "lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
                ],
                "order": [
                [3, "desc"]
                ]
            });
        });

    })(jQuery);
</script>
@endpush

