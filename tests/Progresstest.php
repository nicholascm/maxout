<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Collection;
use App\Classes\Progress;

class Progresstest extends TestCase
{

    public function testDaysSinceLastMeasurement()
    {
        $measurement1 = factory(App\Measurement::class)->create('now-date');
        $progress_check = new Progress(collect($measurement1));
        $this->assertTrue($progress_check->getDaysSinceLastWorked() == 0);
    }

}
