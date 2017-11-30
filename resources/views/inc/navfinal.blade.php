<nav class="navbar navbar-default ">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Penguin Protection
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/alarms"> Alarms</a></li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">


                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                        <li>

                          <a href="{{ route('cart.index') }}">
                          <i class="fa fa-shopping-cart" aria-hidden="true">
                          </i>
                          Cart
                          <span class="alert-badge">
                            {{Cart::count()}}
                          </span>
                          </a>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                                        class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                          @if(Auth::check())
                                            @if(Auth::user()->admin==1)
                              <li><a href="{{ url('admin/product/create') }}"> Admin Create Product</a></li>
                                <li><a href="{{ url('admin/product') }}"> Admin View Products</a></li>
                                  <li><a href="{{ url('admin/orders') }}"> Admin Orders</a></li>
                          @endif
                          <li role="presentation" class="divider"></li>
                      @endif
                                    <li>
                                        <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
