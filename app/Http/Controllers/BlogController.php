<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($slug)
    {
        $blogs = [
            [
                // Blade {{ }} hata diya hai, view file automatically asset() laga legi
                'img' => 'assets/img/gallery/blog-banner.png', 
                'detail_img' => 'assets/testimonials/1.jpg', // <-- Gallery se Tattoo ki image
                'category' => 'Tattoo',
                'title' => 'How to Prepare for Your First Tattoo Session',
                'desc' => 'Planning your first tattoo? Learn how to prepare your skin, what to expect during the session, and how to ensure a smooth healing process.',
                'content' => '
                    <p>Getting a new tattoo is an exciting experience, but proper preparation is key to a smooth session. First and foremost, make sure you are well-rested and have eaten a solid meal before coming to the studio.</p>
                    <h4>1. Hydrate and Moisturize</h4>
                    <p>Drink plenty of water the day before. Well-hydrated skin takes ink much better. You can also lightly moisturize the area, but avoid any numbing creams unless discussed with your artist.</p>
                    <h4>2. Wear Comfortable Clothes</h4>
                    <p>Dress in loose, comfortable clothing that allows easy access to the area getting tattooed. If you are getting a back tattoo, wear a shirt that can open from the back or is loose enough to adjust.</p>
                ',
                'slug' => 'first-tattoo-preparation'
            ],
            [
                'img' => 'assets/blog/blog-4.png',
                'detail_img' => 'assets/testimonials/6.jpg', // <-- Gallery se image (Lashes ke liye)
                'category' => 'Lashes',
                'title' => 'Choosing the Perfect Eyelash Extensions for Your Face',
                'desc' => 'From classic to volume lashes, discover which style enhances your eye shape and complements your natural beauty.',
                'content' => '
                    <p>Eyelash extensions are not a one-size-fits-all service. The right style can lift your eyes, make you look more awake, and balance your facial features.</p>
                    <h4>Classic vs. Volume</h4>
                    <p><strong>Classic lashes</strong> involve applying one extension to one natural lash. It is perfect for a natural mascara look. <strong>Volume lashes</strong> involve attaching a fan of multiple lightweight lashes to one natural lash, giving a fluffy, glamorous look.</p>
                    <div class="blog-quote">"Your eyes are the windows to your soul; frame them beautifully with the right lashes."</div>
                ',
                'slug' => 'perfect-eyelash-extensions'
            ],
            [
                'img' => 'assets/blog/blog-5.png',
                'detail_img' => 'assets/testimonials/2.jpg', // <-- Gallery se Nails ki image
                'category' => 'Nails',
                'title' => 'Top Nail Art Trends You Should Try This Season',
                'desc' => 'Explore trending nail designs, colors, and finishes that are making waves in the beauty industry right now.',
                'content' => '
                    <p>Nail art is constantly evolving. This season is all about blending minimalism with eye-catching textures. Whether you prefer short natural nails or long acrylics, there is a trend for everyone.</p>
                    <h4>1. Chrome Finishes</h4>
                    <p>Glazed donut nails and metallic chrome powders are everywhere. They add a sophisticated shine that catches the light beautifully.</p>
                    <h4>2. Fine Line Minimalism</h4>
                    <p>Tiny dots, thin lines, and negative space designs are perfect for those who want something chic and not overly complicated.</p>
                ',
                'slug' => 'nail-art-trends'
            ],
        ];

        $currentBlog = collect($blogs)->firstWhere('slug', $slug);

        if (!$currentBlog) {
            abort(404);
        }

        return view('blog-details', ['blog' => $currentBlog]);
    }
}