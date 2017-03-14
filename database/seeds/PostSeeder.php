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
        /*
        $l=12;
        $faker = Faker\Factory::create();
        for ($i=1; $i <=$l ; $i++) {
        DB::table('posts')->insert([
            'title' => 'Titulo'.$i,
            'description' => $faker->text(),
            'date' => $faker->date(),
            'image' => "58b969a711b739.97759974.png",
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
        */
    }
}
