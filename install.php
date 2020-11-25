<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "6def24808aa1391874c3230a349b173b";
$scopes = "read_orders,write_products";
$redirect_uri = "http://Skelem.com/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
