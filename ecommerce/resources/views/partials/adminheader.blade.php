<header>

<div class="header" style="top: 10px;left: 5px;right: 5px;">
        <div class="top" style="height: 50px;padding-top: 5px; padding-bottom: 5px;">
            <div class="container">

                <div class="col-md-9 top-left">
                    <ul>
                        <li><a href="{{ route('register') }}">Add Admin</a></li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 top-middle">
                    <ul>
                        <li><p>Admin</p></li>
                        <li><i class=" fa fa-user-circle-o"></i></span></li>
                    </ul>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
        <!--top-bar-w3layouts-->
        <div class="top-bar-w3layouts" style="height:72px;">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header" style="height:72px;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 style="margin-top: 0px;margin-bottom: 0px; "><a href="index.html">BookTime</a></h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{url('/createBook')}}">AddBook</a></li>
                            <li><a href="{{url('/createCat')}}">AddCategory</a></li>
                            <li><a href="{{url('/getBook')}}">AllBook</a></li>
                            <li><a href="{{url('/getCategory')}}">AllCategory</a></li>
                            <!--  <li class="">
                                <a href="BookShop.jsp" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Book <span class="caret"></span></a>
                                <ul class="dropdown-menu" style="background-color: #93c83f;">
                                    <li><a href="All.jsp">All</a></li>
                                    <li><a href="Regiter.jsp">Register</a>)</li>
                                    <li><a href="Regidter.jsp">Register</a></li>
                                    <li><a href="Regidter.jsp">Register</a></li>
                                </ul>
                            </li>-->
                            <li><a href="{{url('/home')}}">Home</a></li>


                        </ul>

                    </div>

                    <div class="search-bar-agileits">
                        <div class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul>
                            <!-- cd-header-buttons -->
                        </div>
                        <div id="cd-search" class="cd-search " style="margin-top: 40px;width:720px;">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Click enter after typing..." style="width:656px;">
                            </form>
                        </div>
                    </div>


                    <div class="clearfix"> </div>
                </nav>
            </div>
        </div>

    </div>




</header>