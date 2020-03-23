<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('posts')-> insert(
               array(
                    [
                         'title' =>"Php is awesome",
                         'alias'=>"php_is_awesome",
                         'intro' =>"Nam facilisis ligula nec arcu finibus, in pulvinar enim sodales.",
                         'body'=>"Sed ac enim eget libero feugiat malesuada dapibus laoreet mi. Morbi id lacus neque. Fusce interdum arcu eu tortor laoreet."
                    ],
                    [
                        'title' =>"Laravel 6.8",
                        'alias'=>"laravel68",
                        'intro' =>"Nam facilisis ligula nec arcu finibus, in pulvinar enim sodales.",
                        'body'=>"Sed ac enim eget libero feugiat malesuada dapibus laoreet mi. Morbi id lacus neque. Fusce interdum arcu eu tortor laoreet."
                    ],
                    [
                        'title' =>"Thanks to seeds",
                        'alias'=>"seeds",
                        'intro' =>"Nam facilisis ligula nec arcu finibus, in pulvinar enim sodales.",
                        'body'=>"Sed ac enim eget libero feugiat malesuada dapibus laoreet mi. Morbi id lacus neque. Fusce interdum arcu eu tortor laoreet."
                   ] 
               )
        );
    }
}
