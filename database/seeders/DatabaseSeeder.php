<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::factory(3)->create();
        User::create([
            'name' => 'Harry Kurniawan',
            'username' => 'kurniawanharry',
            'email' => 'harrykurniawnmf@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Kurniawan Harry',
        //     'email' => 'kurniawanharry@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A magni necessitatibus doloremque accusantium saepe commodi! Ipsa ullam incidunt ea asperiores laboriosam libero a sapiente, explicabo quos, voluptatum, sunt neque esse.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A magni necessitatibus doloremque accusantium saepe commodi! Ipsa ullam incidunt ea asperiores laboriosam libero a sapiente, explicabo quos, voluptatum, sunt neque esse.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A magni necessitatibus doloremque accusantium saepe commodi! Ipsa ullam incidunt ea asperiores laboriosam libero a sapiente, explicabo quos, voluptatum, sunt neque esse.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
