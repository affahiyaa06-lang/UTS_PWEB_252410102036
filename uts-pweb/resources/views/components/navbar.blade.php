<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #198754;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">📚 PerpusKu</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/dashboard?username={{ request('username') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/pengelolaan?username={{ request('username') }}">Daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/profile?username={{ request('username') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning fw-bold" href="/">Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>