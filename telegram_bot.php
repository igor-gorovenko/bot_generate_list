<?php

use Dotenv\Dotenv;

require_once('.env');
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$botToken = $_ENV('BOT_TOKEN');
$apiURL = "https://api.telegram.org/bot$botToken/";
