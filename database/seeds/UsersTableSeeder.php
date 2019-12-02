<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' =>'Reinaldo',
            'email' => 'reinaldo@reinaldo.com',
            'password' => Hash::make('12345')
        ]);

        factory(User::class, 4)->create();
    }
}
