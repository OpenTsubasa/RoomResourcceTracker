<?php

return [
    'models' => [
        /*
        [
            'model' => "App\\Building",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'location', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Department",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'faculty_id', 'building_id', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                    'faculty_id' => 'required',
                    'building_id' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                    'faculty_id' => 'required',
                    'building_id' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Faculty",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Resource",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['room_id', 'resourcetype_id', 'count', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'room_id' => 'required',
                    'resourcetype_id' => 'required',
                    'count' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'room_id' => 'required',
                    'resourcetype_id' => 'required',
                    'count' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Resourcetype",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Room",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'roomtype_id', 'department_id', 'building_id', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                    'roomtype_id' => 'required',
                    'department_id' => 'required',
                    'building_id' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                    'roomtype_id' => 'required',
                    'department_id' => 'required',
                    'building_id' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Roomtype",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Floorplan",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'room_id', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                    'room_id' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                    'room_id' => 'required',
                ],
            ]
        ],
        [
            'model' => "App\\Tour",
            'show' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'edit' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'create' => [
                'exclude' => ['id', 'deleted_at', 'created_at', 'updated_at'],
            ],
            'index' => [
                'include' => ['name', 'room_id', 'floorplan_id', 'created_at', 'updated_at'],
            ],
            'update' => [
                'validation' => [
                    'name' => 'required',
                    'room_id' => 'required',
                    'floorplan_id' => 'required',
                ],
            ],
            'store' => [
                'validation' => [
                    'name' => 'required',
                    'room_id' => 'required',
                    'floorplan_id' => 'required',
                ],
            ]
        ]
        */

        // Add your model class names here (full namespace)
        // Exmaple: "App\\Employee"

        // Add a multi dimentional array to configure excluded, readonly,
        // included fields on standard views as well as validation.

            /* Example:
            [
                'model' => "App\\Employee",
                'show' => [
                    'exclude' => ['field_name'],
                ],
                'edit' => [
                    'exclude' => ['field_name'],
                    'readonly' => ['field_name'],
                ],
                'create' => [
                    'exclude' => ['field_name'],
                    'include' => ['updated_at'],
                    'readonly' => ['field_name'],
                ],
                'index' => [
                    'include' => ['id', 'first_name', 'last_name', 'email', 'enabled'],
                ],
                'update' => [
                    'validation' => [
                        'first_name' => 'required',
                        'last_name' => 'required',
                    ],
                ],
                'store' => [
                    'validation' => [
                        'first_name' => 'required',
                        'last_name' => 'required',
                    ],
                ]
                'middleware' => [
                    'web' => ['customWebMiddleware'],
                    'api' => ['customApiMiddleware']
                ]
            ]
            */

       // Certain fields (id, created_at, updated_at) are automatically
       // readonly / removed from forms. These can be overridden by including
       // them in "include".
       // If "include" is populated with anything other than these three fields
       // only fields in "include" will be displayed. This does not apply to
       // "index". "index" only displays fields in "include".
    ]
];
