<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();
        DB::table('articles')->truncate();
        \App\User::insert([
            [
                'name' => 'John Paul L. Gabule',
                'email' => 'jpgabule@gmail.com',
                'password' => bcrypt('password'),
            ],[
                'name' => 'John doe',
                'email' => 'johndoe@gmail.com',
                'password' => bcrypt('password'),
            ],[
                'name' => 'Jane doe',
                'email' => 'janedoe@gmail.com',
                'password' => bcrypt('password'),
            ],
        ]);
         $this->call(ArticleSeeder::class);
    }
}
