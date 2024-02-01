<!-- aside -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light text-center">{{ __('Product Managment') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link ">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            {{ __('Products') }}
                        </p>
                    </a>
                </li> 
                <li class="nav-item">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            {{ __('Orders') }}
                        </p>
                    </a>
                </li> 
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>