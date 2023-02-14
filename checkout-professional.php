<?php

require_once 'vendor/autoload.php';
require_once '/home/u327334328/domains/headshotai.studio/config/secrets.php';

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://headshotai.studio/';

$checkout_session = \Stripe\Checkout\Session::create([
  'submit_type' => 'pay',
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1MYUIMC8MtCTDm8febhiDDhC',
    'quantity' => 1,
    ]],
  'mode' => 'payment',

  'allow_promotion_codes' => true,
  'success_url' => $YOUR_DOMAIN . 'success.php',
  'cancel_url' => $YOUR_DOMAIN . 'checkout.php',

  'client_reference_id' => isset($_REQUEST['referral']) ? $_REQUEST['referral'] : 'checkout-' . bin2hex(random_bytes(16)),
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>