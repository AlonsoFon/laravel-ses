<?php

use Juhasev\LaravelSes\Models\Batch;
use Juhasev\LaravelSes\Models\EmailBounce;
use Juhasev\LaravelSes\Models\EmailComplaint;
use Juhasev\LaravelSes\Models\EmailLink;
use Juhasev\LaravelSes\Models\EmailOpen;
use Juhasev\LaravelSes\Models\SentEmail;

return [

    /**
     * Whether to use AWS SNS validator. This is probably a good idead
     *
     * https://github.com/aws/aws-php-sns-message-validator
     */

    'aws_sns_validator' => env('SES_SNS_VALIDATOR', true),

    /**
     * Enable debug mode. In this mode you can test incoming AWS routes
     * manually. No data is saved to the database in this mode.
     *
     * NOTE: You cannot run package unit tests with this enabled!
     */

    'debug' => env('SES_DEBUG', true),

    /**
     * Log prefix for all logged messages. Set to whatever you want for convenient debugging
     */

    'log_prefix' => 'LARAVEL-SES',

    /**
     * Model that the Laravel SES uses. You can override or implement your own custom
     * models by changing the settings here
     */
    
    'models' => [
        'Batch' => Batch::class,
        'SentEmail' => SentEmail::class,
        'EmailBounce' => EmailBounce::class,
        'EmailComplaint' => EmailComplaint::class,
        'EmailLink' => EmailLink::class,
        'EmailOpen' => EmailOpen::class
    ],

    /**
     * Smtp Ping Threshold.
     *
     * By default, the threshold is set to 100 seconds.
     */

    'ping_threshold' => env('SES_PING_THRESHOLD', 10),
];
