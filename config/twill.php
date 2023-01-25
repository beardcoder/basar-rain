<?php

return [
    'locale' => 'de',
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
    ],
    'block_editor' => [
        'block_preview_render_childs' => false,
        'use_twill_blocks' => [],
        'crops' => [
            'image' => [
                'team' => [
                    [
                        'name' => 'Team',
                        'ratio' => 1 / 1,
                        'minValues' => [
                            'width' => 300,
                            'height' => 300,
                        ],
                        'maxValues' => [
                            'width' => 400,
                            'height' => 400,
                        ],
                    ],
                ],
                'sponsor' => [
                    [
                        'name' => 'Sponsor',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 320,
                            'height' => 180,
                        ],
                        'maxValues' => [
                            'width' => 320,
                            'height' => 180,
                        ],
                    ],
                ],
                'hero' => [
                    [
                        'name' => 'Sponsor',
                        'ratio' => 2560 / 800,
                        'minValues' => [
                            'width' => 2560,
                            'height' => 800,
                        ],
                        'maxValues' => [
                            'width' => 2560,
                            'height' => 800,
                        ],
                    ],
                ],
            ]
        ]
    ]
];
