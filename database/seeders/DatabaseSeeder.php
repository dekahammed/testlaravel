<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
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
        // \App\Models\User::factory(10)->create();
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Deka',
        //     'email' => 'deka@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Conglay',
        //     'email' => 'conglay@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        /* Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem.',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem. Commodi natus id delectus quasi laborum incidunt fugiat ipsum quis sed facere qui quo quibusdam, tempore, assumenda, tempora atque veritatis iure ea provident eum autem quae ptio? Doloremque minima eum aliquam similique placeat tenetur nesciunt earum inventore nulla expedita hic non ipsa magnam, incidunt consectetur usto tempora excepturi. </p><p>nemo eveniet consequuntur cupiditate, est et. Vitae incidunt consectetur ipsum voluptatum possimus animi minima    quibusdam quod, aspernatur quasi, enim laudantium consequatur nesciunt excepturi commodi eligendi a fugiat. Aspernatur cupiditate tempore expedita illo nemo voluptatibus earum aliquid sit! Qui maiores laborum facere possimus! Impedit eligendi alias unde iure facere rem commodi eritatis. Quis eaque voluptas voluptatum error provident expedita distinctio. Repellendus, omnis facere, iure exercitationem blanditiis oluptatibus quisquam periam id, incidunt praesentium ratione maiores similique minima ducimus animi.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem.',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem. Commodi natus id delectus quasi laborum incidunt fugiat ipsum quis sed facere qui quo quibusdam, tempore, assumenda, tempora atque veritatis iure ea provident eum autem quae ptio? Doloremque minima eum aliquam similique placeat tenetur nesciunt earum inventore nulla expedita hic non ipsa magnam, incidunt consectetur usto tempora excepturi. </p><p>nemo eveniet consequuntur cupiditate, est et. Vitae incidunt consectetur ipsum voluptatum possimus animi minima    quibusdam quod, aspernatur quasi, enim laudantium consequatur nesciunt excepturi commodi eligendi a fugiat. Aspernatur cupiditate tempore expedita illo nemo voluptatibus earum aliquid sit! Qui maiores laborum facere possimus! Impedit eligendi alias unde iure facere rem commodi eritatis. Quis eaque voluptas voluptatum error provident expedita distinctio. Repellendus, omnis facere, iure exercitationem blanditiis oluptatibus quisquam periam id, incidunt praesentium ratione maiores similique minima ducimus animi.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem.',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem. Commodi natus id delectus quasi laborum incidunt fugiat ipsum quis sed facere qui quo quibusdam, tempore, assumenda, tempora atque veritatis iure ea provident eum autem quae ptio? Doloremque minima eum aliquam similique placeat tenetur nesciunt earum inventore nulla expedita hic non ipsa magnam, incidunt consectetur usto tempora excepturi. </p><p>nemo eveniet consequuntur cupiditate, est et. Vitae incidunt consectetur ipsum voluptatum possimus animi minima    quibusdam quod, aspernatur quasi, enim laudantium consequatur nesciunt excepturi commodi eligendi a fugiat. Aspernatur cupiditate tempore expedita illo nemo voluptatibus earum aliquid sit! Qui maiores laborum facere possimus! Impedit eligendi alias unde iure facere rem commodi eritatis. Quis eaque voluptas voluptatum error provident expedita distinctio. Repellendus, omnis facere, iure exercitationem blanditiis oluptatibus quisquam periam id, incidunt praesentium ratione maiores similique minima ducimus animi.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem.',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur cupiditate placeat quos doloremque libero blanditiis, unde repellendus, distinctio officiis, hic beatae perferendis minus ea fugit debitis repellat omnis voluptatem. Commodi natus id delectus quasi laborum incidunt fugiat ipsum quis sed facere qui quo quibusdam, tempore, assumenda, tempora atque veritatis iure ea provident eum autem quae ptio? Doloremque minima eum aliquam similique placeat tenetur nesciunt earum inventore nulla expedita hic non ipsa magnam, incidunt consectetur usto tempora excepturi. </p><p>nemo eveniet consequuntur cupiditate, est et. Vitae incidunt consectetur ipsum voluptatum possimus animi minima    quibusdam quod, aspernatur quasi, enim laudantium consequatur nesciunt excepturi commodi eligendi a fugiat. Aspernatur cupiditate tempore expedita illo nemo voluptatibus earum aliquid sit! Qui maiores laborum facere possimus! Impedit eligendi alias unde iure facere rem commodi eritatis. Quis eaque voluptas voluptatum error provident expedita distinctio. Repellendus, omnis facere, iure exercitationem blanditiis oluptatibus quisquam periam id, incidunt praesentium ratione maiores similique minima ducimus animi.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]); */
    }
}