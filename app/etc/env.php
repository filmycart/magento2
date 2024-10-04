<?php
return [
    'backend' => [
        'frontName' => 'admin_7k2owo'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'zlRcahp0SpZaMg0vUUcmyMq8kv724LFQ'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '402_'
            ],
            'page_cache' => [
                'id_prefix' => '402_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '23b9c33989682565979e01fa79b62f8d'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'fmcm2',
                'username' => 'root',
                'password' => 'Nachiyar*1984',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'fmcm2-local.com'
    ],
    'install' => [
        'date' => 'Fri, 04 Oct 2024 13:25:54 +0000'
    ]
];
