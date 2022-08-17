<?php

namespace App\Models;

class Buku_
{
    private static $book_posts = [
        [
            'id'    => 1,
            'buku'  => 'judul buku 1',
            'desc'  => 'about buku 1'
        ],
        [
            'id'    => 2,
            'buku'  => 'judul buku 2',
            'desc'  => 'about buku 2'
        ]
    ];

    public static function all()
    {
        return collect(self::$book_posts);
    }

    public static function find($id)
    {
        $books = static::all();

        return $books->firstWhere('id',$id);
    }
}