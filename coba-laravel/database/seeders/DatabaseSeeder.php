<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Aldira Givari',
            'username' => 'aldiragvr',
            'email' => 'aldiragvr07@gmail.com',
            'password' => bcrypt('masuk')
        ]);
        // User::create([
        //     'name' => 'Bella Nurullita',
        //     'email' => 'bellanurullita@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',

        ]);
        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design',

        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cumque quaerat magni ab nemo deleniti sit beatae atque perferendis, repudiandae, porro sequi possimus voluptates pariatur iusto sint fuga quasi ipsum maiores quo eum odit assumenda alias? Explicabo minima et dicta.</p><p> Incidunt nam, vitae consequatur consectetur fugit dolore! Delectus soluta ad pariatur dolore, ab culpa eum libero? Sapiente itaque vero dolores quidem nemo quasi molestiae expedita ea asperiores cupiditate corrupti quae saepe quas dolorum deleniti velit,</p><p> tempora animi error possimus sed doloremque nobis provident? Non fugit ab quod at ipsa, quisquam atque excepturi, odio ad qui, eaque iste error accusamus esse voluptatem. Perspiciatis est cumque rem a animi libero iste tenetur! Unde iusto molestias provident, voluptatem laborum nobis accusamus veniam exercitationem, ex doloribus mollitia accusantium, quam enim. Voluptatem provident rem obcaecati voluptas omnis blanditiis quae perferendis nulla inventore eaque, maiores culpa aspernatur dolorum voluptates mollitia nisi non. Illum quod eveniet ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cumque quaerat magni ab nemo deleniti sit beatae atque perferendis, repudiandae, porro sequi possimus voluptates pariatur iusto sint fuga quasi ipsum maiores quo eum odit assumenda alias? Explicabo minima et dicta.</p><p> Incidunt nam, vitae consequatur consectetur fugit dolore! Delectus soluta ad pariatur dolore, ab culpa eum libero? Sapiente itaque vero dolores quidem nemo quasi molestiae expedita ea asperiores cupiditate corrupti quae saepe quas dolorum deleniti velit,</p><p> tempora animi error possimus sed doloremque nobis provident? Non fugit ab quod at ipsa, quisquam atque excepturi, odio ad qui, eaque iste error accusamus esse voluptatem. Perspiciatis est cumque rem a animi libero iste tenetur! Unde iusto molestias provident, voluptatem laborum nobis accusamus veniam exercitationem, ex doloribus mollitia accusantium, quam enim. Voluptatem provident rem obcaecati voluptas omnis blanditiis quae perferendis nulla inventore eaque, maiores culpa aspernatur dolorum voluptates mollitia nisi non. Illum quod eveniet ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cumque quaerat magni ab nemo deleniti sit beatae atque perferendis, repudiandae, porro sequi possimus voluptates pariatur iusto sint fuga quasi ipsum maiores quo eum odit assumenda alias? Explicabo minima et dicta.</p><p> Incidunt nam, vitae consequatur consectetur fugit dolore! Delectus soluta ad pariatur dolore, ab culpa eum libero? Sapiente itaque vero dolores quidem nemo quasi molestiae expedita ea asperiores cupiditate corrupti quae saepe quas dolorum deleniti velit,</p><p> tempora animi error possimus sed doloremque nobis provident? Non fugit ab quod at ipsa, quisquam atque excepturi, odio ad qui, eaque iste error accusamus esse voluptatem. Perspiciatis est cumque rem a animi libero iste tenetur! Unde iusto molestias provident, voluptatem laborum nobis accusamus veniam exercitationem, ex doloribus mollitia accusantium, quam enim. Voluptatem provident rem obcaecati voluptas omnis blanditiis quae perferendis nulla inventore eaque, maiores culpa aspernatur dolorum voluptates mollitia nisi non. Illum quod eveniet ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cumque quaerat magni ab nemo deleniti sit beatae atque perferendis, repudiandae, porro sequi possimus voluptates pariatur iusto sint fuga quasi ipsum maiores quo eum odit assumenda alias? Explicabo minima et dicta.</p><p> Incidunt nam, vitae consequatur consectetur fugit dolore! Delectus soluta ad pariatur dolore, ab culpa eum libero? Sapiente itaque vero dolores quidem nemo quasi molestiae expedita ea asperiores cupiditate corrupti quae saepe quas dolorum deleniti velit,</p><p> tempora animi error possimus sed doloremque nobis provident? Non fugit ab quod at ipsa, quisquam atque excepturi, odio ad qui, eaque iste error accusamus esse voluptatem. Perspiciatis est cumque rem a animi libero iste tenetur! Unde iusto molestias provident, voluptatem laborum nobis accusamus veniam exercitationem, ex doloribus mollitia accusantium, quam enim. Voluptatem provident rem obcaecati voluptas omnis blanditiis quae perferendis nulla inventore eaque, maiores culpa aspernatur dolorum voluptates mollitia nisi non. Illum quod eveniet ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
    
}
