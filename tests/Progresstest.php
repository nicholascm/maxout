<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Progresstest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public $goals =
      [{"id":1,
        "user_id":3,
        "exercise_id":1,
        "target_date":"2017-02-12",
        "reps":1,
        "weight":315,
        "created_at":"2016-08-13 14:58:01",
        "updated_at":"2016-08-13 14:58:01"},
        {"id":2,"user_id":3,
          "exercise_id":1,
          "target_date":"2222-12-21",
          "reps":1,"weight":315,
          "created_at":"2016-08-13 14:59:58",
          "updated_at":"2016-08-13 14:59:58"},
          {"id":3,"user_id":3,
            "exercise_id":1,
            "target_date":"2017-12-13",
            "reps":1,"weight":315,
            "created_at":"2016-08-13 15:01:21",
            "updated_at":"2016-08-13 15:01:21"}
          ];

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
