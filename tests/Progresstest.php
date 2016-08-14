<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Classes\Progress;

class Progresstest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testDaysSinceLastMeasurement()
    {
        $measurement1 = factory(App\Measurement::class)->create('now-date');
        //$measurement2 = factory(App\Measurement::class)->create('early-date');
        $progress_check = new Progress([$measurement1]);

        $this->assertEquals(
          $progress_check->getDaysSinceLastWorked(),
          0
        );
    }
}
