<?php
require 'vendor/autoload.php';

// Required if redis is located elsewhere
Resque::setBackend('localhost:6379');

$args = array(
        'name' => 'Chris'
        );

$token = Resque::enqueue('default', 'My_Job', $args);
echo $token;

$status = new Resque_Job_Status($token);
echo $status->get();
?>
