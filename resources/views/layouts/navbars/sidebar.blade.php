<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="#" class="logo-normal">
            <img src="{{ asset('assets/img/horizontal-mybook.png') }}" alt="">
        </a>
    </div>
<div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
        <li class="@if ($activePage == 'home') active @endif">
            <a href="{{ route('home') }}">
                <i class="now-ui-icons design_app"></i>
                <p>{{ __('Dashboard') }}</p>
            </a>
        </li>
        <li class="@if ($activePage == 'rak') active @endif">
            <a href="{{ route('rak.index') }}">
                <i class="now-ui-icons education_atom"></i>
                <p>{{ __('Bookshelf') }}</p>
            </a>
        </li>
        <li class="@if ($activePage == 'peminjaman') active @endif">
            <a href="{{ route('peminjaman.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>{{ __('Borrowing') }}</p>
            </a>
        </li>
    </ul>
  </div>
</div>
