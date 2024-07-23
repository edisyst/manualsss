<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admin Panel</h6>
                <a class="collapse-item" href="#">Profilo Personale</a>
                <a class="collapse-item" href="#">Gestione Teams</a>
                <h6 class="collapse-header">Impostazioni</h6>
                <a class="collapse-item" href="#">Gestione Progetti</a>
                <a class="collapse-item" href="#">Gestione Tags</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>File Manager</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Gestione Files</a>
                <a class="collapse-item" href="{{route('images')}}">Gestione Images</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManuals"
        aria-expanded="true" aria-controls="collapseManuals">
            <i class="fas fa-fw fa-folder"></i>
            <span>Manuali</span>
        </a>
        <div id="collapseManuals" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestione Manuali</h6>
                <a class="collapse-item" href="{{ route('manuals.index') }}">Elenco Manuali</a>
                <a class="collapse-item" href="{{ route('manuals.create') }}">Nuovo Manuale</a>
                <h6 class="collapse-header">Ordine Manuali</h6>
                <a class="collapse-item" href="{{ route('manuals.reorder') }}">Riordina manuali</a>
                <a class="collapse-item" href="{{ route('manuals.reorder-static') }}">Riordina STATICO</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseChapters"
            aria-expanded="true" aria-controls="collapseChapters">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Capitoli</span>
        </a>
        <div id="collapseChapters" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestione Capitoli</h6>
                <a class="collapse-item" href="{{ route('chapters.index') }}">Elenco Capitoli</a>
                <a class="collapse-item" href="{{ route('chapters.create') }}">Nuovo Capitolo</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Progetto attuale</h6>
                <a class="collapse-item" href="{{ route('chapters.index') }}">Gestione Tags</a>
            </div>
        </div>

    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('manuals.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Progetti</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>