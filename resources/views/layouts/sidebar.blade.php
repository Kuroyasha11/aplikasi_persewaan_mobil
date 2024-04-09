<div class="iq-sidebar">
    <div class="iq-navbar-logo d-flex justify-content-between">
        <a href="/" class="header-logo">
            <img src="{{asset('assets/images/Kuro.png')}}" class="img-fluid rounded" alt="">
            <span>Kuroyasha</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-menu-line"></i></div>
                <div class="hover-circle"><i class="ri-close-fill"></i></div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{Request::is('/') ? 'active' : ''}}">
                    <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse"
                       aria-expanded="{{Request::is('/') ? 'true' : 'false'}}"><span
                            class="ripple rippleEffect"></span><i
                            class="las la-home iq-arrow-left"></i><span>Home</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/"><i class="las la-laptop-code"></i>Dashboard</a>
                        </li>

                    </ul>
                </li>
                <li class="{{Request::is('mobil*') || Request::is('peminjaman*') || Request::is('pengembalian*') ? 'active' : ''}}">
                    <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse"
                       aria-expanded="{{Request::is('mobil*') || Request::is('peminjaman*') || Request::is('pengembalian*') ? 'true' : 'false'}}"><span
                            class="ripple rippleEffect"></span><i
                            class="las la-car iq-arrow-left"></i><span>Mobil</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                        <li class="{{Request::is('mobil*') ? 'active' : ''}}"><a href="/mobil"><i
                                    class="las la-car"></i>Daftar Mobil</a></li>
                        <li class="{{Request::is('peminjaman*') ? 'active' : ''}}"><a href="/peminjaman"><i
                                    class="las la-list"></i>Daftar Peminjaman</a></li>
                        <li class="{{Request::is('pengembalian*') ? 'active' : ''}}"><a href="/pengembalian"><i
                                    class="las la-list-alt"></i>Daftar Pengembalian</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
