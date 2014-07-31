<?php

class Elder extends Eloquent {

  public function labors() {
    return $this->belongsToMany('Labor', 'labors_elders', 'elder_id', 'labor_id');
  }
}