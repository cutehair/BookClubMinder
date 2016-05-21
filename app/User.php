<?php

namespace BookClubMinder;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  public function index()
  {
    $users = User::all();

    return view('users.index', ['users' => $users]);

  }

  public function userRole()
  {
      return $this->belongsToMany('BookClubMinder\UserRole');
  }


}
