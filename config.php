<?php
/**
 * KHIND RTO - Konfigurasi Utama
 */

// Tetapan Laman
define('SITE_NAME', 'KHIND Rent-To-Own');
define('SITE_TAGLINE', 'Pelan Ansuran Barangan Elektrik Mudah Milik');

// Auto-detect SITE_URL based on current domain
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
define('SITE_URL', $protocol . '://' . $host . $scriptDir);

// Tetapan Default Ejen
define('DEFAULT_AGENT_NAME', 'KHIND RTO');
define('DEFAULT_AGENT_PHONE', '60123456789');
define('DEFAULT_AGENT_WHATSAPP', '60123456789');

// Warna Tema
define('PRIMARY_COLOR', '#f2c213');    // Oren KHIND
define('SECONDARY_COLOR', '#1a1a2e'); // Gelap
define('ACCENT_COLOR', '#e63946');    // Merah CTA

// Data Produk
function getProducts() {
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
                    'image' => 'Image/KOOL Series.png',
                    'features' => ['Inverter Technology', 'Jimat Tenaga', 'Penyejukan Pantas', 'R32 Eco-friendly'],
                    'desc' => 'Aircond inverter berkuasa tinggi dengan teknologi penjimatan tenaga terkini.',
                    'capacity' => ['1.0HP', '1.5HP', '2.0HP', '2.5HP'],
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
                    'image' => 'Image/WD1438.png',
                    'features' => ['2-in-1 Basuh & Kering', '10KG Basuh / 6KG Kering', 'Inverter Motor', '15 Program'],
                    'desc' => 'Mesin basuh dan pengering 2-dalam-1 untuk kemudahan maksimum.',
                ],
                [
                    'id' => 'wd1468',
                    'model' => 'WD1468',
                    'name' => '2-IN-1 WASHER DRYER 11KG/7KG',
                    'subtitle' => 'KHIND Washer Dryer',
                    'price_monthly' => 63,
                    'price_original' => 125,
                    'image' => 'Image/WD1468.jpg',
                    'features' => ['2-in-1 Basuh & Kering', '11KG Basuh / 7KG Kering', 'Inverter Motor', 'Steam Wash'],
                    'desc' => 'Kapasiti lebih besar untuk keluarga besar dengan teknologi Steam Wash.',
                ],
                [
                    'id' => 'wm150a',
                    'model' => 'WM150A',
                    'name' => 'ECOWASH 15 TOP LOAD WASHER - MESIN BASUH AUTOMATIK 15KG',
                    'subtitle' => 'KHIND Washer',
                    'price_monthly' => 43,
                    'price_original' => 85,
                    'image' => 'Image/WM150A.png',
                    'features' => ['Top Load 15KG', 'Eco-friendly', 'Fuzzy Logic', 'Jimat Air & Tenaga'],
                    'desc' => 'Mesin basuh automatik top-load dengan kapasiti besar 15KG.',
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
                    'image' => 'Image/DHP90.png',
                    'features' => ['Heat-Pump Technology', '9KG Kapasiti', 'Jimat Tenaga', '16 Program'],
                    'desc' => 'Pengering heat-pump yang jimat tenaga dengan kapasiti 9KG.',
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
                    'image' => 'Image/RF480.png',
                    'features' => ['480L Kapasiti', 'Inverter Compressor', 'Multi Air Flow', 'No Frost'],
                    'desc' => 'Peti sejuk ChillMaster Lite dengan teknologi No Frost.',
                    'badge' => 'PRE-ORDER',
                ],
                [
                    'id' => 'rfm466a',
                    'model' => 'RFM466A',
                    'name' => 'CHILLMASTER X MULTI-DOOR REFRIGERATOR',
                    'subtitle' => 'KHIND Fridge',
                    'price_monthly' => 48,
                    'price_original' => 95,
                    'image' => 'Image/RFM466A.png',
                    'features' => ['Multi-Door Design', 'Inverter Compressor', 'Holiday Mode', 'Precise Temp Control'],
                    'desc' => 'Peti sejuk multi-door moden dengan kawalan suhu tepat.',
                ],
                [
                    'id' => 'rfs600a',
                    'model' => 'RFS600A',
                    'name' => 'CHILLMASTER SIDE BY SIDE REFRIGERATOR',
                    'subtitle' => 'KHIND Fridge',
                    'price_monthly' => 50,
                    'price_original' => 99,
                    'image' => 'Image/RFS600A.png',
                    'features' => ['Side-by-Side', '600L Kapasiti', 'Water Dispenser', 'Inverter Compressor'],
                    'desc' => 'Peti sejuk side-by-side premium dengan kapasiti 600L.',
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
                    'image' => 'Image/SI6029BP.png',
                    'features' => ['Steam Generator', 'Tekanan Wap Tinggi', 'Anti-Drip', 'Auto Shut-Off'],
                    'desc' => 'Seterika stim penjana berkuasa tinggi untuk hasil yang sempurna.',
                ],
            ]
        ],
    ];
}

// Dapatkan info ejen dari URL parameter
function getAgentInfo() {
    $agent_code = isset($_GET['agent']) ? htmlspecialchars($_GET['agent']) : '';
    
    // Default agent data (boleh diganti dengan database query)
    $agents = [
        'test' => [
            'name' => 'Test',
            'phone' => '601120992441',
            'whatsapp' => '601120992441',
            'title' => 'Authorized Sales Agent',
            'image' => '',
        ],
    ];
    
    if (!empty($agent_code) && isset($agents[$agent_code])) {
        return $agents[$agent_code];
    }
    
    return [
        'name' => DEFAULT_AGENT_NAME,
        'phone' => DEFAULT_AGENT_PHONE,
        'whatsapp' => DEFAULT_AGENT_WHATSAPP,
        'title' => 'Authorized Sales Agent',
        'image' => '',
    ];
}

function getWhatsAppLink($phone, $message = '') {
    if (empty($message)) {
        $message = 'Hai, Saya berminat untuk dapatkan barangan KHIND secara RTO/';
    }
    return 'https://wa.me/' . $phone . '?text=' . urlencode($message);
}
