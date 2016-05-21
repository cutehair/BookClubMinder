<?php

namespace BookClubMinder;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    "first_name", "last_name", "street_address", "suite_apt", "city", "state", "zip", "primary_phone", "other_phone",
  ];

  public function user()
  {
    return $this->hasOne('BookClubMinder\User');
  }
}
