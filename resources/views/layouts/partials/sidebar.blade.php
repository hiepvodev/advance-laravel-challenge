<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        CRM
    </div>
    <ul class="c-sidebar-nav ps">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link c-active" href="{{ route('home') }}">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt"></i>
                Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link " href="{{ route('users.index') }}">
                <i class="c-sidebar-nav-icon fas fa-fw fa-user-alt"></i>
                Users
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link " href="http://127.0.0.1:8001/clients">
                <i class="c-sidebar-nav-icon fas fa-fw fa-address-card"></i>
                Clients
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link " href="http://127.0.0.1:8001/projects">
                <i class="c-sidebar-nav-icon fas fa-fw fa-copy"></i>
                Projects
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link " href="http://127.0.0.1:8001/tasks">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tasks"></i>
                Tasks
            </a>
        </li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-item mt-auto"></li>
        <li class="c-sidebar-nav-item"><a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt"></i>
                Logout</a>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>