<?php
return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails'               => true,

        // View settings
        'view' => [
            'template_path' => [
                'Base'    => __DIR__ . '/../web/Core/Template',
                'Contact' => __DIR__ . '/../web/Contact/Templates',
                'Event'   => __DIR__ . '/../web/Event/Templates',
                'Welcome' => __DIR__ . '/../web/Welcome/Templates',
                'Sponsor' => __DIR__ . '/../web/Sponsors/Templates',
            ],
            'twig' => [
//                'cache' => __DIR__ . '/../cache/twig', // Disabled for initial development | todo: remove me
                'debug'       => true,
                'auto_reload' => true,
            ],
        ],

        // monolog settings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../log/app.log',
        ],
    ],
];
