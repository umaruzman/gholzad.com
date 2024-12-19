<header class="{{$type == 'white' ? 'white' : 'black';}}">
    <nav class="">
        <div class="logo">
            <a href="{{route('client.home')}}">
                @if ($type == 'white')
                    <img src="{{asset('images/logo/logo-light.svg')}}" alt="Gholzad Logo">
                @else
                    <img src="{{asset('images/logo/logo-dark.svg')}}" alt="Gholzad Logo">
                @endif
            </a>
        </div>
        <div class="nav-items desktop">
            <ul>
                <li>
                    <a href="{{ route('client.about') }}" class="{{Route::currentRouteName() == 'client.about' ? 'active' : ''}}">Who is Gholzad?</a>
                </li>
                <li>
                    <a href="{{ route('client.projects') }}" class="{{Route::currentRouteName() == 'client.projects' ? 'active' : ''}}">Our Projects</a>
                </li>
                <li>
                    <a href="{{ route('client.contact') }}" class="{{Route::currentRouteName() == 'client.contact' ? 'active' : ''}}">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="nav-button mobile">
            <button id="menuButton" class="">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="nav-menu-mobile">
            <ul>
                <li>
                    <a href="{{ route('client.about') }}" class="{{Route::currentRouteName() == 'client.about' ? 'active' : ''}}">Who is Gholzad?</a>
                </li>
                <li>
                    <a href="{{ route('client.projects') }}" class="{{Route::currentRouteName() == 'client.projects' ? 'active' : ''}}">Our Projects</a>
                </li>
                <li>
                    <a href="{{ route('client.contact') }}" class="{{Route::currentRouteName() == 'client.contact' ? 'active' : ''}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>