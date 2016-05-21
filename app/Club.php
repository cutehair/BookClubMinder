<?php

namespace BookClubMinder;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    "name", "tagline", "description",
  ];

  public function userRole(){
    return $this->belongsToMany('BookClubMinder\UserRole');
  }
}
