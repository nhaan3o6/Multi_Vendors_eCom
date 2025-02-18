<header class="app-header">

    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">

        <!-- Start::header-content-left -->
        <div class="header-content-left">

            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src="{{ asset('admin/assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                            class="desktop-logo">
                        <img src="{{ asset('admin/assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                            class="toggle-logo">
                        <img src="{{ asset('admin/assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                            class="desktop-dark">
                        <img src="{{ asset('admin/assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                            class="toggle-dark">
                        <img src="{{ asset('admin/assets/images/brand-logos/desktop-white.png') }}" alt="logo"
                            class="desktop-white">
                        <img src="{{ asset('admin/assets/images/brand-logos/toggle-white.png') }}" alt="logo"
                            class="toggle-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-left -->

        <!-- Start::header-content-right -->
        <div class="header-content-right">





            <!-- Start::header-element -->
            <div class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bx bx-moon header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                    <span class="dark-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bx bx-sun header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element cart-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <i class="bx bx-cart header-link-icon"></i>
                    <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                            <span class="badge bg-success-transparent" id="cart-data">5 Items</span>
                        </div>
                    </div>
                    <div>
                        <hr class="dropdown-divider">
                    </div>
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('admin/assets/images/ecommerce/jpg/1.jpg') }}" alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold">
                                            <a href="cart.html">SomeThing Phone</a>
                                        </div>
                                        <div>
                                            <span class="text-black mb-1">$1,299.00</span>
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Metallic Blue</li>
                                            <li>6gb Ram</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('admin/assets/images/ecommerce/jpg/3.jpg') }}" alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold">
                                            <a href="cart.html">Stop Watch</a>
                                        </div>
                                        <div>
                                            <span class="text-black mb-1">$179.29</span>
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item">
                                            <li>Analog</li>
                                            <li><span class="badge bg-pink-transparent fs-10">Free
                                                    shipping</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('admin/assets/images/ecommerce/jpg/5.jpg') }}" alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold">
                                            <a href="cart.html">Photo Frame</a>
                                        </div>
                                        <div>
                                            <span class="text-black mb-1">$29.00</span>
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Decorative</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('admin/assets/images/ecommerce/jpg/4.jpg') }}" alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold">
                                            <a href="cart.html">Kikon Camera</a>
                                        </div>
                                        <div>
                                            <span class="text-black mb-1">$4,999.00</span>
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Black</li>
                                            <li>50MM</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src="{{ asset('admin/assets/images/ecommerce/jpg/6.jpg') }}" alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold">
                                            <a href="cart.html">Canvas Shoes</a>
                                        </div>
                                        <div>
                                            <span class="text-black mb-1">$129.00</span>
                                            <a href="javascript:void(0);"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Gray</li>
                                            <li>Sports</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item border-top">
                        <div class="d-grid">
                            <a href="checkout.html" class="btn btn-primary">Proceed to checkout</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                <i class="ri-shopping-cart-2-line fs-2"></i>
                            </span>
                            <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy
                                :)</span>
                            <a href="products.html" class="btn btn-primary btn-wave btn-sm m-1"
                                data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element notifications-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                    <i class="bx bx-bell header-link-icon"></i>
                    <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                        id="notification-icon-badge">!</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Thông Báo</p>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll">

                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-pink-transparent avatar-rounded"><i
                                            class="ti ti-user-check fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        @if (auth()->check())
                                            @foreach ($notifications as $notification)
                                                <p class="mb-0 fw-semibold">
                                                    <a class="@if ($notification->read_at) read @endif" href="#">
                                                        {{ $notification->message }}
                                                    </a><br>
                                                    <span class="text-warning"> {{ $notification->read_at }}</span>
                                                </p>

                                                <!-- Đưa form vào đây -->
                                                <span class="badge bg-secondary-transparent" id="notifiation-data-{{ $notification->id }}">
                                                    <form method="POST" action="{{ route('admin.markAsRead', ['notificationId' => $notification->id]) }}">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button style="border: none" type="submit">Đánh dấu là đã đọc</button>
                                                    </form>
                                                </span>
                                            @endforeach
                                        @else
                                            <h1>Không có thông báo</h1>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->



            <!-- Start::header-element -->
            <div class="header-element header-fullscreen">
                <!-- Start::header-link -->
                <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                    <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                    <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0">
                            @if (Auth::user()->user_image)
                                <img src="{{ asset(Auth::user()->user_image) }}" alt="Ảnh người dùng" width="32"
                                    height="32" class="rounded-circle">
                            @else
                                <img src="{{ asset('admin/assets/images/faces/9.jpg') }}" alt="Ảnh mặc định"
                                    width="32" height="32" class="rounded-circle">
                            @endif
                        </div>

                        <div class="d-sm-block d-none">
                            <p class="fw-semibold mb-0 lh-1">{{ Auth::user()->first_name }}</p>
                            <span
                                class="op-7 fw-normal d-block fs-11">{{ strtoupper(Auth::user()->type_user) }}</span>
                        </div>


                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li>
                        <a class="dropdown-item d-flex" href="{{ route('admin.vendor.show', Auth::user()->id) }}">
                            <i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile
                        </a>

                    </li>
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <li>
                            <a class="dropdown-item d-flex" href="javascript:void(0);"
                                onclick="this.closest('form').submit();">
                                <i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out
                            </a>
                        </li>
                    </form>

                </ul>
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|switcher-icon -->
                <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                    data-bs-target="#switcher-canvas">
                    <i class="bx bx-cog header-link-icon"></i>
                </a>
                <!-- End::header-link|switcher-icon -->
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-right -->

    </div>
    <!-- End::main-header-container -->

</header>
