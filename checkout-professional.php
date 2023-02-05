<?php

require_once 'vendor/autoload.php';
require_once '/config/secrets.php';

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:3000';

$checkout_session = \Stripe\Checkout\Session::create([
  'submit_type' => 'pay',
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1MWt6MC8MtCTDm8fFNavpVa7',
    'quantity' => 1,
    ]],
  'mode' => 'payment',

  'allow_promotion_codes' => true,
  'success_url' => $YOUR_DOMAIN . '/success.php',
  'cancel_url' => $YOUR_DOMAIN . '/checkout.php',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>