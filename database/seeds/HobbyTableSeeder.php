<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HobbyTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('hobbies')->insert(
                [
                    [
                        'title' => 'Hockey',
                        'created_at' => Carbon::now()
                    ], [
                        'title' => 'Cricket',
                        'created_at' => Carbon::now()
                    ], [
                        'title' => 'Football',
                        'created_at' => Carbon::now()
                    ], [
                        'title' => 'Wrestling',
                        'created_at' => Carbon::now()
                    ]
                ]
        );
    }

}
