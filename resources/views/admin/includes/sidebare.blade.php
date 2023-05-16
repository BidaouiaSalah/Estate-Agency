<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
   id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center"
      href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">
         {{ __('Hey Admin!') }}</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Home -->
   <li class="nav-item active">
      <a class="nav-link"
         href="{{ route('home') }}">
         <i class="fas fa-fw fa-home"></i>
         <span>{{ __('Home') }}</span></a>
   </li>

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link"
         href="{{ route('admin.dashboard.index') }}">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>{{ __('Dashboard') }}</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Nav Item - Properties Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed"
         href="#"
         data-toggle="collapse"
         data-target="#collapseProperty"
         aria-expanded="true"
         aria-controls="collapseProperty">
         <i class="fas fa-fw fa-list"></i>
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

   <!-- Nav Item - property amenities -->
   <li class="nav-item {{ request()->is('*/amenities') ? 'active' : '' }}">
      <a class="nav-link"
         href="{{ route('admin.amenities.index') }}">
         <i class="fa-solid fa-circle-exclamation"></i>
         <span>{{ __('Amenities') }}</span></a>
   </li>

   <hr class="sidebar-divider">

   <!-- Nav Item - App Users -->
   <li class="nav-item">
      <a class="nav-link"
         href="#">
         <i class="fas fa-fw fa-folder"></i>
         <span>{{ __('Clients') }}</span>
      </a>
   </li>

   <!-- Nav Item - Our agents -->
   <li class="nav-item">
      <a class="nav-link collapsed"
         href="#"
         data-toggle="collapse"
         data-target="#collapseAgents"
         aria-expanded="true"
         aria-controls="collapseAgents">
         <i class="fas fa-fw fa-list"></i>
         <span>{{ __('Agents') }}</span>
      </a>
      <div id="collapseAgents"
         class="collapse"
         aria-labelledby="headingAgents"
         data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item "
               href="{{ route('admin.agents.index') }}">{{ __('List') }}</a>
            <a class="collapse-item"
               href="{{ route('registrationForm') }}">{{ __('Register') }}</a>
         </div>
      </div>
   </li>
   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0"
         id="sidebarToggle"></button>
   </div>
</ul>
