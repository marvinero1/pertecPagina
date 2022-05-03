<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/laravel-hashids
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'salt' => '',
            'length' => 0,
            // 'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
        ],

        'alternative' => [
            'salt' => 'your-salt-string',
            'length' => 'your-length-integer',
            // 'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
        ],

        
        app\Models\Auth\User\User::class => [
            'salt' => \app\Models\Auth\User\User::class.'7623e9b0009feff8e024a689d6ef59ce', 
            'length' => 5,
        ],

        app\Models\Producto::class => [
            'salt' => \app\Models\Producto::class.'7623e9b0009feff8e024a689d6ef59ce',
            'length' => 2,
        ],

        app\Models\Tienda::class => [
            'salt' => \app\Models\Tienda::class.'7623e9b0009feff8e024a689d6ef59ce',
            'length' => 2,
        ],

        app\Models\Vendedor::class => [
            'salt' => \app\Models\Vendedor::class.'7623e9b0009feff8e024a689d6ef59ce',
            'length' => 2,
        ],
    ],
];
