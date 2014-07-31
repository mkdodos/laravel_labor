<?php

class Labor extends Eloquent {


  // each bear BELONGS to many picnic
    // define our pivot table also
    public function elders() {
      return $this->belongsToMany('Elder', 'labors_elders', 'labor_id', 'elder_id');
    }

}