<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }} " href="/">home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="admin">admin</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="about">about</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ request()->is('lte') ? 'active' : '' }}" href="lte">LTE</a>
            </li>
        </ul>
    </div>
</nav>
