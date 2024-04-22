<?php 

$secret ='<script type="text/JavaScript">  
const { SecretClient } = require("@azure/keyvault-secrets");
const { DefaultAzureCredential } = require("@azure/identity");

async function main() {
  const credential = new DefaultAzureCredential();

  const keyVaultName = "AttendenceTracker1-Vault";
  const url = "https://" + keyVaultName + ".vault.azure.net";

  const client = new SecretClient(url, credential);

  const secretName = "Admin-Secrect"

  const secret = await client.getSecret(secretName);
  console.log("secret: ", secret);
return secret;
}
 </script>' 
; 

$value = $secret["value"];
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', '{$value}', 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}