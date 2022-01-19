<?php

return [

    /*
    |-----------------------------------------------------------------------
    | API Key
    |-----------------------------------------------------------------------
    |
    | Specify API Key provided by Here.
    |
    */
    'api_key' => env('HERE_API_KEY'),

    'cache' => [
        /*
        |-----------------------------------------------------------------------
        | Cache Connection
        |-----------------------------------------------------------------------
        |
        | Specify the cache database connection to use for caching.
        |
        | Default: null
        |
        */
        'connection' => null,

        /*
        |-----------------------------------------------------------------------
        | Cache Duration
        |-----------------------------------------------------------------------
        |
        | Specify the cache duration in seconds.
        |
        | Default: 1 day (string)
        |
        */
        'duration' => '1 year',
    ],
];
