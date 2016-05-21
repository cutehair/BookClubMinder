@extends('layouts.app')

@section('header')
  <div class="container">
    <h2>Associate a User with a Role</h2>
  </div>
@endsection

@section('content')
  <div class="container">
    {{Form::open(array('url' => 'userRole/create', 'method' => 'CREATE'));}}
//create form
  //fill drop down lists with users, roles, clubs

  </div>
@endsection