<?php

return [
    'algo' => 'RS256',
    'keys' => [
        'public' => 'file://' . storage_path('public.pem'),
        'private' => 'file://' . storage_path('private.pem'),
        'passphrase' => env('JWT_SECRET'),
    ],
    'ttl' => 60,
];
