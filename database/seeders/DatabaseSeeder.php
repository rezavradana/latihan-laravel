<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Reza Pradana',
            'username' => 'rezapradana',
            'email' => 'rezapradana472@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Pason Pount',
        //     'email' => 'pasonpount@gmail.com',
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, laudantium. Ea reiciendis consequatur fuga adipisci veniam dicta, obcaecati accusamus illum quisquam necessitatibus nemo voluptatem numquam. Temporibus ipsum numquam perferendis voluptatibus sint fugit adipisci suscipit ex iste veniam, atque tempora dolore laudantium quaerat molestiae ullam delectus rem in vero laboriosam dicta qui minus? Dolorum architecto suscipit nobis fugit maxime totam voluptatem. Quis excepturi eos rerum voluptatibus, dolores asperiores eveniet, iste quidem quia quos, a perferendis perspiciatis. Quasi fuga tempore et, excepturi beatae quam tempora consectetur illo suscipit? Repudiandae aut illum tempora! Eveniet, suscipit quis assumenda pariatur architecto natus velit dolore ipsa.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua', 
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, laudantium. Ea reiciendis consequatur fuga adipisci veniam dicta, obcaecati accusamus illum quisquam necessitatibus nemo voluptatem numquam. Temporibus ipsum numquam perferendis voluptatibus sint fugit adipisci suscipit ex iste veniam, atque tempora dolore laudantium quaerat molestiae ullam delectus rem in vero laboriosam dicta qui minus? Dolorum architecto suscipit nobis fugit maxime totam voluptatem. Quis excepturi eos rerum voluptatibus, dolores asperiores eveniet, iste quidem quia quos, a perferendis perspiciatis. Quasi fuga tempore et, excepturi beatae quam tempora consectetur illo suscipit? Repudiandae aut illum tempora! Eveniet, suscipit quis assumenda pariatur architecto natus velit dolore ipsa.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga', 
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, laudantium. Ea reiciendis consequatur fuga adipisci veniam dicta, obcaecati accusamus illum quisquam necessitatibus nemo voluptatem numquam. Temporibus ipsum numquam perferendis voluptatibus sint fugit adipisci suscipit ex iste veniam, atque tempora dolore laudantium quaerat molestiae ullam delectus rem in vero laboriosam dicta qui minus? Dolorum architecto suscipit nobis fugit maxime totam voluptatem. Quis excepturi eos rerum voluptatibus, dolores asperiores eveniet, iste quidem quia quos, a perferendis perspiciatis. Quasi fuga tempore et, excepturi beatae quam tempora consectetur illo suscipit? Repudiandae aut illum tempora! Eveniet, suscipit quis assumenda pariatur architecto natus velit dolore ipsa.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat', 
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, laudantium. Ea reiciendis consequatur fuga adipisci veniam dicta, obcaecati accusamus illum quisquam necessitatibus nemo voluptatem numquam. Temporibus ipsum numquam perferendis voluptatibus sint fugit adipisci suscipit ex iste veniam, atque tempora dolore laudantium quaerat molestiae ullam delectus rem in vero laboriosam dicta qui minus? Dolorum architecto suscipit nobis fugit maxime totam voluptatem. Quis excepturi eos rerum voluptatibus, dolores asperiores eveniet, iste quidem quia quos, a perferendis perspiciatis. Quasi fuga tempore et, excepturi beatae quam tempora consectetur illo suscipit? Repudiandae aut illum tempora! Eveniet, suscipit quis assumenda pariatur architecto natus velit dolore ipsa.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    } 
}   
