<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  use WithoutModelEvents;

  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    User::factory()->create([
      'name' => 'admin',
      'email' => 'admin@gmail.com',
      'password' => 'password123',
      'role' => 'admin'
    ]);

    User::factory()->create([
      'name' => 'amri',
      'email' => 'amri@gmail.com',
      'password' => 'password123',
      'role' => 'user'
    ]);
  }
}
