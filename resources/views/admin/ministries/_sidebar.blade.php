<div class="widget has-shadow">
    <div class="widget-body">
        <div class="mt-5">
            <img src="{{ asset('church/img/avatar/avatar-01.jpg') }}" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
        </div>
        <h4 class="text-center mt-3 mb-1"><a href="{{route('admin.ministries.show',$ministry->id)}}">{{$ministry->ministry}}</a></h4>
        <div class="category text-center">{{$ministry->ministry_name}}</div>
        <div class="em-separator separator-dashed"></div>
        <ul class="nav flex-column">
            <li class="nav-item">


                <a href="javascript:void(0)">Leader Status</a>
                <p>{{$ministry->ministry_status}}</p>

            </li>

            <li class="nav-item">
                <p onclick="confirm('are You sure delete?')?$('#delete_form_{{$ministry->id}}').submit():null">

                    <a class="text-danger" href="javascript:void(0)">Delete Group</a>
                </p>
                <form action="{{route('admin.ministries.destroy',$ministry->id)}}" method="post" id="delete_form_{{$ministry->id}}">@csrf
                    @method('delete')
                </form>
            </li>

            <li class="nav-item">
                <a href="javascript:void(0)">Meeting Time</a>
                <p>

                    {{$ministry->meeting_time}}
                </p>
            </li>
            <li class="nav-item">
                <p>

                    <a href="{{route('admin.ministries-view-note',$ministry->id)}}">Note</a>
                </p>
            </li>

            <li class="nav-item">
                <p>

                    <a href="{{route('admin.ministries-view-event',$ministry->id)}}">Event</a>
                </p>
            </li>

        </ul>
    </div>
</div>