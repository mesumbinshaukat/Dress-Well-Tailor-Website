<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
        <h4><span style="color: #ffffff" class="font-weight-bold"> Dashboard</span></h4>
        
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        CRUD
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('details.create')}}">
            <i class="fa fa-user-circle"></i>
            <span>Add Record</span>
        </a>
        {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kurta,s Measurments</h6>
                <a class="collapse-item" href="buttons.html">Kameez</a>
                <a class="collapse-item" href="cards.html">Shalwar</a>
            </div>
        </div> --}}
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('details.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Show Record</span>
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('details.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Edit Record</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('details.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Delete Record</span>
        </a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pant & Shirt
    </div>

    <!-- Nav Item - Pant & Shirt Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('pantshirts.create')}}">
            <i class="fa fa-plus-circle"></i>
            <span>Add Pant & Shirt</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('pantshirts.index')}}">
            <i class="fa fa-list"></i>
            <span>Show Pant & Shirt</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('pantshirts.index')}}">
            <i class="fa fa-edit"></i>
            <span>Edit Pant & Shirt</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('pantshirts.index')}}">
            <i class="fa fa-trash"></i>
            <span>Delete Pant & Shirt</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('home')}}" >
            <i class=""></i>
            <span class="text-center">Logout</span>
        </a>

    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
   

</ul>