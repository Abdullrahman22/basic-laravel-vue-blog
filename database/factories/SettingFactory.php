<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        "site_name"      => $faker -> company() ,
        "contact_email"  => $faker -> safeEmail() ,
        "address"        => $faker -> address() ,
    ];
});
