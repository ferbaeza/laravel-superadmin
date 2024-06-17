<?php

return [
    'activado' => true,

    'usuarios' => 'users',

    'settings'   => [
        'tablas' => [
            'ocultar' => [
                'cache',
                'cache_locks',
                'failed_jobs',
                'jobs',
                'job_batches',
                'sessions',
                'password_reset_tokens',
                'superadmin_menu',
            ]
        ]
    ],

    'package' => [
        'name' => 'laravel-superadmin',
        'author' => 'Baezeta',
        'providers' => [
            'Baezeta\Admin\AdminServiceProvider',
        ],
        'aliases' => [
            'Admin' => 'Baezeta\Admin\Facades\Admin',
        ],
    ],
];
