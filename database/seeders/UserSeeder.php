<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name' => 'Emerson', 'email' => 'emerson@devsquad.com']);

        User::factory(10)->sequence(fn ($sequence) => ['email' => 'user'.$sequence->index.'@devsquad.com'])->create();
    }
}
