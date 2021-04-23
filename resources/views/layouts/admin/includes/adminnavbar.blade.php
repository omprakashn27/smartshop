<div class="bg-light sticky-top shadow">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-light">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="{{ url('admin/admin-dashboard') }}">Admin Dashboard</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav ms-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="{{ url('admin/admin-dashboard') }}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('admin/events') }}">Category</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Products</a>
                                                </li>
                                                @guest
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                                @endif
                                                @else
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#"
                                                        id="navbarDropdownMenuLink" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                        {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                                    </ul>
                                                </li>
                                                @endguest
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
