<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model {
  protected $fillable = [
    'title',
    'link',
    'location',
    'body',
    'date_from',
    'date_to',
  ];

  public function author() {
    return $this->belongsTo('App\User', 'user_id');
  }
}
