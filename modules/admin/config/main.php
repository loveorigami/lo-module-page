<?php

return [
    'modules' => [
        'sight' => [
            'class' => 'lo\modules\sight\modules\admin\Module',
            'defaultRoute' => 'town',
            'menuItems' => [
                [
                    'label' => Yii::t('common', 'Towns'),
                    'items' => [
                        [
                            'label' => Yii::t('common', 'List'),
                            'url' => ['/sight/town/index'],
                        ],
                        [
                            'label' => Yii::t('common', 'Parser'),
                            'url' => ['/sight/town/parser'],
                        ],
                    ]
                ],
                [
                    'label' => Yii::t('common', 'Category'),
                    'items' => [
                        [
                            'label' => Yii::t('common', 'Type'),
                            'url' => ['/sight/type/index'],
                        ],
                    ]
                ],
            ]
        ],
    ],
];