<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'user_id' => 1,
            'user_name' => 'admin',
            'user_passwd' => '12345',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('comments')->insert([
            'comment_id' => 1,
            'comment' => 'this is a comment',
            'user_id'=> 1
        ]);
    }
}
