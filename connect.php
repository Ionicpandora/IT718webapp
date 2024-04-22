<?php 
require_once 'vendor/autoload.php';

use Azure\Identity\DefaultAzureCredential;
use Azure\Security\KeyVault\Secrets\SecretClient;

$keyVaultUrl = "https://attendencetracker1-vault.vault.azure.net/secrets/Admin-Secrect/2bce63b9e0a2430990aeb79b506ef675";
$secretName = "Admin-Secret";

$credential = new DefaultAzureCredential();
$client = new SecretClient($keyVaultUrl, $credential);

$secret = $client->getSecret($secretName);
$connString = $secret->getValue();

echo $connString;

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', `{$connString}`, 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}