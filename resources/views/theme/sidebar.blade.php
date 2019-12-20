<!-- Sidebar -->

<ul class="pr-0 navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">AWP </div>
  </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item ">

        <a class="nav-link text-right" href="{{ route('admin.index') }}">

         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>لوحة التحكم</span></a>
     </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item {{ request()->is('admin/roadsters*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('roadsters.index') }}">
            <i class="fas fa-book-open"></i>
            <span>الدراجات وملحقاتها</span>
        </a>
    </li>

    <li class="nav-item {{ request()->is('admin/categories*') ? 'active' : '' }}">
        <a class="nav-link text-right" href="{{ route('categories.index') }}">
            <i class="fas fa-folder"></i>
            <span>التصنيفات</span>
        </a>
    </li>


    @can('update-users')
        <li class="nav-item {{ request()->is('admin/users*') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('users.index') }}">
                <i class="fas fa-users"></i>
                <span>المستخدمون</span>
            </a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->


