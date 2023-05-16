<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
   <div class="container">
      <button class="navbar-toggler collapsed"
         type="button"
         data-bs-toggle="collapse"
         data-bs-target="#navbarDefault"
         aria-controls="navbarDefault"
         aria-expanded="false"
         aria-label="Toggle navigation">
         <span></span>
         <span></span>
         <span></span>
      </button>
      <a class="navbar-brand text-brand"
         href="index.html">Estate<span class="color-b">Agency</span></a>

      <div class="navbar-collapse collapse justify-content-center"
         id="navbarDefault">
         <ul class="navbar-nav">

            <li class="nav-item">
               <a class="{{ Request::is('/') ? 'nav-link active' : 'nav-link' }}"
                  href="{{ route('home') }}">Home</a>
            </li>

            <li class="nav-item">
               <a class="{{ Request::is('about') ? 'nav-link active' : 'nav-link' }}"
                  href="{{ route('about') }}">About</a>
            </li>

            <li class="nav-item">
               <a class="{{ Request::is('properties') ? 'nav-link active' : 'nav-link' }}"
                  href="{{ route('properties.index') }}">{{ __('Properties') }}</a>
            </li>

            <li class="nav-item">
               <a class="nav-link "
                  href="{{ route('agents.list') }}">{{ __('Agents') }}</a>
            </li>

            <li class="nav-item">
               <a class="nav-link "
                  href="blog-grid.html">{{ __('Blog') }}</a>
            </li>

            <li class="nav-item">
               <a class="nav-link "
                  href="contact.html">{{ __('Contact') }}</a>
            </li>

            <li class="nav-item">
               <a class="nav-link "
                  href="{{ Auth::check() ? route('admin.dashboard.index') : route('loginForm') }}">
                  <i
                     class="{{ Auth::check() ? 'bi bi-person-check-fill' : 'bi bi-person-lock' }}"></i></a>
            </li>
         </ul>
      </div>
      <button type="button"
         class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
         data-bs-toggle="collapse"
         data-bs-target="#navbarTogglerDemo01">
         <i class="bi bi-search"></i>
      </button>

   </div>
</nav><!-- End Header/Navbar -->
