<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

  $factory->define(BookClubMinder\User::class, function (Faker\Generator $faker) {
    return [
      'name'      => $faker->name,
      'email'     => $faker->safeEmail,
      'password'  => $faker->password,
    ];

  });

  $factory->define(BookClubMinder\Club::class, function (Faker\Generator $faker){
    return [
      'name'          => $faker->words($nb = 3),
      'tagline'       => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'description'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
  });


  $factory->define(BookClubMinder\Member::class, function (Faker\Generator $faker){
    $user_ids = \DB::table('users')->select('id')->get();
    $user_id = $faker->randomElement($user_ids)->id;

    return [
      'user_id'         => $user_id,
      'first_name'      => $faker->firstName,
      'last_name'       => $faker->lastName,
      'street_address'  => $faker->streetAddress,
      'suite_apt'       => $faker->buildingNumber,
      'city'            => $faker->city,
      'state'           => $faker->stateAbbr,
      'zip'             => $faker->postcode,
      'primary_phone'   => $faker->phoneNumber,
      'other_phone'     => $faker->phoneNumber,
    ];
  });

  $factory->define(BookClubMinder\UserRoles::class, function(Faker\Generator $faker){
    $club_ids = \DB::table('clubs')->select('id')->get();
    $club_id = $faker->randomElement($club_ids)->id;

    $user_ids = \DB::table('users')->select('id')->get();
    $user_id = $faker->randomElement($user_ids)->id;

    $roles_ids = [2, 3, 4]; // ids for all but admin role
    $role_id = $faker->randomElement($roles_ids);

    return [
      'user_id' => $user_id,
      'club_id' => $club_id,
      'role_id' => $role_id,
    ];
  });


