<?php

namespace App\Models;



class Post 
{
 
    private static $blog_posts = [
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

       public static function all()
       {
           return self::$blog_posts;
       }

       public static function find($slug)
       {
            $posts = self::$blog_posts;
            $post = [];
            foreach($posts as $p) {
                if($p["slug"] === $slug) {
                    $post = $p;
                }
       }
       return $post;
    }
}

