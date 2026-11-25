<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use MailjetSDK\Configuration;
use MailjetSDK\MailjetAPISDK;
use MailjetSDK\V3\REST\Apikey;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials([
    'basicAuth' => ['username' => getenv('MAILJET_API_KEY') ?: '', 'password' => getenv('MAILJET_SECRET_KEY') ?: ''],
]);
MailjetAPISDK::configure($configuration);

$keys = Apikey::get();

echo json_encode($keys), "\n";
