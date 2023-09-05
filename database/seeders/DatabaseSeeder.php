<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Fadli Darusalam',
            'username' => 'fadli d',
            'email' => 'fadli@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Firmino',
        //     'email' => 'firmino@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem Ipsum pertama...',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, rerum porro esse sunt sequi nostrum neque ea itaque soluta doloremque non libero corrupti earum? Magni maxime cupiditate similique ad corporis accusantium, nostrum doloribus dolorum dicta ea repudiandae nulla, vitae esse vel minus, vero voluptates. Corrupti fugit animi similique laudantium expedita nulla nihil pariatur voluptas, asperiores iure. Commodi labore perferendis asperiores, accusamus ducimus esse veniam soluta modi omnis iusto. Porro velit asperiores temporibus pariatur vitae id ad, aut hic repudiandae.</p><p> Quas, consectetur! Voluptatibus, inventore! Quae esse harum aliquid delectus, omnis maxime animi architecto, doloribus obcaecati quia maiores, eos facere incidunt nihil assumenda sed quis exercitationem hic dicta laborum reprehenderit labore. Aspernatur, porro laborum sit iusto quam rem quo dolore at fuga, doloribus neque nesciunt deserunt ducimus repudiandae perspiciatis ea maxime laudantium. Voluptate neque quibusdam totam ducimus sint incidunt, odit optio suscipit, doloremque tenetur dicta fugiat ex, error voluptas perspiciatis. Aperiam saepe fugiat debitis at maiores error sunt odio a, laudantium iste eos qui culpa deserunt dolor inventore earum blanditiis neque soluta minus quae ad quisquam rem quis optio! Laborum, sed ullam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem Ipsum kedua...',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, rerum porro esse sunt sequi nostrum neque ea itaque soluta doloremque non libero corrupti earum? Magni maxime cupiditate similique ad corporis accusantium, nostrum doloribus dolorum dicta ea repudiandae nulla, vitae esse vel minus, vero voluptates. Corrupti fugit animi similique laudantium expedita nulla nihil pariatur voluptas, asperiores iure. Commodi labore perferendis asperiores, accusamus ducimus esse veniam soluta modi omnis iusto. Porro velit asperiores temporibus pariatur vitae id ad, aut hic repudiandae.</p><p> Quas, consectetur! Voluptatibus, inventore! Quae esse harum aliquid delectus, omnis maxime animi architecto, doloribus obcaecati quia maiores, eos facere incidunt nihil assumenda sed quis exercitationem hic dicta laborum reprehenderit labore. Aspernatur, porro laborum sit iusto quam rem quo dolore at fuga, doloribus neque nesciunt deserunt ducimus repudiandae perspiciatis ea maxime laudantium. Voluptate neque quibusdam totam ducimus sint incidunt, odit optio suscipit, doloremque tenetur dicta fugiat ex, error voluptas perspiciatis. Aperiam saepe fugiat debitis at maiores error sunt odio a, laudantium iste eos qui culpa deserunt dolor inventore earum blanditiis neque soluta minus quae ad quisquam rem quis optio! Laborum, sed ullam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem Ipsum ketiga...',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, rerum porro esse sunt sequi nostrum neque ea itaque soluta doloremque non libero corrupti earum? Magni maxime cupiditate similique ad corporis accusantium, nostrum doloribus dolorum dicta ea repudiandae nulla, vitae esse vel minus, vero voluptates. Corrupti fugit animi similique laudantium expedita nulla nihil pariatur voluptas, asperiores iure. Commodi labore perferendis asperiores, accusamus ducimus esse veniam soluta modi omnis iusto. Porro velit asperiores temporibus pariatur vitae id ad, aut hic repudiandae.</p><p> Quas, consectetur! Voluptatibus, inventore! Quae esse harum aliquid delectus, omnis maxime animi architecto, doloribus obcaecati quia maiores, eos facere incidunt nihil assumenda sed quis exercitationem hic dicta laborum reprehenderit labore. Aspernatur, porro laborum sit iusto quam rem quo dolore at fuga, doloribus neque nesciunt deserunt ducimus repudiandae perspiciatis ea maxime laudantium. Voluptate neque quibusdam totam ducimus sint incidunt, odit optio suscipit, doloremque tenetur dicta fugiat ex, error voluptas perspiciatis. Aperiam saepe fugiat debitis at maiores error sunt odio a, laudantium iste eos qui culpa deserunt dolor inventore earum blanditiis neque soluta minus quae ad quisquam rem quis optio! Laborum, sed ullam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem Ipsum keempat...',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, rerum porro esse sunt sequi nostrum neque ea itaque soluta doloremque non libero corrupti earum? Magni maxime cupiditate similique ad corporis accusantium, nostrum doloribus dolorum dicta ea repudiandae nulla, vitae esse vel minus, vero voluptates. Corrupti fugit animi similique laudantium expedita nulla nihil pariatur voluptas, asperiores iure. Commodi labore perferendis asperiores, accusamus ducimus esse veniam soluta modi omnis iusto. Porro velit asperiores temporibus pariatur vitae id ad, aut hic repudiandae.</p><p> Quas, consectetur! Voluptatibus, inventore! Quae esse harum aliquid delectus, omnis maxime animi architecto, doloribus obcaecati quia maiores, eos facere incidunt nihil assumenda sed quis exercitationem hic dicta laborum reprehenderit labore. Aspernatur, porro laborum sit iusto quam rem quo dolore at fuga, doloribus neque nesciunt deserunt ducimus repudiandae perspiciatis ea maxime laudantium. Voluptate neque quibusdam totam ducimus sint incidunt, odit optio suscipit, doloremque tenetur dicta fugiat ex, error voluptas perspiciatis. Aperiam saepe fugiat debitis at maiores error sunt odio a, laudantium iste eos qui culpa deserunt dolor inventore earum blanditiis neque soluta minus quae ad quisquam rem quis optio! Laborum, sed ullam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
