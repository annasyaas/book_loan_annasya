<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Buku;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'  => 'annasya',
        //     'email' => 'annasya@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'  => 'Programming',
            'slug'  => 'programming',
        ]);
        
        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal',
        ]);

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming',
        ]);

        Buku::factory(10)->create();

        // Buku::create([
        //     'judul' => 'Judul Buku Pertama',
        //     'slug'  => 'judul-pertama',
        //     'desc'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ad? Veniam blanditiis doloremque soluta cum minima atque aut vitae ex esse fuga? Quidem voluptate quaerat ipsam molestias tenetur, magnam minus eos voluptatem ab eum optio harum facilis dolorum! Quis, amet.',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);

        // Buku::create([
        //     'judul' => 'Judul Buku Kedua',
        //     'slug'  => 'judul-kedua',
        //     'desc'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ad? Veniam blanditiis doloremque soluta cum minima atque aut vitae ex esse fuga? Quidem voluptate quaerat ipsam molestias tenetur, magnam minus eos voluptatem ab eum optio harum facilis dolorum! Quis, amet.',
        //     'category_id'   => 2,
        //     'user_id'       => 1 
        // ]);

        // Buku::create([
        //     'judul' => 'Judul Buku Ketiga',
        //     'slug'  => 'judul-ketiga',
        //     'desc'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ad? Veniam blanditiis doloremque soluta cum minima atque aut vitae ex esse fuga? Quidem voluptate quaerat ipsam molestias tenetur, magnam minus eos voluptatem ab eum optio harum facilis dolorum! Quis, amet.',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);
    }
}
