// config/marketplace.php
return [
    'commission_rate' => env('MARKETPLACE_COMMISSION', 0.05),
    'max_product_images' => 10,
    'supported_payment' => ['midtrans', 'xendit', 'manual'],
    'rajaongkir' => [
        'key' => env('RAJAONGKIR_API_KEY'),
        'base_url' => 'https://api.rajaongkir.com/starter',
    ],
];
