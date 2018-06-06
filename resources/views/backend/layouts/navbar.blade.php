<!-- Navigation Start-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Backend</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item @yield('nav_website') px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ route('admin.website.edit') }}">Website</a>
                </li>
                <li class="nav-item @yield('nav_home') px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ route('admin.home.edit') }}">Home</a>
                </li>
                <li class="nav-item @yield('nav_about') px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ route('admin.about.edit') }}">About</a>
                </li>
                <li class="nav-item @yield('nav_products') px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ route('admin.product.index') }}">Products</a>
                </li>
                <li class="nav-item @yield('nav_store') px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ route('admin.store.edit') }}">Store</a>
                </li>
                <li class="nav-item @yield('nav_logout') px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{ route('admin.logout') }}">logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation End  -->