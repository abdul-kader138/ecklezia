<!-- Begin Left Sidebar -->
<div class="default-sidebar">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <li class="{{menu_activity([route('home')],'active')}}">
                <a href="{{url('/admin/home')}}"><i class="la la-columns"></i><span>Dashboard</span></a>
            </li>

            <li class="">
                <a href="{{url('/admin/home_content')}}"><i class="la la-home"></i><span>Home</span></a>
            </li>

            <li class="">
                <a href="{{ route('admin.calendar.index') }}"><i class="la la-calendar"></i><span>Calendar</span></a>
            </li>

            <li><a href="#dropdown-clergy" aria-expanded="false" data-toggle="collapse"><i class="la la-certificate"></i><span>Clergy</span></a>
                <ul id="dropdown-clergy" class="collapse list-unstyled pt-0 {{menu_activity([
                route('admin.associate-ministers.index'),
                route('admin.sermon-planners.index'),
                route('admin.confidential.index'),
                ],'show',[
                'admin.associate-ministers.edit',
                'admin.associate-ministers.show',
                'admin.associate-ministers.create',
                'admin.sermon-planners.edit',
                'admin.sermon-planners.show',
                'admin.sermon-planners.create',
                'admin.confidential.edit',
                'admin.confidential.show',
                'admin.confidential.create',
                ])}}">
                    <li><a href="{{ url('/admin/posters') }}">Senior Pastors</a></li>
                    <li class="{{menu_activity([route('admin.associate-ministers.index')],'active',['admin.associate-ministers.edit','admin.associate-ministers.show'])}}"><a href="{{ route('admin.associate-ministers.index') }}">Associate Pastors</a></li>
                    <li><a href="{{ url('/admin/event_planner') }}">Event Planner</a></li>
                    <li><a href="{{ url('/admin/ministry_planner') }}">Ministry Planner</a></li>
                    <li class="{{menu_activity([route('admin.sermon-planners.index')],'active',['admin.sermon-planners.edit','admin.sermon-planners.create','admin.sermon-planners.show'])}}"><a href="{{ route('admin.sermon-planners.index') }}">Sermon Planner</a></li>
                    <li class="{{menu_activity([route('admin.confidential.index')],'active',['admin.confidential.edit','admin.confidential.create','admin.confidential.show'])}}"><a href="{{ route('admin.confidential.index') }}">Confidential Notes</a></li>
                </ul>
            </li>
            <li><a href="#dropdown-people" aria-expanded="false" data-toggle="collapse"><i class="la la-users"></i><span>People</span></a>
                <ul id="dropdown-people" class="collapse list-unstyled pt-0 {{menu_activity([],'show',[
                'admin.people.create',
                'admin.people.index',
                'admin.people.edit',
                'admin.people.show',
                ])}}">
                <li class="{{menu_activity([route('admin.people.create')],'active')}}">
                    <a href="{{ route('admin.people.create') }}"><span>Add People</span></a>
                </li>
                <li class="{{menu_activity([route('admin.people.index','all')],'active',['admin.people.edit','admin.people.show'])}}">
                    <a href="{{ route('admin.people.index','all') }}"><span>View All People</span></a>
                </li>
                    <li class="{{menu_activity([route('admin.people.index','church-member')],'active')}}">
                    <a href="{{  route('admin.people.index','church-member')}}"><span>View  Members</span></a>
                </li>
                    <li class="{{menu_activity([route('admin.people.index','visitor')],'active')}}">
                    <a href="{{ route('admin.people.index','visitor') }}"><span>View Visitor</span></a>
                </li>
                    <li class="{{menu_activity([route('admin.people.index','volunteer')],'active')}}">
                    <a href="{{  route('admin.people.index','volunteer') }}"><span>View Volunteer</span></a>
                </li>
            </ul>
        </li>
        <li><a href="#dropdown-service" aria-expanded="false" data-toggle="collapse"><i class="la la-institution"></i><span>Service</span></a>
            <ul id="dropdown-service" class="collapse list-unstyled pt-0 {{menu_activity([],'show',[
                'admin.service.index',
                'admin.service.create',
                'admin.service.edit',
                'admin.service.show',
                'admin.service.ongoing',
                ])}}">
                <li class="{{menu_activity([route('admin.service.create')],'active')}}"><a href="{{ route('admin.service.create') }}">Add Service</a></li>
                <li class="{{menu_activity([route('admin.service.index')],'active')}}"><a href="{{ route('admin.service.index') }}">View Service</a></li>
                <li class="{{menu_activity([route('admin.service.ongoing')],'active')}}"><a href="{{route('admin.service.ongoing')}}">Ongoing Service</a></li>
               

            </ul>
        </li>

        <li><a href="#dropdown-shepard" aria-expanded="false" data-toggle="collapse"><i class="la la-cogs"></i><span>Check In/Check Out</span></a>
            <ul id="dropdown-shepard" class="collapse list-unstyled pt-0 {{menu_activity([],'show',[
                'admin.check-in.index',
                'admin.check-in.create',
                'admin.check-in.edit',
                'admin.check-in.show',
                'admin.check-out.index',
                'admin.shepherd.create',
                'admin.shepherd.index',
                'admin.shepherd-setup.create',
                ])}}">
                <li class="{{menu_activity([route('admin.check-in.create')],'active',['admin.check-in.index'])}}"><a href="{{ route('admin.check-in.create') }}">Check In</a></li>
                <li><a href="{{ route('admin.check-out.index') }}">Check Out</a></li>
                <li><a href="{{ route('admin.shepherd.create') }}">Add Shepherd</a></li>
                <li><a href="{{ route('admin.shepherd.index') }}">Shepherds</a></li>
                <li><a href="{{route('admin.shepherd-setup.create')}}">Shepard Set up</a></li>
            </ul>
        </li>

        <li><a href="#dropdown-contribution" aria-expanded="false" data-toggle="collapse"><i class="la la-creative-commons"></i><span>Contributions</span></a>
            <ul id="dropdown-contribution" class="collapse list-unstyled pt-0 {{menu_activity([],'show',[
                'admin.contribution.index',
                'admin.contribution.create',
                'admin.contribution.show',
                'admin.contribution_giving.create',
                'admin.contribution_giving.show',
                'admin.contribution_giving.edit',
                'admin.pledge.index',
                'admin.pledge.create',
                'admin.pledge.show',
                'admin.pledge.edit',
                'admin.asset-contribution.index',
                'admin.asset-contribution.create',
                'admin.asset-contribution.edit',
                'admin.asset-contribution.show',
                'admin.contribution-import-export.index',
                'admin.contribution-report-generation.index',
                ])}}">
                <li><a href="{{ route('admin.contribution.index') }}">Contribution</a></li>
                <li><a href="{{ route('admin.contribution_giving.create') }}">Giving</a></li>
                <li><a href="{{ route('admin.pledge.index') }}">Pledge</a></li>
                <li><a href="{{ route('admin.asset-contribution.index') }}">Assets Contribution</a></li>
                <li><a href="{{ route('admin.contribution-import-export.index') }}">Import & Export</a></li>
                <li><a href="{{ route('admin.contribution-report-generation.index') }}">Report Generation</a></li>
            </ul>
        </li>

        <li><a href="#dropdown-ministries" aria-expanded="false" data-toggle="collapse"><i class="la la-building"></i><span>Ministries</span></a>
            <ul id="dropdown-ministries" class="collapse list-unstyled pt-0 {{menu_activity([],'show',[
                'admin.ministries.create',
                'admin.ministries.index',
                'admin.ministries.show',
                'admin.ministries-note',
                'admin.ministries-create-event',
                'admin.ministries-event',
                ])}}">
                <li><a href="{{ route('admin.ministries.create') }}">Add Ministry</a></li>
                <li><a href="{{ route('admin.ministries.index') }}">View Ministry</a></li>
                <li><a href="{{ route('admin.ministries-note') }}">Notes</a></li>
                <li><a href="{{ route('admin.ministries-create-event') }}">Add Events</a></li>

            </ul>
        </li>
        <li><a href="#dropdown-attendance" aria-expanded="false" data-toggle="collapse"><i class="la la-institution"></i><span>Attendance</span></a>
            <ul id="dropdown-attendance" class="collapse list-unstyled pt-0 {{menu_activity([],'show',[
                'admin.attendance.index',
                'admin.attendance.create',
                'admin.attendance.show',
                ])}}">
                <li><a href="{{ route('admin.attendance.index') }}">View Attendance</a></li>
                <li><a href="{{ route('admin.attendance.create') }}">Add Attendance</a></li>

            </ul>
        </li>
        <li><a href="{{ url('/admin/accounting') }}" ><i class="la la-money"></i><span>Accounting</span></a>

        </li>
            <li class="">
                <a href="{{url('/admin/accounting/budget')}}"><i class="la la-money"></i><span>Budgeting</span></a>
            </li>

        <li><a href="#dropdown-communication" aria-expanded="false" data-toggle="collapse"><i class="la la-mobile"></i><span>Communication</span></a>
            <ul id="dropdown-communication" class="collapse list-unstyled pt-0">
                <li><a href="{{ url('/admin/email') }}">Email</a></li>
                <li><a href="">Phone (Google Hangout)</a></li>
                <li><a href="">Whatsapp</a></li>
            </ul>
        </li>

        <li><a href="#dropdown-report" aria-expanded="false" data-toggle="collapse"><i class="la la-file-excel-o"></i><span>Report</span></a>
            <ul id="dropdown-report" class="collapse list-unstyled pt-0">
                <li><a href="{{url('/admin/report/member_list')}}">Membership List</a></li>
                <li><a href="{{url('/admin/report/birthday_list')}}">Birthday</a></li>
                <li><a href="{{url('/admin/report/individual_giving')}}">Individual Giving Statement</a></li>
                <li><a href="{{url('/admin/report/family_giving')}}">Family Giving Statement</a></li>
                <li><a href="{{url('/admin/report/group')}}">Group Report</a></li>
                <li><a href="{{url('/admin/report/ministry_report')}}">Ministry Report</a></li>
                <li><a href="{{url('/admin/report/checkin_report')}}">Check In Report</a></li>
                <li><a href="{{url('/admin/report/checkout_report')}}">Check Out Report</a></li>
                <li><a href="{{url('/admin/report/pledge_report')}}">Pledge Report</a></li>
            </ul>
        </li>
        <li><a href="#dropdown-church" aria-expanded="false" data-toggle="collapse"><i class="la la-laptop"></i><span>Church Documents</span></a>
            <ul id="dropdown-church" class="collapse list-unstyled pt-0">
                <li><a href="">Create Folder</a></li>
                <li><a href="">Folder 1</a></li>
                <li><a href="">Folder 2</a></li>

            </ul>
        </li>

    </ul>


    <!-- End Main Navigation -->
</nav>
<!-- End Side Navbar -->
</div>
<!-- End Left Sidebar