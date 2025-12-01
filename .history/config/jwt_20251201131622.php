<?php

return [
    'algo' => 'RS256',
    'keys' => [
        'public' => 'file://' . storage_path('public.pem'),
        'private' => 'file://' . storage_path('private.pem'),
    ],
    'ttl' => 60, // Short lived access tokens (Senior practice)
];
