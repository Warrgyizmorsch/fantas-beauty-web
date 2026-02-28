@extends('layouts.app')

@section('title', 'Contact - Fantas Beauty')

@section('content')
<div class="page__banner" data-background="{{ asset('assets/img/bg/page.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>Contact Us</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span>_</span>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- =========================
        GALLERY SECTION (WITH TABS FILTER)
========================= --}}
<div class="services__area section-padding">
    <div class="container">

        {{-- Title --}}
        <div class="row mb-35">
            <div class="col-xl-12">
                <div class="gallery__area-title">
                    <span class="subtitle__two text-black" >Gallery</span>
                    <span class="subtitle__one">Our Work</span>
                    <h2 class="text-black">Explore Our Latest Tattoo, Lashes & Nail Transformations</h2>
                </div>
            </div>
        </div>

        {{-- Tabs (UI Upper) --}}
        <div class="row mb-35">
            <div class="col-xl-12">
                <div class="gallery-tabs-wrap">
                    <ul class="gallery-tabs">
                        <li><button type="button" class="gallery-tab is-active" data-filter="all">All</button></li>
                        <li><button type="button" class="gallery-tab" data-filter="tattoo">Tattoo Art</button></li>
                        <li><button type="button" class="gallery-tab" data-filter="nails">Nails</button></li>
                        <li><button type="button" class="gallery-tab" data-filter="hair">Hair</button></li>
                    </ul>
                </div>
            </div>
        </div>

        @php
            $gallery = [
                ['img' => 'assets/testimonials/original-grid-image-26816-1487672786-1.webp', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
                ['img' => 'assets/testimonials/original-grid-image-26400-1487673173-6.webp', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
                ['img' => 'assets/testimonials/1.jpg', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],
                ['img' => 'assets/testimonials/deeb222d-64b9-4c37-84b8-2b6064cd5d10.webp', 'title' => 'Custom Tattoo', 'tag' => 'Tattoo Art', 'cat' => 'tattoo'],

                ['img' => 'assets/testimonials/2.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails', 'cat' => 'nails'],
                ['img' => 'assets/testimonials/12.jpg', 'title' => 'Nail Extensions & Fine Line', 'tag' => 'Nails & Tattoo Art', 'cat' => 'nails'],
                ['img' => 'assets/testimonials/3.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails', 'cat' => 'nails'],
                ['img' => 'assets/testimonials/8.jpg', 'title' => 'Nail Extensions', 'tag' => 'Nails', 'cat' => 'nails'],

                ['img' => 'assets/testimonials/4.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair', 'cat' => 'hair'],
                ['img' => 'assets/testimonials/5.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair', 'cat' => 'hair'],
                ['img' => 'assets/testimonials/6.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair', 'cat' => 'hair'],
                ['img' => 'assets/testimonials/7.jpg', 'title' => 'Hair Styling', 'tag' => 'Hair', 'cat' => 'hair'],
            ];
        @endphp

        {{-- Grid (Same) --}}
        <div class="row g-4 mb-65" id="galleryGrid">
            @foreach($gallery as $index => $g)
                <div class="col-xl-4 col-lg-4 col-md-6 gallery-item"
                     data-cat="{{ $g['cat'] }}">

                    <div class="gallery__area-item h-100">
                        <div class="gallery__area-item-image gallery-box">

                            <img class="img__full gallery-img"
                                 src="{{ asset($g['img']) }}"
                                 data-img="{{ asset($g['img']) }}"
                                 data-title="{{ $g['title'] }}"
                                 data-tag="{{ $g['tag'] }}"
                                 alt="{{ $g['title'] }}"
                                 loading="lazy"
                                 onerror="this.src='{{ asset('images/blank.jpeg') }}'">

                            <div class="gallery__area-item-image-content">
                                <h4>{{ $g['title'] }}</h4>
                                <span>{{ $g['tag'] }}</span>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- =========================
        GALLERY END
========================= --}}


{{-- ================= LIGHTBOX MODAL (SLIDE + ESC + FIXED FIT) ================= --}}
<div id="galleryLightbox" class="gallery-lightbox" aria-hidden="true">
    <button class="lightbox-close" type="button" aria-label="Close">&times;</button>

    {{-- arrows --}}
    <button class="lightbox-nav lightbox-prev" type="button" aria-label="Previous">&#10094;</button>
    <button class="lightbox-nav lightbox-next" type="button" aria-label="Next">&#10095;</button>

    <div class="lightbox-inner">
        <img class="lightbox-content" id="lightboxImage" alt="Preview">
        <div class="lightbox-caption">
            <h4 id="lightboxTitle"></h4>
            <span id="lightboxTag"></span>
        </div>
    </div>
</div>


<style>
/* ✅ Grid image fixed box (same UI) */
.gallery-box{
    width: 100%;
    height: 450px;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}
.gallery-box .gallery-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    display: block;
}

/* ===== Tabs UI Upper ===== */
.gallery-tabs-wrap{
    display: flex;
    justify-content: center;
}
.gallery-tabs{
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
    margin: 0;
}
.gallery-tab{
    border: 1px solid rgba(180,142,64,.35);
    background: transparent;
    color: #111;
    padding: 10px 16px;
    border-radius: 999px;
    font-weight: 600;
    cursor: pointer;
    transition: .2s ease;
}
.gallery-tab:hover{
    background: rgba(180,142,64,.12);
}
.gallery-tab.is-active{
    background: #B48E40;
    border-color: #B48E40;
    color: #fff;
}

/* Filter hide animation */
.gallery-item.is-hidden{
    display: none;
}

