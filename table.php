<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;

Manager::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});

?>