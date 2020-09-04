<?php

use App\User;
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
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = '$2y$10$Lfg4v0g.WAw5CMXqh7sOcetgXwvfO7hELUTE3ikhmgGaIxRlZjsv2'; // para3349
        $user->role = true;
        $user->save();
    }
}
