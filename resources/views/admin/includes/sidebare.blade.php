<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
   id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center"
      href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">
         {{ auth()->user()->hasRole('admin')? __('Hi Admin'): __('Hi Agent') }}</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link"
         href="{{ route('admin.dashboard.index') }}">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
      Property Managment
   </div>

   @role('admin')
      <li class="nav-item {{ request()->is('*transaction-types') ? 'active' : '' }}">
         <a class="nav-link"
            href="{{ route('admin.transaction-types.index') }}">
            <i class="fa-solid fa-table"></i>
            <span>{{ __('Transaction Types') }}</span></a>
      </li>
      <!-- Nav Item - property types -->
      <li class="nav-item {{ request()->is('*/property-types') ? 'active' : '' }}">
         <a class="nav-link"
            href="{{ route('admin.property-types.index') }}">
            <i class="fa-solid fa-bars"></i>
            <span>Property Types</span></a>
      </li>
      <!-- Nav Item - property amenities -->
      <li class="nav-item {{ request()->is('*/amenities') ? 'active' : '' }}">
         <a class="nav-link"
            href="{{ route('admin.amenities.index') }}">
            <i class="fa-solid fa-house-circle-exclamation"></i>
            <span>{{ __('Amenities') }}</span></a>
      </li>
   @endrole

   <!-- Nav Item - Property Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed"
         href="#"
         data-toggle="collapse"
         data-target="#collapseProperty"
         aria-expanded="true"
         aria-controls="collapseProperty">
         <i class="fas fa-fw fa-house"></i>
         <span>Properties</span>
      </a>
      <div id="collapseProperty"
         class="collapse"
         aria-labelledby="headingProperty"
         data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item "
               href="{{ route('admin.properties.index') }}">{{ __('List') }}</a>
            <a class="collapse-item"
               href="{{ route('admin.properties.create') }}">{{ __('Create') }}</a>
         </div>
      </div>
   </li>
   <!-- Nav Item - Pages Collapse Menu -->
   <!-- Divider -->
   @role('admin')
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
         {{ __('Users Managment') }}
      </div>
      <li class="nav-item">
         <a class="nav-link"
            href="#">
            <i class="fas fa-fw fa-folder"></i>
            <span>{{ __('Clients') }}</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link"
            href="#">
            <i class="fas fa-fw fa-folder"></i>
            <span>{{ __('Agents') }}</span>
         </a>
      </li>
   @endrole

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0"
         id="sidebarToggle"></button>
   </div>
</ul>
