<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="https://www.chips.gov.in/sites/default/files/logo-hin_0.png" alt="" class="logo logo-lg" />
                <img src="https://www.chips.gov.in/sites/default/files/logo-hin_0.png" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item">
                    <a href="{{ url('/home') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-globe"></i></span>
                        <span class="nxl-mtext">Website Home</span>
                    </a>
                    
                </li>
                <li class="nxl-item">
                    <a href="{{ route('dashboard') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('view_messages') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-bell"></i></span>
                        <span class="nxl-mtext">View Messages</span>
                    </a>
                </li>
                @if(auth()->user()->role_id == 1)
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Members</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('add_member') }}">Add Member</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_members') }}">View Members</a></li>
                    </ul>
                </li>
                @endif
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layers"></i></span>
                        <span class="nxl-mtext">Notices & Tenders</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('add_notice_board') }}">Add to Board</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_notices') }}">View News</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_tenders') }}">View Tenders</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_orders') }}">View Orders</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_circulars') }}">View Circulars</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_recruitments') }}">View Recruitments</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_notifications') }}">View Notifications</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-folder"></i></span>
                        <span class="nxl-mtext">Gallery</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        @if(auth()->user()->role_id == 1)
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('add_gallery') }}">Add Gallery</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('view_pending_requests') }}">View Requests</a></li>
                        @endif
                        @if(auth()->user()->role_id == 2)
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('add_gallery') }}">Add Request</a></li>
                        @endif
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_gallery') }}">View Gallery</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_all_requests_for_member') }}">My Posts</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layers"></i></span>
                        <span class="nxl-mtext">Forms</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('form1') }}">Form 1</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('form2') }}">Form 2</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-pie-chart"></i></span>
                        <span class="nxl-mtext">Charts</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('highchart') }}">High Charts</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('barchart') }}">Bar Charts</a></li>
                    </ul>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('reports') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Reports</span>
                    </a>
                    
                </li>
                <li class="nxl-item">
                    <a href="{{ route('calendar') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layout"></i></span>
                        <span class="nxl-mtext">Calendar</span>
                    </a>
                    
                </li>
                <li class="nxl-item">
                    <a href="{{ route('tenders') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Tender Details</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>