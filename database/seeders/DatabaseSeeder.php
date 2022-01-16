<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //person_types table data
        UserType::create(['user_type_name' => 'Admin']);            #1
        UserType::create(['user_type_name' => 'Developer']);        #2
        UserType::create(['user_type_name' => 'MP level']);            #3
        UserType::create(['user_type_name' => 'Legislative level']);          #4
        UserType::create(['user_type_name' => 'Booth master']);           #5
        UserType::create(['user_type_name' => 'Booth member']);       #6
        UserType::create(['user_type_name' => 'Volunteer']);     #7
        UserType::create(['user_type_name' => 'General members']);          #8

        
        $this->command->info('All User types are added');


        User::create(['user_type_id' => 1,'parent_id' => NULL, 'email' => 'admina@gmail.com']);
        User::create(['user_type_id' => 2,'parent_id' => 1, 'email' => 'developer@gmail.com']);
        User::create(['user_type_id' => 3,'parent_id' => 1, 'email' => 'mp@gmail.com']);
        User::create(['user_type_id' => 4,'parent_id' => 3, 'email' => 'rajchkraborty@gmail.com']);
        User::create(['user_type_id' => 5,'parent_id' => 4, 'email' => 'boothmaster@gmail.com']);
        User::create(['user_type_id' => 6,'parent_id' => 5, 'email' => 'boothmember@gmail.com']);
        User::create(['user_type_id' => 7,'parent_id' => 6, 'email' => 'volunteer@gmail.com']);
        User::create(['user_type_id' => 8,'parent_id' => 7, 'email' => 'xyz@gmail.com']);
        User::create(['user_type_id' => 8,'parent_id' => 7, 'email' => 'abc@gmail.com']);

    }
}