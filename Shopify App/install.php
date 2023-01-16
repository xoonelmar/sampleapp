<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "717d72522206c2797aecd07e28b91e0f";
$scopes = "read_orders,write_products";
$redirect_uri = "https://xoonelmar.github.io/sampleapp/generate_token.php";
//$redirect_uri = "http://localhost/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();