<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

             DB::table('posts')->insert([
            'title' => 'Scotski default line one',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'content' => "Welcome to ScotSki, Scotland's premiere skiing and snowboarding holiday provider. We offer a range of exciting, inclusive and fun packed holidays to the coolest destinations Scotland has to offer.",
        ]);
             DB::table('posts')->insert([
            'title' => 'ScotSki default line two',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'content' => "Whether you are an experienced snowboarder, improving skier or a family looking to have fun in some of the most picturesque and breathtaking mountain ranges in Scotland, ScotSki has something for you.",
        ]);
             DB::table('posts')->insert([
            'title' => 'ScotSki default line three',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'content' => "So browse our site and give us a call to book the experience of a lifetime. We promise you will have the time of your life.",
        ]);
             DB::table('users')->insert([
            'name' => 'Admin',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('Admin'),
            'remember_token' => str_random(10),
        ]);

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
