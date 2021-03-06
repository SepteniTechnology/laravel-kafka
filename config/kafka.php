<?php

return [
    // Brokers address
    'brokers' => array_filter(explode(',',env('KAFKA_BROKERS', ''))),
    'options' => [
        'log_level' => LOG_DEBUG,
        'debug' => 'all'
    ],
    'tls' => env('TLS'),
    'tls_options' => [
        'security.protocol' => env('SECURITY_PROTOCOL'),
        'ssl.ca.location' => env('KAFKA_SSL_CA_LOCATION'),
        'ssl.certificate.location' => env('KAFKA_SSL_CERTIFICATE_LOCATION'),
        'ssl.key.location' => env('KAFKA_SSL_KEY_LOCATION'),
        'ssl.key.password' => env('KAFKA_SSL_KEY_PASSWORD')
    ]
];
