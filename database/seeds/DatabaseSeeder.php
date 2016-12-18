<?php

use Illuminate\Database\Seeder;

use App\Models\Adherent;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Adherent::create([
        'titre' => 'Monsieur',
        'name' => 'vaneme',
        'first_name' => 'aymeric',
        'email' => 'admin@admin.com',
        'phone' => '0668810704',
        'hidden_phone' => true,
        'email_subscription' => true,
        'subscribed' => true
      ]);

      User::create([
          'name' => 'admin',
          'email' =>  'admin@admin.com',
          'password' =>  bcrypt('azerty'),
          'admin' =>  true,
          'adherent_id' => 1
      ]);
    }
}
