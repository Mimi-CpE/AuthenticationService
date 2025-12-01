<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $be_dev = Role::create([
            'name' => 'Back-End Developer',
            'description' => 'Tambay lang sa Web',
            'slug' => 'it.be'
        ]);

        User::create([
            'name' => 'Jeremy S. Santa Cruz',
            'email' => 'jeremy.santacruz@technayon.com',
            'password' => bcrypt('secret'),
            'role_id' => $be_dev->id
        ]);
    }
}
