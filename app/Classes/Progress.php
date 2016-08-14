<?php

class Progress {

  public function __construct($measurements) {
      $this->measurements = $measurements;
  }

  private function getLatestMeasurementDate() {

    $latest_date = array_reduce($this->measurements, function($a, $b) {
      $b->completed_date_time > $a->completed_date_time ? $b->completed_date_time : $a->completed_date_time;
    });

    return $latest_date;
  }
  //return the # of days since the latest measurement for a goal
  public function getDaysSinceLastWorked() {
    return date_diff(date('Y-m-d H:i:s'), $this->getLatestMeasurementDate());
  }

  //generate a snarky statement based on how long its been since the last measurement
  public function getProgressStatement() {
    if($this->getDaysSinceLast() <= 7) {
      return "Keep it up, and get back at it again soon.";
    }
    if($this->getDaysSinceLastWorked() >= 7) {
      return "Its been over a week since you last worked onn this goal... :( ";
    }
  }
}
