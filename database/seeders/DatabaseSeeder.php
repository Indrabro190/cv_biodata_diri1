<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\kontak;

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
            'name' => 'Maulana Indra',
            'email' => 'indra@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'David Syahputra',
            'email' => 'David@gmail.com',
            'password' => bcrypt('54321')
        ]);
        User::create([
            'name' => 'Indra Syahputra',
            'email' => 'jawa@gmail.com',
            'password' => bcrypt('22222')
        ]);
        
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        kontak::factory(20)->create();

        // kontak::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum omnis praesentium ex hic natus ut nulla aliquam. Inventore, amet dolorum!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, alias. Reprehenderit esse sint voluptatem deserunt laborum ipsa. Voluptas, officia odit molestias quam non, beatae aut, dolore rerum fuga voluptatum nihil reiciendis blanditiis nemo deleniti veniam voluptate. Ducimus eos quasi autem, maiores doloremque accusantium illum mollitia neque praesentium reprehenderit repellat odio esse aspernatur veritatis soluta reiciendis, facere id alias dolorum, eligendi quod voluptatum labore! Dicta consectetur, dolorum accusantium quia tenetur ipsa voluptatem sunt deleniti, ut eveniet rem hic, commodi consequuntur eos! Et veniam natus accusamus adipisci animi labore provident perspiciatis aliquam aliquid error mollitia, quod tenetur repellat saepe fuga omnis voluptatibus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // kontak::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum omnis praesentium ex hic natus ut nulla aliquam. Inventore, amet dolorum!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, alias. Reprehenderit esse sint voluptatem deserunt laborum ipsa. Voluptas, officia odit molestias quam non, beatae aut, dolore rerum fuga voluptatum nihil reiciendis blanditiis nemo deleniti veniam voluptate. Ducimus eos quasi autem, maiores doloremque accusantium illum mollitia neque praesentium reprehenderit repellat odio esse aspernatur veritatis soluta reiciendis, facere id alias dolorum, eligendi quod voluptatum labore! Dicta consectetur, dolorum accusantium quia tenetur ipsa voluptatem sunt deleniti, ut eveniet rem hic, commodi consequuntur eos! Et veniam natus accusamus adipisci animi labore provident perspiciatis aliquam aliquid error mollitia, quod tenetur repellat saepe fuga omnis voluptatibus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // kontak::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum omnis praesentium ex hic natus ut nulla aliquam. Inventore, amet dolorum!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, alias. Reprehenderit esse sint voluptatem deserunt laborum ipsa. Voluptas, officia odit molestias quam non, beatae aut, dolore rerum fuga voluptatum nihil reiciendis blanditiis nemo deleniti veniam voluptate. Ducimus eos quasi autem, maiores doloremque accusantium illum mollitia neque praesentium reprehenderit repellat odio esse aspernatur veritatis soluta reiciendis, facere id alias dolorum, eligendi quod voluptatum labore! Dicta consectetur, dolorum accusantium quia tenetur ipsa voluptatem sunt deleniti, ut eveniet rem hic, commodi consequuntur eos! Et veniam natus accusamus adipisci animi labore provident perspiciatis aliquam aliquid error mollitia, quod tenetur repellat saepe fuga omnis voluptatibus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // kontak::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum omnis praesentium ex hic natus ut nulla aliquam. Inventore, amet dolorum!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, alias. Reprehenderit esse sint voluptatem deserunt laborum ipsa. Voluptas, officia odit molestias quam non, beatae aut, dolore rerum fuga voluptatum nihil reiciendis blanditiis nemo deleniti veniam voluptate. Ducimus eos quasi autem, maiores doloremque accusantium illum mollitia neque praesentium reprehenderit repellat odio esse aspernatur veritatis soluta reiciendis, facere id alias dolorum, eligendi quod voluptatum labore! Dicta consectetur, dolorum accusantium quia tenetur ipsa voluptatem sunt deleniti, ut eveniet rem hic, commodi consequuntur eos! Et veniam natus accusamus adipisci animi labore provident perspiciatis aliquam aliquid error mollitia, quod tenetur repellat saepe fuga omnis voluptatibus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
