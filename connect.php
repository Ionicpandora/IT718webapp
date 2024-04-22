<?php 

$secret ='<script type="text/JavaScript">  
const { DefaultAzureCredential } = require("@azure/identity");
const { SecretClient } = require("@azure/keyvault-secrets");x

const credential = new DefaultAzureCredential();

const vaultName = "AttendenceTracker1-Vault";
const url = `https://${vaultName}.vault.azure.net`;

const client = new SecretClient(url, credential);

const secretName = "Admin-Secrect";

export default async function main() {
  const latestSecret = await client.getSecret(secretName);
  console.log(`Latest version of the secret ${secretName}: `, latestSecret);
  const specificSecret = await client.getSecret(secretName, { version: latestSecret.properties.version! });
  console.log(`The secret ${secretName} at the version ${latestSecret.properties.version!}: `, specificSecret);
}

main();
     </script>' 
; 

echo $secret;
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'attendencetracker1.mysql.database.azure.com', 'qivtdipzbu', '{$secret}', 'group', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}