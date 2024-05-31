<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo-full.png" alt="" class="logo logo-lg" />
                <img src="assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item">
                    <a href="{{ route('dashboard') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboard</span>
                    </a>
                    
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layers"></i></span>
                        <span class="nxl-mtext">Forms</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="reports-sales.html">Form 1</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="reports-leads.html">Form 2</a></li>
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