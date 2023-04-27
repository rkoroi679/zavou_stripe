<?php
require 		"vendor/autoload.php";

function create_stripe_client()
{
    $stripe = new \Stripe\StripeClient('sk_test_51MyQ1PDMB4K8I2vgYkE5FNOKKDcoczhhrK7x6CJcT0Zm7SjLUWp0aGv3h59VBhmk6rcl3T7FRnOXAVSCHMh650MT00WpMhujK2');
    $customer = $stripe->customers->create([
        'description' => 'New Customer',
        'email' => 'rusi@example.com',
        'payment_method' => 'pm_card_visa',
    ]);
    echo $customer;   

}
?>