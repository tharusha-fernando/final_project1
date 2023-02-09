<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'employee' => [
            'profile' => 'r,u',
        ],
        'patient_user' => [
            'profile' => 'r,u',
        ],
        'role_name' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'role_name1' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'role_name2' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'role_name3' => [
            'module_1_name' => 'c,r,u,d',
        ],
        'role_name4' => [
            'module_1_name' => 'c,r,u,d',
        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
