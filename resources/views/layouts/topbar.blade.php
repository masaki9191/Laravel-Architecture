
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('assets/img/logo.png')}}" alt="" class="logo">
        </a>
    @if(Auth::check())
        <a class="btn btn-primary d-block d-sm-none" href=""
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('ログアウト') }}
                    </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @if(auth()->user()->type == 0)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">ユーザー管理</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog.index')}}">ブログ管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('characteristic.index')}}">名前</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('construction.index')}}">施工例管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallery.index')}}">フォトギャラリー</a>
                </li>
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href=""
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('ログアウト') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    @endif
    </div>
</nav>
