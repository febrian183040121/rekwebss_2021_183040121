<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Febrian Wardi",
        "email" => "wardi.183040121@mail.unpas.ac.id",
        "image" => "ava.png"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Febrian Wardi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Non aliquid voluptatem nostrum odio ullam obcaecati aspernatur facilis voluptate 
        voluptas voluptatum optio debitis libero quae,
        laborum aut reprehenderit distinctio fugit tenetur vero? Incidunt 
        hic aspernatur dolore totam officiis odio, quo sit nam? Eum expedita 
        laboriosam quisquam porro facilis quasi et exercitationem temporibus iure, officiis, 
        consequuntur voluptatibus quaerat? Ea amet, sed reiciendis quam reprehenderit blanditiis 
        labore deserunt tempora necessitatibus adipisci, placeat eos, 
        ex repellat beatae iure consequatur quod distinctio accusantium? Temporibus, amet."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "WARDI",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Non aliquid voluptatem nostrum odio ullam obcaecati aspernatur facilis voluptate 
        voluptas voluptatum optio debitis libero quae,
        laborum aut reprehenderit distinctio fugit tenetur vero? Incidunt 
        hic aspernatur dolore totam officiis odio, quo sit nam? Eum expedita 
        laboriosam quisquam porro facilis quasi et exercitationem temporibus iure, officiis, 
        consequuntur voluptatibus quaerat? Ea amet, sed reiciendis quam reprehenderit blanditiis 
        labore deserunt tempora necessitatibus adipisci, placeat eos, 
        ex repellat beatae iure consequatur quod distinctio accusantium? Temporibus, amet.
        laboriosam quisquam porro facilis quasi et exercitationem temporibus iure, officiis, 
        consequuntur voluptatibus quaerat? Ea amet, sed reiciendis quam reprehenderit blanditiis 
        labore deserunt tempora necessitatibus adipisci, placeat eos, 
        ex repellat beatae iure consequatur quod distinctio accusantium? Temporibus, amet."
    ],
    ];

    return view('posts', [
        "title" => "Blog", 
        "posts" => $blog_posts
    ]);
});



// halaman single post
        Route::get('posts/{slug}', function ($slug) {
            $blog_posts = [
                 [
                    "title" => "Judul Post Pertama",
                    "slug" => "judul-post-pertama",
                    "author" => "Febrian Wardi",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Non aliquid voluptatem nostrum odio ullam obcaecati aspernatur facilis voluptate 
                    voluptas voluptatum optio debitis libero quae,
                    laborum aut reprehenderit distinctio fugit tenetur vero? Incidunt 
                    hic aspernatur dolore totam officiis odio, quo sit nam? Eum expedita 
                    laboriosam quisquam porro facilis quasi et exercitationem temporibus iure, officiis, 
                    consequuntur voluptatibus quaerat? Ea amet, sed reiciendis quam reprehenderit blanditiis 
                    labore deserunt tempora necessitatibus adipisci, placeat eos, 
                    ex repellat beatae iure consequatur quod distinctio accusantium? Temporibus, amet."
                ],
                [
                    "title" => "Judul Post Kedua",
                    "slug" => "judul-post-kedua",
                    "author" => "WARDI",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Non aliquid voluptatem nostrum odio ullam obcaecati aspernatur facilis voluptate 
                    voluptas voluptatum optio debitis libero quae,
                    laborum aut reprehenderit distinctio fugit tenetur vero? Incidunt 
                    hic aspernatur dolore totam officiis odio, quo sit nam? Eum expedita 
                    laboriosam quisquam porro facilis quasi et exercitationem temporibus iure, officiis, 
                    consequuntur voluptatibus quaerat? Ea amet, sed reiciendis quam reprehenderit blanditiis 
                    labore deserunt tempora necessitatibus adipisci, placeat eos, 
                    ex repellat beatae iure consequatur quod distinctio accusantium? Temporibus, amet.
                    laboriosam quisquam porro facilis quasi et exercitationem temporibus iure, officiis, 
                    consequuntur voluptatibus quaerat? Ea amet, sed reiciendis quam reprehenderit blanditiis 
                    labore deserunt tempora necessitatibus adipisci, placeat eos, 
                    ex repellat beatae iure consequatur quod distinctio accusantium? Temporibus, amet."
                ],
            ];

            $new_post = [];
            foreach($blog_posts as $post) {
                if($post["slug"] === $slug) {
                    $new_post = $post;
                }
            }

            return view('post', [
                "title" => "single post",
                "post" => $new_post
            ]);
            
        });