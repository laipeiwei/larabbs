<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}">
            LaraBBS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>
            @guest
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
            </ul>
            @else
                    <li class="nav-item dropdown" style="list-style: none;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="https://iocaffcdn.phphub.org//uploads/communities/WtC3cPLHzMbKRSZnagU9.png" style="width:30px;height:30px;"/>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">个人中心</a>
                            <a class="dropdown-item" href="">编辑资料</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                </form>
                            </a>
                        </div>
                    </li>
            @endguest
        </div>
    </div>
</nav>