<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::factory()->create([
            'name' => 'Francesco Bagnaia',
            'username' => 'pecco63',
            'email' => 'pecco@gmail.com'
        ]);
        $user2 = User::factory()->create([
            'name' => 'Vale Yellow',
            'username' => 'vr46',
            'email' => 'vr46@gmail.com'
        ]);

        Post::factory(15)->create([
            'user_id' => $user->id
        ]);
        Post::factory(15)->create([
            'user_id' => $user2->id
        ]);
        // Post::create(
        //     [
        //         'title' => 'Lorem ipsum dolor sit amet consectetur',
        //         'price' => 30000,
        //         'seller' => 'user_1',
        //         'location' => 'Surabaya',
        //         'categories' => 'Elektronik',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores quae, in suscipit hic consectetur cum, harum error ad totam omnis eos dolor amet perspiciatis possimus cupiditate! Porro totam deleniti cupiditate. Doloribus impedit veniam voluptatum quasi commodi, dicta recusandae totam aliquid ipsum. Sequi, ipsam nemo non voluptate impedit esse veritatis vitae incidunt blanditiis quam molestiae accusantium asperiores deserunt, facilis voluptates rerum. Debitis molestiae est voluptatibus nostrum inventore expedita similique modi architecto, possimus culpa pariatur unde cumque eveniet id optio neque. Dolorum pariatur autem error quidem velit nobis, sint suscipit iure quo? Iste quis quas distinctio provident iusto quisquam sint quos modi, fugit totam facilis, assumenda quia doloribus quo mollitia odio impedit quidem.',

        //     ],
        // );
        // Post::create(
        //     [
        //         'title' => 'asdasdas Lorem ipsum dolor sit amet consectetur',
        //         'price' => 20000,
        //         'seller' => 'user_1',
        //         'location' => 'Surabaya',
        //         'categories' => 'Elektronik',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores quae, in suscipit hic consectetur cum, harum error ad totam omnis eos dolor amet perspiciatis possimus cupiditate! Porro totam deleniti cupiditate. Doloribus impedit veniam voluptatum quasi commodi, dicta recusandae totam aliquid ipsum. Sequi, ipsam nemo non voluptate impedit esse veritatis vitae incidunt blanditiis quam molestiae accusantium asperiores deserunt, facilis voluptates rerum. Debitis molestiae est voluptatibus nostrum inventore expedita similique modi architecto, possimus culpa pariatur unde cumque eveniet id optio neque. Dolorum pariatur autem error quidem velit nobis, sint suscipit iure quo? Iste quis quas distinctio provident iusto quisquam sint quos modi, fugit totam facilis, assumenda quia doloribus quo mollitia odio impedit quidem.',

        //     ],
        // );
    }
}
