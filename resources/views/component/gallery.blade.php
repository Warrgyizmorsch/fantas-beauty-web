{{-- =========================         GALLERY SECTION ========================= --}}
<div class="gallery__area section-padding">
    <div class="container">

        {{-- Title --}}
        {{-- <div class="row mb-65">
            <div class="col-xl-12">
                <div class="gallery__area-title">
                    <span class="subtitle__two text-black">Gallery</span>
                    <span class="subtitle__one ">Our Work</span>
                    <h2 class="text-black">Explore Our Latest Tattoo, Lashes & Nail Transformations</h2>
                </div>
            </div>
        </div> --}}

      
      

        {{-- Grid --}}
        <div class="row g-4 mb-65">
            @foreach($gallery as $index => $g)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__area-item h-100">
                        <div class="gallery__area-item-image gallery-box">

                            {{-- ✅ Clickable image + index for sliding --}}
                            <img class="img__full gallery-img"
                                 src="{{ asset($g['img']) }}"
                                 data-img="{{ asset($g['img']) }}"
                                 data-index="{{ $index }}"
                                 alt="{{ $g['title'] }}" loading="lazy" decoding="async">

                            <div class="gallery__area-item-image-content">
                                <h4>{{ $g['title'] }}</h4>
                                <span>{{ $g['tag'] }}</span>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Button --}}
        {{-- <div class="row t-center">
            <div class="col-xl-12">
                <a href="{{ url('/gallery') }}" class="theme-banner-btn">
                    View Full Gallery <i class="far fa-angle-double-right"></i>
                </a>
            </div>
        </div> --}}

    </div>
</div>
{{-- =========================         GALLERY END ========================= --}}


{{-- ================= LIGHTBOX MODAL (SLIDE + ESC + FIXED FIT) ================= --}}
<div id="galleryLightbox" class="gallery-lightbox" aria-hidden="true">
    <button class="lightbox-close" type="button" aria-label="Close">&times;</button>

    {{-- arrows --}}
    <button class="lightbox-nav lightbox-prev" type="button" aria-label="Previous">&#10094;</button>
    <button class="lightbox-nav lightbox-next" type="button" aria-label="Next">&#10095;</button>

    <div class="lightbox-inner">
        <img class="lightbox-content" id="lightboxImage" alt="Preview" loading="lazy" decoding="async">
        <div class="lightbox-caption">
            <h4 id="lightboxTitle"></h4>
            <span id="lightboxTag"></span>
        </div>
    </div>
</div>


<style>
    /* ✅ Grid image fixed box (same UI, bas fit perfect) */
    .gallery-box{
        width: 100%;
        height: 400px;           /* aap chaho to 220/280 kar sakte ho */
        position: relative;
        overflow: hidden;
        border-radius: 10px;     /* if your theme uses */
    }
    .gallery-box .gallery-img{
        width: 100%;
        height: 100%;
        object-fit: cover;       /* ✅ image box me fix ho jayegi */
        cursor: pointer;
        display: block;
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

    /* ✅ Preview image perfect fit on screen */
    .lightbox-content{
        max-width: 92vw;
        max-height: 78vh;
        width: auto;
        height: auto;
        object-fit: contain; /* ✅ full image show, cut nahi hogi */
        border-radius: 10px;
        user-select: none;
        -webkit-user-drag: none;
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
        const lightbox = document.getElementById("galleryLightbox");
        const lightboxImg = document.getElementById("lightboxImage");
        const closeBtn = document.querySelector(".lightbox-close");
        const prevBtn = document.querySelector(".lightbox-prev");
        const nextBtn = document.querySelector(".lightbox-next");

        const titleEl = document.getElementById("lightboxTitle");
        const tagEl   = document.getElementById("lightboxTag");

        // collect images
        const items = Array.from(document.querySelectorAll(".gallery-img")).map(img => ({
            src: img.getAttribute("data-img"),
            title: img.getAttribute("alt") || "",
            tag: img.closest(".gallery__area-item-image")?.querySelector(".gallery__area-item-image-content span")?.innerText || ""
        }));

        let currentIndex = 0;

        function openLightbox(index){
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
            const item = items[currentIndex];
            if(!item) return;

            // fade feel
            lightboxImg.style.opacity = "0";
            setTimeout(() => {
                lightboxImg.src = item.src;
                titleEl.textContent = item.title;
                tagEl.textContent = item.tag;
                lightboxImg.onload = () => (lightboxImg.style.opacity = "1");
            }, 80);
        }

        function next(){
            currentIndex = (currentIndex + 1) % items.length;
            render();
        }

        function prev(){
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            render();
        }

        // click images
        document.querySelectorAll(".gallery-img").forEach(img => {
            img.addEventListener("click", function () {
                const index = parseInt(this.getAttribute("data-index"), 10) || 0;
                openLightbox(index);
            });
        });

        // close
        closeBtn.addEventListener("click", closeLightbox);

        // outside click close (but not on image)
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

        // basic swipe for mobile
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