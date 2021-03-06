<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('bower_components/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->guard('admin')->user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="{{ setActive('admin') }}"><a href="/admin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            @if(auth()->guard('admin')->user()->hasRole('Tech'))
                <li class="{{ setActive('tasks') }}"><a href="/tasks"><i class="fa fa-tasks"></i> <span>Task &nbsp &nbsp</span><span class="label label-danger pull-right">{{ $tasks_pending }}</span><span class="label label-success pull-right">{{ $tasks_open }}</span></a></li>
            @endif

            <li class="{{ setActive('tsheets') }}"><a href="/tsheets"><i class="fa fa-file-excel-o"></i> <span>Manage Tsheet</span></a></li>

            <li class="{{ setActive('calendars') }}"><a href="/events"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>

            @if(auth()->guard('admin')->user()->hasRole('Newspaper'))
                <li class="treeview">
                    <a href="#"><i class="fa fa-line-chart"></i> <span>Newspaper Reports</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ setActive('newspaper_reports') }}"><a href="/newspaper_reports/not_updated_reports"><i class="fa fa-circle-o"></i> <span>Not Updated</span></a></li>
                        <li class="{{ setActive('newspaper_reports') }}"><a href="/newspaper_reports/download"><i class="fa fa fa-circle-o"></i> <span>Publication Reports</span></a></li>
                        <li class="{{ setActive('newspaper_reports') }}"><a href="/newspaper_reports/productivity"><i class="fa fa fa-circle-o"></i> <span>Productivity Report</span></a></li>
                        <li class="{{ setActive('newspaper_reports') }}"><a href="/newspaper_reports/monitoring"><i class="fa fa fa-circle-o"></i> <span>Monitoring</span></a></li>
                        <li class="{{ setActive('newspaper_reports') }}"><a href="/newspaper_reports/quality_control"><i class="fa fa fa-circle-o"></i> <span>Sequence No</span></a></li>
                        <li class="{{ setActive('newspaper_reports') }}"><a href="/newspaper_reports/monthly_delivery"><i class="fa fa fa-circle-o"></i> <span>Monthly Delivery Report</span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Manage Newspaper</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ setActive('downloads') }}"><a href="/downloads"><i class="fa fa-download"></i> <span>Download</span></a></li>
                        <li class="{{ setActive('dataentries') }}"><a href="/dataentries"><i class="fa fa-keyboard-o"></i> <span>Data Entry</span></a></li>
                        <li class="{{ setActive('outputs') }}"><a href="/outputs"><i class="fa fa-file-text-o"></i> <span>Output</span></a></li>
                        <li class="{{ setActive('newspaper_reports') }}"><a href="/newspaper_reports"><i class="fa fa-money"></i> <span>Delivered</span></a></li>
                    </ul>
                </li>
            @endif

            <li class="{{ setActive('departments') }}"><a href="/departments"><i class="fa fa-users"></i> <span>Departments</span></a></li>
            <li class="{{ setActive('employees') }}"><a href="/departments"><i class="fa fa-user"></i> <span>Employees</span></a></li>

            @if(auth()->guard('admin')->user()->hasRole('Newspaper'))
                <li class="treeview">
                    <a href="#"><i class="fa fa-gear"></i> <span>Newspaper Setup</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/states') }}"><i class="fa fa-asterisk"></i> <span>States</span></a></li>
                        <li><a href="{{ url('/publications') }}"><i class="fa fa-newspaper-o"></i> <span>Publications</span></a></li>
                        <li><a href="{{ url('/jobnumbers') }}"><i class="fa fa-calculator"></i> <span>Job Numbers</span></a></li>
                        <li><a href="{{ url('/publicationtypes') }}"><i class="fa fa-list-alt"></i> <span>Publication Type Lookup</span></a></li>
                        <li><a href="{{ url('/publicationissues') }}"><i class="fa fa-indent"></i> <span>Publication Issues Lookup</span></a></li>
                        <li><a href="{{ url('/days') }}"><i class="fa fa-calendar-plus-o"></i> <span>Publication Day Lookup</span></a></li>
                    </ul>
                </li>
            @endif


            @if(auth()->guard('admin')->user()->hasRole('Payroll'))
                <li class="treeview">
                    <a href="#"><i class="fa fa-server"></i> <span>Payroll</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ setActive('holidays') }}"><a href="/holidays"><i class="fa fa-unlock"></i> <span>Manage Holiday</span></a></li>
                        <li class="{{ setActive('exceptions') }}"><a href="/exceptions"><i class="fa fa-unlock"></i> <span>Exceptions</span></a></li>
                    </ul>
                </li>
            @endif

            @if(auth()->guard('admin')->user()->hasRole('Tech'))
                <li class="treeview">
                    <a href="#"><i class="fa fa-server"></i> <span>Tech</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ setActive('passwords') }}"><a href="/passwords"><i class="fa fa-unlock"></i> <span>Passwords</span></a></li>
                        <li class="{{ setActive('workstations') }}"><a href="/workstations"><i class="fa fa-tv"></i> <span>Workstations</span></a></li>
                        <li class="{{ setActive('daily_time_records') }}"><a href="/daily_time_records"><i class="fa fa-diamond"></i> <span>Daily Time Records</span></a></li>
                        <li class="{{ setActive('assets') }}"><a href="/assets"><i class="fa fa-diamond"></i> <span>Manage Assets</span></a></li>
                    </ul>
                </li>
            @endif
            @if(auth()->guard('admin')->user()->hasRole('Admin'))
                <li class="treeview">
                    <a href="#"><i class="fa fa-user-plus"></i> <span>System Users</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ setActive('admins') }}"><a href="/admins"><i class="fa fa-arrow-down"></i> <span>Admin</span></a></li>
                        <li class="{{ setActive('roles') }}"><a href="/roles"><i class="fa fa-arrow-down"></i> <span>Admin Role</span></a></li>
                        <li class="{{ setActive('permissions') }}"><a href="/permissions"><i class="fa fa-arrow-down"></i> <span>Admin Permissions</span></a></li>
                        <li class="{{ setActive('users') }}"><a href="/users"><i class="fa fa-arrow-down"></i> <span>User</span></a></li>
                        <li class="{{ setActive('logins') }}"><a href="/logins"><i class="fa fa-arrow-down"></i> <span>Logins</span></a></li>
                    </ul>
                </li>
            @endif
            @if(auth()->guard('admin')->user()->hasRole('Developer'))
                <li class="treeview">
                    <a href="#"><i class="fa fa-sitemap"></i> <span>Site Settings</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ setActive('abouts') }}"><a href="/abouts"><i class="fa fa-arrow-down"></i> <span>Organization Information</span></a></li>
                        <li class="{{ setActive('menus') }}"><a href="/abouts"><i class="fa fa-arrow-down"></i> <span>Navigation Menu</span></a></li>
                        <li class="{{ setActive('images') }}"><a href="/images"><i class="fa fa-arrow-down"></i> <span>Site Images</span></a></li>
                        <li class="{{ setActive('backups') }}"><a href="/backups"><i class="fa fa-arrow-down"></i> <span>Database Backup</span></a></li>
                    </ul>
                </li>
            @endif
            <li class="{{ setActive('contacts') }}"><a href="/contacts"><i class="fa fa-phone"></i> <span>Contacts</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>