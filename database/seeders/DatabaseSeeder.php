<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        //     'name' => 'Aldi Riawan',
        //     'email' => 'aldi.riawan@ti.ukdw.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Davina Ade Riawan',
        //     'email' => 'davina.riawan@ti.ukdw.ac.id',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo, recusandae qui nostrum pariatur libero et necessitatibus? Necessitatibus, consequatur expedita. Dolore, vero sequi, assumenda facere nulla officia numquam fugit, facilis dolores distinctio debitis veritatis molestias modi doloribus. Sequi quis debitis odit quidem sunt voluptatem, praesentium illum non modi molestias error ex laboriosam esse, asperiores quam eius blanditiis? Possimus aperiam iusto in non ipsa. Distinctio illum eius eum commodi modi repellat possimus voluptas tempore earum, hic veniam placeat voluptates? Delectus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo, recusandae qui nostrum pariatur libero et necessitatibus? Necessitatibus, consequatur expedita. Dolore, vero sequi, assumenda facere nulla officia numquam fugit, facilis dolores distinctio debitis veritatis molestias modi doloribus. Sequi quis debitis odit quidem sunt voluptatem, praesentium illum non modi molestias error ex laboriosam esse, asperiores quam eius blanditiis? Possimus aperiam iusto in non ipsa. Distinctio illum eius eum commodi modi repellat possimus voluptas tempore earum, hic veniam placeat voluptates? Delectus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo, recusandae qui nostrum pariatur libero et necessitatibus? Necessitatibus, consequatur expedita. Dolore, vero sequi, assumenda facere nulla officia numquam fugit, facilis dolores distinctio debitis veritatis molestias modi doloribus. Sequi quis debitis odit quidem sunt voluptatem, praesentium illum non modi molestias error ex laboriosam esse, asperiores quam eius blanditiis? Possimus aperiam iusto in non ipsa. Distinctio illum eius eum commodi modi repellat possimus voluptas tempore earum, hic veniam placeat voluptates? Delectus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, esse et. Magnam itaque officia neque similique consequuntur facere cum accusamus ratione obcaecati at corporis alias possimus illum voluptatibus incidunt eos explicabo, recusandae qui nostrum pariatur libero et necessitatibus? Necessitatibus, consequatur expedita. Dolore, vero sequi, assumenda facere nulla officia numquam fugit, facilis dolores distinctio debitis veritatis molestias modi doloribus. Sequi quis debitis odit quidem sunt voluptatem, praesentium illum non modi molestias error ex laboriosam esse, asperiores quam eius blanditiis? Possimus aperiam iusto in non ipsa. Distinctio illum eius eum commodi modi repellat possimus voluptas tempore earum, hic veniam placeat voluptates? Delectus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
