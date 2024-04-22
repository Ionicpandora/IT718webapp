<?php 
$secret = new AzKeyVault\Secret('https://attendencetracker1-vault.vault.azure.net');
$value = $secret->getSecret('Admin-Secrect');

echo $value;
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', 'IT09123@dmin', 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}