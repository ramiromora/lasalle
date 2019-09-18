<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/pdf') }}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    PDF Generator
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/xls') }}" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                    Reports
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Administrator
                </p>
            </a>
        </li>
        <li class="nav-item">
            {!! Form::open([ 'method'=>'POST',
                            'id'=>'logout',
                            'url' => ['/logout'],
                            'style' => 'display:inline'])
            !!}
            {!! Form::close() !!}
            <a class="nav-link" onclick="document.getElementById('logout').submit();">
                <i class="nav-icon fas fa-rocket"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>