/* ================= LIGHTBOX ================= */
.gallery-lightbox{
    display: none;
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(0,0,0,.92);
    padding: 30px 18px;
}

.lightbox-inner{
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 12px;
}

/* ✅ Preview image perfect fit */
.lightbox-content{
    max-width: 92vw;
    max-height: 78vh;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 10px;
    user-select: none;
    -webkit-user-drag: none;
    transition: opacity .2s ease;
}

.lightbox-caption{
    text-align: center;
    color: #fff;
    opacity: .95;
    padding: 0 10px;
}
.lightbox-caption h4{
    margin: 0;
    font-size: 18px;
    font-weight: 600;
}
.lightbox-caption span{
    display: inline-block;
    margin-top: 4px;
    font-size: 13px;
    opacity: .85;
}

/* close */
.lightbox-close{
    position: absolute;
    top: 18px;
    right: 22px;
    color: #fff;
    background: transparent;
    border: 0;
    font-size: 44px;
    line-height: 1;
    cursor: pointer;
    user-select: none;
}

/* arrows */
.lightbox-nav{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.18);
    color: #fff;
    width: 48px;
    height: 48px;
    border-radius: 999px;
    cursor: pointer;
    font-size: 24px;
    display: grid;
    place-items: center;
    transition: .2s ease;
}
.lightbox-nav:hover{ background: rgba(255,255,255,.20); }
.lightbox-prev{ left: 18px; }
.lightbox-next{ right: 18px; }

@media (max-width: 768px){
    .gallery-box{ height: 220px; }
    .lightbox-prev{ left: 10px; }
    .lightbox-next{ right: 10px; }
}
</style>


<script>
document.addEventListener("DOMContentLoaded", function () {

    // ===== Filter Tabs =====
    const tabs = Array.from(document.querySelectorAll(".gallery-tab"));
    const items = Array.from(document.querySelectorAll(".gallery-item"));

    function applyFilter(filter){
        items.forEach(it => {
            const cat = it.getAttribute("data-cat");
            const show = (filter === "all") || (cat === filter);
            it.classList.toggle("is-hidden", !show);
        });

        tabs.forEach(t => t.classList.toggle("is-active", t.dataset.filter === filter));
    }

    tabs.forEach(tab => {
        tab.addEventListener("click", () => applyFilter(tab.dataset.filter));
    });

    // default
    applyFilter("all");


    // ===== Lightbox (works on filtered visible items too) =====
    const lightbox = document.getElementById("galleryLightbox");
    const lightboxImg = document.getElementById("lightboxImage");
    const closeBtn = document.querySelector(".lightbox-close");
    const prevBtn = document.querySelector(".lightbox-prev");
    const nextBtn = document.querySelector(".lightbox-next");
    const titleEl = document.getElementById("lightboxTitle");
    const tagEl   = document.getElementById("lightboxTag");

    let currentIndex = 0;
    let currentItems = [];

    function getVisibleItems(){
        // only visible items
        return Array.from(document.querySelectorAll(".gallery-item:not(.is-hidden) .gallery-img")).map(img => ({
            src: img.dataset.img,
            title: img.dataset.title || img.alt || "",
            tag: img.dataset.tag || ""
        }));
    }

    function openLightbox(index){
        currentItems = getVisibleItems();
        currentIndex = index;

        lightbox.style.display = "block";
        lightbox.setAttribute("aria-hidden", "false");
        render();
    }

    function closeLightbox(){
        lightbox.style.display = "none";
        lightbox.setAttribute("aria-hidden", "true");
        lightboxImg.src = "";
    }

    function render(){
        const item = currentItems[currentIndex];
        if(!item) return;

        lightboxImg.style.opacity = "0";
        setTimeout(() => {
            lightboxImg.src = item.src;
            titleEl.textContent = item.title;
            tagEl.textContent = item.tag;
            lightboxImg.onload = () => (lightboxImg.style.opacity = "1");
        }, 80);
    }

    function next(){
        if(!currentItems.length) return;
        currentIndex = (currentIndex + 1) % currentItems.length;
        render();
    }

    function prev(){
        if(!currentItems.length) return;
        currentIndex = (currentIndex - 1 + currentItems.length) % currentItems.length;
        render();
    }

    // click open (calculate index among visible)
    document.addEventListener("click", function(e){
        const img = e.target.closest(".gallery-img");
        if(!img) return;

        const visibleImgs = Array.from(document.querySelectorAll(".gallery-item:not(.is-hidden) .gallery-img"));
        const idx = visibleImgs.indexOf(img);
        if(idx >= 0) openLightbox(idx);
    });

    // close
    closeBtn.addEventListener("click", closeLightbox);

    // outside click close
    lightbox.addEventListener("click", function(e){
        if (e.target === lightbox) closeLightbox();
    });

    // arrows
    nextBtn.addEventListener("click", function(e){ e.stopPropagation(); next(); });
    prevBtn.addEventListener("click", function(e){ e.stopPropagation(); prev(); });

    // ESC + keyboard arrows
    document.addEventListener("keydown", function(e){
        if (lightbox.style.display !== "block") return;

        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowRight") next();
        if (e.key === "ArrowLeft") prev();
    });

    // swipe for mobile
    let startX = 0;
    lightboxImg.addEventListener("touchstart", (e) => {
        startX = e.changedTouches[0].clientX;
    }, {passive:true});

    lightboxImg.addEventListener("touchend", (e) => {
        const endX = e.changedTouches[0].clientX;
        const diff = endX - startX;
        if (Math.abs(diff) < 40) return;
        diff < 0 ? next() : prev();
    }, {passive:true});

});
</script>

@endsection