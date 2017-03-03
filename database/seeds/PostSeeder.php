<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l=12;
        for ($i=1; $i <=$l ; $i++) { 
            
        DB::table('posts')->insert([
            'title' => 'Titulo del Post'.$i,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda qui fugiat quidem reiciendis, recusandae. Unde suscipit iure sunt soluta quisquam aliquam corporis veritatis maiores odio. Pariatur, laborum a odit nobis.',
            'date' => "2017-.$i.-08 00:00:00",
            'image' => "/path/url",
        ]);
        DB::table('tags')->insert([
            'name' => 'tag'.$i
        ]);
    	}
        
        for ($i=1; $i <=$l ; $i++) { 
        DB::table('post_tag')->insert([
            'tag_id' => random_int(1, $l),
            'post_id' => random_int(1, $l)
        ]);
        }
    }
}
