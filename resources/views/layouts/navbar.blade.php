<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0 pt-1 mt-1">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-menu-line"></i></div>
                    <div class="hover-circle"><i class="ri-close-fill"></i></div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                    <a href="{{route('dashboard')}}" class="header-logo">
                        <img src="{{asset('assets/images/Kuro.png')}}" class="img-fluid rounded" alt="">
                        <span>Kuroyasha</span>
                    </a>
                </div>
            </div>
            <div class="iq-search-bar">
                <form action="#" class="searchbox">
                    <input type="text" class="text search-input" placeholder="Type here to search...">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{--                <ul class="navbar-nav ml-auto navbar-list">--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="search-toggle iq-waves-effect language-title" href="#"><span--}}
                {{--                                class="ripple rippleEffect"--}}
                {{--                                style="width: 98px; height: 98px; top: -15px; left: 56.2969px;"></span><img--}}
                {{--                                src="{{asset('assets/findash/images/small/flag-01.png')}}" alt="img-flaf"--}}
                {{--                                class="img-fluid mr-1"--}}
                {{--                                style="height: 16px; width: 16px;"> EN <i class="ri-arrow-down-s-line"></i></a>--}}
                {{--                        <div class="iq-sub-dropdown">--}}
                {{--                            <a class="iq-sub-card" href="#"><img--}}
                {{--                                    src="{{asset('assets/findash/images/small/flag-02.png')}}" alt="img-flaf"--}}
                {{--                                    class="img-fluid mr-2">French</a>--}}
                {{--                            <a class="iq-sub-card" href="#"><img--}}
                {{--                                    src="{{asset('assets/findash/images/small/flag-03.png')}}" alt="img-flaf"--}}
                {{--                                    class="img-fluid mr-2">Spanish</a>--}}
                {{--                            <a class="iq-sub-card" href="#"><img--}}
                {{--                                    src="{{asset('assets/findash/images/small/flag-04.png')}}" alt="img-flaf"--}}
                {{--                                    class="img-fluid mr-2">Italian</a>--}}
                {{--                            <a class="iq-sub-card" href="#"><img--}}
                {{--                                    src="{{asset('assets/findash/images/small/flag-05.png')}}" alt="img-flaf"--}}
                {{--                                    class="img-fluid mr-2">German</a>--}}
                {{--                            <a class="iq-sub-card" href="#"><img--}}
                {{--                                    src="{{asset('assets/findash/images/small/flag-06.png')}}" alt="img-flaf"--}}
                {{--                                    class="img-fluid mr-2">Japanese</a>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item nav-icon">--}}
                {{--                        <a href="#" class="iq-waves-effect bg-primary rounded"><span--}}
                {{--                                class="ripple rippleEffect"></span><i class="ri-shopping-cart-2-line"></i></a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item nav-icon">--}}
                {{--                        <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">--}}
                {{--                            <i class="ri-notification-line"></i>--}}
                {{--                            <span class="bg-danger dots"></span>--}}
                {{--                        </a>--}}
                {{--                        <div class="iq-sub-dropdown">--}}
                {{--                            <div class="iq-card shadow-none m-0">--}}
                {{--                                <div class="iq-card-body p-0 ">--}}
                {{--                                    <div class="bg-primary p-3">--}}
                {{--                                        <h5 class="mb-0 text-white">All Notifications<small--}}
                {{--                                                class="badge  badge-light float-right pt-1">4</small></h5>--}}
                {{--                                    </div>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/01.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">Emma Watson Barry</h6>--}}
                {{--                                                <small class="float-right font-size-12">Just Now</small>--}}
                {{--                                                <p class="mb-0">95 MB</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/02.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">New customer is join</h6>--}}
                {{--                                                <small class="float-right font-size-12">5 days ago</small>--}}
                {{--                                                <p class="mb-0">Cyst Barry</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/03.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">Two customer is left</h6>--}}
                {{--                                                <small class="float-right font-size-12">2 days ago</small>--}}
                {{--                                                <p class="mb-0">Cyst Barry</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/04.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">New Mail from Fenny</h6>--}}
                {{--                                                <small class="float-right font-size-12">3 days ago</small>--}}
                {{--                                                <p class="mb-0">Cyst Barry</p>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item nav-icon dropdown">--}}
                {{--                        <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">--}}
                {{--                            <i class="ri-mail-line"></i>--}}
                {{--                            <span class="bg-danger count-mail"></span>--}}
                {{--                        </a>--}}
                {{--                        <div class="iq-sub-dropdown">--}}
                {{--                            <div class="iq-card shadow-none m-0">--}}
                {{--                                <div class="iq-card-body p-0 ">--}}
                {{--                                    <div class="bg-primary p-3">--}}
                {{--                                        <h5 class="mb-0 text-white">All Messages<small--}}
                {{--                                                class="badge  badge-light float-right pt-1">5</small></h5>--}}
                {{--                                    </div>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/01.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">Barry Emma Watson</h6>--}}
                {{--                                                <small class="float-left font-size-12">13 Jun</small>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/02.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>--}}
                {{--                                                <small class="float-left font-size-12">20 Apr</small>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/03.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">Why do we use it?</h6>--}}
                {{--                                                <small class="float-left font-size-12">30 Jun</small>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/04.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">Variations Passages</h6>--}}
                {{--                                                <small class="float-left font-size-12">12 Sep</small>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                    <a href="#" class="iq-sub-card">--}}
                {{--                                        <div class="media align-items-center">--}}
                {{--                                            <div class="">--}}
                {{--                                                <img class="avatar-40 rounded"--}}
                {{--                                                     src="{{asset('assets/findash/images/user/05.jpg')}}" alt="">--}}
                {{--                                            </div>--}}
                {{--                                            <div class="media-body ml-3">--}}
                {{--                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>--}}
                {{--                                                <small class="float-left font-size-12">5 Dec</small>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
            <ul class="navbar-list">
                <li class="line-height">
                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                        <img src="{{asset('assets/images/Kuro.png')}}"
                             class="rounded mr-3"
                             style="width: 50px; height: 50px; object-fit: contain;"
                             alt="user">
                        <div class="caption">
                            <h6 class="mb-0 line-height">{{Auth::user()->name}}</h6>
                            <p class="mb-0">Admin</p>
                        </div>
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello {{Auth::user()->name}}</h5>
                                    <span class="text-white font-size-12">Tersedia</span>
                                </div>
                                <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Profile Saya</h6>
                                            <p class="mb-0 font-size-12">Lihat Detail Profile.</p>
                                        </div>
                                    </div>
                                </a>
                                {{--                                <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">--}}
                                {{--                                    <div class="media align-items-center">--}}
                                {{--                                        <div class="rounded iq-card-icon iq-bg-primary">--}}
                                {{--                                            <i class="ri-profile-line"></i>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="media-body ml-3">--}}
                                {{--                                            <h6 class="mb-0 ">Edit Profile</h6>--}}
                                {{--                                            <p class="mb-0 font-size-12">Modify your personal details.</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </a>--}}
                                {{--                                <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">--}}
                                {{--                                    <div class="media align-items-center">--}}
                                {{--                                        <div class="rounded iq-card-icon iq-bg-primary">--}}
                                {{--                                            <i class="ri-account-box-line"></i>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="media-body ml-3">--}}
                                {{--                                            <h6 class="mb-0 ">Account settings</h6>--}}
                                {{--                                            <p class="mb-0 font-size-12">Manage your account parameters.</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </a>--}}
                                {{--                                <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">--}}
                                {{--                                    <div class="media align-items-center">--}}
                                {{--                                        <div class="rounded iq-card-icon iq-bg-primary">--}}
                                {{--                                            <i class="ri-lock-line"></i>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="media-body ml-3">--}}
                                {{--                                            <h6 class="mb-0 ">Privacy Settings</h6>--}}
                                {{--                                            <p class="mb-0 font-size-12">Control your privacy parameters.</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </a>--}}
                                <div class="d-inline-block w-100 text-center p-3">
                                    <button
                                        class="bg-primary iq-sign-btn"
                                        role="button"
                                        id="button-logout"
                                        onclick="document.getElementById('formLogout').submit()">
                                        Logout<i class="ri-login-box-line ml-2"></i></button>
                                    <form id="formLogout" action="{{route('logout')}}" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
