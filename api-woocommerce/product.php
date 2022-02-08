<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/ExampleSite',
    'ck_1d09b5dfe3b5e616f0bd33e8b88c1e9f125a1e28',
    'cs_31e23f9c39ca7d94a21fccf209bc910f3e53aa61',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>

<?php echo json_encode($woocommerce->get('orders')); ?>