<?php
/**
 * KHIND RTO - Product Model
 */
class Product {
    /**
     * Return all product categories and their items
     */
    public static function getAll() {
        return [
            'aircond' => [
                'category' => 'Aircond',
                'category_label' => 'KHIND Aircond',
                'icon' => 'fas fa-snowflake',
                'items' => [
                    [
                        'id' => 'kool-series',
                        'model' => 'KOOL Series',
                        'name' => 'KOOL SERIES INVERTER AIR-CONDITIONER',
                        'subtitle' => 'Powered by Acson',
                        'price_monthly' => 55,
                        'price_original' => 99,
                        'image' => 'KOOL Series.png',
                        'features' => ['Inverter Technology', 'Jimat Tenaga', 'Penyejukan Pantas', 'R32 Eco-friendly'],
                        'desc' => 'Aircond inverter berkuasa tinggi dengan teknologi penjimatan tenaga terkini.',
                        'capacity' => ['1.0HP', '1.5HP', '2.0HP', '2.5HP'],
                        'detail_plans' => [
                            'badges' => ['FREE INSTALLATION', 'FREE DELIVERY'],
                            'group_label' => 'Rent-To-Own (RTO)',
                            'columns' => [
                                ['label' => '<strong>RM99*</strong>/month', 'sublabel' => '(Month #1-6)<br>RM105 (Month #7 - 60)', 'header' => 'Limited Time Offer'],
                                ['label' => '<strong>RM105*</strong>/month', 'sublabel' => '(Month #1-6)<br>RM105 (Month #7 - 60)', 'header' => 'Limited Time Offer'],
                                ['label' => '<strong>RM125*</strong>/month', 'sublabel' => '(Month #1-6)<br>RM105 (Month #7 - 60)', 'header' => 'Limited Time Offer'],
                            ],
                            'rows' => [
                                ['label' => 'Class', 'values' => ['1.0HP', '1.5HP', '2.0HP']],
                                ['label' => 'Warranty', 'value' => '5 Times'],
                                ['label' => 'Insurance*', 'value' => '5 Years', 'note' => '(Loss or damage caused by fire, lightning, natural disasters, theft and accidental damage)'],
                                ['label' => 'KHIND Care Plan', 'value' => '5 times (Every 12 months)'],
                                ['label' => 'One-Time Processing Fee', 'value' => 'RM1'],
                            ],
                        ],
                    ],
                ]
            ],
            'washer' => [
                'category' => 'Mesin Basuh',
                'category_label' => 'KHIND Washer & Dryer',
                'icon' => 'fas fa-tshirt',
                'items' => [
                    [
                        'id' => 'wd1438',
                        'model' => 'WD1438',
                        'name' => '2-IN-1 WASHER DRYER 10KG/6KG',
                        'subtitle' => 'KHIND Washer Dryer',
                        'price_monthly' => 99,
                        'price_original' => null,
                        'image' => 'WD1438.png',
                        'features' => ['2-in-1 Basuh & Kering', '10KG Basuh / 6KG Kering', 'Inverter Motor', '15 Program'],
                        'desc' => 'Mesin basuh dan pengering 2-dalam-1 untuk kemudahan maksimum.',
                        'detail_plans' => null,
                    ],
                    [
                        'id' => 'wd1468',
                        'model' => 'WD1468',
                        'name' => '2-IN-1 WASHER DRYER 11KG/7KG',
                        'subtitle' => 'KHIND Washer Dryer',
                        'price_monthly' => 63,
                        'price_original' => 125,
                        'image' => 'WD1468.png',
                        'features' => ['2-in-1 Basuh & Kering', '11KG Basuh / 7KG Kering', 'Inverter Motor', 'Steam Wash'],
                        'desc' => 'Kapasiti lebih besar untuk keluarga besar dengan teknologi Steam Wash.',
                        'detail_plans' => [
                            'badges' => ['FREE INSTALLATION', 'FREE DELIVERY'],
                            'group_label' => null,
                            'columns' => [
                                ['label' => '<strong>RM3500</strong>', 'sublabel' => '', 'header' => 'Outright'],
                                ['label' => '<strong>RM125</strong>/month', 'sublabel' => '', 'header' => 'Rent-To-Own (RTO)'],
                            ],
                            'rows' => [
                                ['label' => 'Warranty', 'values' => ['2 Years', '3 Years']],
                                ['label' => 'Motor Warranty', 'value' => '10 Years'],
                                ['label' => 'Disposal of old unit', 'value' => 'Yes'],
                                ['label' => 'Relocation *', 'value' => 'Yes (Once a year within General Warranty Period)'],
                                ['label' => 'Insurance *', 'value' => 'Covered', 'note' => '(Loss or damage caused by fire, lightning, natural disasters, theft and accidental damage)'],
                                ['label' => 'KHIND Care Plan', 'value' => '1 time (Month #12)'],
                                ['label' => 'Laundry Capsules Supply', 'values' => ['2 Years', '3 Years']],
                                ['label' => 'One-Time Processing Fee', 'values' => ['FOC', 'RM1']],
                            ],
                        ],
                    ],
                    [
                        'id' => 'wm150a',
                        'model' => 'WM150A',
                        'name' => 'ECOWASH 15 TOP LOAD WASHER - MESIN BASUH AUTOMATIK 15KG',
                        'subtitle' => 'KHIND Washer',
                        'price_monthly' => 43,
                        'price_original' => 85,
                        'image' => 'WM150A.png',
                        'features' => ['Top Load 15KG', 'Eco-friendly', 'Fuzzy Logic', 'Jimat Air & Tenaga'],
                        'desc' => 'Mesin basuh automatik top-load dengan kapasiti besar 15KG.',
                        'detail_plans' => [
                            'badges' => ['FREE DELIVERY', 'FREE INSTALLATION'],
                            'group_label' => '48 Months',
                            'columns' => [
                                ['label' => '<strong>RM85</strong>', 'sublabel' => 'Super Saver', 'header' => ''],
                                ['label' => '<strong>RM105</strong>', 'sublabel' => 'Smart Value', 'header' => ''],
                            ],
                            'rows' => [
                                ['label' => 'Warranty', 'value' => '4 Years'],
                                ['label' => 'Motor Warranty', 'value' => '10 Years'],
                                ['label' => 'Disposal of old unit', 'values' => ['No', 'Yes']],
                                ['label' => 'Relocation *', 'values' => ['No', 'Yes']],
                                ['label' => 'Insurance *', 'values' => ['No', 'Yes']],
                                ['label' => 'KHIND Care Plan', 'values' => ['1', '4']],
                                ['label' => 'One-Time Processing Fee', 'value' => 'RM1'],
                            ],
                        ],
                    ],
                ]
            ],
            'dryer' => [
                'category' => 'Pengering',
                'category_label' => 'KHIND Dryer',
                'icon' => 'fas fa-wind',
                'items' => [
                    [
                        'id' => 'dhp90',
                        'model' => 'DHP90',
                        'name' => 'DRYMASTER HEAT-PUMP DRYER 9KG',
                        'subtitle' => 'KHIND Dryer',
                        'price_monthly' => 53,
                        'price_original' => 105,
                        'image' => 'DHP90.png',
                        'features' => ['Heat-Pump Technology', '9KG Kapasiti', 'Jimat Tenaga', '16 Program'],
                        'desc' => 'Pengering heat-pump yang jimat tenaga dengan kapasiti 9KG.',
                        'detail_plans' => [
                            'badges' => ['FREE DELIVERY', 'FREE INSTALLATION'],
                            'group_label' => null,
                            'columns' => [
                                ['label' => '<strong>RM3500</strong>', 'sublabel' => '', 'header' => 'Outright'],
                                ['label' => '<strong>RM135</strong>/month', 'sublabel' => '36 Months', 'header' => 'Rent-To-Own (RTO)'],
                                ['label' => '<strong>RM105</strong>/month', 'sublabel' => '48 Months', 'header' => ''],
                            ],
                            'rows' => [
                                ['label' => 'Warranty', 'values' => ['2 Years', '3 Years', '4 Years']],
                                ['label' => 'Motor Warranty', 'value' => '10 Years'],
                                ['label' => 'Disposal of old unit', 'value' => 'Yes'],
                                ['label' => 'Relocation *', 'value' => 'Yes (once a year within General Warranty Period)'],
                                ['label' => 'Insurance *', 'value' => 'Covered', 'note' => '(Loss or damage caused by fire, lightning, natural disasters, theft and accidental damage)'],
                                ['label' => 'KHIND Care Plan', 'values' => ['1 Time<br>(Month #18)', '2 Times<br>(Month #18 and #36)', '']],
                                ['label' => 'One-Time Processing Fee', 'values' => ['FOC', 'RM 1', '']],
                            ],
                        ],
                    ],
                ]
            ],
            'fridge' => [
                'category' => 'Peti Sejuk',
                'category_label' => 'KHIND Fridge',
                'icon' => 'fas fa-temperature-low',
                'items' => [
                    [
                        'id' => 'rf480',
                        'model' => 'RF480',
                        'name' => 'CHILLMASTER LITE REFRIGERATOR',
                        'subtitle' => 'KHIND Fridge (PRE-ORDER)',
                        'price_monthly' => 38,
                        'price_original' => 75,
                        'image' => 'RF480.png',
                        'features' => ['480L Kapasiti', 'Inverter Compressor', 'Multi Air Flow', 'No Frost'],
                        'desc' => 'Peti sejuk ChillMaster Lite dengan teknologi No Frost.',
                        'badge' => 'PRE-ORDER',
                        'detail_plans' => [
                            'badges' => ['FREE INSTALLATION', 'FREE DELIVERY'],
                            'group_label' => null,
                            'columns' => [
                                ['label' => '<strong>RM3200</strong>', 'sublabel' => '', 'header' => 'Outright'],
                                ['label' => '<strong>RM95</strong>/month', 'sublabel' => '5 Years<br>Smart Value', 'header' => 'Rent-To-Own (RTO)'],
                                ['label' => '<strong>RM75</strong>/month', 'sublabel' => '5 Years<br>Super Saver', 'header' => ''],
                            ],
                            'rows' => [
                                ['label' => 'General Warranty', 'values' => ['2 Years', '5 Years', '']],
                                ['label' => 'Compressor Warranty', 'value' => '10 Years'],
                                ['label' => 'Disposal of old unit', 'values' => ['Yes', '', 'No']],
                                ['label' => 'Relocation *', 'values' => ['Yes (Once a year within General Warranty Period)', '', 'No']],
                                ['label' => 'Insurance *', 'values' => ['Covered<br>(Loss of damage caused by fire, lightning, natural disasters, theft and accidental damage)', '', 'No']],
                                ['label' => 'KHIND Care Plan', 'values' => ['1 time (Month #24)', '', 'No']],
                                ['label' => 'One-Time Processing Fee', 'values' => ['FOC', 'RM 1', '']],
                            ],
                        ],
                    ],
                    [
                        'id' => 'rfm466a',
                        'model' => 'RFM466A',
                        'name' => 'CHILLMASTER X MULTI-DOOR REFRIGERATOR',
                        'subtitle' => 'KHIND Fridge',
                        'price_monthly' => 48,
                        'price_original' => 95,
                        'image' => 'RFM466A.png',
                        'features' => ['Multi-Door Design', 'Inverter Compressor', 'Holiday Mode', 'Precise Temp Control'],
                        'desc' => 'Peti sejuk multi-door moden dengan kawalan suhu tepat.',
                        'detail_plans' => [
                            'badges' => ['FREE INSTALLATION', 'FREE DELIVERY'],
                            'group_label' => null,
                            'columns' => [
                                ['label' => '<strong>RM4300</strong>', 'sublabel' => '', 'header' => 'Outright'],
                                ['label' => '<strong>RM115</strong>/month', 'sublabel' => '60 Months<br>Smart Value', 'header' => 'Rent-To-Own (RTO)'],
                                ['label' => '<strong>RM95</strong>/month', 'sublabel' => '60 Months<br>Super Saver', 'header' => ''],
                            ],
                            'rows' => [
                                ['label' => 'Warranty', 'values' => ['2 Years', '5 Years', '']],
                                ['label' => 'Motor Warranty', 'value' => '10 Years'],
                                ['label' => 'Disposal of old unit', 'values' => ['Yes', '', 'No']],
                                ['label' => 'Relocation *', 'values' => ['Yes (Once a year within General Warranty Period)', '', 'No']],
                                ['label' => 'Insurance *', 'values' => ['Covered<br>(Loss or damage caused by fire, lightning, natural disasters, theft and accidental damage)', '', 'Covered<br>*Limited to First 1000 Customers only']],
                                ['label' => 'KHIND Care Plan', 'value' => '1 time (Month #24)'],
                                ['label' => 'One-Time Processing Fee', 'values' => ['FOC', 'RM 1', '']],
                            ],
                        ],
                    ],
                    [
                        'id' => 'rfs600a',
                        'model' => 'RFS600A',
                        'name' => 'CHILLMASTER SIDE BY SIDE REFRIGERATOR',
                        'subtitle' => 'KHIND Fridge',
                        'price_monthly' => 50,
                        'price_original' => 99,
                        'image' => 'RFS600A.png',
                        'features' => ['Side-by-Side', '600L Kapasiti', 'Water Dispenser', 'Inverter Compressor'],
                        'desc' => 'Peti sejuk side-by-side premium dengan kapasiti 600L.',
                        'detail_plans' => [
                            'badges' => ['FREE DELIVERY', 'FREE INSTALLATION'],
                            'group_label' => null,
                            'columns' => [
                                ['label' => '<strong>RM4500</strong>', 'sublabel' => '', 'header' => 'Outright'],
                                ['label' => '<strong>RM119</strong>/month', 'sublabel' => '60 Months<br>Smart Value', 'header' => 'Rent-To-Own (RTO)'],
                                ['label' => '<strong>RM99</strong>/month', 'sublabel' => '60 Months<br>Super Saver', 'header' => ''],
                            ],
                            'rows' => [
                                ['label' => 'General Warranty', 'values' => ['2 Years', '5 Years', '']],
                                ['label' => 'Compressor Warranty', 'value' => '10 Years'],
                                ['label' => 'Disposal of old unit', 'values' => ['Yes', '', 'No']],
                                ['label' => 'Relocation *', 'values' => ['Yes', '', 'No']],
                                ['label' => 'Insurance *', 'values' => ['Covered<br>(Loss or damage caused by fire, lightning, natural disasters, theft and accidental damage)', '', 'No']],
                                ['label' => 'KHIND Care Plan', 'values' => ['1 time (Month #24)', '', 'No']],
                                ['label' => 'One-Time Processing Fee', 'values' => ['FOC', 'RM 1', '']],
                            ],
                        ],
                    ],
                ]
            ],
            'iron' => [
                'category' => 'Seterika',
                'category_label' => 'KHIND Steam Iron',
                'icon' => 'fas fa-fire',
                'items' => [
                    [
                        'id' => 'si6029bp',
                        'model' => 'SI6029BP',
                        'name' => 'STEAMGEN+ STEAM GENERATOR IRON',
                        'subtitle' => 'KHIND Steam Iron',
                        'price_monthly' => 70,
                        'price_original' => null,
                        'image' => 'SI6029BP.png',
                        'features' => ['Steam Generator', 'Tekanan Wap Tinggi', 'Anti-Drip', 'Auto Shut-Off'],
                        'desc' => 'Seterika stim penjana berkuasa tinggi untuk hasil yang sempurna.',
                        'detail_plans' => [
                            'badges' => ['FREE INSTALLATION', 'FREE DELIVERY'],
                            'group_label' => null,
                            'columns' => [
                                ['label' => '<strong>RM1399</strong>', 'sublabel' => '', 'header' => 'Outright'],
                                ['label' => '<strong>RM75</strong>/month', 'sublabel' => '24 Months<br>Smart Value', 'header' => 'Rent-To-Own (RTO)'],
                                ['label' => '<strong>RM70</strong>/month', 'sublabel' => '24 Months<br>Super Saver', 'header' => ''],
                            ],
                            'rows' => [
                                ['label' => 'Warranty', 'value' => '2 Years'],
                                ['label' => 'Ironing Board', 'values' => ['Yes', '', 'No']],
                                ['label' => 'Insurance', 'value' => 'Covered', 'note' => '(Loss or damage caused by fire, lightning, theft & accidental damage)'],
                                ['label' => 'One-Time Processing Fee', 'values' => ['FOC', 'RM 1', '']],
                            ],
                        ],
                    ],
                ]
            ],
        ];
    }

    /**
     * Return a single category by key
     */
    public static function getByCategory($key) {
        $all = self::getAll();
        return $all[$key] ?? null;
    }
}
