
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Paing Blog</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('admin-assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">PaingBlog</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('backend.posts.index')}}">Posts</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('backend.categories.index')}}">Category</a>
                    @if(Auth::check() && Auth::user()->role == 'Admin' )
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('backend.users.index')}}">User</a>
                    @endif
                    @if(Auth::user())
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('backend.user.profile',Auth::user()->id)}}">Profile</a>
                    @endif
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="\">Home Page</a></li>
                                @if(Auth::user())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{route('backend.user.profile',Auth::user()->id)}}" class="dropdown-item">Profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="{{asset('admin-assets/js/bootstrap.bundle.min.js')}}" ></script>
        <!-- Core theme JS-->
        <script src="{{asset('admin-assets/js/scripts.js')}}"></script>
        <script src="{{asset('admin-assets/jquery/jquery-3.7.1.min.js')}}"></script>
        @yield('script')
    </body>
</html>
