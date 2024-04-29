import { DefaultAzureCredential } from "@azure/identity";
import { SecretClient } from "@azure/keyvault-secrets";
const { KeyClient } = require('@azure/keyvault');

const keyClient = new KeyClient('https://AttendenceTracker1-Vault.vault.azure.net');

const credential = new DefaultAzureCredential();

const vaultName = "AttendenceTracker1-Vault";
const url = `https://${vaultName}.vault.azure.net`;

const client = new SecretClient(url, credential);

const secretName = "Admin-Secrect";

function main() {
    const secretName = 'Admin-Secrect';
    const version = '2bce63b9e0a2430990aeb79b506ef675';

  keyClient.getKey(secretName, version).then((result) => {
    const secretValue = result.value;
    // Use the secret value here
    return secretValue;
  }).catch((error) => {
    console.error(error);
  });
}

main();