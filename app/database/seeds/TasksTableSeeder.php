<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('tasks')->truncate();

		$tasks = [
                  ['title' => 'Go to bed',
                        'body'  => 'Lorem ipsum dolor sit amet.',
                        'user_id' => 1,
                        'completed' => 0
                  ],
                  ['title' => 'Walk the dog',
                        'body'  => 'Lorem ipsum dolor sit amet.',
                        'user_id' => 1,
                        'completed' => 0
                  ],
                  ['title' => 'Do the dishes',
                        'body'  => 'Lorem ipsum dolor sit amet.',
                        'user_id' => 2,
                        'completed' => 0
                  ],
                  ['title' => 'Work',
                        'body'  => 'Lorem ipsum dolor sit amet.',
                        'user_id' => 2,
                        'completed' => 0
                  ],
		];

		// Uncomment the below to run the seeder
		DB::table('tasks')->insert($tasks);
	}

}
