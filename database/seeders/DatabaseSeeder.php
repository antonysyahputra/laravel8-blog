<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Antony',
            'email' => 'anto@gmail.com',
            'password' => bcrypt('123456')
        ]);
       
        User::create([
            'name' => 'Nurita',
            'email' => 'nuri@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'exerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quod possimus accusantium non, ex quia culpa consectetur quisquam iste recusandae ea reprehenderit alias provident',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quod possimus accusantium non, ex quia culpa consectetur quisquam iste recusandae ea reprehenderit alias provident, natus fugit adipisci libero sequi sit nihil enim maiores debitis eaque rem. Eum itaque commodi corporis quisquam nisi, cumque architecto animi laborum, veritatis, deserunt ad a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem aperiam, delectus neque, in ea aliquam magnam tenetur optio expedita odio illum mollitia hic itaque vel ullam dolores quas. Fugit consequatur iste architecto? Quasi possimus iure nobis facere, quod porro dolores.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At fuga atque praesentium mollitia nobis, ut earum, aperiam incidunt in rem officiis fugiat repudiandae blanditiis similique distinctio saepe asperiores dignissimos eligendi optio ipsum expedita ullam? Pariatur cum cumque cupiditate quidem, neque quis eaque maiores voluptas est fugiat, maxime laboriosam architecto suscipit repellat perspiciatis. Nesciunt illum consequuntur magni non nobis aliquid vero. Explicabo nemo pariatur omnis eum adipisci voluptatem et, voluptatum, maiores tempora assumenda aspernatur animi consequuntur id accusantium libero porro provident.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'exerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quod possimus accusantium non, ex quia culpa consectetur quisquam iste recusandae ea reprehenderit alias provident',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quod possimus accusantium non, ex quia culpa consectetur quisquam iste recusandae ea reprehenderit alias provident, natus fugit adipisci libero sequi sit nihil enim maiores debitis eaque rem. Eum itaque commodi corporis quisquam nisi, cumque architecto animi laborum, veritatis, deserunt ad a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem aperiam, delectus neque, in ea aliquam magnam tenetur optio expedita odio illum mollitia hic itaque vel ullam dolores quas. Fugit consequatur iste architecto? Quasi possimus iure nobis facere, quod porro dolores.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At fuga atque praesentium mollitia nobis, ut earum, aperiam incidunt in rem officiis fugiat repudiandae blanditiis similique distinctio saepe asperiores dignissimos eligendi optio ipsum expedita ullam? Pariatur cum cumque cupiditate quidem, neque quis eaque maiores voluptas est fugiat, maxime laboriosam architecto suscipit repellat perspiciatis. Nesciunt illum consequuntur magni non nobis aliquid vero. Explicabo nemo pariatur omnis eum adipisci voluptatem et, voluptatum, maiores tempora assumenda aspernatur animi consequuntur id accusantium libero porro provident.</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'exerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quod possimus accusantium non, ex quia culpa consectetur quisquam iste recusandae ea reprehenderit alias provident',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur quod possimus accusantium non, ex quia culpa consectetur quisquam iste recusandae ea reprehenderit alias provident, natus fugit adipisci libero sequi sit nihil enim maiores debitis eaque rem. Eum itaque commodi corporis quisquam nisi, cumque architecto animi laborum, veritatis, deserunt ad a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem aperiam, delectus neque, in ea aliquam magnam tenetur optio expedita odio illum mollitia hic itaque vel ullam dolores quas. Fugit consequatur iste architecto? Quasi possimus iure nobis facere, quod porro dolores.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At fuga atque praesentium mollitia nobis, ut earum, aperiam incidunt in rem officiis fugiat repudiandae blanditiis similique distinctio saepe asperiores dignissimos eligendi optio ipsum expedita ullam? Pariatur cum cumque cupiditate quidem, neque quis eaque maiores voluptas est fugiat, maxime laboriosam architecto suscipit repellat perspiciatis. Nesciunt illum consequuntur magni non nobis aliquid vero. Explicabo nemo pariatur omnis eum adipisci voluptatem et, voluptatum, maiores tempora assumenda aspernatur animi consequuntur id accusantium libero porro provident.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
