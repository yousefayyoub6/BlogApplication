<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Dashboard</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 3 new notifications
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="fa-solid fa fa-bell"></i>
                        <div>
                            <h6 class="fw-normal mb-0">يمنع تاخير راتب العاملة اكثر من 3 ايام</h6>
                            <p>منذ 15 دقيقة</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="fa-solid fa fa-bell"></i>
                        <div>
                            <h6 class="fw-normal mb-0">الوقت المتبقي لحز السي في رقم 15 هو يوم و 16 ساعة</h6>
                            <p>منذ 10 دقائق </p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="fa-solid fa fa-bell"></i>
                        <div>
                            <a href="#" class="dropdown-item" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" class="fw-normal mb-0">

                                <h6> تعهد عن مرض العاملة رقم (50) </h6>
                                <p>منذ 10 دقائق </p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="notification-item">
                        <i class="fa-solid fa fa-bell"></i>
                        <div>
                            <a href="#" class="dropdown-item" type="button" data-bs-toggle="modal"
                                data-bs-target="#examp" class="fw-normal mb-0">

                                <h6> تم خصم 50 ريال بسبب التاخير عن الدفع الراتب للعاملة </h6>
                                <p>منذ 10 دقائق </p>
                            </a>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="notification-item">
                        <i class="fa-solid fa fa-bell"></i>
                        <div>
                            <a href="#" class="dropdown-item" type="button" data-bs-toggle="modal"
                                data-bs-target="#ppppp" class="fw-normal mb-0">

                                <h6> تم استرجاع مبلغ 70 ريال بسبب تاخر استقدام العاملة 5 ايام من المكتب </h6>

                                <small>منذ 10 دقائق </small>
                            </a>
                        </div>
                    </li>

            </li>

            <li>
                <hr class="dropdown-divider">
            </li>


            <li>
                <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
            </li>

        </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        {{-- <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <span class="d-none d-md-block dropdown-toggle ps-2">
                    @if (App::getLocale() == 'ar')
                        {{ LaravelLocalization::getCurrentLocaleName() }}
                        <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
                    @else
                        {{ LaravelLocalization::getCurrentLocaleName() }}
                        <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                    @endif
                </span>
            </a>
            <ul class="dropdown-menu ">
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                @endforeach
            </ul>
        </li> --}}

        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="{{ asset('assets\Dashboard\Client\images\user.jpg') }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            </a><!-- End Profile Iamge Icon -->
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" dir="rtl">
                <!-- Responsive Settings Options -->
                <div class="pb-1 border-t border-gray-200">
                    <div class="pace-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>


            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
        </ul>

    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->
