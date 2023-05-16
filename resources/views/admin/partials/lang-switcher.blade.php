 <li class="nav-item dropdown no-arrow mx-1">
    @if (app()->isLocale('en'))
       <a class="nav-link dropdown-toggle text-dark"
          id="messagesDropdown"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ __('english') }}</span>
          {{-- <img src="{{ asset('/storage/img/united-states-of-america.png') }}"
             alt="American flag"> --}}
       </a>
    @else
       <a class="nav-link dropdown-toggle text-dark"
          href="#"
          id="messagesDropdown"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ __('french') }}</span>
          {{-- <img src="{{ asset('/storage/img/france.png') }}"
             alt="American flag"> --}}
       </a>
    @endif

    <!-- Dropdown - Messages -->
    <div class="dropdown dropdown-menu dropdown-menu"
       aria-labelledby="Dropdown">

       <a class="dropdown-item"
          href="{{ route(Route::currentRouteName(), ['locale' => 'fr']) }}">
          {{-- <img src="{{ asset('/storage/img/france-flag.png') }}" --}}
          {{-- alt="American flag"> --}}
          French
       </a>

       <a class="dropdown-item"
          href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}">
          {{-- <img src="{{ asset('/storage/img/am-flag.png') }}" --}}
          {{-- alt="American flag"> --}}
          English
       </a>

    </div>
 </li>
