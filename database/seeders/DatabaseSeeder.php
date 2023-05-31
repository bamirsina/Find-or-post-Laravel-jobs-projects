<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Developer',
            'email' => 'developer@developer'
        ]);

         Listing::factory(6)->create([
             'user_id' => $user->id
         ]);

//       Listing::create([
//           'title' => 'Laravel Senior Developer',
//           'tags' => 'Laravel, javascript',
//           'company' => 'Acme Corp',
//           'location' => 'Boston Ma',
//           'email' => 'email1@email.com',
//           'website' => 'https://www.acme.com',
//           'description' => 'Hello how are you this is a job for laravel developer'
//       ]);
//
//        Listing::create([
//            'title' => 'Junior Laravel Developer',
//            'tags' => 'Laravel, vue,',
//            'company' => 'Stark industries',
//            'location' => 'New York',
//            'email' => 'email2@email.com',
//            'website' => 'https://www.starkindustries.com',
//            'description' => 'Hello how are you we are a stark industries'
//        ]);
    }
}
