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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Nadia Nur Annisa',
            'email' => 'nadia.nuan39@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User::create([
            'name' => 'Kendall Jenner',
            'email' => 'kendall.jenner@gmail.com',
            'password' => bcrypt('12345')
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
            'tittle' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi quisquam deleniti asperiores dignissimos dicta, distinctio rerum nemo molestiae voluptatem itaque quam libero reiciendis cumque voluptas quibusdam eos sunt incidunt esse nulla sequi explicabo qui voluptatum id. Earum doloribus facere repellendus, possimus voluptatibus optio pariatur libero ipsum deserunt! Aperiam iure repellendus minima nisi laborum doloribus, in dolorum asperiores quos, animi corporis adipisci velit accusamus voluptas repudiandae unde delectus, similique est quod quibusdam obcaecati quidem cum aliquid aliquam. In quidem vero sed minima, suscipit quas quae voluptatem consequatur reprehenderit excepturi. Necessitatibus voluptates error dicta temporibus non aspernatur odio aliquid vitae tempora!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi quisquam deleniti asperiores dignissimos dicta, distinctio rerum nemo molestiae voluptatem itaque quam libero reiciendis cumque voluptas quibusdam eos sunt incidunt esse nulla sequi explicabo qui voluptatum id. Earum doloribus facere repellendus, possimus voluptatibus optio pariatur libero ipsum deserunt! Aperiam iure repellendus minima nisi laborum doloribus, in dolorum asperiores quos, animi corporis adipisci velit accusamus voluptas repudiandae unde delectus, similique est quod quibusdam obcaecati quidem cum aliquid aliquam. In quidem vero sed minima, suscipit quas quae voluptatem consequatur reprehenderit excepturi. Necessitatibus voluptates error dicta temporibus non aspernatur odio aliquid vitae tempora!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi quisquam deleniti asperiores dignissimos dicta, distinctio rerum nemo molestiae voluptatem itaque quam libero reiciendis cumque voluptas quibusdam eos sunt incidunt esse nulla sequi explicabo qui voluptatum id. Earum doloribus facere repellendus, possimus voluptatibus optio pariatur libero ipsum deserunt! Aperiam iure repellendus minima nisi laborum doloribus, in dolorum asperiores quos, animi corporis adipisci velit accusamus voluptas repudiandae unde delectus, similique est quod quibusdam obcaecati quidem cum aliquid aliquam. In quidem vero sed minima, suscipit quas quae voluptatem consequatur reprehenderit excepturi. Necessitatibus voluptates error dicta temporibus non aspernatur odio aliquid vitae tempora!',
            'category_id' => 2,
            'user_id' => 1
        ]);
        
        Post::create([
            'tittle' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi quisquam deleniti asperiores dignissimos dicta, distinctio rerum nemo molestiae voluptatem itaque quam libero reiciendis cumque voluptas quibusdam eos sunt incidunt esse nulla sequi explicabo qui voluptatum id. Earum doloribus facere repellendus, possimus voluptatibus optio pariatur libero ipsum deserunt! Aperiam iure repellendus minima nisi laborum doloribus, in dolorum asperiores quos, animi corporis adipisci velit accusamus voluptas repudiandae unde delectus, similique est quod quibusdam obcaecati quidem cum aliquid aliquam. In quidem vero sed minima, suscipit quas quae voluptatem consequatur reprehenderit excepturi. Necessitatibus voluptates error dicta temporibus non aspernatur odio aliquid vitae tempora!',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}
