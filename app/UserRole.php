<?php

namespace BookClubMinder;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      "user_id", "club_id", "role_id",
  ];
  //

  public function user(){
    return $this->hasMany('BookClubMinder\User');
  }

  public function club(){
    return $this->hasMany('BookClubMinder\Club');
  }

  public function role(){
    return $this->hasMany('BookClubMinder\role');
  }
}