<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('template/images/icon/logo-white.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="{{ asset('template/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
            </div>
            <h4 class="name">{{ Auth()->user()->prenom }}</h4>
            <a onClick="event.preventDefault(); document.getElementById('deconnection').submit()" href="#">Fermer la session</a>
            <form action="{{ route('logout') }}" method="post" id="deconnection">
                @csrf
                @method('post')
            </form>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>ACCUEIL
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="inbox.html">
                        <i class="fas fa-chart-bar"></i>Inbox</a>
                    <span class="inbox-num">3</span>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-shopping-basket"></i>eCommerce</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-trophy"></i>Features
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">

                    <a onClick="event.preventDefault(); document.getElementById('deconnection').submit()" href="">
                        <i class="zmdi zmdi-power"></i>Déconnexion
                    </a>
                    <form action="{{ route('logout') }}" method="post" id="deconnection">
                        @csrf
                        @method('post')
                    </form>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR--