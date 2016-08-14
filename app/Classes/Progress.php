<?php
namespace App\Classes;

use DateTime;

class Progress {

  public function __construct($measurements_array) {
      $this->measurements = $measurements_array;
  }

  private function getLatestMeasurementDate() {
    $dates_only = $this->measurements->map(function($item, $key) { return $item->completed_date_time; });

    $latest_date = $dates_only->reduce(function($a,$b) {
      $b > $a ? $b : $a;
    });
    return $latest_date;
  }

  //return the # of days since the latest measurement for a goal
  public function getDaysSinceLastWorked() {
    return date_diff(new DateTime(date('Y-m-d H:i:s')), new DateTime($this->getLatestMeasurementDate()))->days;
  }

  //generate a snarky statement based on how long its been since the last measurement
  public function getProgressStatement() {
    if($this->getDaysSinceLastWorked() <= 7) {
      return "Keep it up, and get back at it again soon.";
    }
    if($this->getDaysSinceLastWorked() >= 7) {
      return "Its been over a week since you last worked onn this goal... :( ";
    }
  }
}
