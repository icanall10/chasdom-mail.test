<?php

require 'vendor/autoload.php';
require 'functions.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();