<?php

use Illuminate\Database\Seeder;
use App\Exercise;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exercises = array(
          ['name' =>'bench press'],
          ['name' => 'squat'],
          ['name' => 'standing military press (bar)'],
          ['name' =>'standing military press (dumbell)'],
          ['name' =>'deadlift'],
          ['name' =>'clean and jerk'],
          ['name' =>'snatch'],
          ['name'=>'weighted pull up']
        );

        foreach ($exercises as $exercise) {
          Exercise::create($exercise);
        }
    }

}
