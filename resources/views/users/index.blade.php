@extends('layouts.app')

@section('header')
  <div class="container">
    <h2>Users</h2>
  </div>
@endsection

@section('content')
  <div class="container">
  <ul>
    @forelse ($users as $user)
      <li>{{ $user->name }}</li>
    @empty
      <p>No users</p>
    @endforelse
  </ul>
  </div>
@endsection



