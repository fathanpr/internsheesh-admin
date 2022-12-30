<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/admin">
                <img src="{{ asset('img/logo-primary.png') }}" alt="" width="120" class="mt-3 mb-3">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/admin">
            <img src="{{ asset('img/logo-primary.png') }}" alt="" width="30">
        </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header mt-3">Dashboard</li>
            <li class="nav-item dropdown {{ 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}"
                    class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manajemen User</li>
            <li class="nav-item dropdown {{ 'auth' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Kelola Akun</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('auth-reset-password') ? 'active' : '' }}">
                        <a href="{{ route('magangadm.index') }}">Admin</a>
                    </li>
                    <li class="{{ Request::is('auth-forgot-password') ? 'active' : '' }}">
                        <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                    </li>
                    <li class="{{ Request::is('auth-login') ? 'active' : '' }}">
                        <a href="{{ route('pembimbing.index') }}">Dosen Pembimbing</a>
                    </li>
                    <li class="{{ Request::is('auth-login2') ? 'active' : '' }}">
                        <a href="{{ route('kaprodi.index') }}">Kaprodi</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ 'auth' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-address-card"></i> <span>Kelola User</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('auth-forgot-password') ? 'active' : '' }}">
                        <a href="{{ route('mahasiswa.data') }}">Mahasiswa</a>
                    </li>
                    <li class="{{ Request::is('auth-login') ? 'active' : '' }}">
                        <a href="{{ route('pembimbing.data') }}">Dosen Pembimbing</a>
                    </li>
                    <li class="{{ Request::is('auth-login2') ? 'active' : '' }}">
                        <a href="{{ route('kaprodi.data') }}">Kaprodi</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Magang</li>
            <li class="nav-item {{  'utilities' ? 'active' : '' }}">
                <a href="{{ route('magang.index') }}" class="nav-link"><i class="fas fa-graduation-cap"></i>
                <span>Tempat Magang</span></a>
            </li>
            <li class="menu-header">Tentang</li>
            <li class="{{ Request::is('credits') ? 'active' : '' }}">
                <a class="nav-link"
                    href="/tentang"><i class="fas fa-pencil-ruler">
                    </i> <span>InternSheesh</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
