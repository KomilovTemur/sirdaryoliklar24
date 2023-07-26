<div class="main-sidebar sidebar-style-2">

    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('index') }}"> <img alt="image" src="/img/SIRDARYOLOGO.svg" class="header-logo"/>
                <span class="logo-name"></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Asosiy</li>
            <li class="dropdown">
                <a href="{{ route('admin.dashboard') }}"><i data-feather="star"></i><span>Boshqaruv paneli</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.categories.index') }}"><i data-feather="folder"></i><span>Kategoriyalar
                        bo'limi</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.posts.index') }}"><i data-feather="image"></i><span>Postlar bo'limi</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.tags.index') }}"><i data-feather="monitor"></i><span>Teglar bo'limi</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.ads.index') }}"><i data-feather="monitor"></i><span>Reklama bo'limi</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.addContacts.index') }}"><i data-feather="search"></i><span>Kelib tushgan savollar</span></a>
            </li>

        </ul>
    </aside>
</div>
