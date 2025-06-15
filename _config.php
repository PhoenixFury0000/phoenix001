
<?php 

$conn = new mysqli("HOSTNAME", "USERNAME", "PASSWORD", "DATABASE"); //just like $conn = new mysqli("localhost", "root", "", "anipaca");


if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    echo("Database connection failed.");
}

$websiteTitle = "phoenix";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "no email";

$version = "1.0.2";

$discord = "https://github.com/PhoenixFury0000/phoenix001";
$github = "https://github.com/PhoenixFury0000/phoenix001";
$telegram = "@phoenixfury177013";
$instagram = "i dont use"; 

// all the api you need
$zpi = "https://your-hosted-api.com/api"; //https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

//If you want faster loading speed just put // before the first proxy and remove slashes from this one 
//$proxy = "https://your-hosted-proxy.com/proxy?url="; //https://github.com/PacaHat/shrina-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    