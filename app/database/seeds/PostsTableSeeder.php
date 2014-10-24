<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Post::create([
				'title' => $faker->sentence(),
				'body' => $faker->realText(),
				'user_id' => rand(1,50)
			]);
		}
	}

}