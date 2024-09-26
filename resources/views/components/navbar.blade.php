<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Start Logo container-->
        <a class="logo" href="/">
                    <span class="inline-block dark:hidden">
                        <img src="{{Vite::asset('resources/images/logo-dark.png')}}" class="l-dark" height="24" alt="">
                        <img src="{{Vite::asset('resources/images/logo-light.png')}}" class="l-light" height="24"
                             alt="">
                    </span>
            <img src="{{Vite::asset('resources/images/logo-light.png')}}" height="24" class="hidden dark:inline-block"
                 alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        @if(\MoonShine\MoonShineAuth::guard()->user())
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href="/admin"
                       class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">
                        <i data-feather="user" class="size-4 stroke-[3]"></i>
                    </a>
                </li>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/admin/logout"
                       class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">
                        <i data-feather="log-out" class="size-4 stroke-[3] me-2"></i>
                        Chiqish
                    </a>
                </li>
            </ul>
        @else
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href="/login"
                       class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">
                        <i data-feather="user" class="size-4 stroke-[3]"></i>
                    </a>
                </li>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/register"
                       class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">
                        Ro'yxatdan o'tish
                    </a>
                </li>
            </ul>
        @endif
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end nav-light">
                <li>
                    <a href="/">E'lonlar</a>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
