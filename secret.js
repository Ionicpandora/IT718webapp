import { DefaultAzureCredential } from "@azure/identity";
import { SecretClient } from "@azure/keyvault-secrets";

const credential = new DefaultAzureCredential();

const vaultName = "AttendenceTracker1-Vault";
const url = `https://${vaultName}.vault.azure.net/secrets/Admin-Secrect/2bce63b9e0a2430990aeb79b506ef675`;

const client = new SecretClient(url, credential);

const secretName = "Admin-Secrect";

async function main() {
  const latestSecret = await client.getSecret(secretName);
  return latestSecret.value;
}

await main();