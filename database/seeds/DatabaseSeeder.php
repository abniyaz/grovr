<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Plants;
use App\Points;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        // user table seed 
        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => '1',
                'name' => 'Madin',
                'password' => Hash::make('test'),
                'lat' => '23.343434',
                'logi' => '123.343434',
                'team' => 'Green',
                'avator' => 'red',
                'desc' => 'Team leader',
            ),
            1 =>
            array(
                'id' => '2',
                'name' => 'Mai',
                'password' => Hash::make('test'),
                'lat' => '23.343434',
                'logi' => '123.343434',
                'team' => 'Red',
                'avator' => 'red',
                'desc' => 'Team member',
            ),
            2 =>
            array(
                'id' => '3',
                'name' => 'Fathih',
                'password' => Hash::make('test'),
                'lat' => '23.343434',
                'logi' => '123.343434',
                'team' => 'Red',
                'avator' => 'red',
                'desc' => 'Team member',
            ),
            3 =>
            array(
                'id' => '4',
                'name' => 'Niyaz',
                'password' => Hash::make('test'),
                'lat' => '23.343434',
                'logi' => '123.343434',
                'team' => 'Red',
                'avator' => 'red',
                'desc' => 'Team member',
            ),
        ));

        //plants table seed 
        DB::table('plants')->insert(array(
            0 =>
            array(
                'id' => '1',
                'name' => 'Spider',
                'imgtitle' => 'spider.png',
                'temp' => '9',
                'speed' => '4',
                'resil' => '5',
                'prof' => '2',
            ),
            1 =>
            array(
                'id' => '2',
                'name' => 'Aloe',
                'imgtitle' => 'aloe.png',
                'temp' => '8',
                'speed' => '3',
                'resil' => '5',
                'prof' => '4',
            ),
            2 =>
            array(
                'id' => '3',
                'name' => 'Reddish',
                'imgtitle' => 'reddish.png',
                'temp' => '37',
                'speed' => '3',
                'resil' => '3',
                'prof' => '5',
            ),
            3 =>
            array(
                'id' => '4',
                'name' => 'Onion',
                'imgtitle' => 'onion.png',
                'temp' => '27',
                'speed' => '2',
                'resil' => '1',
                'prof' => '5',
            ),
        ));

        // points 
        //plants table seed 
        DB::table('points')->insert(array(
            0 =>
            array(
                'id' => '1',
                'points' => '7',
                'teampoints' => '30',
                'rating' => '3',
                'user_id' => '1',
            ),
            1 =>
            array(
                'id' => '2',
                'points' => '5',
                'teampoints' => '20',
                'rating' => '2',
                'user_id' => '2',
            ),
            2 =>
            array(
                'id' => '3',
                'points' => '10',
                'teampoints' => '45',
                'rating' => '5',
                'user_id' => '3',
            ),
            3 =>
            array(
                'id' => '4',
                'points' => '7',
                'teampoints' => '10',
                'rating' => '3',
                'user_id' => '4',
            ),
        ));
    }

}
