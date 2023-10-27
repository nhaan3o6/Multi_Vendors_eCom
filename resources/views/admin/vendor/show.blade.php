@extends('layouts.app')
@section('module', 'Gian Hàng')
@section('action', 'Thông Tin')
@section('content')

    <div class="col-xxl-4 col-xl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body p-0">
                <div class="d-sm-flex align-items-top p-4 border-bottom-0 main-profile-cover">
                    <div>
                        <span class="avatar avatar-xxl avatar-rounded online me-3">
                            <img src="{{ asset('admin/assets/images/faces/9.jpg') }}" alt="">
                        </span>
                    </div>
                    <div class="flex-fill main-profile-info">
                        <div class="d-flex align-items-center justify-content-between">

                            <h6 class="fw-semibold mb-1 text-fixed-white">{{ $user->name }}</h6>


                            <button class="btn btn-light btn-wave"><i
                                    class="ri-add-line me-1 align-middle d-inline-block"></i>Shop</button>
                        </div>
                        <p class="mb-1 text-muted text-fixed-white op-7">{{ strtoupper($user->type_user) }}</p>

                        <p class="fs-12 text-fixed-white mb-4 op-5">
                            <span class="me-3"><i
                                    class="ri-building-line me-1 align-middle"></i>{{ $user->city }}</span>
                            <span><i class="ri-map-pin-line me-1 align-middle"></i>{{ $user->address }}</span>
                        </p>
                        <div class="d-flex mb-0">
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">ss</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Category</p>
                            </div>
                            <div class="me-4">
                                <p class="fw-bold fs-20 text-fixed-white text-shadow mb-0">ss</p>
                                <p class="mb-0 fs-11 op-5 text-fixed-white">Brand</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <div class="mb-4">
                        <p class="fs-15 mb-2 fw-semibold">Thông tin :</p>
                        <p class="fs-12 text-muted op-7 mb-0">
                            Tôi là <b class="text-default">{{ $user->name }}</b> {{ $user->short_bio }}
                        </p>
                    </div>
                    <div class="mb-0">
                        <p class="fs-15 mb-2 fw-semibold">Links :</p>
                        <div class="mb-0">
                            <p class="mb-1">
                                <a href="https://www.spruko.com/" class="text-primary"><u>{{ $user->link_fb }}</u></a>
                            </p>
                            <p class="mb-0">
                                <a href="https://themeforest.net/user/spruko/portfolio"
                                    class="text-primary"><u>{{ $user->link_zalo }}</u></a>
                            </p>
                            <p class="mb-0">
                                <a href="https://themeforest.net/user/spruko/portfolio"
                                    class="text-primary"><u>{{ $user->link_github }}</u></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Thông tin liên lạc :</p>
                    <div class="text-muted">
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-mail-line align-middle fs-14"></i>
                            </span>
                            {{ $user->address }}
                        </p>
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-phone-line align-middle fs-14"></i>
                            </span>
                            {{ $user->phone }}

                        </p>
                        <p class="mb-0">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-map-pin-line align-middle fs-14"></i>
                            </span>
                            {{ $user->address }}

                        </p>
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Mạng Xã Hội :</p>
                    <div class="btn-list mb-0">
                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                            <i class="ri-facebook-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                            <i class="ri-twitter-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                            <i class="ri-instagram-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                            <i class="ri-github-line fw-semibold"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                            <i class="ri-youtube-line fw-semibold"></i>
                        </button>
                    </div>
                </div>
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Danh Mục :</p>
                    <div>

                        <a href="javascript:void(0);">
                            <span class="badge bg-light text-muted m-1"></span>
                        </a>

                    </div>
                </div>
                <div class="p-4">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Followers :</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Alicia Sierra</p>
                                    <span class="fs-11 text-muted op-7">aliciasierra389@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="{{ asset('admin/assets/images/faces/3.jpg') }}" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Samantha Mery</p>
                                    <span class="fs-11 text-muted op-7">samanthamery@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="{{ asset('admin/assets/images/faces/6.jpg') }}" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Juliana Pena</p>
                                    <span class="fs-11 text-muted op-7">juliapena555@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="{{ asset('admin/assets/images/faces/15.jpg') }}" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Adam Smith</p>
                                    <span class="fs-11 text-muted op-7">adamsmith99@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="{{ asset('admin/assets/images/faces/13.jpg') }}" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Farhaan Amhed</p>
                                    <span class="fs-11 text-muted op-7">farhaanahmed989@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm">Follow</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-8 col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-0">
                        <div
                            class="p-3 border-bottom border-block-end-dashed d-flex align-items-center justify-content-between">
                            <div>
                                <ul class="nav nav-tabs mb-0 tab-style-6 justify-content-start" id="myTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                            data-bs-target="#activity-tab-pane" type="button" role="tab"
                                            aria-controls="activity-tab-pane" aria-selected="true"><i
                                                class="ri-gift-line me-1 align-middle d-inline-block"></i>All
                                            Categories</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                            data-bs-target="#posts-tab-pane" type="button" role="tab"
                                            aria-controls="posts-tab-pane" aria-selected="false"><i
                                                class="ri-bill-line me-1 align-middle d-inline-block"></i>All
                                            Products</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                            data-bs-target="#followers-tab-pane" type="button" role="tab"
                                            aria-controls="followers-tab-pane" aria-selected="false"><i
                                                class="ri-money-dollar-box-line me-1 align-middle d-inline-block"></i>Revenue</button>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="p-3">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active fade p-0 border-0" id="activity-tab-pane"
                                    role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                    @php
                                    $displayedCategories = [];
                                @endphp

                                <ul class="list-unstyled profile-timeline">
                                    @foreach ($userData as $data)
                                    @if (!in_array($data->category_name, $displayedCategories))
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{ asset('admin/assets/images/media/media-39.jpg') }}" alt="">
                                                </span>
                                                <p class="mb-1">
                                                    <b>{{ $user->name }}</b> có danh mục <b>{{ $data->category_name }}</b>.<span class="float-end fs-11 text-muted">ss</span>
                                                </p>
                                                <p class="text-muted">dd &#128076;</p>
                                            </div>
                                        </li>
                                        @php
                                            $displayedCategories[] = $data->category_name;
                                        @endphp
                                    @endif
                                    @endforeach
                                </ul>


                                </div>
                                <div class="tab-pane fade p-0 border-0" id="posts-tab-pane" role="tabpanel"
                                    aria-labelledby="posts-tab" tabindex="0">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="d-sm-flex align-items-center lh-1">
                                                <div class="me-3">
                                                    <span class="avatar avatar-md avatar-rounded">
                                                        <img src="../assets/images/faces/9.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill me-sm-2 mt-1 mt-sm-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Recipient's username"
                                                            aria-label="Recipient's username with two button addons">
                                                        <button class="btn btn-light btn-wave d-none d-sm-block"
                                                            type="button"><i class="bi bi-emoji-smile"></i></button>
                                                        <button class="btn btn-light btn-wave" type="button"><i
                                                                class="bi bi-paperclip"></i></button>
                                                        <button class="btn btn-light btn-wave" type="button"><i
                                                                class="bi bi-camera"></i></button>
                                                        <button class="btn btn-primary btn-wave"
                                                            type="button">Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item" id="profile-posts-scroll">
                                            <div class="row gy-3">
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="rounded border">
                                                        <div class="p-3 d-flex align-items-top flex-wrap">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-1 fw-semibold lh-1">You</p>
                                                                <p class="fs-11 mb-2 text-muted">24, Dec - 04:32PM</p>
                                                                <p class="fs-12 text-muted mb-0">Lorem ipsum dolor sit
                                                                    amet
                                                                    consectetur adipisicing elit.</p>
                                                                <p class="fs-12 text-muted mb-3">As opposed to using
                                                                    'Content here &#128076;</p>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                    <div>
                                                                        <div class="btn-list">
                                                                            <button
                                                                                class="btn btn-primary-light btn-sm btn-wave">
                                                                                Comment
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-success-light btn-wave">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-danger-light btn-wave">
                                                                                <i class="ri-share-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top">
                                                                <div>
                                                                    <span
                                                                        class="badge bg-primary-transparent me-2">Fashion</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="ti ti-dots-vertical"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Hide</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Edit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="rounded border">
                                                        <div class="p-3 d-flex align-items-top flex-wrap">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-1 fw-semibold lh-1">You</p>
                                                                <p class="fs-11 mb-2 text-muted">26, Dec - 12:45PM</p>
                                                                <p class="fs-12 text-muted mb-1">Shared pictures with 4
                                                                    of
                                                                    friends <span>Hiren,Sasha,Biden,Thara</span>.</p>
                                                                <div class="d-flex lh-1 justify-content-between mb-3">
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="avatar avatar-md me-1">
                                                                                <img src="../assets/images/media/media-52.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="avatar avatar-md me-1">
                                                                                <img src="../assets/images/media/media-56.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                    <div>
                                                                        <div class="btn-list">
                                                                            <button
                                                                                class="btn btn-primary-light btn-sm btn-wave">
                                                                                Comment
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-success-light btn-wave">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-danger-light btn-wave">
                                                                                <i class="ri-share-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex align-items-top">
                                                                    <div>
                                                                        <span
                                                                            class="badge bg-success-transparent me-2">Nature</span>
                                                                    </div>
                                                                    <div class="dropdown">
                                                                        <button
                                                                            class="btn btn-sm btn-icon btn-light btn-wave"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ti ti-dots-vertical"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Delete</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Hide</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Edit</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-list-stacked d-block mt-4 text-end">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg')}}"
                                                                            alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="../assets/images/faces/8.jpg')}}"
                                                                            alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg')}}"
                                                                            alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="../assets/images/faces/10.jpg')}}"
                                                                            alt="img">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="rounded border">
                                                        <div class="p-3 d-flex align-items-top flex-wrap">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-1 fw-semibold lh-1">You</p>
                                                                <p class="fs-11 mb-2 text-muted">29, Dec - 09:53AM</p>
                                                                <p class="fs-12 text-muted mb-1">Sharing an article
                                                                    that
                                                                    excites me about nature more than what i thought.
                                                                </p>
                                                                <p class="mb-3 profile-post-link">
                                                                    <a href="javascript:void(0);"
                                                                        class="fs-12 text-primary">
                                                                        <u>https://www.discovery.com/nature/caring-for-coral</u>
                                                                    </a>
                                                                </p>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                    <div>
                                                                        <div class="btn-list">
                                                                            <button
                                                                                class="btn btn-primary-light btn-sm btn-wave">
                                                                                Comment
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-success-light btn-wave">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-danger-light btn-wave">
                                                                                <i class="ri-share-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top">
                                                                <div>
                                                                    <span
                                                                        class="badge bg-secondary-transparent me-2">Travel</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="ti ti-dots-vertical"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Hide</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Edit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="rounded border">
                                                        <div class="p-3 d-flex align-items-top flex-wrap">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-1 fw-semibold lh-1">You</p>
                                                                <p class="fs-11 mb-2 text-muted">22, Dec - 11:22PM</p>
                                                                <p class="fs-12 text-muted mb-1">Shared pictures with 3
                                                                    of
                                                                    your friends <span>Maya,Jacob,Amanda</span>.</p>
                                                                <div class="d-flex lh-1 justify-content-between mb-3">
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="avatar avatar-md me-1">
                                                                                <img src="../assets/images/media/media-40.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                        </a>
                                                                        <a href="javascript:void(0);">
                                                                            <span class="avatar avatar-md me-1">
                                                                                <img src="../assets/images/media/media-45.jpg')}}"
                                                                                    alt="">
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                    <div>
                                                                        <div class="btn-list">
                                                                            <button
                                                                                class="btn btn-primary-light btn-sm btn-wave">
                                                                                Comment
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-success-light btn-wave">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-danger-light btn-wave">
                                                                                <i class="ri-share-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex align-items-top">
                                                                    <div>
                                                                        <span
                                                                            class="badge bg-success-transparent me-2">Nature</span>
                                                                    </div>
                                                                    <div class="dropdown">
                                                                        <button
                                                                            class="btn btn-sm btn-icon btn-light btn-wave"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="ti ti-dots-vertical"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Delete</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Hide</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Edit</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-list-stacked d-block mt-4 text-end">
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="../assets/images/faces/1.jpg')}}"
                                                                            alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="../assets/images/faces/5.jpg')}}"
                                                                            alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-xs avatar-rounded">
                                                                        <img src="../assets/images/faces/16.jpg')}}"
                                                                            alt="img">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="rounded border">
                                                        <div class="p-3 d-flex align-items-top flex-wrap">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-1 fw-semibold lh-1">You</p>
                                                                <p class="fs-11 mb-2 text-muted">18, Dec - 12:28PM</p>
                                                                <p class="fs-12 text-muted mb-1">Followed this author
                                                                    for
                                                                    top class themes with best code you can get in the
                                                                    market.</p>
                                                                <p class="mb-3 profile-post-link">
                                                                    <a href="https://themeforest.net/user/spruko/portfolio"
                                                                        target="_blank" class="fs-12 text-primary">
                                                                        <u>https://themeforest.net/user/spruko/portfolio</u>
                                                                    </a>
                                                                </p>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                    <div>
                                                                        <div class="btn-list">
                                                                            <button
                                                                                class="btn btn-primary-light btn-sm btn-wave">
                                                                                Comment
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-success-light btn-wave">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-danger-light btn-wave">
                                                                                <i class="ri-share-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top">
                                                                <div>
                                                                    <span
                                                                        class="badge bg-secondary-transparent me-2">Travel</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="ti ti-dots-vertical"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Hide</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Edit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="rounded border">
                                                        <div class="p-3 d-flex align-items-top flex-wrap">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg')}}"
                                                                        alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <p class="mb-1 fw-semibold lh-1">You</p>
                                                                <p class="fs-11 mb-2 text-muted">02, Dec - 06:32AM</p>
                                                                <p class="fs-12 text-muted mb-0">Lorem ipsum dolor sit
                                                                    amet
                                                                    consectetur adipisicing elit.</p>
                                                                <p class="fs-12 text-muted mb-3">There are many
                                                                    variations
                                                                    of passages &#128079;&#128525;</p>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-md-0 mb-2">
                                                                    <div>
                                                                        <div class="btn-list">
                                                                            <button
                                                                                class="btn btn-primary-light btn-sm btn-wave">
                                                                                Comment
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-success-light btn-wave">
                                                                                <i class="ri-thumb-up-line"></i>
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-sm btn-danger-light btn-wave">
                                                                                <i class="ri-share-line"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-top">
                                                                <div>
                                                                    <span
                                                                        class="badge bg-primary-transparent me-2">Fashion</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-icon btn-light btn-wave"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="ti ti-dots-vertical"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Delete</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Hide</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="javascript:void(0);">Edit</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="text-center">
                                                <button class="btn btn-primary-light btn-wave">Show All</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade p-0 border-0" id="followers-tab-pane" role="tabpanel"
                                    aria-labelledby="followers-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg')}}" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Samantha May</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                samanthamay2912@gmail.com
                                                            </p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                        <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg')}}" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Andrew Garfield</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                andrewgarfield98@gmail.com</p>
                                                            <span class="badge bg-success-transparent rounded-pill">Team
                                                                Lead</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                        <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg')}}" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Jessica Cashew</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                jessicacashew143@gmail.com</p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                        <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg')}}" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Simon Cowan</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                jessicacashew143@gmail.com</p>
                                                            <span class="badge bg-warning-transparent rounded-pill">Team
                                                                Manager</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                        <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/7.jpg')}}" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Amanda nunes</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                amandanunes45@gmail.com
                                                            </p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                        <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card custom-card shadow-none border">
                                                <div class="card-body p-4">
                                                    <div class="text-center">
                                                        <span class="avatar avatar-xl avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg')}}" alt="">
                                                        </span>
                                                        <div class="mt-2">
                                                            <p class="mb-0 fw-semibold">Mahira Hose</p>
                                                            <p class="fs-12 op-7 mb-1 text-muted">
                                                                mahirahose9456@gmail.com
                                                            </p>
                                                            <span class="badge bg-info-transparent rounded-pill">Team
                                                                Member</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                        <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="text-center mt-4">
                                                <button class="btn btn-primary-light btn-wave">Show All</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xl-">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Personal Info
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Name :
                                    </div>
                                    <span class="fs-12 text-muted">Sonya Taylor</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Email :
                                    </div>
                                    <span class="fs-12 text-muted">sonyataylor231@gmail.com</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Phone :
                                    </div>
                                    <span class="fs-12 text-muted">+(555) 555-1234</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Designation :
                                    </div>
                                    <span class="fs-12 text-muted">C.E.O</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Age :
                                    </div>
                                    <span class="fs-12 text-muted">28</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Experience :
                                    </div>
                                    <span class="fs-12 text-muted">10 Years</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">
                            Recent Posts
                        </div>
                        <div>
                            <span class="badge bg-primary-transparent">Today</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="javascript:void(0);">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="avatar avatar-md me-3">
                                            <img src="../assets/images/media/media-39.jpg')}}" class="img-fluid"
                                                alt="...">
                                        </span>
                                        <div class="flex-fill">
                                            <p class="fw-semibold mb-0">Animals</p>
                                            <p class="mb-1 fs-12 profile-recent-posts text-truncate text-muted">
                                                There are many variations of passages of Lorem Ipsum available
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="avatar avatar-md me-3">
                                            <img src="../assets/images/media/media-56.jpg')}}" class="img-fluid"
                                                alt="...">
                                        </span>
                                        <div class="flex-fill">
                                            <p class="fw-semibold mb-0">Travel</p>
                                            <p class="mb-1 fs-12 profile-recent-posts text-truncate text-muted">
                                                Latin words, combined with a handful of model sentence
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="avatar avatar-md me-3">
                                            <img src="../assets/images/media/media-54.jpg')}}" class="img-fluid"
                                                alt="...">
                                        </span>
                                        <div class="flex-fill">
                                            <p class="fw-semibold mb-0">Interior</p>
                                            <p class="mb-1 fs-12 profile-recent-posts text-truncate text-muted">
                                                Contrary to popular belief, Lorem Ipsum is not simply random
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="avatar avatar-md me-3">
                                            <img src="../assets/images/media/media-64.jpg')}}" class="img-fluid"
                                                alt="...">
                                        </span>
                                        <div class="flex-fill">
                                            <p class="fw-semibold mb-0">Nature</p>
                                            <p class="mb-1 fs-12 profile-recent-posts text-truncate text-muted">
                                                It is a long established fact that a reader will be distracted by the
                                                readable content
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">
                            Statistics
                        </div>
                        <div>
                            <button class="btn btn-sm btn-success-light btn-wave">View All</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fw-semibold d-flex align-items-center">
                                        <span class="avatar avatar-xs me-2">
                                            <img src="../assets/images/faces/15.jpg')}}" alt="">
                                        </span>Alister
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-icon btn-primary-light">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fw-semibold d-flex align-items-center">
                                        <span class="avatar avatar-xs me-2">
                                            <img src="../assets/images/faces/4.jpg')}}" alt="">
                                        </span>Samantha Sams
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-icon btn-primary-light">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fw-semibold d-flex align-items-center">
                                        <span class="avatar avatar-xs me-2">
                                            <img src="../assets/images/faces/11.jpg')}}" alt="">
                                        </span>Jason Mama
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-icon btn-primary-light">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fw-semibold d-flex align-items-center">
                                        <span class="avatar avatar-xs me-2">
                                            <img src="../assets/images/faces/5.jpg')}}" alt="">
                                        </span>Alicia Sierra
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-icon btn-primary-light">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fw-semibold d-flex align-items-center">
                                        <span class="avatar avatar-xs me-2">
                                            <img src="../assets/images/faces/7.jpg')}}" alt="">
                                        </span>Kiara Advain
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-icon btn-primary-light">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
