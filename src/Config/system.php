<?php
return [
    [
        'key' => 'sales.paymentmethods.webxpay',
        'name' => 'Web X Pay',
        'sort' => 3,
        'fields' => [
            [
                'name' => 'title',
                'title' => 'admin::app.admin.system.title',
                'type' => 'depends',
                'depend' => 'active:1',
                'validation' => 'required_if:active,1',
                'channel_based' => false,
                'locale_based' => true,
            ], [
                'name' => 'description',
                'title' => 'admin::app.admin.system.description',
                'type' => 'textarea',
                'channel_based' => false,
                'locale_based' => true,
            ],  [
                'name' => 'webxpay_secret',
                'title' => 'admin::app.admin.system.client-secret',
                'info'          => 'admin::app.admin.system.client-secret-info',
                'type'          => 'depends',
                'depend'        => 'active:1',
                'validation'    => 'required_if:active,1',
            ],[
                'name' => 'currency',
                'title' => 'admin::app.admin.system.accepted-currencies',
                'info'          => 'admin::app.admin.system.accepted-currencies-info',
                'type'          => 'depends',
                'depend'        => 'active:1',
                'validation'    => 'required_if:active,1',
            ], [
                'name' => 'sandbox',
                'title' => 'admin::app.admin.system.sandbox',
                'type' => 'boolean',
                'channel_based' => false,
                'locale_based' => true,
            ], [
                'name' => 'sort',
                'title' => 'admin::app.admin.system.sort_order',
                'type' => 'select',
                'options' => [
                    [
                        'title' => '1',
                        'value' => 1,
                    ], [
                        'title' => '2',
                        'value' => 2,
                    ], [
                        'title' => '3',
                        'value' => 3,
                    ], [
                        'title' => '4',
                        'value' => 4,
                    ],
                ],
            ]
        ]
    ]
];