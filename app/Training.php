<?php

namespace App;

use App\User;

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
    return $this->belongsTo('User', 'user_id');
  }
}
