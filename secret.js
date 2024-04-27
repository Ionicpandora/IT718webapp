const { DefaultAzureCredential } = require("@azure/identity");
const { SecretClient } = require("@azure/keyvault-secrets");

const credential = new DefaultAzureCredential();

const vaultName = "AttendenceTracker1-Vault";
const url = `https://${vaultName}.vault.azure.net`;

const client = new SecretClient(url, credential);

const secretName = "Admin-Secrect";

export default async function main() {
  const latestSecret = await client.getSecret(secretName);
  return latestSecret.value;
}

main();