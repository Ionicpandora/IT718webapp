import { DefaultAzureCredential } from "@azure/identity";
import { SecretClient } from "@azure/keyvault-secrets";

const credential = new DefaultAzureCredential();

const vaultName = "AttendenceTracker1-Vault";
const url = `https://${vaultName}.vault.azure.net`;

const client = new SecretClient(url, credential);

const secretName = "Admin-Secrect";

async function main() {
  const latestSecret = await client.getSecret(secretName);
  return latestSecret.value;
}

main();