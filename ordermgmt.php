<?php
require_once("vendor/autoload.php");

use PhpShopify\ShopifySDK;

$config = array(
    'ShopUrl' => 'www-franciumchocolate-com.myshopify.com',
//    'ApiUrl' => 'https://www-franciumchocolate-com.myshopify.com/admin/api/2020-04/',
    'ApiVersion' => '2020-04',
    'ApiKey' => '72cd78595d2b2182bd549c2bbdd226d3',
    'Password' => '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',
);

$shopify = new PHPShopify\ShopifySDK($config);

$order = array (
    "email" => "ngxtri@gmail.com",
    "fulfillment_status" => "unfulfilled",
    "line_items" => [
        [
            "variant_id" => 38001398874299,
            "quantity" => 3,
            "note" => "{api_data:1234}"
        ]
    ]
);

$shopify->Order->post($order);
