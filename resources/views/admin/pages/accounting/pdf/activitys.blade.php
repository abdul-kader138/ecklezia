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

    
<div class="row">
    <div class="col-xl-12">
        <!-- Start Sorting -->
        <div class="widget has-shadow">

            <div class="widget-header bordered d-flex align-items-center flex-space-between">
                    <div class="widget-title">
                        <h4>Show ing result for  <b>{{ $for }}</b> From <b>{{ date('m-d-y', strtotime($from)) }}</b> To <b>{{ date('m-d-y', strtotime($to)) }}</b></h4>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget widget-11 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Activity Log</h2>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body p-0 widget-scroll" style="max-height: 450px; overflow: hidden; outline: none;" tabindex="3">
                                    <!-- Begin 01 -->
                                    @foreach($Activity as $activity)
                                    <div class="timeline violet">
                                        <div class="timeline-content d-flex align-items-center">
                                            <div class="user-image">
                                                @if($activity->type == 'add')
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/add.png" alt="...">
                                                @elseif($activity->type == 'edit')
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/edit.png" alt="...">
                                                @elseif($activity->type == 'delete')
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/delete.png" alt="...">
                                                @else
                                                <img class="rounded-circle" src="{{ asset('church') }}/img/other.png" alt="...">
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column mr-auto">
                                                <div class="title"><a href="{{ route($activity->t_name) }}">
                                                    <span class="username">{{ $activity->author_name }}</span>
                                                    {{ $activity->massage }}</a>
                                                </div>
                                                <div class="time">{{  date('d M', strtotime($activity->created_at)) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End 07 -->
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
            <!-- End Sorting -->
        </div>
    </div>
    <!-- End Row -->
    <!-- End Row -->
    <!-- End Row -->
</div>
<!-- End Container -->
<!-- Begin Centered Modal -->
</div>
</div>
<!-- End Centered Modal -->

<!-- Begin Centered Modal -->

<!-- End Centered Modal -->
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
  function report(){
    //alert("hi");
    var report_for=$("#report_for").val();
    var start_date =$("#start_date").val();
    var end_date =$("#end_date").val();
    var type =$("#type").val();
     $.ajax({
          type:'get',
          url  : "{{URL::to('/reports')}}",
          data:{'report_for':report_for,'type':type}, 
         success:function(response, allAccount){
            alert(response);
            alert(allAccount)
            *$.each(response.allAccount, function () {
                
            }
           if (response.type == "accounts") {
            
          } else{  }          
        }, 
    error:function(response){ alert("hmm not its error"); }
    });
    }
</script>
@endpush

