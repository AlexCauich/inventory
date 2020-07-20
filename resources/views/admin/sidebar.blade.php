<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('/static/imges/alum_sob.png') }}" class="img-fluid">
        </div>
        <div class="user">
            <span class="subtitle">Hola:</span>
            <div class="name">
                {{ Auth::user()->name }} {{ Auth::user()->last_name }}
                <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
            <div class="email">
                {{ Auth::user()->email }}
            </div>
        </div>
    </div>

    <div class="main">
        <ul>
            <li>
                <a href="{{ url('/admin') }}"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/admin/products') }}"><i class="fas fa-boxes"></i> Products</a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}"><i class="fas fa-users"></i></i> Users</a>
            </li>
        </ul>
    </div>
</div>