<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START vmwareengine_v1_generated_VmwareEngine_GetExternalAccessRule_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\VmwareEngine\V1\Client\VmwareEngineClient;
use Google\Cloud\VmwareEngine\V1\ExternalAccessRule;
use Google\Cloud\VmwareEngine\V1\GetExternalAccessRuleRequest;

/**
 * Gets details of a single external access rule.
 *
 * @param string $formattedName The resource name of the external access firewall rule to
 *                              retrieve. Resource names are schemeless URIs that follow the conventions in
 *                              https://cloud.google.com/apis/design/resource_names.
 *                              For example:
 *                              `projects/my-project/locations/us-central1/networkPolicies/my-policy/externalAccessRules/my-rule`
 *                              Please see {@see VmwareEngineClient::externalAccessRuleName()} for help formatting this field.
 */
function get_external_access_rule_sample(string $formattedName): void
{
    // Create a client.
    $vmwareEngineClient = new VmwareEngineClient();

    // Prepare the request message.
    $request = (new GetExternalAccessRuleRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var ExternalAccessRule $response */
        $response = $vmwareEngineClient->getExternalAccessRule($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = VmwareEngineClient::externalAccessRuleName(
        '[PROJECT]',
        '[LOCATION]',
        '[NETWORK_POLICY]',
        '[EXTERNAL_ACCESS_RULE]'
    );

    get_external_access_rule_sample($formattedName);
}
// [END vmwareengine_v1_generated_VmwareEngine_GetExternalAccessRule_sync]
