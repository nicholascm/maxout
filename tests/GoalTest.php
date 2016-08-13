<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GoalTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     
    public function testGoalCreation()
    {
        $this->visit('/goal/create')
          ->type('03/12/2017', 'target_date')
          ->select('bench press', 'exercise')
          ->type('145', 'weight')
          ->type('1','reps')
          ->press("Let's Do This")
          ->see('dash.home');
    }
}
