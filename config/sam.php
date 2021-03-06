<?php
return [
    'Guenbakku/Sam' => [
        'sitename' => 'Simple AWS Manager',
        'regions' => [
            'us-east-1',
            'us-east-2',
            'us-west-1',
            'us-west-2',
            'ap-south-1',
            'ap-northeast-2',
            'ap-southeast-1',
            'ap-southeast-2',
            'ap-northeast-1',
            'ca-central-1',
            'eu-central-1',
            'eu-west-1',
            'eu-west-2',
            'sa-east-1',
        ],
        'credentials' => [
            'default' => [
                'key' => null,
                'secret' => null,
            ],
            'uses' => 'default',
        ],
        'describeInstances' => [
            'Filters' => [
                [
                    'Name' => 'tag:User',
                    'Values' => ['me'],
                ],
            ],
        ],
    ],
];
