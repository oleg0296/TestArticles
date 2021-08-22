<?php

namespace App\Enum;

class Categories
{
    const CATEGORY_1 = 1;
    const CATEGORY_2 = 2;
    const CATEGORY_3 = 3;
    const CATEGORY_4 = 4;

    const LIST_CATEGORIES = [
        [
            'id' => self::CATEGORY_1,
            'title' => 'Category 1',
        ],
        [
            'id' => self::CATEGORY_2,
            'title' => 'Category 2',
        ],
        [
            'id' => self::CATEGORY_3,
            'title' => 'Category 3',
        ],
        [
            'id' => self::CATEGORY_4,
            'title' => 'Category 4',
        ]
    ];
}
