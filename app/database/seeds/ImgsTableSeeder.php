<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ImgsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Img::create([
				'img_name' => 'img'.rand(1,50),
				'img_path' => 'public/img/img'.rand(1,50).'.png',
				'post_id' => rand(1,5)
			]);
		}
	}

}