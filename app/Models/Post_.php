<?php

namespace App\Models;


class Post
{
    private static $blog_posts =
    [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Deka',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo provident inventore, obcaecati sunt itaque maxime suscipit quas saepe recusandae, culpa quibusdam excepturi nisi velit natus maiores illum quae laudantium beatae sit. Iste et voluptas inventore repellendus dolorem laudantium soluta quo illum itaque sint illo id, neque ea placeat! Dolor, soluta corporis! Consequuntur quae minima inventore, dolores dolorum natus ipsum facilis vel libero, impedit doloremque. Reprehenderit assumenda ipsam numquam voluptatum deserunt? Sunt nesciunt fugit ab accusamus, est neque debitis ullam non?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Conglay',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde architecto, veniam facilis tempora aliquid accusantium debitis nesciunt soluta laborum eos voluptatum obcaecati temporibus facere ea labore quidem expedita id aliquam quae enim fugit magnam quibusdam quisquam commodi. Dolor illum voluptatum dicta deserunt eos beatae fugit fuga! Minus voluptates officia harum odit dicta quae, voluptatum ipsum quis! Blanditiis quaerat, explicabo voluptate est animi molestiae itaque pariatur, consectetur possimus dicta hic earum. Quod quo nihil numquam, mollitia aliquam voluptatum distinctio est voluptates, minus dolor illo voluptate repudiandae! Repellat possimus nisi dolorem aut. Mollitia accusamus sint praesentium repellendus id doloremque neque iure necessitatibus.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}