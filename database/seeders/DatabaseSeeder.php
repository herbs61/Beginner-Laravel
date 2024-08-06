<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Listing;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Listing::factory(6)->create();

        
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, Ma',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam eaque illo corporis dolor ipsum dolores, tempora voluptatem voluptatum, voluptates, veritatis quisquam aliquid iusto asperiores. Laboriosam voluptate nisi explicabo qui nulla. Ad hic officia tempore minus nesciunt ducimus nostrum, necessitatibus facere voluptate commodi, magnam consequuntur quae perspiciatis a dolorum, aspernatur odio.'
        // ]);
        // Listing::create([
        //     'title' => 'Django Senior Developer',
        //     'tags' => 'Django, javascript',
        //     'company' => 'Gitplus',
        //     'location' => 'Accra, Circle',
        //     'email' => 'gitplus@email.com',
        //     'website' => 'https://www.gitplus.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam eaque illo corporis dolor ipsum dolores, tempora voluptatem voluptatum, voluptates, veritatis quisquam aliquid iusto asperiores. Laboriosam voluptate nisi explicabo qui nulla. Ad hic officia tempore minus nesciunt ducimus nostrum, necessitatibus facere voluptate commodi, magnam consequuntur quae perspiciatis a dolorum, aspernatur odio.'
        // ]);
    }
}

