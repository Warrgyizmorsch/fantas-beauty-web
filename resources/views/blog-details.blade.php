@extends('layouts.app')

@section('title', $blog['title'] . ' - Fantas Beauty')

@section('content')

<style>
    /* ==================================
       BLOG DETAILS LUXURY STYLES
    ================================== */
    .blog-details-area {
        padding: 80px 0;
        background-color: #FDFBF7; /* Soft cream background */
    }

    /* Left Side: Main Content */
    .blog-details-content {
        background: #FFFFFF;
        padding: 40px;
        border-radius: 12px;
        border: 1px solid #F0EAE1;
        box-shadow: 0 10px 30px rgba(180,142,64,.05);
    }

    .blog-details-img {
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 30px;
        height: 450px; /* Fixed height for consistency */
    }

    .blog-details-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog-meta {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        font-size: 14px;
        color: #8C7B6D;
        flex-wrap: wrap;
    }

    .blog-meta span i {
        color: #B48E40; /* Gold Icon */
        margin-right: 5px;
    }

    .blog-details-title {
        font-size: 32px;
        color: #332B27;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .blog-details-text p {
        color: #5A4A42;
        line-height: 1.8;
        margin-bottom: 20px;
        font-size: 16px;
    }

    .blog-quote {
        background: #F4EFE6;
        border-left: 4px solid #B48E40;
        padding: 25px 30px;
        font-size: 18px;
        font-style: italic;
        color: #5A4A42;
        margin: 30px 0;
        border-radius: 0 8px 8px 0;
    }

    /* Right Side: Sidebar */
    .blog-sidebar {
        background: #FFFFFF;
        padding: 30px;
        border-radius: 12px;
        border: 1px solid #F0EAE1;
        margin-bottom: 30px;
    }

    .sidebar-title {
        font-size: 20px;
        color: #332B27;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #F0EAE1;
        position: relative;
    }

    .sidebar-title::after {
        content: "";
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 50px;
        height: 2px;
        background: #B48E40;
    }

    /* Categories List */
    .sidebar-categories {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar-categories li {
        margin-bottom: 12px;
    }

    .sidebar-categories li a {
        color: #5A4A42;
        text-decoration: none;
        display: flex;
        justify-content: space-between;
        transition: color 0.3s ease;
    }

    .sidebar-categories li a:hover {
        color: #B48E40;
    }

    /* Recent Posts */
    .recent-post-item {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        align-items: center;
    }

    .recent-post-img {
        width: 80px;
        height: 80px;
        border-radius: 6px;
        object-fit: cover;
    }

    .recent-post-content h6 {
        font-size: 15px;
        margin: 0 0 5px;
        line-height: 1.4;
    }

    .recent-post-content h6 a {
        color: #332B27;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .recent-post-content h6 a:hover {
        color: #B48E40;
    }

    .recent-post-date {
        font-size: 12px;
        color: #8C7B6D;
    }

    @media (max-width: 768px) {
        .blog-details-img { height: 250px; }
        .blog-details-title { font-size: 24px; }
    }
</style>

{{-- =========================
        PAGE BANNER
========================= --}}
<div class="page__banner" data-background="{{ asset('assets/img/bg/common-banner.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>Blog Details</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span>_</span>{{ $blog['category'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- =========================
        BLOG DETAILS AREA
========================= --}}
<div class="blog-details-area">
    <div class="container custom__container">
        <div class="row">
            
            {{-- Main Content (Left) --}}
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="blog-details-content">
                    
                    {{-- 1. Dynamic Image (Using Asset) --}}
                    <div class="blog-details-img">
                        <img src="{{ asset($blog['detail_img']) }}" alt="{{ $blog['title'] }}">
                    </div>

                    {{-- 2. Dynamic Category & Date --}}
                    <div class="blog-meta">
                        <span><i class="fal fa-user"></i> By Admin</span>
                        <span><i class="fal fa-calendar-alt"></i> {{ now()->format('d M, Y') }}</span>
                        <span><i class="fal fa-tags"></i> {{ $blog['category'] }}</span>
                    </div>

                    {{-- 3. Dynamic Title --}}
                    <h2 class="blog-details-title">{{ $blog['title'] }}</h2>

                    {{-- 4. Dynamic Content --}}
                    <div class="blog-details-text">
                        {!! $blog['content'] !!}
                    </div>

                </div>
            </div>

            {{-- Sidebar (Right) --}}
            <div class="col-lg-4">
                
                {{-- Categories Widget --}}
                <div class="blog-sidebar">
                    <h4 class="sidebar-title">Categories</h4>
                    <ul class="sidebar-categories">
                        <li><a href="#">Tattoo Ideas <span>(12)</span></a></li>
                        <li><a href="#">Piercing Care <span>(08)</span></a></li>
                        <li><a href="#">Nail Art Trends <span>(15)</span></a></li>
                        <li><a href="#">Eyelash Extensions <span>(05)</span></a></li>
                        <li><a href="#">Studio News <span>(03)</span></a></li>
                    </ul>
                </div>

                {{-- Recent Posts Widget (Static for now) --}}
                <div class="blog-sidebar">
                    <h4 class="sidebar-title">Recent Posts</h4>
                    
                    <div class="recent-post-item">
                        <img src="{{ asset('assets/testimonials/3.jpg') }}" alt="Post" class="recent-post-img">
                        <div class="recent-post-content">
                            <h6><a href="#">Top Minimalist Nail Designs</a></h6>
                            <span class="recent-post-date"><i class="fal fa-clock"></i> 10 Oct, 2024</span>
                        </div>
                    </div>

                    <div class="recent-post-item">
                        <img src="{{ asset('assets/testimonials/7.jpg') }}" alt="Post" class="recent-post-img">
                        <div class="recent-post-content">
                            <h6><a href="#">Everything About Lash Volume</a></h6>
                            <span class="recent-post-date"><i class="fal fa-clock"></i> 05 Oct, 2024</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection