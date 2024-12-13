<?php

declare(strict_types=1);

require_once "App/Account.php";
require_once "App/SocialMedia.php";

use App\Account;
use App\SocialMedia;

$myAccount = new Account("Dean", 100);
$mySocialMedia = new SocialMedia();

var_dump($myAccount);