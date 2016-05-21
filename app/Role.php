<?php

  namespace BookClubMinder;

  use Illuminate\Database\Eloquent\Model;

  class Role extends Model
  {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      "role",
    ];

    public function userRole(){
      return $this->belongsToMany('BookClubMinder\UserRole');
    }
  }